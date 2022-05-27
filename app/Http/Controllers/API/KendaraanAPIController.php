<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KendaraanAPIController extends Controller
{
    public function show(){
        $kendaraan = \App\Models\Kendaraan::all();

        return response()->json($kendaraan);
    }
}
