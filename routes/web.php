<?php

// use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Post;

Route::get('/', function () {

    $post = Post::get();
    // return $post;

    return view('main', [
        'posts' => $post
    ]);
});

Route::post('/', function () {
    // return request();

    // Cara Pertama
    Post::create([
        'judul'         => request()->judul,
        'deskripsi'     => request()->deskripsi,
        'nama_penulis'  => request()->nama_penulis,
    ]);

    return redirect('/');

    // Cara Kedua
    // $post = new Post;
    // $post->judul            = request()->judul;
    // $post->deskripsi        = request()->deskripsi;
    // $post->nama_penulis     = request()->nama_penulis;
    // $post->save();
});

Route::get('tambah', function () {
    return view('tambah');
});

Route::get('main', function () {
    return view('main');
});
