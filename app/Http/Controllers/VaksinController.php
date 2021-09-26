<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vaksin.index',[
            "vaksins" => Vaksin::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaksin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nik'                => 'required',
            'nama'                       => 'required',
            'str'                      => 'required',
            'namaVaksinator'                      => 'required',
            'jenisVaksin'                  => 'required',
            'dosisVaksin'               => 'required',
            'tanggalVaksin'                 => 'required',
            'tempatVaksin'                      => 'required',
         ]);

        $vaksin = new Vaksin;
        $vaksin->nik = $request->input('nik');
        $vaksin->nama = $request->input('nama');
        $vaksin->str = $request->input('str');
        $vaksin->namaVaksinator = $request->input('namaVaksinator');
        $vaksin->jenisVaksin = $request->input('jenisVaksin');
        $vaksin->dosisVaksin = $request->input('dosisVaksin');
        $vaksin->tanggalVaksin = $request->input('tanggalVaksin');
        $vaksin->tempatVaksin = $request->input('tempatVaksin');
        $vaksin->save();
        return redirect('vaksin')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function show(Vaksin $vaksin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaksin $vaksin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaksin $vaksin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaksin $vaksin)
    {
        //
    }
}
