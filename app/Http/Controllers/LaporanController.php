<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        $data = Laporan::where('id_user', Auth::user()->id)->get()->all();
        return view('user.laporan.index', compact('data'));
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
            $nama = 'dokumentasi_laporan_'.Carbon::now()->format('YmdHis').'.'.$ext;
            $gambar->storeAs($path, $nama);
            $input['dokumentasi'] = $nama;
        }
        $input['tanggal_laporan'] = Carbon::now()->format('Y-m-d H:i:s');
        $input['id_user'] = Auth::user()->id;

        Laporan::create($input);
        return redirect()->route('laporan.index')->with('success', 'Laporan Berhasil Dibuat');
    }

    public function detail($id)
    {
        $data = Laporan::find($id);
        return view('user.laporan.detail', compact('data'));
    }

}
