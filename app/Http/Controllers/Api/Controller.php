<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function jsonError($message = '')
    {
        return response()->json([
            'code' => 1,
            'message' => $message
        ]);
    }

}
