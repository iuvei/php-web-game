<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\VipUser;
use App\Models\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class VipUserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new VipUser(['user']), function (Grid $grid) {
            $grid->model()->orderByDesc('id');
            $grid->column('uid');
            $grid->column('user.avatar', '头像')->image('', 50, 50);
            $grid->column('user.user_nicename', '昵称');
            $grid->column('addtime')->sortable();
            $grid->column('endtime')->sortable();

            $grid->disableViewButton();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('uid');
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
        return Show::make($id, new VipUser(), function (Show $show) {
            $show->field('id');
            $show->field('uid');
            $show->field('endtime');
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
        return Form::make(new VipUser(['user']), function (Form $form) {
            $form->hidden('id');

            $form->creating(function (Form $form) {
                $form->text('uid')->required();
                $form->hidden('addtime')->default(time());
                $form->datetime('endtime')->required();
            });
            $form->editing(function (Form $form) {
                $form->display('uid');
                $form->display('user.user_nicename', '会员昵称');
                $form->datetime('endtime')->required();
            });

            $form->hidden('id');
            $form->hidden('uid');
            $form->hidden('addtime');
            $form->hidden('endtime');
            $form->saving(function (Form $form) {
                if ($form->isCreating()) {
                    $form->addtime = time();
                    if (User::where('id', $form->uid)->get()->isEmpty()) {
                        return $form->response()->error('请检查会员ID是否存在');
                    }
                }
                $form->endtime = strtotime($form->input('endtime'));
            });
            $form->disableViewButton();
            $form->disableViewCheck();
            $form->disableDeleteButton();
            $form->disableEditingCheck();

        });
    }
}
