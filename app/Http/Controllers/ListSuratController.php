<?php

namespace App\Http\Controllers;

use App\Models\surat;
use App\Models\category;
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
        $folder = category::all();
      //  $suratperusahaan = surat::where('JenisSurat','=','Perusahaan')->get();
        // $suratinternal = surat::where('JenisSurat','=','Internal')->get();        
        //$filters = surat::select('JenisSurat')->get();
        // $filter = $filter->unique();
         // $filters =surat::select('JenisSurat')->where('JenisSurat', '=', 'Perusahaan')->pluck('JenisSurat')->first();
         //  $internal =surat::select('JenisSurat')->where('JenisSurat', '=', 'Internal')->pluck('JenisSurat')->first();
        //return view('user.listsurat.allq', compact('datasurat','suratperusahaan','suratinternal','filters', 'internal'));
        return view('user.listsurat', compact('datasurat','folder'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('user.view_document');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
                    'required' => 'Silahkan Pilih File !!!',
                    'mimes' => 'Format File tidak cocok'
        ];

         $this->validate($request,[         
            'file_surat'=>'required|mimes:docx,doc,docm,dotx',
        ], $messages
    );
        $input = $request->all();
        $datasurat = surat::create($input);
        $request->file('file_surat')->move('folder', $request->file('file_surat')->getClientOriginalName());
        $datasurat->file_surat = $request->file('file_surat')->getClientOriginalName();
        $datasurat->save();
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
        $file = $datasurat->file_surat;
        $phpWord = \PhpOffice\PhpWord\IOFactory::load('../public/folder/' . $file);
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        $htmlWriter->save('../resources/views/component/show.html');
        // dd($datasurat->file_surat);
        return view('user.view_document', compact('datasurat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $folder = category::all();
        $datasurat = surat::find($id);
        $file = $datasurat->file_surat;
        $phpWord = \PhpOffice\PhpWord\IOFactory::load('../public/folder/' . $file);
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        $htmlWriter->save('../resources/views/component/edit.html');
        return view('user.edittemplate', compact ('datasurat','folder'));
    }

    public function tambah(Request $request,$id)
    {
        $datasurat = surat::find($id);
        $request->file('file_surat')->move('folder/temp', $request->file('file_surat')->getClientOriginalName());
        $phpWord = \PhpOffice\PhpWord\IOFactory::load('../public/folder/temp/' . $request->file('file_surat')->getClientOriginalName());
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        $htmlWriter->save('../resources/views/component/temp.html');
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
        $datasurat = surat::find($id);
        $file = $datasurat->file_surat;

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('../public/folder/' . $file);

        $phpWord->setValue('{Tujuan_', 'tes1');

        $phpWord->saveAs('../public/folder/'. $file);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $datasurat = surat::find($id);
        $datasurat->delete();
        return redirect('/listsurat')->with('sukses','dataterhapus');

    }

     public function perusahaan()
    {
        $datasurat = surat::latest()->paginate(5);
        return view('user.listsurat.perusahaan', compact('datasurat'));
    }
}
