<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Satoshi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nakamoto",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
        ]
    ];

    public static function all() {
        // return self::$blog_posts;
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        // $posts = self::$blog_posts;
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
