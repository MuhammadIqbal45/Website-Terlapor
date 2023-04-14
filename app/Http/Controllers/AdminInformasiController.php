<?php

namespace App\Http\Controllers;

use App\InformasiModel;
use Illuminate\Http\Request;

class AdminInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambahinformasis = InformasiModel::paginate(3);
        return view('admin.admininformasi', compact('tambahinformasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admintambahinformasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        InformasiModel::create([
            'judul' => $request -> judul,
            'uraian' => $request -> uraian,
            'foto' => $request -> foto,
        ]);

        return redirect('admin-informasi');
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
        $edt = InformasiModel::findOrFail($id);
        return view('admin.admineditinformasi', compact('edt'));
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
        $edt = InformasiModel::findOrFail($id);
        $edt->update($request -> all());
        return redirect('admin-informasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edt = InformasiModel::findOrFail($id);
        $edt->delete();
        return back();
    }
}
