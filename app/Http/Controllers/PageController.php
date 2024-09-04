<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    Public function about(){
        return 'NIM: 2241760077 Nama: Nabila Hasna Rafifah Hardani';
    }
    Public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
