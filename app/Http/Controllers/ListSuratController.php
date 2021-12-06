<?php

namespace App\Http\Controllers;

use App\Models\surat;
use Illuminate\Http\Request;
use DB;
class ListSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasurat = surat::latest()->get();
        $suratperusahaan = surat::where('JenisSurat','=','Perusahaan')->get();
         $suratinternal = surat::where('JenisSurat','=','Internal')->get();        
        //$filters = surat::select('JenisSurat')->get();
        // $filter = $filter->unique();
         $filters =surat::select('JenisSurat')->where('JenisSurat', '=', 'Perusahaan')->pluck('JenisSurat')->first();
          $internal =surat::select('JenisSurat')->where('JenisSurat', '=', 'Internal')->pluck('JenisSurat')->first();
        return view('user.listsurat.alls', compact('datasurat','suratperusahaan','suratinternal','filters', 'internal'));
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
        $datasurat = surat::create($input);
        // dd($surat);
        return redirect(url('/listsurat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datasurat = surat::find($id);
        dd($datasurat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datasurat = surat::find($id);
        return view('user.edittemplate', compact ('datasurat'));
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

     public function perusahaan()
    {
        $datasurat = surat::latest()->paginate(5);
        return view('user.listsurat.perusahaan', compact('datasurat'));
    }
}
