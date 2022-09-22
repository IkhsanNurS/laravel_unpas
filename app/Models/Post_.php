<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
    [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ikhsan",     
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur velit cum iure quidem nulla cumque, quis laborum nobis laudantium. Nam, consequatur repellendus cum libero rem placeat doloremque sunt necessitatibus perspiciatis consectetur dignissimos molestiae, impedit a deleniti tempora accusamus! Atque commodi explicabo quos earum reprehenderit, facilis veritatis modi illum. Vel atque nobis similique, cupiditate doloremque ad impedit ut incidunt ex odio, dolore explicabo quidem asperiores sunt quis possimus aspernatur. Eveniet iste dolores iusto ducimus nisi ex placeat nam ut eligendi pariatur!"
    ],
    [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Anselma",     
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam harum, ut magni nulla amet quas beatae laboriosam placeat exercitationem dolorem, iure est suscipit tenetur dolores vel repellendus! Sed numquam sunt autem est accusamus nihil suscipit illo. Impedit ea tenetur expedita similique nisi necessitatibus nobis vel placeat quia recusandae? Ratione, corporis!"
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
}