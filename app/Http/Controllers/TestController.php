<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = [
            'content' => '自由に入力してください',
        ];
        return view('index', $data);
    }

    public function post(Request $request)
    {
        $content = $request->content;
        $data = [
            'content' => $content . 'と入力しましたね'
        ];
        return view('index', $data);
    }
}
