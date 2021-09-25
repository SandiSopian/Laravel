<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Monstera Raphidopora",
        "image" => "leaves.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandi",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima qui autem asperiores. Placeat ab aspernatur voluptatem ratione magnam. Perferendis quibusdam id mollitia? Ipsa, totam. Autem harum aspernatur sequi vel?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sopian",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima qui autem asperiores. Placeat ab aspernatur voluptatem ratione magnam. Perferendis quibusdam id mollitia? Ipsa, totam. Autem harum aspernatur sequi vel?"
        ]
        ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandi",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima qui autem asperiores. Placeat ab aspernatur voluptatem ratione magnam. Perferendis quibusdam id mollitia? Ipsa, totam. Autem harum aspernatur sequi vel?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sopian",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim minima qui autem asperiores. Placeat ab aspernatur voluptatem ratione magnam. Perferendis quibusdam id mollitia? Ipsa, totam. Autem harum aspernatur sequi vel?"
        ]
        ];

        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});