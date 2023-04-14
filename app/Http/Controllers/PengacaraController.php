<?php

namespace App\Http\Controllers;

use App\PengacaraModel;
use Illuminate\Http\Request;

class PengacaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pengacaras = PengacaraModel::paginate(8);
        return view('pengacara', compact('pengacaras'));
    }
}
