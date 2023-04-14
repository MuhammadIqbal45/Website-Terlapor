<?php

namespace App\Http\Controllers;

use App\InformasiModel;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $informasis = InformasiModel::paginate(4);
        return view('informasi', compact('informasis'));
    }
}
