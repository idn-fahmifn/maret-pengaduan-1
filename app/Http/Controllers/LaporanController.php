<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('user.laporan.index');
    }
    public function create()
    {
        return view('user.laporan.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'judul_laporan' => 'required|string|min:5|max:50',
            'dokumentasi' => 'required|max:10240',
            'detail_laporan' => 'required'
        ]);
        if($request->hasFile('dokumentasi'))
        {
            $gambar = $request->file('dokumentasi');
            $path = 'public/images/laporan';
            $ext = $gambar->getClientOriginalExtension();
            $nama = 'dokumentasi_laporan_'.Carbon::now()->format('YmdHis').$ext;
            $gambar->storeAs($path, $nama);
            $input['dokumentasi'] = $nama;
        }
        $input['tanggal_laporan'] = Carbon::now()->format('Y-m-d H:i:s');

    }
}
