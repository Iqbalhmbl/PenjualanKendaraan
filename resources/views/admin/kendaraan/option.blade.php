@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-4">
                <div class="card bg-dark border-2 border-warning text-warning">
                    <div class="card-body text-center">
                        <h2>PILIH KENDARAAN</h2>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <a href="{{ route('create.kendaraan') }}">
                <div class="card bg-dark border-2 border-warning text-warning">
                            <img src="{{ asset('img/mobil.png') }}" width="100px" height="350px" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h1 class="text-center">Mobil</h1>
                            </div>
                            <div class="card-footer">
                            </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="{{ route('createMotor.kendaraan') }}">
                <div class="card bg-dark border-2 border-warning text-warning">
                            <img src="{{ asset('img/motor.png') }}" width="100px" height="350px" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h1 class="text-center">Motor</h1>
                            </div>
                            <div class="card-footer">
                            </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection