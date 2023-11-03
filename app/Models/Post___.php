<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Kurt Cobain",
            "slug" => "kurt-cobain",
            "author" => "Michael",
            "body" => "Pada 1991, melejitnya lagu Nirvana, Smells Like Teen Spirit, menandai bermulanya perubahan besar dalam musik pop, dari jenis musik yang populer pada tahun 1980-an seperti glam metal, arena rock, dan dance-pop menjadi grunge dan rock alternatif. Selain itu Cobain juga menulis lagu-lagu Nirvana antara lain About a Girl, Come as You Are, In Bloom, Lithium, Heart-Shaped Box, All Apologies, dan Rape Me.."
        ],
        [
            "title" => "Band Nirvana",
            "slug" => "band-Nirvana",
            "author" => "Michael",
            "body" => "Nirvana adalah nama sebuah grup band dari Kota Aberdeen, Washington, Amerika Serikat, kemudian akhirnya mereka mendapatkan kesuksesan di Kota Seattle, Amerika Serikat, yang terkenal dengan aliran musik grunge, atau yang dikenal juga dengan Seattle Sound."
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
