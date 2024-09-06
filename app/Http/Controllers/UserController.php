<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('soaljs2.user')
            ->with('id', '17')
            ->with('nama', 'Nabila Hasna Rafifah H.');
    }
}

