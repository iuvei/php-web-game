<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Lottery;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Card;

class LotteryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Lottery(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('image')->image('',40,40);
            $grid->column('type');
            $grid->column('title');
            $grid->column('name');
            $grid->column('time');
            $grid->column('Issue');
            $grid->column('status')->using(['1' => '正常', 2=>'禁用'])->label([1 => 'success', 2 => 'danger'])->switch('', true);
            $grid->column('desc')
                ->display('查看') // 设置按钮名称
                ->modal(function ($modal) {
                    // 设置弹窗标题
                    $modal->title($this->title . ' 玩法介绍');

                    // 自定义图标
                    $modal->icon('feather icon-x');

                    $card = new Card(null, $this->desc);

                    return "<div style='padding:10px 10px 0'>$card</div>";
                });

            $grid->column('expect_time');
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
        return Show::make($id, new Lottery(), function (Show $show) {
            $show->field('id');
            $show->field('type');
            $show->field('title');
            $show->field('name');
            $show->field('time');
            $show->field('Issue');
            $show->field('desc');
            $show->field('expect_time');
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
        return Form::make(new Lottery(), function (Form $form) {
            $form->display('id');
            $form->image('image')->help('图片大小不能超过5M')
                ->autoUpload()
                ->compress([
                    'width' => 400,
                    'height' => 400,
                    'allowMagnify' => false,
                ])
                ->maxSize(5120)
                ->accept('jpg,png,jpeg', 'image/*');
            $form->select('type')->options(config('lottery'))->required()->default('k3');
            $form->text('title')->required();
            $form->text('name')->required()->placeholder('彩种标识:3fks');
            $form->number('time')->required()
                ->placeholder('封盘时间')
                ->help('列:输入5，就是距离开奖时间前 5秒封盘，停止下注')->min(5);
            $form->number('Issue')->required()->min(1);
            $form->editor('desc');
            $form->hidden('status')
                ->customFormat(function ($v) {
                    return $v ;
                })
                ->saving(function ($v) {
                    return $v ;
                });
            $form->select('expect_time')->required()->options([
                1 => '1分钟一期',
                3 => '3分钟一期',
                5 => '5分钟一期',
            ])->placeholder('请选择开奖时间');

            $form->display('created_at');
            $form->display('updated_at');
            $form->footer(function ($footer) {
                // 去掉`查看`checkbox
                $footer->disableViewCheck();
                // 去掉`继续编辑`checkbox
                $footer->disableEditingCheck();
            });
        });
    }
}
