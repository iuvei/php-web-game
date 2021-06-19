<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\TestTask;
use Dcat\Admin\Layout\Content;
use Earnp\GoogleAuthenticator\Facades\GoogleAuthenticator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Hhxsv5\LaravelS\Swoole\Task\Task;

class HomeController extends Controller
{
    public function index(Content $content)
    {
//        $createSecret = GoogleAuthenticator::CreateSecret();
//        $secret = 'LB7OJDWUMVK4LMLH';
//        dd(GoogleAuthenticator::CheckCode($secret,347048));
        $task = new TestTask('task data');
        $ret = Task::deliver($task);
        $content->body($ret);
        return $content;
    }
}
