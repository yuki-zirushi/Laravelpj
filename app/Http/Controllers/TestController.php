<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $item = ['txt' => 'テキスト'];
        return view('index', $item);
    }
}
