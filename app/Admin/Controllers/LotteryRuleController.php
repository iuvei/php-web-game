<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LotteryRule;
use App\Models\Lottery;
use App\Models\LotteryRuleGroup;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Illuminate\Support\Facades\Cache;
use Dcat\Admin\Http\Controllers\AdminController;

class LotteryRuleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        return Grid::make(new LotteryRule(['lottery','lotteryRuleGroup']), function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->column('id')->sortable();
            $grid->column('lottery.title','彩种');
            $grid->column('lotteryRuleGroup.title','玩法组');
            $grid->column('rate');
            $grid->column('rate_code');
            $grid->column('rule_name');
            $grid->column('rule_code');
            $grid->column('status')->using(['1' => '开启', '2' => '关闭'])->label([
                1 => 'success',
                2 => 'danger',
            ]);

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
        return Show::make($id, new LotteryRule(), function (Show $show) {
            $show->field('id');
            $show->field('lottery_id');
            $show->field('rate');
            $show->field('rate_code');
            $show->field('rule_name');
            $show->field('rule_code');
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
        return Form::make(new LotteryRule(), function (Form $form) {
            $form->display('id');
            $form->text('rate')->required();
            $form->select('status')->options(['1' => '开启', 2=>'关闭'])->default(1)->required();
            $form->display('created_at');
            $form->display('updated_at');
            $form->saving(function (Form $form){
                $id = $form->getKey();
                if($id)
                {
                    $res = Cache::forget('rule:'.$id);
                }
            });
        });
    }
}
