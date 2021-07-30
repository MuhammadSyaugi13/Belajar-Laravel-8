<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "slug-petama",
            "author" => "Syaugi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga similique aliquid ipsam. Illum dicta, temporibus aliquid reprehenderit vero ipsam repellat laborum nesciunt esse porro, odit, aliquam...",
        ],
        [
            "title" => "Judul 2",
            "slug" => "slug-kedua",
            "author" => "Arif",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga similique aliquid ipsam. Illum dicta, temporibus aliquid reprehenderit...",
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::All();

        return $posts->firstWhere('slug', $slug);
    }
}
