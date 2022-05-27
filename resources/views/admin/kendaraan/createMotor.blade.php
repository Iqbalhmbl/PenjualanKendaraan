@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-4">
                <div class="card bg-dark border-2 border-warning text-warning">
                    <div class="card-body text-center">
                        <h2>TAMBAH DATA KENDARAAN</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="p-2">
                    <a href="{{ route('option.kendaraan') }}" class="btn btn-warning">Kembali</a>
                </div>
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
                        <form action="{{ route('store.kendaraan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="jenis" value="motor" hidden>
                            <div class="mb-3">
                              <label class="form-label">Merek</label>
                              <input type="text" name="merek" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tipe</label>
                                <input type="text" name="tipe" class="form-control" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Tahun Keluaran</label>
                                <input type="text" name="tahun_keluaran" class="form-control" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Pilih Mesin</label>
                                <select class="form-control" name="kendaraan">
                                    @foreach($mesin as $m)
                                        <option value="{{ $m->id }}">{{ $m->mesin }} - {{ $m->transmisi }} - {{ $m->suspensi }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Warna</label>
                                <input type="text" name="warna" class="form-control" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar</label>
                                <input class="form-control" name="gambar" type="file" id="formFile">
                              </div>
                            <button type="submit" class="btn btn-warning">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection