<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data = User::paginate(5);

        return view('barang.index',compact('data'));        
    }

    public function detail($id){
        $user = User::find($id);
        $barang = Barang::where('id_user', $id)->get();
        $pembeli = Pembeli::where('id_user', $id)->get();

        return view('barang.detail',compact('user', 'barang', 'pembeli'));
        
    }
}
