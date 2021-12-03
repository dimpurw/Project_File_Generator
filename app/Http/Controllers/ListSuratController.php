<?php

namespace App\Http\Controllers;

use App\Models\surat;
use Illuminate\Http\Request;

class ListSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasurat = 0;
        return view('user.listsurat.all', compact('datasurat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.createtemplate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'TempatPenulisan' => 'required',
            'TanggalPenulisan' => 'required',
            'TujuanSurat' => 'required',
            'AlamatTujuan' => 'required',
            'SalamPembuka' => 'required',
            'Isi' => 'required',
            'SalamPenutup' => 'required',
            'Pengirim' => 'required',
            'Ttd' => 'required',
            'JenisSurat' => 'required',
        ]);

        $input = $request->all();
        $surat = surat::create($input);
        dd($surat);
        // return view();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
