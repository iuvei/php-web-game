<?php


namespace App\Admin\Controllers;


use App\Admin\Forms\Setting;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;

class SettingController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->title('网站设置')
            ->body(new Card(new Setting()));
    }
}
