<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Gift;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class GiftController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Gift(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('type');
            $grid->column('money');
            $grid->column('image')->image('', 50,50);
            $grid->column('svga')->display('查看动画')->modal('动画',function(){
                return '功能开发中，敬请期待。';
            });
            $grid->column('swf_time');
            $grid->column('is_quanzhan')->using([1 => '是', 0 => '否'])->label();
            $grid->column('status')->switch('success');
            $grid->column('sort');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Gift(), function (Show $show) {
            $show->field('id');
            $show->field('type');
            $show->field('image');
            $show->field('svga');
            $show->field('swf_time');
            $show->field('is_quanzhan');
            $show->field('status');
            $show->field('sort');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Gift(), function (Form $form) {
            $form->display('id');
            $form->image('image')->uniqueName()->autoUpload()->required();
            $form->text('title')->required();
            $form->text('money')->required();
            $form->select('type')->options([1 => '普通', 2 => '豪华'])->default(1)->when(2,function (Form $form){
                $form->file('svga')->autoUpload()->uniqueName()->accept('svga');
            })->required();
            $form->text('swf_time')->default(0.00);
            $form->select('is_quanzhan')->options([1 => '是', 0 => '否'])->default(0);
            $form->select('status')->options([1 => '开启', 0 => '关闭'])->default(1);
            $form->text('sort')->default(0);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
