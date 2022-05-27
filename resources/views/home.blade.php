@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-dark border-2 border-warning text-warning">
                <div class="card-header border-2 border-warning">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Selamat Datang! <a href="/">Klik Disini</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
