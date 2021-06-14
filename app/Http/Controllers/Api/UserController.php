<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUserBalance(Request $request)
    {
        $id = $request->input('user_id');
        $user = DB::connection('tiane')->table('cmf_user')->where('id',$id)->first();
        if($user)
        {
            return response()->json([
                    'code' => 0,
                    'message' => 'ok',
                    'balance' => $user->coin,
                ]);
        }
        
        return response()->json([
                'code' => 1,
                'message' => '用户获取失败',
            ]);
    }
}
