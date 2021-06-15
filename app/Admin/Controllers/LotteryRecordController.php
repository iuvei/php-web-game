<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LotteryRecord;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use App\Models\Lottery;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Admin\Actions\OpenLottery;

class LotteryRecordController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LotteryRecord(['lottery']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $lottery = $grid->getRequestInput('lottery_id');
            if($lottery)
            {
                $l = Lottery::where('id', $lottery)->first();
                $grid->model()->where('lottery_time','<=', time() + $l->expect_time * 60)->orderBy('id', 'desc');
            }else{
                $grid->model()->where('lottery_id',1)->where('lottery_time','<=', time() + 60)->orderBy('id', 'desc');
            }

            $grid->column('lottery.title','彩种');
            $grid->column('issue');
            $grid->column('code')->editable(true);
            $grid->column('preset', '预设')->options()->checkbox([
                1 => '大',
                2 => '小',
                3 => '单',
                4 => '双',
            ],true);
            $grid->column('lottery_time')->display(function($value){
                return date('Y-m-d H:i:s', $value);
            });
            $grid->column('type')->using(['1' => '系统', 2=>'人工预设'])->label([1 => 'success', 2 => 'danger']);
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();


            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('issue');
                $filter->panel();

                $filter->equal('lottery_id')->select(Lottery::Status()->get()->pluck('title', 'id'));
                $filter->whereBetween('lottery_time',function($q){
                    $start = $this->input['start'] ?? null;
                    $end = $this->input['end'] ?? null;

                    if ($start !== null) {
                        $start = strtotime($start);
                        $q->where('lottery_time', '>=', $start);

                    }

                    if ($end !== null) {
                        $end = strtotime($end);
                        $q->where('lottery_time', '<=', $end);
                    }
                    return $q;
                })->datetime();

            });

            $grid->actions(new OpenLottery());
            $grid->setActionClass(Grid\Displayers\Actions::class);
            $grid->addTableClass(['table-text-center']);
            $grid->disableEditButton();
            $grid->disableDeleteButton();
            $grid->disableViewButton();
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
        return Show::make($id, new LotteryRecord(), function (Show $show) {
            $show->field('id');
            $show->field('lottery_id');
            $show->field('issue');
            $show->field('num');
            $show->field('lottery_time');
            $show->field('type');
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
        return Form::make(new LotteryRecord(['lottery']), function (Form $form) {
            $form->display('id');
            $form->display('lottery.title','彩种');
            $form->display('issue');
            $form->text('code');
            $form->display('lottery_time')->customFormat(function ($value){
                return date('Y-m-d H:i:s', $value);
            });
            $form->hidden('type')->customFormat(function ($value){
                return 2;
            });
            $form->display('created_at');
            $form->display('updated_at');
            $form->disableResetButton();

            $form->disableHeader();
            $form->disableEditingCheck();
            $form->disableViewCheck();
            $form->submitted(function (Form $form) {

                $preset = $form->input('preset');
                $type = $form->model()->lottery['type'];
                $code = $form->input('code');

                if($code)
                {
                    $code = str_split($code);
                    $res = implode(',', $code);
                }
                if($preset)
                {
                    $res = self::validationRule($preset,$type);
                    if(!$res)
                    {
                        return $form->responseValidationMessages('preset', '设置错误，请重新选择');
                    }
                }

                 if(time() >= $form->model()->lottery_time)
                 {
                     return $form->responseValidationMessages('preset', '已经开奖，不能修改开奖号码');
                 }
                $form->code = $res;

            });
            $form->confirm('您确定要手动设置开奖结果？');
        });
    }


    protected static function validationRule($preset,$type)
    {

        if(!array_diff($preset,[1,3]))
        {
            # 大单
            return call_user_func($type,1);
        }
        if(!array_diff($preset,[1,4]))
        {
            # 大双
            return call_user_func($type,2);
        }
        if(!array_diff($preset,[2,3]))
        {
            # 小单
            return call_user_func($type,3);
        }
        if(!array_diff($preset,[2,4]))
        {
            # 小双
            return call_user_func($type,4);
        }
        return false;
    }
}
