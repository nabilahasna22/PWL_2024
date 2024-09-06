<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function homeCategory(){
        return view('soaljs2.category');
    }

    public function foodCategory(){
        return view('soaljs2.food');
    }

    public function beautyCategory(){
        return view('soaljs2.beauty');
    }

    public function careCategory(){
        return view('soaljs2.care');
    }

    public function babyCategory(){
        return view('soaljs2.baby');
    }
}
