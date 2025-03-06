<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Respon;
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

    public function store(Request $request)
    {
        
    }

}
