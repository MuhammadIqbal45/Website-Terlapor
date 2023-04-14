<?php

namespace App\Http\Controllers;

use App\PengacaraModel;
use Illuminate\Http\Request;

class DaftarPengacaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $pengacara = PengacaraModel::where('id', $id)->first();
        return view('fitur.daftarpengacara', compact('pengacara'));
    }
}
