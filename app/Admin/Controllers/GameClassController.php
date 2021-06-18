<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\GameClass;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Cache;

class GameClassController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new GameClass(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('image')->image('',50, 50);
            $grid->column('code');
            $grid->column('status')->using([1 => '开启', 2 => '关闭'])->label([1 => 'success', 2 => 'danger']);
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
        return Show::make($id, new GameClass(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('image');
            $show->field('status');
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

        return Form::make(new GameClass(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->image('image')->uniqueName()->autoUpload()->required();
            $form->text('code')->required();
            $form->select('status')->options([1 => '开启', 2 => '关闭'])->default(1)->required();
            $form->text('sort')->default(0);
            $form->display('created_at');
            $form->display('updated_at');
            $form->saving(function (){
                Cache::forget('getGameClass');
            });
        });
    }
}
