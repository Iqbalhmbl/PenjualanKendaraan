<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $mobil = Kendaraan::join('mobil', 'mobil.id', '=', 'kendaraan.kendaraan')
        ->select('kendaraan.*', 'mobil.mesin','mobil.kapasitas_penumpang','mobil.tipe as tipe_mobil')
        ->where('kendaraan.jenis', '=', 'mobil')
        ->where('kendaraan.status', '=', 'tersedia')
        ->get();
        $motor = Kendaraan::join('motor', 'motor.id', '=', 'kendaraan.kendaraan')
        ->select('kendaraan.*', 'motor.mesin','motor.suspensi','motor.transmisi')
        ->where('kendaraan.jenis', '=', 'motor')
        ->where('kendaraan.status', '=', 'tersedia')
        ->get();

        return view('welcome', compact('mobil','motor'));
    }
    
    public function detail($id){
        $data = Kendaraan::find($id);
        if($data->jenis == 'mobil'){
        $ids = Kendaraan::join('mobil', 'mobil.id', '=', 'kendaraan.kendaraan')
        ->select('kendaraan.*', 'mobil.mesin','mobil.kapasitas_penumpang','mobil.tipe as tipe_mobil')
        ->where('kendaraan.jenis', '=', 'mobil')
        ->where('kendaraan.id', '=', $id)->first();
        }elseif($data->jenis == 'motor'){
        $ids = Kendaraan::join('motor', 'motor.id', '=', 'kendaraan.kendaraan')
        ->select('kendaraan.*', 'motor.mesin','motor.suspensi','motor.transmisi')
        ->where('kendaraan.jenis', '=', 'motor')
        ->where('kendaraan.id', '=', $id)->first();
        }
        return view('detail', compact('ids'));
    }

    public function pemesanan($id){
    $data = Kendaraan::find($id);
    return view('pemesanan', compact('data'));
    }
}
