<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\BottomPour;
use App\Admin\Repositories\Report;
use Dcat\Admin\Form;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Artisan;

class ReportController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        Artisan::call('report:statistics');
        return Grid::make(new Report(), function (Grid $grid) {
            $grid->model()->orderByDesc('created_at');
            $grid->column('deposit');
            $grid->column('withdrawal');
            $grid->column('bottom_pour');
            $grid->column('bonus');
            $grid->column('rebates');
            $grid->column('activity');
            $grid->column('profit_and_loss')->display(function(){
                return $this->bottom_pour - $this->bonus;
            });
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->between('created_at')->datetime();
            });
            $grid->export();
            $grid->disableActions();
            $grid->disableCreateButton();
            $grid->disableBatchDelete();
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
        return Show::make($id, new Report(), function (Show $show) {
            $show->field('id');
            $show->field('deposit');
            $show->field('withdrawal');
            $show->field('bonus');
            $show->field('bottom_pour');
            $show->field('rebates');
            $show->field('activity');
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
        return Form::make(new Report(), function (Form $form) {
            $form->display('id');
            $form->text('deposit');
            $form->text('withdrawal');
            $form->text('bonus');
            $form->text('bottom_pour');
            $form->text('rebates');
            $form->text('activity');

            $form->display('created_at');
            $form->display('updated_at');
            $form->disableFooter();
        });
    }
}
