<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Respon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    public function index()
    {
        $data = Laporan::paginate(10);
        return view('respon.index', compact('data'));
    }

    public function detail($id)
    {
        $data = Laporan::findOrFail($id);
        $respon = Respon::where('id_laporan', $id)->get()->all();
        return view('respon.detail', compact('data', 'respon'));
    }

    public function respon($id)
    {
        $data = Laporan::findOrFail($id);
        return view('respon.respon', compact('data'));
    }

    public function store(Request $request, $id)
    {
        $data = Laporan::findOrFail($id);

        // menyimpan value yang akan disimpan di tabel respon
        Respon::create([
            'id_laporan' => $data->id,
            'tanggal_respon' => Carbon::now()->format('Y-m-d H:i:s'),
            'isi_respon' => $request->isi_respon
        ]);

        // mengubah status yang ada di tabel laporan.
        $data->status = $request->status;
        $data->save();

        return redirect()->route('respon.detail', $data->id)->with('success', 'Respon berhasil ditambahkan');


    }

}
