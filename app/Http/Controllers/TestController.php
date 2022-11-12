<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($param)
    {
        $item = [
            'txt' => 'テキスト',
            'param' => $param
        ];
        return view('index', $item);
    }
}
