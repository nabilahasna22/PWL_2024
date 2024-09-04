<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//PRAKTIKUM 1
// Membuat route-1 dengan URL /hello untuk menampilkan String Hello World ke browser
/*Route::get('/hello', function () {
    return 'Hello World';
});*/

// Membuat route-2 dengan URL /world untuk menampilkan String World ke browser
/*Route::get('/world', function () {
    return 'World';
});*/

//Membuat route ‘/’ untuk menampilkan selamat datang.
/*Route::get('/', function () {
    return 'Selamat Datang';
});*/

//Membuat route ‘/about’ untuk menampilkan NIM dan Nama.
/*Route::get('/about', function () {
    return 'NIM: 2241760077 Nama: Nabila Hasna Rafifah Hardani';
});*/

//Memanggil route /user/{name} sekaligus mengirimkan parameter berupa nama user $name
/*Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});*/

//Membuktikan Route bisa menerima lebih dari 1 parameter $postId dan $comment.
/*Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});*/

//Membuat route /articles/{id} yang akan menampilkan output “Halaman Artikel dengan ID {id}”
/*Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});*/

//Memanggil route /user sekaligus mengirimkan parameter berupa nama user $name dimana parameternya bersifat opsional.
/*Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});*/

//Mengubah kode pada route /user. menambahkan value pada parameter $nama
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});


    

