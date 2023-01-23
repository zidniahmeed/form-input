<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric|digits_between:8,12'
        ]);

        $id_user = Auth::user()->id;

        $barang = new Barang;
        $barang->barang = $request->barang;
        $barang->harga = $request->harga;
        $barang->jumlah = $request->jumlah;
        $barang->id_user = $id_user;
        $barang->save();

        $pembeli =  new Pembeli;
        $pembeli->alamat = $request->alamat;
        $pembeli->no_telepon = $request->no_telepon;
        $pembeli->id_user = $id_user;
        $pembeli->save();


        $data = [$barang, $pembeli];

        return redirect()->route('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
