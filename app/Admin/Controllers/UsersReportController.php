<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UsersReport;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UsersReportController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UsersReport(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('deposit');
            $grid->column('withdrawal');
            $grid->column('bonus');
            $grid->column('bottom_pour');
            $grid->column('rebates');
            $grid->column('activity');
            $grid->column('addtime');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->disableActions();
            $grid->disableCreateButton();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('user_id');
                $filter->between('created_at')->date();
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
        return Show::make($id, new UsersReport(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('deposit');
            $show->field('withdrawal');
            $show->field('bonus');
            $show->field('bottom_pour');
            $show->field('rebates');
            $show->field('activity');
            $show->field('addtime');
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
        return Form::make(new UsersReport(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('deposit');
            $form->text('withdrawal');
            $form->text('bonus');
            $form->text('bottom_pour');
            $form->text('rebates');
            $form->text('activity');
            $form->text('addtime');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
