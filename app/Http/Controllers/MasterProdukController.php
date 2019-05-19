<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produk;

class MasterProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = Produk::all();
        return view('produk/produk',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produk/tambah');
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
        $data = new Produk();
        $data->nama_produk = $request->get('nama_produk');
        $data->asal = $request->get('asal');
        $data->link = $request->get('link');
        $data->harga = $request->get('harga');

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->image = $newName;

        $data->save();
        return redirect('admin/produk');
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
        $produk = Produk::find($id);
        return view('produk/edit',compact('produk'));
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
        $data = Produk::where('id',$id)->first();
        $data->nama_produk = $request->get('nama_produk');
        $data->asal = $request->get('asal');
        $data->link = $request->get('link');
        $data->harga = $request->get('harga');

        if (empty($request->file('image'))){
            $data->image = $data->image;
        }
        else{
            unlink('uploads/file/'.$data->image); //menghapus file lama
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $data->image = $newName;
        }

        $data->save();
        return redirect('admin/produk');   
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
        $data=Produk::where('id',$id)->first();
        $data->delete();
        return redirect('admin/produk');
    }
}
