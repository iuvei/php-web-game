<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Game;
use App\Models\GameClass;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Cache;

class GameController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Game(['gameClass']), function (Grid $grid) {
            $grid->model()->orderByDesc('id');
            $grid->column('id');
            $grid->column('gameClass.title', '游戏分类');
            $grid->column('name');
            $grid->column('image')->image('', 50, 50);
            $grid->column('code');
            $grid->column('status')->switch('success',true);
            $grid->column('is_recommend')->switch('success',true)->sortable();
            $grid->column('sort');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('status')->select([1 => '开启', 0 => '关闭']);
                $filter->equal('game_class_id')->select(GameClass::get()->pluck('title', 'id'));


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
            $form->select('status')->options([1 => '开启', 0 => '关闭'])->default(1)->required();
            $form->select('is_recommend')->options([1 => '是', 0 => '否'])->default(0)->required();
            $form->text('sort');
            $form->display('created_at');
            $form->display('updated_at');
            $form->saving(function (){
                Cache::forget('getHotGame');
            });
        });
    }
}
