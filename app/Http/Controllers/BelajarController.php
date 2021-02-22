<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Siswa;

class BelajarController extends Controller
{
	// menampilkan page, query bawah nama folder phpnya
    public function index(){
    	return view('v_index');
    }

    public function barang(){
    	return view('peminjaman.v_barang');
    }

    public function transaksi(){
    	return view('peminjaman.v_transaksi');
    }

    public function tambah()
    {
    	return view('peminjaman.v_tambah');
    }

    // Ambil data dari database
    public function v_barang()
    {
    	$data = Barang::all();
    	return view('peminjaman.v_barang',compact('data'));
    }

// Tambah Data Barang
    function v_tambah(Request $req)
    {
    	$data = new Barang;
    	$data -> nama_barang=$req->nama_barang;
    	$data -> jumlah_barang=$req->jumlah_barang;
    	$data -> save();
    	return redirect('/index/barang');
    }
//delete data 
    function v_list_barang()
    {
        $data = Barang::all();
        return view('peminjaman.v_list_barang',['barang'=>$data]);
    }

    function delete($id)
    {
        $data=Barang::find($id);
        $data->delete();
        return redirect('/index/barang');
    }

   function v_edit($id)
   {
    $data = Barang::find($id);
    return view('peminjaman.v_edit', ['data' => $data]);
   }

   function update(Request $req)
   {
    $data=Barang::find($req->id);
    $data->nama_barang=$req->nama_barang;
    $data->jumlah_barang=$req->jumlah_barang;
    $data->save();
    return redirect('/index/v_barang');
   }

   //------------------------------------------------------------------------
   //------------------------------------------------------------------------
   //==========================Data Siswa===================================
   //========================================================================

   function d_siswa()
   {
    $data = Siswa::all();
    return view('siswa.v_siswa',['data'=>$data]);

   }

       function p_siswa()
    {
        return view('siswa.v_siswa');
    }



   
    
}
