<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Live;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LiveController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Live(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('is_video');
            $grid->column('stream');
            $grid->column('image');
            $grid->column('pull');
            $grid->column('type');
            $grid->column('type_val');
            $grid->column('is_hot');
            $grid->column('is_recommend');
            $grid->column('dev');
            $grid->column('lottery_id');
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
            $form->text('user_id');
            $form->text('is_video');
            $form->text('stream');
            $form->text('image');
            $form->text('pull');
            $form->text('type');
            $form->text('type_val');
            $form->text('is_hot');
            $form->text('is_recommend');
            $form->text('dev');
            $form->text('lottery_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
