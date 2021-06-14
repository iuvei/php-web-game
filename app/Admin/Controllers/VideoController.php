<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Video;
use App\Models\VideoClass;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class VideoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Video(['videoClass']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('videoClass.title', '标题');
            $grid->column('user_id');
            $grid->column('title');
            $grid->column('image');
            $grid->column('href');
            $grid->column('likes');
            $grid->column('views');
            $grid->column('comments');
            $grid->column('status');
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
        return Show::make($id, new Video(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('title');
            $show->field('image');
            $show->field('href');
            $show->field('likes');
            $show->field('views');
            $show->field('comments');
            $show->field('status');
            $show->field('sort');
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
        return Form::make(new Video(), function (Form $form) {
            $form->display('id');
            $form->image('image')->uniqueName()->required();
            $form->select('video_class_id')->options(VideoClass::get()->pluck('title','id'))->required();
            $form->text('user_id')->required();
            $form->text('title')->required();
            $form->text('href')->required();
            $form->select('status')->options([1=>'开启', 2=>'关闭'])->default(1)->required();
            $form->text('likes')->default(0);
            $form->text('views')->default(0);
            $form->text('comments')->default(0);
            $form->text('sort');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
