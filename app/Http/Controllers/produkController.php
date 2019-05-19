<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function search(Request $request)
    {
        $data = Produk::where('nama_produk', 'like', '%' . $request->get('nama_produk') . '%')->limit(3)->get();
        $data2 = Produk::where('nama_produk', 'like', '%' . $request->get('nama_produk') . '%')->skip(3)->limit(3)->get();
        $data3 = Produk::where('nama_produk', 'like', '%' . $request->get('nama_produk') . '%')->skip(6)->limit(3)->get();
        return view('hasil', ['data_produk' => $data, 'data_produk2' => $data2, 'data_produk3' => $data3]);
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
