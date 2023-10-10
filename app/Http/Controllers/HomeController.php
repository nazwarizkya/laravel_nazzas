<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $siswa = DB::table('siswa')->get();
    return view('siswa',['siswa'=>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambahdata()
    {
        return view('form_data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpan(Request $request)
    {
        DB::table('siswa')->insert([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
        ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //mengambil data siswa berdasarkan id yang dipilih 
        $siswa=DB::table ('siswa')->where('id',$id)->get();
        //passing data siswa yang didapat ke view edit.blade.php
        return view('edit',['siswa'=> $siswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //update data siswa berdasarkan id
        DB::table ('siswa')->where('id',$request->id)->update([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
        ]);
        //alihkan halaman ke halaman home
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus($id)
    {
        // menghapus data siswa berdasarkan id
        DB::table('siswa')->where('id',$id)->delete();
       
        //alihkan halaman ke halaman home
        return redirect('/home');
    }
}
