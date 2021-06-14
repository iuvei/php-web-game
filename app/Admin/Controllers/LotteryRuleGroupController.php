<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LotteryRuleGroup;
use App\Models\Lottery;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LotteryRuleGroupController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LotteryRuleGroup(['lottery']), function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->column('id')->sortable();
            $grid->column('lottery.title','彩种');
            $grid->column('title');
            $grid->column('status')->using([1 => '开启', 2=>'关闭'])->label([
                1 => 'success',
                2 => 'danger'
            ]);
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('status')->select([1 => '开启', 2=>'关闭']);

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
        return Show::make($id, new LotteryRuleGroup(), function (Show $show) {
            $show->field('id');
            $show->field('lottery_id');
            $show->field('title');
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
        return Form::make(new LotteryRuleGroup(), function (Form $form) {
            $form->display('id');
            $lottery = Lottery::Status()->get()->pluck( 'title','id');
            $form->select('lottery_id')->options($lottery)->required();
            $form->text('title')->required();
            $form->select('status')->options([1 => '开启', 2 => '关闭'])->default(1);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
