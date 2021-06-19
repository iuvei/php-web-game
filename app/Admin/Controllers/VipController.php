<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Vip;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class VipController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Vip(), function (Grid $grid) {
            $grid->model()->orderByDesc('id');
            $grid->column('name');
            $grid->column('coin');
            $grid->column('length');
            $grid->column('addtime');
            $grid->disableViewButton();
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
        return Show::make($id, new Vip(), function (Show $show) {
            $show->field('id');
            $show->field('coin');
            $show->field('name');
            $show->field('length');
            $show->field('list_order');
            $show->field('addtime');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Vip(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->text('coin')->required();
            $form->text('length')->required();
            $form->hidden('addtime');
            $form->saving(function (Form $form){
                if ($form->isCreating())
                {
                    $form->addtime = time();
                }
            });
        });
    }
}
