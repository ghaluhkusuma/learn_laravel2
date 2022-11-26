<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = siswa::orderBy("nomor_induk","desc")->paginate(5);
        return view("siswa/index")->with("data",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("siswa/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash("nomor_induk",$request->nomor_induk);
        Session::flash("nama",$request->nama);
        Session::flash("alamat",$request->alamat);
        
        $request->validate([
            "nomor_induk"=>"required|numeric",
            "nama"=>"required",
            "alamat"=>"required",

        ],[
            'nomor_induk.required' => "Nomor Induk Wajib diisi",
            "nomor_induk.numeric" => "Nomor Induk Wajib diisi dalam angka",
            "nama.required" => "Nama Wajib diisi",
            "alamat.required" => "Alamat Wajib diisi",
        ]);
        $data =[
            "nomor_induk"=>$request->input("nomor_induk"),
                        "nama"=>$request->input("nama"),
            "alamat"=>$request->input("alamat")
        ];
        siswa::create($data);
        return redirect("siswa")->with("success","Berhasil memasukkan data");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = siswa::where("nomor_induk", $id)->first();
        return view("siswa/show")->with("data", $data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = siswa::where("nomor_induk", $id)->first();
        return view("siswa.edit")->with("data",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           
            "nama"=>"required",
            "alamat"=>"required",

        ],[
            
            "nomor_induk.numeric" => "Nomor Induk Wajib diisi dalam angka",
            "nama.required" => "Nama Wajib diisi",
            "alamat.required" => "Alamat Wajib diisi",
        ]);
        $data=[
            "nama"=>$request->input("nama"),
            "alamat"=>$request->input("alamat")
        ];
        siswa::where("nomor_induk",$id)->update($data);
        return redirect("/siswa")->with("success","Berhasil melakukan update data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::where("nomor_induk",$id)->delete();
        return redirect("/siswa")->with("success","Berhasil hapus data");
    }
}
