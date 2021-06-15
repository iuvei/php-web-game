<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LotteryOrder;
use App\Models\LotteryRuleGroup;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use App\Models\Lottery;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Card;

class LotteryOrderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LotteryOrder(['lottery'=>function($query){
            $query->get(['title']);
        }]), function (Grid $grid) {
            $grid->header(function ()use($grid){
                $res = \App\Models\LotteryOrder::conditionStatistics($grid);
                $money = $res->money ?? 0;
                $bonus = $res->bonus ?? 0;
                $yk = $money - $bonus;
                $content = "下注金额：{$money}元，奖金：{$bonus}元，盈亏：{$yk}元";
                return new Card('根据搜索统计', $content);
            });
            $grid->model()->orderBy('id', 'desc');
            $grid->column('id')->sortable();
            $grid->column('order_no');
            $grid->column('user_id');
            $grid->column('lottery.title','彩种');
            $grid->column('rule_name');;
            $grid->column('rate');
            $grid->column('issue');
            $grid->column('code');
            $grid->column('money');
            $grid->column('content');
            $grid->column('bonus');
            $grid->column('status')->using(['1' => '中奖', '2' => '待开奖', '3' => '已返点', '4' => '未中奖'])->label([
                1 => 'success',
                2 => '#ffb61e',
                3 => '#0c8918',
                4 => 'danger',
            ]);
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->addTableClass(['table-text-center']);
            $grid->disableCreateButton();
            $grid->disableViewButton();
            $grid->disableDeleteButton();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->panel();
                $filter->equal('order_no');
                $filter->equal('issue');
                $filter->equal('user_id');
                $filter->equal('status')->select(['1' => '中奖', 2 => '未开奖', 3 => '已返点', 4 => '未中奖']);
                $filter->equal('lottery_id')->select(Lottery::Status()->get()->pluck('title', 'id'));
                $filter->between('created_at')->datetime();
            });

            $grid->export();
            $grid->disableActions();

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
        return Show::make($id, new LotteryOrder(), function (Show $show) {
            $show->field('id');
            $show->field('order_no');
            $show->field('user_id');
            $show->field('lottery_id');
            $show->field('lottery_rule_id');
            $show->field('lottery_record_id');
            $show->field('money');
            $show->field('content');
            $show->field('bonus');
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
        return Form::make(new LotteryOrder(), function (Form $form) {
            $form->display('id');
            $form->text('order_no');
            $form->text('user_id');
            $form->text('lottery_id');
            $form->text('lottery_rule_id');
            $form->text('lottery_record_id');
            $form->text('money');
            $form->text('content');
            $form->text('bonus');
            $form->text('status');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
