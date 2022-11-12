<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = [
            'content' => '本文',
        ];
        return view('index', $data);
    }
}
