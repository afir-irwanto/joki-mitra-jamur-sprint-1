@extends('admin.dashboard')
@section('page-heading')
<div class="card-body">
    <div class="text-xs font-weight-bold text-success text-uppercase">
        <h1><b>Halaman Produk</b></h1>
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
                    <h6 class="m-0 font-weight-bold text-success">Tabel Data Produk</h6>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <a href="/admin/produk/create" class="btn btn-success btn-sm mt-2 mr-3">Tambah Produk</a>
            </div>
        </div>
        <!-- Card Body -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Gambar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($data as $dt)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$dt->namaProduk}}</td>
                                <td>Rp {{number_format($dt->hargaProduk)}}</td>
                                <td>{{$dt->stokProduk}}</td>
                                <td>
                                    <img src="{{ asset('foto-produk/'.$dt->gambarProduk) }}" style="width: 40px;" alt="">
                                </td>
                                <td>
                                    <a href="/admin/produk/edit/{{$dt->id}}" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span></a>
                                    <a href="/admin/produk/detail/{{$dt->id}}" class="btn btn-info btn-sm"><span class="fas fa-info"></span></a>
                                    <a href="#" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection