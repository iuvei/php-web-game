<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Banner;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BannerController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Banner(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('image')->image('', 100, 100);
            $grid->column('href');
            $grid->column('is_href')->switch('success');
            $grid->column('is_interior')->using([1 => '外部跳转', 2 => '内部跳转'])->label([1 => 'success' , 2 => 'blue']);
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
        return Show::make($id, new Banner(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('href');
            $show->field('is_href');
            $show->field('is_interior');
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
        return Form::make(new Banner(), function (Form $form) {
            $form->display('id');
            $form->image('image')->autoUpload()->uniqueName()->required();
            $form->text('title')->required();

            $form->switch('status')->required()->default(1);
            $form->select('is_href')->options([1 => '是', 0 => '否'])->default(0)->when(1,function (Form $form){
                $form->text('href')->default('');
                $form->select('is_interior')->options([1 => '外部', 2 => '内部'])->help('内部跳需要前端设置')->default(1);
            });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
