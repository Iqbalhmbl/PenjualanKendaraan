@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card bg-dark border-2 border-warning text-warning">
                <img class="card-img-top" width="100" height="250" src="@if (empty($data->gambar))
                {{url('img/default-image.png')}}
                @else
                {{url('')}}/users/thumbnail/{{$data->gambar}}
                @endif" alt="">
                  <div class="card-body">
                    <h5 class="card-title">{{ $data->merek }} {{ $data->tipe }}</h5>
                    <p class="card-text">Rp. {{ $data->harga }}</p>
                  </div>
                </div>
        </div>
        <div class="col-8">
            @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card bg-dark shadow-lg text-warning border-2 border-warning">
                <div class="card-body">
                    <form action="{{ route('store.pemesanan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="{{ $data->id }}" name="id_kendaraan" hidden>
                        <div class="mb-3">
                          <label class="form-label">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Handphone</label>
                            <input type="text" name="no_hp" class="form-control" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" id="" class="form-control"></textarea>
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="tempat_lahir" name="tempat_lahir" class="form-control" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Metode Pembayaran</label>
                            <select name="metode_pembayaran" class="form-control" id="">
                                <option value="Cash">Cash</option>
                                <option value="Kredit">Kredit</option>
                            </select>
                          </div>
                        <button type="submit" class="btn btn-warning">Pesan Sekarang</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
