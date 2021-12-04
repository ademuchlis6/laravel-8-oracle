<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'judul 1',
            'author' => 'author1',
            'slug' => 'judul-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam neque fugiat debitis quis alias velit est amet ab
            pariatur atque, eius dolorum laborum esse ducimus doloribus excepturi explicabo commodi harum nam! Tempore itaque id
            veniam officiis rerum laborum doloribus! Laborum, quia facilis nisi alias commodi pariatur ullam corrupti sed incidunt
            quibusdam exercitationem eligendi veniam harum. Non magni temporibus architecto soluta ex, at facere consequatur
            expedita incidunt nesciunt nemo aliquam tenetur!'
        ],
        [
            'title' => 'judul 2',
            'slug' => 'judul-2',
            'author' => 'author2',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam neque fugiat debitis quis alias velit est amet ab
            pariatur atque, eius dolorum laborum esse ducimus doloribus excepturi explicabo commodi harum nam! Tempore itaque id
            veniam officiis rerum laborum doloribus! Laborum, quia facilis nisi alias commodi pariatur ullam corrupti sed incidunt
            quibusdam exercitationem eligendi veniam harum. Non magni temporibus architecto soluta ex, at facere consequatur
            expedita incidunt nesciunt nemo aliquam tenetur!'
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($e)
    {
        $post = static::all();
        // $arr = [];
        // foreach (static::all() as $item) {
        //     if ($item['slug'] === $e) {
        //         $arr = $item;
        //     }
        // }
        // return $arr;
        return $post->firstWhere('slug', $e);
    }
}
