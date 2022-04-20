<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function admin_produk()
    {
        $data = Produk::all();
        return view('admin.produk.index', compact('data'));
    }

    public function admin_produk_create()
    {
        return view('admin.produk.create');
    }

    public function admin_produk_insert(Request $request)
    {
        $data = Produk::create($request->all());
        if($request->hasFile('gambarProduk')){
            $request->file('gambarProduk')->move('foto-produk/', $request->file('gambarProduk')->getClientOriginalName());
            $data->gambarProduk = $request->file('gambarProduk')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin_produk');
    }

    public function admin_produk_edit($id)
    {
        $data = Produk::all()->where('id',$id)->first();

        return view('admin.produk.edit', compact('data'));
    }

    public function admin_produk_update(Request $request, $id)
    {
        $ambil = Produk::findorfail($id);
        $gambar = $ambil->gambarProduk;

        $data = [
            'namaProduk' => $request->namaProduk,
            'hargaProduk' => $request->hargaProduk,
            'stokProduk' => $request->stokProduk,
            'deskripsiProduk' => $request->deskripsiProduk,
            'gambarProduk' => $gambar,
        ];
        $request->gambarProduk->move(public_path().'/foto-produk',$gambar);
        $ambil->update($data);

        return redirect('admin/produk');
    }

    public function admin_produk_detail($id)
    {
        $data = Produk::all()->where('id',$id)->first();

        return view('admin.produk.detail', compact('data'));
    }

    public function user_produk()
    {
        $data = Produk::all();

        return view('user.produk.index', compact('data'));
    }

    public function user_produk_detail($id)
    {
        $data = Produk::select('id','namaProduk','gambarProduk','stokProduk','hargaProduk','deskripsiProduk')->where('id',$id)->first();
        return view('user.produk.detail',compact('data'));
    }
}
