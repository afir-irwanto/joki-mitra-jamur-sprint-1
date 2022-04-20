@extends('admin.dashboard')
@section('page-heading')
<div class="card-body">
    <div class="text-xs font-weight-bold text-success text-uppercase">
        <h1><b>Halaman Ubah Workshop</b></h1>
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
                    <h6 class="m-0 font-weight-bold text-success">Formulir Ubah Data Workshop</h6>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row mb-2">
                <a href="/admin/workshop" class="btn btn-secondary btn-sm mr-2"><span class="fas fa-arrow-left"></span> Kembali</a>
            </div>
            <form class="user" method="post" action="/admin/workshop/update/{{$data->id}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Nama Workshop</label>
                    <input type="text" class="form-control form-control-user" placeholder="Masukkan Nama Workshop..." name="namaWorkshop" value="{{$data->namaWorkshop}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Harga Workshop</label>
                    <input type="number" class="form-control form-control-user" placeholder="Masukkan Harga Workshop" name="hargaWorkshop" value="{{$data->hargaWorkshop}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Waktu Pelaksanaan</label>
                    <input type="date" class="form-control form-control-user" placeholder="Masukkan Waktu Workshop" name="waktuWorkshop" value="{{$data->waktuWorkshop}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Deskripsi Workshop</label>
                    <textarea class="form-control form-control-user" rows="3" placeholder="Masukkan Deskripsi Workshop" name="deskripsiWorkshop">{{$data->deskripsiWorkshop}}</textarea>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Gambar Poster</label>
                    <input type="file" class="form-control form-control-user" name="gambarWorkshop">
                </div>
                <div class="form-group">
                    <img src="{{asset('foto-workshop/'.$data->gambarWorkshop)}}" style="width:200px" alt="">
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block">
                    Tambah Workshop
                </button>
            </form>
        </div>
    </div>
</div>
@endsection