<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        //  User::create([
        //      'name' => 'Michael Imama',
        //      'email' => 'basos963@gmail.com',
        //      'password'=> bcrypt('12345')
        //  ]);
         User::factory(3)->create();

         Category::create([
             'name' => 'Rock Band',
             'slug' => 'rock-band'
         ]);

         Category::create([
            'name' => 'Biography',
            'slug' => 'biography'
            ]);


         Category::create([
            'name' => 'Music',
            'slug' => 'music'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Kurt Cobain',
        //     'slug' => 'kurtcobain',
        //     'excerpt' => 'Pada 1991, melejitnya lagu Nirvana, Smells Like Teen Spirit, menandai bermulanya perubahan besar dalam musik',
        //     'body'=> 'Pada 1991, melejitnya lagu Nirvana, Smells Like Teen Spirit, menandai bermulanya perubahan besar dalam musik pop,
        //      dari jenis musik yang populer pada tahun 1980-an seperti glam metal, arena rock, dan dance-pop menjadi grunge dan rock alternatif.
        //      Selain itu Cobain juga menulis lagu-lagu Nirvana antara lain About a Girl, Come as You Are, In Bloom, Lithium, Heart-Shaped Box,
        //      All Apologies, dan Rape Me.',
        //      'category_id'=> 1,
        //      'user_id'=> 1

        // ]);
        

        // Post::create([
        //     'title' => 'Nirvana',
        //     'slug' => 'nirvana',
        //     'excerpt' => 'Nirvana adalah nama sebuah grup band dari Kota Aberdeen, Washington, Amerika Serikat, kemudian akhirnya mereka mendapatkan kesuksesan di Kota Seattle, Amerika Serikat, yang terkenal dengan aliran musik grunge, atau yang dikenal juga dengan Seattle Sound.',
        //     'body'=> 'Nirvana adalah nama sebuah grup band dari Kota Aberdeen, Washington, Amerika Serikat, kemudian akhirnya mereka mendapatkan kesuksesan di Kota Seattle, Amerika Serikat, yang terkenal dengan aliran musik grunge, atau yang dikenal juga dengan Seattle Sound.
        //     Nirvana adalah nama sebuah grup band dari Kota Aberdeen, Washington, Amerika Serikat, kemudian akhirnya mereka mendapatkan kesuksesan di Kota Seattle, Amerika Serikat, yang terkenal dengan aliran musik grunge, atau yang dikenal juga dengan Seattle Sound 
        //     Nirvana mulai digemari, dan dikenal oleh dunia sejak dirilisnya album mereka yang berjudul Nevermind, dengan single yang dijagokan yaitu Smells Like Teen Spirit, single ini membuat mereka mendapatkan trofi The Best Alternative/Rock Band dan sempat menduduki tangga nada pertama di Billboard Amerika. Nirvana terdiri dari Krist Novoselic, Kurt Cobain, dan Dave Grohl.',
        //      'category_id'=> 1,
        //      'user_id'=> 1

        // ]);

        // Post::create([
        //     'title' => 'Kelompok Penerbang Roket',
        //     'slug' => 'kelompok-penerbang-roket',
        //     'excerpt' => 'Kelompok Penerbang Roket merupakan band asal Jakarta yang dibentuk pada tahun 2011.',
        //     'body'=> 'Kelompok Penerbang Roket merupakan band asal Jakarta yang dibentuk pada tahun 2011.
        //     Kelompok Penerbang Roket merupakan band asal Jakarta yang dibentuk pada tahun 2011. Band ini beranggotakan John Paul Patton (vokal utama/bass), Rey Marshall (gitar/vokal latar) dan I Gusti Vikranta (drum/vokal latar). Nama band ini terinspirasi dari judul lagu "Mencarter Roket" milik Duo Kribo. Musik yang mereka ciptakan terpengaruh oleh band-band seperti Led Zeppelin, Deep Purple, Black Sabbath, Hawkwind, dan Pink Floyd.',
        //      'category_id'=> 2,
        //      'user_id'=> 1

        // ]);

        // Post::create([
        //     'title' => 'Fender',
        //     'slug' => 'fender',
        //     'excerpt' => 'Fender Musical Instruments Corporation.',
        //     'body'=> 'Fender Musical Instruments Corporation
        //     Fender Musical Instruments Corporation, atau lebih dikenal sebagai Fender, adalah pabrikan alat musik dawai dan pengeras suaranya, seperti gitar elektrik berbahan dasar padat. Beberapa produk terkenal mereka antara lain termasuk Fender Telecaster, Fender Stratocaster, dan Fender Precision Bass. Perusahaan Fender pertama kali didirikan oleh Leo Fender pada 1946 dengan nama "Fender Electric Instrument Manufacturing Company".',
        //      'category_id'=> 2,
        //      'user_id'=> 1

        // ]);
        
    }
}
