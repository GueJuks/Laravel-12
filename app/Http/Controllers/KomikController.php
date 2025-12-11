<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komik;

class KomikController extends Controller
{
    public function index(){
        return view('komiks', [
            "title" => "Komik",
            "komiks" => Komik::all()
        ]);
    }

    public function show($slug_komik){
        return view('komik', [
            "title" => "Komik Detail",
            "komik" => Komik::find($slug_komik)
        ]);
    }
}
