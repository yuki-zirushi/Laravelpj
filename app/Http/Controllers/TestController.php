<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $item = [
            'txt' => 'テキスト',
            'param' => $request->param
        ];
        return view('index', $item);
    }
}
