<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');

    }
    public function about(){
        return view('about');

    }

    // public function blog($id,$author="author by default"){
    //     $posts=[
    //                 1=>['title' => 'learn Laravel 7'],
    //                 2=>['title' => 'learn react JS'],
    //             ];
    //             return view("posts.show",[ 'data' => $posts[$id],'author' => $author]);
    // }
}
