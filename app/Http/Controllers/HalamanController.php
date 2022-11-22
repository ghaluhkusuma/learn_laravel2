<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    Function index(){
        return view("halaman/index");
    }
    function tentang(){
        return view("halaman/tentang");
    }
    function kontak(){
        $judul = "Ini adalah Halaman Kontak";
        $data = [
            "judul" => "Ini adalah Halaman Kontak",
            "kontak" =>[
            "email" => "ghaluhkusuma21@gmail.com",
            "ig" => "@ghaluhkusuma"
            ]
        ];
        return view("halaman/kontak")->with ($data);
    }
}
