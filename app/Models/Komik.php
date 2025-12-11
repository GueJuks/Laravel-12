<?php

namespace App\Models;

class Komik
{
    private static $list_komiks = [
        [
            "title_komik" => "Detektif Konan",
            "slug_komik" => "detektif-Konan",
            "penulis_komik" => "Andy Sugar",
            "penerbit_komik" => "Majalah Kita",
            "body_komik" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
        ],
        [
            "title_komik" => "One Piece",
            "slug_komik" => "one-piece",
            "penulis_komik" => "Ananda Konan",
            "penerbit_komik" => "Pena Kita",
            "body_komik" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus exercitationem corporis, quod quaerat animi consectetur repellat consequuntur tenetur saepe, adipisci similique, maiores assumenda laboriosam nesciunt sed! Provident, rem? Saepe inventore quo, unde recusandae molestiae est neque quas atque beatae eveniet alias perferendis at tempora itaque placeat magni exercitationem blanditiis eius."
        ],
    ];

    public static function all(){
        // return self::$list_komiks;
        return collect(self::$list_komiks);
    }

    public static function find($slug_komik){
        // $komiks = self::$list_komiks;
        // $new_list_komik = [];
        $new_list_komik = static::all();
        // foreach($komiks as $k){
        //     if($k['slug_komik'] === $slug_komik) {
        //         $new_list_komik = $k;
        //     }
        // }
        // return $new_list_komik;
        return $new_list_komik->firstWhere('slug_komik', $slug_komik);
    }
}
