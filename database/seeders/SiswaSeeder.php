<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("siswa")->insert([
            "nama" => "Ani",
            "nomor_induk" =>"1000",
            "alamat" => "Bantul",
            "created_at" =>  date("Y-m-d H:i:s")
        ]);
        DB::table("siswa")->insert([
            "nama" => "Susi",
            "nomor_induk" =>"102",
            "alamat" => "Salatiga",
            "created_at" =>  date("Y-m-d H:i:s")
        ]);
        DB::table("siswa")->insert([
            "nama" => "Siti",
            "nomor_induk" =>"1003",
            "alamat" => "Semarang",
            "created_at" =>  date("Y-m-d H:i:s")
        ]);
    }
}
