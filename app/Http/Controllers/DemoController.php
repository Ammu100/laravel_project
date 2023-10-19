<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        $array = [
            [
            'name'=> 'john doe',
            'email'=> 'john@example.com'
            ],
            [
            'name'=> 'amit jaiswal',
            'email'=> 'jamit8738@gmail.com'
             ]
            ];
            return response()->json([
                'message' => '2 users found',
                'data' => $array,
                'status'=> true
            ], 200);
    }
}
