<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-pertama",
            "author" => "Nadia Nur Annisa",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic repellat nam mollitia. Cumque harum porro animi, aliquid nobis maiores nostrum? Voluptatem explicabo harum animi voluptas illum at ipsa possimus deleniti?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-kedua",
            "author" => "Kendall Jenner",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic repellat nam mollitia. Cumque harum porro animi, aliquid nobis maiores nostrum? Voluptatem explicabo harum animi voluptas illum at ipsa possimus deleniti?"
        ],
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
}
