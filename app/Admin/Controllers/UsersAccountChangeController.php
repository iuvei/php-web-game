<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UsersAccountChange;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UsersAccountChangeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UsersAccountChange(), function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('type')->display(function($value){
                return config('type')[$value];
            });
            $grid->export();
            $grid->column('before_money');
            $grid->column('money');
            $grid->column('after_money');
            $grid->column('remark');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('user_id');
        
            });
            
            $grid->disableCreateButton();
            $grid->disableViewButton();
            $grid->disableDeleteButton();
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
        return Show::make($id, new UsersAccountChange(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('type');
            $show->field('before_money');
            $show->field('money');
            $show->field('after_money');
            $show->field('remark');
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
        return Form::make(new UsersAccountChange(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('type');
            $form->text('before_money');
            $form->text('money');
            $form->text('after_money');
            $form->text('remark');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
