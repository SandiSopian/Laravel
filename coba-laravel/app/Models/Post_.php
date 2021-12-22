<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}