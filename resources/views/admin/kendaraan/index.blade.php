@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-4">
                <div class="card bg-dark border-2 border-warning text-warning">
                    <div class="card-body text-center">
                        <h2>TABEL STOK KENDARAAN YANG TERSEDIA</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="p-2">
                    <a href="{{ route('option.kendaraan') }}" class="btn btn-warning">Tambah Data</a>
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
                <div class="card bg-warning">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Merek</th>
                              <th scope="col">Tipe</th>
                              <th scope="col">Jenis</th>
                              <th scope="col">Tahun Keluaran</th>
                              <th scope="col">Opsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($mobil as $k)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $k->merek }}</td>
                              <td>{{ $k->tipe }}</td>
                              <td>{{ $k->jenis }}</td>
                              <td>{{ $k->tahun_keluaran }}</td>
                              <td>
                                <a href="{{ route('edit.kendaraan', $k->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('delete.kendaraan', $k->id) }}" class="btn btn-danger"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                </div>
            </div>
            </div>
            <br>
            <div class="row"> 
              <div class="col-md-12">
                <div class="card bg-warning">
                  <table class="table table-dark table-striped">
                      <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Tahun Keluaran</th>
                            <th scope="col">Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($motor as $k)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $k->merek }}</td>
                            <td>{{ $k->tipe }}</td>
                            <td>{{ $k->jenis }}</td>
                            <td>{{ $k->tahun_keluaran }}</td>
                            <td>
                              <a href="{{ route('editMotor.kendaraan', $k->id) }}" class="btn btn-warning">Edit</a>
                              <a href="{{ route('delete.kendaraan', $k->id) }}" class="btn btn-danger"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</a>
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