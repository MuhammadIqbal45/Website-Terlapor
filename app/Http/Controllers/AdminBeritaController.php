<?php

namespace App\Http\Controllers;

use App\BeritaModel;
use Illuminate\Http\Request;

class AdminBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambahberitas = BeritaModel::paginate(5);
        return view('admin.adminberita', compact('tambahberitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admintambahberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        BeritaModel::create([
            'judul' => $request -> judul,
            'caption' => $request -> caption,
            'uraian' => $request -> uraian,
            'foto' => $request -> foto,
        ]);

        return redirect('admin-berita');
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
        $edt = BeritaModel::findOrFail($id);
        return view('admin.admineditberita', compact('edt'));
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
        $edt = BeritaModel::findOrFail($id);
        $edt->update($request -> all());
        return redirect('admin-berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edt = BeritaModel::findOrFail($id);
        $edt->delete();
        return back();
    }
}
