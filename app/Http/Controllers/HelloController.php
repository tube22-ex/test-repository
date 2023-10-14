<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //

    public function index(){
        $view = view('index');

        return $view;
    }
    // public function index(){
    //     $view = view('test');
    //     $view->now_date = date('Y年m月d日 H時i分s秒');
    //     $view->index = 3;
    //     $view->array = ['てすと','とし','うぇるあめ','あ'];
    //     $view->arrayB = [
    //         'orange' => 'おれんじ',
    //         'apple' => 'りんご',
    //         'banana' => 'ばなな',
    //         'peach' => 'もも'
    //     ];
    //     return $view;
    // }

    public function one(){
        $view = view('one');
        $view->sub_title = 'サブタイトルー';

        $users = DB::table('users')->get();
        print_r($users);
        //return $view;
    }
    public function two(){
        $view = view('two');
        $view->sub_title = 'サブタイトルー2';
        return $view;
    }
    public function three(){
        $view = view('three');
        return $view;
    }
}
