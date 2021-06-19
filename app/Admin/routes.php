<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users', 'UserController');
    $router->resource('lottery', 'LotteryController');
    $router->resource('lottery_rule', 'LotteryRuleController');
    $router->resource('lottery_rule_groupController', 'LotteryRuleGroupController');
    $router->resource('lottery_record', 'LotteryRecordController');
    $router->resource('lottery_order', 'LotteryOrderController');
    $router->resource('users_account_change', 'UsersAccountChangeController');
    $router->resource('video_class', 'VideoClassController');
    $router->resource('game_class', 'GameClassController');
    $router->resource('game', 'GameController');
    $router->resource('report', 'ReportController');
    $router->resource('video', 'VideoController');
    $router->resource('live', 'LiveController');
    $router->resource('users_report', 'UsersReportController');
    $router->get('setting', 'SettingController@index');
    $router->resource('banner', 'BannerController');
    $router->resource('activity', 'ActivityController');
    $router->resource('gift', 'GiftController');
    $router->resource('vip_user', 'VipUserController');
    $router->resource('vip', 'VipController');
});
