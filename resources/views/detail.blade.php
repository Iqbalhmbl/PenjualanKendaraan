@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-dark border-2 border-warning text-warning mb-3">
                <img class="card-img-top"src="@if (empty($ids->gambar))
              {{url('img/default-image.png')}}
              @else
              {{url('')}}/users/thumbnail/{{$ids->gambar}}
              @endif" alt="">
                <div class="card-body">
                  <h5 class="card-title">{{ $ids->merek }} {{ $ids->tipe }}</h5>
                  <p class="card-text">Tahun Keluaran : {{ $ids->tahun_keluaran }}</p>
                  <p class="card-text">Warna : {{ $ids->warna }}</p>
                  <p class="card-text">Harga : {{ $ids->harga }}</p>
                  <p class="card-text">Mesin : {{ $ids->mesin }}/{{ $ids->kapasitas_penumpang }}{{ $ids->transmisi }}/{{ $ids->tipe_mobil }}{{ $ids->suspensi }} </p>
                  <p class="card-text"><a href="{{ route('pemesanan',$ids->id) }}" class="btn btn-warning btn-block">Pesan Sekarang</a></p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
