<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        return view('admin.kendaraan.index', compact('mobil','motor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function option()
    {
        return view('admin.kendaraan.option');
    }

    public function create()
    {
        $mesin = Mobil::all();
        return view('admin.kendaraan.createMobil', compact('mesin'));
    }

    public function createMotor()
    {
        $mesin = Motor::all();
        return view('admin.kendaraan.createMotor', compact('mesin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'merek' => 'required',
            'tipe' => 'required',
            'kendaraan' => 'required',
            'jenis' => 'required',
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);

        $data = new Kendaraan();
        $data->merek = $request->merek;
        $data->tipe = $request->tipe;
        $data->kendaraan = $request->kendaraan;
        $data->jenis = $request->jenis;
        $data->status = 'tersedia';
        $data->tahun_keluaran = $request->tahun_keluaran;
        $data->warna = $request->warna;
        $data->harga = $request->harga;
        if ($request->gambar) {
            $this->validate($request, [
                'gambar' => 'required|file|image|mimes:jpeg,jpg,png|max:2048',
            ]);
            $file = $request->file('gambar');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(550, 550, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);

            $file->move('user', $image_name);

            $data->gambar = $image_name;
        }
        $data->save();
        return redirect()->route('index.kendaraan')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kendaraan::find($id);
        $mesin = Mobil::all();
        return view('admin.kendaraan.editMobil', compact('data','mesin'));
    }

    public function editMotor($id){
        $data = Kendaraan::find($id);
        $mesin = Motor::all();
        return view('admin.kendaraan.editMotor', compact('data','mesin'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'merek' => 'required',
            'tipe' => 'required',
            'kendaraan' => 'required',
            'jenis' => 'required',
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);

        $data = Kendaraan::find($id);
        $data->merek = $request->merek;
        $data->tipe = $request->tipe;
        $data->kendaraan = $request->kendaraan;
        $data->jenis = $request->jenis;
        $data->status = 'tersedia';
        $data->tahun_keluaran = $request->tahun_keluaran;
        $data->warna = $request->warna;
        $data->harga = $request->harga;
        if ($request->gambar) {
            $this->validate($request, [
                'gambar' => 'required|file|image|mimes:jpeg,jpg,png|max:2048',
            ]);
            $file = $request->file('gambar');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(550, 550, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);

            $file->move('user', $image_name);

            $data->gambar = $image_name;
        }
        $data->save();
        return redirect()->route('index.kendaraan')->with('success', 'Data berhasil diubah');
    }

    public function updateMobil(Request $request, $id)
    {
        $request->validate([
            'merek' => 'required',
            'tipe' => 'required',
            'kendaraan' => 'required',
            'jenis' => 'required',
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);

        $data = Kendaraan::find($id);
        $data->merek = $request->merek;
        $data->tipe = $request->tipe;
        $data->kendaraan = $request->kendaraan;
        $data->jenis = $request->jenis;
        $data->tahun_keluaran = $request->tahun_keluaran;
        $data->warna = $request->warna;
        $data->harga = $request->harga;
        if ($request->gambar) {
            $this->validate($request, [
                'gambar' => 'required|file|image|mimes:jpeg,jpg,png|max:2048',
            ]);
            $file = $request->file('gambar');
            $image_name = time() . '_' . $file->getClientOriginalName();

            $img = Image::make($file->getRealPath());
            $img->resize(550, 550, function ($constraint) {
                $constraint->aspectRatio();
            })->save('users/thumbnail/' . $image_name);

            $file->move('user', $image_name);

            $data->gambar = $image_name;
        }
        $data->save();
        return redirect()->route('index.kendaraan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kendaraan::find($id);
        $data->delete();
        return redirect()->route('index.kendaraan')->with('success', 'Data berhasil dihapus');
    }
}
