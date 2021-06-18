<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Activity;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ActivityController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Activity(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('activity_class_id')->using([1 => '直播活动', 2 => '游戏活动']);
            $grid->column('image')->image('',100,100);
            $grid->column('href');
            $grid->column('status')->switch('success');
            $grid->column('sort');
            $grid->column('start_time');
            $grid->column('end_time');
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
        return Show::make($id, new Activity(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('activity_class_id');
            $show->field('image');
            $show->field('href');
            $show->field('start_time');
            $show->field('end_time');
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
        return Form::make(new Activity(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->select('activity_class_id')->options([1 => '直播活动', 2 => '游戏活动'])->default(1)->required();
            $form->image('image')->autoUpload()->uniqueName()->required();;
            $form->switch('status')->default(1)->required();
            $form->text('href')->rules('url')->required();
            $form->text('sort')->default(0);
            $form->datetime('start_time')->required();
            $form->datetime('end_time')->required();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
