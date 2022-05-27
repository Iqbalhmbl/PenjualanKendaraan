@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-3">
        <div class="col-md-12">
            <div class="card mb-3 shadow-lg bg-dark border-2 border-warning">
                <img src="{{ asset('img/bg.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center text-warning">Penjualan Mobil & Motor</h5>
                  <p class="card-text text-warning">Selamat datang pada aplikasi penjualan mobil dan motor.</p>
                </div>
              </div>
        </div>
    <div class="row justify-content-center">

        @foreach($mobil as $mobil)
        <div class="col-4">
          <a href="{{ route('detail',$mobil->id) }}">
            <div class="card mb-3 bg-dark border-2 border-warning text-warning">
              <img class="card-img-top" width="100" height="250" src="@if (empty($mobil->gambar))
              {{url('img/default-image.png')}}
              @else
              {{url('')}}/users/thumbnail/{{$mobil->gambar}}
              @endif" alt="">
                <div class="card-body">
                  <h5 class="card-title">{{ $mobil->merek }} {{ $mobil->tipe }}</h5>
                  <p class="card-text">Rp. {{ $mobil->harga }}</p>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
        @foreach($motor as $motor)
        <div class="col-4">
          <a href="{{ route('detail',$motor->id) }}">
            <div class="card p-2 mb-3 bg-dark border-2 border-warning text-warning">
              <img class="card-img-top" width="100" height="250" src="@if (empty($motor->gambar))
              {{url('img/default-image.png')}}
              @else
              {{url('')}}/users/thumbnail/{{$motor->gambar}}
              @endif" alt="">
                <div class="card-body">
                  <h5 class="card-title">{{ $motor->merek }} {{ $motor->tipe }}</h5>
                  <p class="card-text">Rp. {{ $motor->harga }}</p>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
