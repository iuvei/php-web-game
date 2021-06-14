<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use App\Jobs\Lottery;
use App\Models\LotteryRecord;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function index(Content $content)
    {

        $content->body('开发中');
        return $content;
    }
}
