@extends('admin.dashboard')
@section('page-heading')
<div class="card-body">
    <div class="text-xs font-weight-bold text-success text-uppercase">
        <h1><b>Halaman Ubah Produk</b></h1>
    </div>
</div>
@endsection

@section('konten')
<div class="col-xl-12 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="row">
            <div class="col-md-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Formulir Ubah Data Produk</h6>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row mb-2">
                <a href="/admin/produk" class="btn btn-secondary btn-sm mr-2"><span class="fas fa-arrow-left"></span> Kembali</a>
            </div>
            <form class="user" method="post" action="/admin/produk/update/{{$data->id}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Masukkan Nama Produk..." name="namaProduk" value="{{$data->namaProduk}}">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-user" placeholder="Masukkan Harga Produk" name="hargaProduk" value="{{$data->hargaProduk}}">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-user" placeholder="Masukkan Stok Produk" name="stokProduk" value="{{$data->stokProduk}}">
                </div>
                <div class="form-group">
                    <textarea class="form-control form-control-user" rows="3" placeholder="Masukkan Deskripsi Produk" name="deskripsiProduk">{{$data->namaProduk}}</textarea>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control form-control-user" name="gambarProduk">
                </div>
                <div class="form-group">
                    <img src="{{asset('foto-produk/'.$data->gambarProduk)}}" style="width:200px" alt="">
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block">
                    Ubah Produk
                </button>
            </form>
        </div>
    </div>
</div>
@endsection