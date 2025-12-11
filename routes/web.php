<?php

use App\Models\Post;
use App\Models\Komik;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KomikController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Luffytaro",
        "email" => "luffy@gmail.com",
        "image" => "luffy.png"
    ]);
});

// Route::get('/blog', function () {
//     // $blog_posts = [
//     //     [
//     //         "title" => "Judul Post Pertama",
//     //         "slug" => "judul-post-pertama",
//     //         "author" => "Satoshi",
//     //         "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
//     //     ],
//     //     [
//     //         "title" => "Judul Post Kedua",
//     //         "slug" => "judul-post-kedua",
//     //         "author" => "Nakamoto",
//     //         "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
//     //     ]
//     // ];

//     // return view('posts', [
//     //     "title" => "Posts",
//     //     // "posts" => $blog_posts
//     //     "posts" => Post::all()
//     // ]);
// });

Route::get('/blog', [PostController::class, 'index']);

// halaman single post
// Route::get('posts/{slug}', function($slug) {

//     // $blog_posts = [
//     //     [
//     //         "title" => "Judul Post Pertama",
//     //         "slug" => "judul-post-pertama",
//     //         "author" => "Satoshi",
//     //         "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
//     //     ],
//     //     [
//     //         "title" => "Judul Post Kedua",
//     //         "slug" => "judul-post-kedua",
//     //         "author" => "Nakamoto",
//     //         "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
//     //     ]
//     // ];

//     // $new_post = [];
//     // foreach($blog_posts as $post){
//     //     if($post['slug'] === $slug) {
//     //         $new_post = $post;
//     //     }
//     // }

//     // return view('post', [
//     //     "title" => "Single Post",
//     //     "post" => Post::find($slug)
//     // ]);
// });

Route::get('/posts/{slug}', [PostController::class, 'show']);

// ///////////////////// Komik //////////////////////////
// Global Komik
// Route::get('/komiks', function() {

//     // $list_komiks = [
//     //     [
//     //         "title_komik" => "Detektif Konan",
//     //         "slug_komik" => "detektif-Konan",
//     //         "penulis_komik" => "Andy Sugar",
//     //         "penerbit_komik" => "Majalah Kita",
//     //         "body_komik" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
//     //     ],
//     //     [
//     //         "title_komik" => "One Piece",
//     //         "slug_komik" => "one-piece",
//     //         "penulis_komik" => "Ananda Konan",
//     //         "penerbit_komik" => "Pena Kita",
//     //         "body_komik" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
//     //     ],
//     // ];

//     return view('komiks', [
//         "title" => "Komik",
//         "komiks" => Komik::all()
//     ]);
// });
Route::get('/komiks', [KomikController::class, 'index']);

// Single Komik
// Route::get('/komik/{slug_komik}', function($slug_komik) {

//     // $list_komiks = [
//     //     [
//     //         "title_komik" => "Detektif Konan",
//     //         "slug_komik" => "detektif-Konan",
//     //         "penulis_komik" => "Andy Sugar",
//     //         "penerbit_komik" => "Majalah Kita",
//     //         "body_komik" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
//     //     ],
//     //     [
//     //         "title_komik" => "One Piece",
//     //         "slug_komik" => "one-piece",
//     //         "penulis_komik" => "Ananda Konan",
//     //         "penerbit_komik" => "Pena Kita",
//     //         "body_komik" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
//     //     ],
//     // ];

//     // $new_list_komiks = [];
//     // foreach($list_komiks as $komik){
//     //     if($komik['slug_komik'] === $slug_komik) {
//     //         $new_list_komiks = $komik;
//     //     }
//     // }

//     return view('komik', [
//         "title" => "Komik Detail",
//         "komik" => Komik::find($slug_komik)
//     ]);
// });
Route::get('/komik/{slug_komik}', [KomikController::class, 'show']);