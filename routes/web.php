<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [HomeController::class,'index']);

//Membuat route ‘/about’ untuk menampilkan NIM dan Nama.
/*Route::get('/about', function () {
    return 'NIM: 2241760077 Nama: Nabila Hasna Rafifah Hardani';
});*/

Route::get('/about', [AboutController::class,'about']);

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

Route::get('/articles/{id}', [ArticlesController::class,'articles']);

//Memanggil route /user sekaligus mengirimkan parameter berupa nama user $name dimana parameternya bersifat opsional.
/*Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});*/

//Mengubah kode pada route /user. menambahkan value pada parameter $nama
/*Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});*/

//PRAKTIKUM 2
//Menambahkan controller yang sudah didefinisikan action pada route
//Route::get('/hello', [WelcomeController::class,'hello']);
  
//Mengubah route ‘/’ untuk menjadi controller indeks
//Route::get('/', [PageController::class,'index']);
  
//Mengubah route ‘/about’ untuk menjadi controler about
//Route::get('/about', [PageController::class,'about']);

//Mengubah route ‘/articles’ untuk menjadi controler articles
//Route::get('/articles/{id}', [PageController::class,'articles']);

//Membuat route baru agar dapat terhubung dengan frontend
Route::resource('photos', PhotoController::class);


Route::resource('photos', PhotoController::class)->only([
     'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

/*Route::get('/greeting', function(){
    return view('hello', ['name'=>'Nabila']);
});*/

//Melakukan perubahan pada route.
Route::get('/greeting', function(){
    return view('blog.hello', ['name'=>'Nabila']);
});

//Mengubah route /greeting dan arahkan ke WelcomeController pada fungsi greeting.
Route::get('greeting',[WelcomeController::class,'greeting']);

Route::get('/category', [CategoryController::class, 'homeCategory']);
Route::get('/category/food-beverage', [CategoryController::class, 'foodCategory']);
Route::get('/category/beauty-health', [CategoryController::class, 'beautyCategory']);
Route::get('/category/home-care', [CategoryController::class, 'careCategory']);
Route::get('/category/baby-kid', [CategoryController::class, 'babyCategory']);

Route::get('/user', [UserController::class, 'user']);
Route::get('/penjualan', [POSController::class, 'penjualan']);