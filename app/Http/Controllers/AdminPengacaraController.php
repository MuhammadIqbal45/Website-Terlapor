<?php

namespace App\Http\Controllers;

use App\PengacaraModel;
use Illuminate\Http\Request;

class AdminPengacaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambahpengacaras = PengacaraModel::paginate(2);
        return view('admin.adminpengacara', compact('tambahpengacaras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admintambahpengacara');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PengacaraModel::create([
            'nama_pengacara' => $request -> nama_pengacara,
            'kota_pengacara' => $request -> kota_pengacara,
            'kontak_pengacara' => $request -> kontak_pengacara,
            'foto' => $request -> foto,
            'uraian' => $request -> uraian,
            'ttl' => $request -> ttl,
            'kelamin' => $request -> kelamin,
            'riwayatpengalaman' => $request -> riwayatpengalaman,
            'perusahaan' => $request -> perusahaan,
            'email' => $request -> email,
        ]);

        return redirect('admin-pengacara');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edt = PengacaraModel::findOrFail($id);
        return view('admin.admineditpengacara', compact('edt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edt = PengacaraModel::findOrFail($id);
        $edt->update($request -> all());
        return redirect('admin-pengacara');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edt = PengacaraModel::findOrFail($id);
        $edt->delete();
        return back();
    }
}
