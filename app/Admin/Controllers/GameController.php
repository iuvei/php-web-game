<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Game;
use App\Models\GameClass;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class GameController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Game(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('game_class_id');
            $grid->column('name');
            $grid->column('image')->image('', 50,50);
            $grid->column('code');
            $grid->column('status')->using(['1' => '正常', 2=>'禁用'])->label([1 => 'success', 2 => 'danger']);
            $grid->column('sort');
            $grid->column('is_recommend');
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
        return Show::make($id, new Game(), function (Show $show) {
            $show->field('id');
            $show->field('game_class_id');
            $show->field('name');
            $show->field('code');
            $show->field('status');
            $show->field('sort');
            $show->field('is_recommend');
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
        return Form::make(new Game(), function (Form $form) {
            $form->display('id');
            $form->text('game_class_id')->options(GameClass::get()->pluck('title', 'id'));
            $form->text('name')->required();
            $form->image('image')->uniqueName()->autoUpload()->required();
            $form->text('code')->required();
            $form->text('status')->options([1 => '开启', 2 => '关闭'])->default(1);
            $form->text('sort');
            $form->text('is_recommend')->options([1 => '是', 2 => '否'])->default(2);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
