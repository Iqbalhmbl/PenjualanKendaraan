@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-4">
                <div class="card bg-dark border-2 border-warning text-warning">
                    <div class="card-body text-center">
                        <h2>LAPORAN</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card bg-dark border-2 border-warning text-warning">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">No HP</th>
                                  <th scope="col">Opsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($pemesanan as $p)
                                <tr>
                                  <th>{{ $loop->iteration }}</th>
                                  <td>{{ $p->nama }}</td>
                                  <td>{{ $p->no_hp }}</td>
                                    <td>
                                        <a href="{{ route('pdf.laporan',$p->id) }}" class="btn btn-warning btn-sm">Cetak</a>
                                    </td>
                                </tr>
                                @endforeach
                              </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>

@endsection