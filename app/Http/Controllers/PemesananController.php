<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.laporan.index',compact('pemesanan'));
    }

    public function pdf($id){
        $pemesanan = Pemesanan::join('kendaraan', 'kendaraan.id', '=', 'pemesanan.id_kendaraan')
            ->select('pemesanan.*', 'kendaraan.merek','kendaraan.tipe','kendaraan.warna','kendaraan.tahun_keluaran','kendaraan.harga')
            ->where('pemesanan.id', '=', $id)
            ->first();
        $pdf = \PDF::loadView('admin.laporan.pdf',compact('pemesanan'));
        return $pdf->download('laporan.pdf');
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'id_kendaraan' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'metode_pembayaran' => 'required',
        ]);
        $pemesanan = new Pemesanan();
        $pemesanan->id_user = $id;
        $pemesanan->id_kendaraan = $request->id_kendaraan;
        $pemesanan->nama = $request->nama;
        $pemesanan->no_hp = $request->no_hp;
        $pemesanan->alamat = $request->alamat;
        $pemesanan->tempat_lahir = $request->tempat_lahir;
        $pemesanan->tanggal_lahir = $request->tanggal_lahir;
        $pemesanan->metode_pembayaran = $request->metode_pembayaran;
        $pemesanan->save();

        Kendaraan::where('id',$request->id_kendaraan)->update(['status' => 'terpesan']);
        return redirect()->route('welcome')->with('success', 'Pemesanan Berhasil');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
