<?php

namespace App\Http\Controllers;

use App\BeritaModel;
use Illuminate\Http\Request;

class BacaBeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $berita = BeritaModel::where('id', $id)->first();
        return view('fitur.bacaberita', compact('berita'));
    }
}
