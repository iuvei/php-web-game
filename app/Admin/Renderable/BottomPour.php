<?php


namespace App\Admin\Renderable;

use App\Models\Report;
use Dcat\Admin\Widgets\Table;
use App\Models\UsersAccountChange;
use Dcat\Admin\Support\LazyRenderable;
use Illuminate\Support\Facades\DB;


class BottomPour extends LazyRenderable
{
    public function render()
    {
        $id = $this->key;
        $ret = Report::where('id', $id)->first();
        $date = date('Y-m-d',strtotime($ret->created_at));
        $data = UsersAccountChange::where('type', 3)->where('created_at','>=', $date)
            ->select('user_id',DB::raw('sum(money) money'))
            ->groupBy('user_id')
            ->orderBy('money', 'desc')
            ->get()->toArray();

        $titles = [
            '用户ID',
            '金额',
        ];

        return Table::make($titles, $data);
    }
}
