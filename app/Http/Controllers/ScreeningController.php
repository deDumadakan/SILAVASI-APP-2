<?php

namespace App\Http\Controllers;

use App\Models\Screening;
use Illuminate\Http\Request;

class ScreeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('screening.index',[
            "screenings" => Screening::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('screening.create');
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
            'petugas_id'                => 'required',
            'nik'                       => 'required',
            'nama'                      => 'required',
            'noHP'                      => 'required',
            'tglLahir'                  => 'required',
            'dosisVaksin'               => 'required',
            'tglVaksin'                 => 'required',
            'suhu'                      => 'required',
            'tekananDarah'              => 'required',
            'p1'                        => 'required',
            'p2'                        => 'required',
            'p3'                        => 'required',
            'p4'                        => 'required',
            'p5'                        => 'required',
            'p6'                        => 'required',
            'p7'                        => 'required',
            'p8'                        => 'required',
            'p9'                        => 'required',
            'p10'                       => 'required',
            'p11'                       => 'required',
            'p12'                       => 'required',
            'p13'                       => 'required',
            'p14a'                      => 'required',
            'p14b'                      => 'required',
            'p14c'                      => 'required',
            'p14d'                      => 'required',
            'p14e'                      => 'required',
         ]);

        $screening = new Screening;
        $screening->petugas_id = $request->input('petugas_id');
        $screening->nik = $request->input('nik');
        $screening->nama = $request->input('nama');
        $screening->noHP = $request->input('noHP');
        $screening->tglLahir = $request->input('tglLahir');
        $screening->dosisVaksin = $request->input('dosisVaksin');
        $screening->tglVaksin = $request->input('tglVaksin');
        $screening->suhu = $request->input('suhu');
        $screening->tekananDarah = $request->input('tekananDarah');
        $screening->p1 = $request->input('p1');
        $screening->p2 = $request->input('p2');
        $screening->p3 = $request->input('p3');
        $screening->p4 = $request->input('p4');
        $screening->p5 = $request->input('p5');
        $screening->p6 = $request->input('p6');
        $screening->p7 = $request->input('p7');
        $screening->p8 = $request->input('p8');
        $screening->p9 = $request->input('p9');
        $screening->p10 = $request->input('p10');
        $screening->p11 = $request->input('p11');
        $screening->p12 = $request->input('p12');
        $screening->p13 = $request->input('p13');
        $screening->p14a = $request->input('p14a');
        $screening->p14b = $request->input('p14b');
        $screening->p14c = $request->input('p14c');
        $screening->p14d = $request->input('p14d');
        $screening->p14e = $request->input('p14e');
        $screening->save();
        return redirect('screening')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Screening  $screening
     * @return \Illuminate\Http\Response
     */
    public function show(Screening $screening)
    {
        return view('screening.show', compact('screening'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Screening  $screening
     * @return \Illuminate\Http\Response
     */
    public function edit(Screening $screening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Screening  $screening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Screening $screening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Screening  $screening
     * @return \Illuminate\Http\Response
     */
    public function destroy(Screening $screening)
    {
        //
    }
}
