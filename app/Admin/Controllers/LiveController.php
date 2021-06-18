<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Live;
use App\Models\Lottery;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Card;

class LiveController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Live(['lottery']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('is_video')->using([1 => '是', 0 => '否'])->label([1 => 'success', 0 => 'blue']);
            $grid->column('stream');
            $grid->column('image')->image('', 100,100);
            $grid->column('pull')->display('查看')->modal(function(){
                return new Card('', $this->pull);
            });
            $grid->column('type')->using([1 => '默认', 2=>'密码', 3 => '付费']);
            $grid->column('type_val');
            $grid->column('is_hot')->using([ 1 => '是', 0 => '否'])->label();
            $grid->column('is_recommend');
            $grid->column('dev');
            $grid->column('lottery.title','彩票')->label();
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
        return Show::make($id, new Live(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('is_video');
            $show->field('stream');
            $show->field('image');
            $show->field('pull');
            $show->field('type');
            $show->field('type_val');
            $show->field('is_hot');
            $show->field('is_recommend');
            $show->field('dev');
            $show->field('lottery_id');
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
        return Form::make(new Live(), function (Form $form) {
            $form->display('id');
            $form->image('image')->uniqueName()->autoUpload()->required();
            $form->text('user_id')->required();
            $form->select('is_video')->options([1 => '直播', 2=> '录播'])->default(2)->required();
            $form->text('stream')->required();
            $form->text('pull')->required();
            $form->select('lottery_id')->options(Lottery::Status()->get()->pluck('title','id'))->required();
            $form->select('type')->options([1 => '默认', 2 => '密码房', 3 => '收费房'])->when(2,function (Form $form){
                $form->text('type_val')->help('请填写密码')->required();
            })->when(3,function (Form $form){
                $form->text('type_val')->help('请填写每分钟扣多少钱')->required();
            })->default(1);

            $form->select('is_hot')->options([1 => '是', 2 => '否'])->default(2);
            $form->select('is_recommend')->options([1 => '是', 2 => '否'])->default(2);
            $form->text('dev');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
