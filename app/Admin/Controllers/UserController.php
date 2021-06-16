<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        return Grid::make(new User(), function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');

            $grid->column('id')->sortable();
            $grid->column('avatar')->image('',40,40);
            $grid->column('username');
            $grid->column('nicename');
            $grid->column('status')
                ->using([0 => '禁用',1=>'正常',2=>'未验证'])
                ->label([1=>'success',2=>'yellow',0=>'danger']);
            $grid->column('sex')->using([0 => '保密',1=>'男',2=>'女'])
                ->label([1=>'blue-darker',2=>'red-darker',0=>'dark']);
            $grid->column('avatar')->image('',40,40);
            $grid->column('last_login_time');
            $grid->column('freeze_balance');
            $grid->column('balance');
            $grid->column('last_login_ip');
            $grid->column('mobile');
            $grid->column('total_money');
            $grid->column('withdrawal_amount');
            $grid->column('coin');
            $grid->column('consumption');
            $grid->column('location');
            $grid->column('login_type');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->disableViewButton();
            $grid->export();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('mobile');
                $filter->equal('username');

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
        return Show::make($id, new User(), function (Show $show) {
            $show->field('id');
            $show->field('sex');
            $show->field('last_login_time');
            $show->field('coin');
            $show->field('freeze_balance');
            $show->field('balance');
            $show->field('status');
            $show->field('password');
            $show->field('username');
            $show->field('avatar');
            $show->field('last_login_ip');
            $show->field('mobile');
            $show->field('total_money');
            $show->field('withdrawal_amount');
            $show->field('location');
            $show->field('nicename');
            $show->field('consumption');
            $show->field('level');
            $show->field('parent_id');
            $show->field('login_type');
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
        return Form::make(new User(), function (Form $form) {
            $form->display('id');
            $form->image('avatar')
                ->help('图片大小不能超过5M')
                ->autoUpload()
                ->compress([
                    'width' => 400,
                    'height' => 400,
                    'allowMagnify' => false,
                ])
                ->maxSize(5120)
                ->accept('jpg,png,gif,jpeg', 'image/*');
            $form->text('nicename');
            $form->text('username')->required();
            if($form->isEditing())
            {
                $form->password('password')->customFormat(function ($value){
                    return '';
                })->help('不修改密码可留空');
            }else{
                $form->password('password')->required()->minLength(8)->maxLength(16);
            }
            $form->select('sex')->options(['1' => '男', 2=>'女', 0=> '保密'])->required();
            $form->select('status')->options(['1' => '正常', 2=>'未验证', 0=> '禁用'])->required();
            $form->text('mobile');
            $form->hidden('level')->default('0-');
            $form->hidden('parent_id')->default('0');
            $form->display('created_at');
            $form->display('updated_at');
            $form->footer(function ($footer) {
                // 去掉`查看`checkbox
                $footer->disableViewCheck();
                // 去掉`继续编辑`checkbox
                $footer->disableEditingCheck();
            });

            $form->saving(function (Form $form){
                if($form->password)
                {
                    $form->password = password_hash($form->password,1);
                }else{
                    $form->password = $form->model()->password;
                }
            });


        });
    }
}
