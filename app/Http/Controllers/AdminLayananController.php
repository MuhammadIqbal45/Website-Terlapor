<?php

namespace App\Http\Controllers;

use App\LayananModel;
use Illuminate\Http\Request;

class AdminLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambahlayanans = LayananModel::paginate(5);
        return view('admin.adminlayanan', compact('tambahlayanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admintambahlayanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LayananModel::create([
            'nama_pelapor' => $request -> nama_pelapor,
            'tempat' => $request -> tempat,
            'tanggal_kejadian' => $request -> tanggal_kejadian,
            'foto' => $request -> foto,
            'deskripsi' => $request -> deskripsi,
        ]);

        return redirect('admin-layanan');
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
        $edt = LayananModel::findOrFail($id);
        return view('admin.admineditlayanan', compact('edt'));
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
        $edt = LayananModel::findOrFail($id);
        $edt->update($request -> all());
        return redirect('admin-layanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edt = LayananModel::findOrFail($id);
        $edt->delete();
        return back();
    }
}
