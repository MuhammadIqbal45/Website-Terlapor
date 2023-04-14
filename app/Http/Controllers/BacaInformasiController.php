<?php

namespace App\Http\Controllers;

use App\InformasiModel;
use Illuminate\Http\Request;

class BacaInformasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $informasi = InformasiModel::where('id', $id)->first();
        return view('fitur.bacainformasi', compact('informasi'));
    }
}
