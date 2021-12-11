<?php

namespace App\Http\Controllers;

use App\Models\surat;
use App\Models\category;
use App\Models\Value;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use DB;
use File;
class ListSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $folder = surat::latest()->get();
        $all = 'All';
        $datasurat = category::with('categorys')->get();
        return view('user.listsurat', compact('datasurat','folder','all'));

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
        $datasurat = surat::create($request->all());
        //$datasurat->judul_surat = $request->file_surat;
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
        $datasurats = DB::table('surat as st')->join('category as ct', 'ct.id', '=', 'st.id_category')->first();
        $file = $datasurat->file_surat;
        $phpWord = \PhpOffice\PhpWord\IOFactory::load('../public/folder/' . $file);
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        $htmlWriter->save('../resources/views/component/edit.html');
        return view('user.edittemplate', compact ('datasurat','folder','datasurats'));
    }

    public function tambah(Request $request, $id)
    {
        $variable = [];

        // foreach ($request->$input('variable') as $key => $value){
        //     $variable["variable.{$key}"] = 'required';
        // }

        foreach ($request->variable as $key => $value) {
            dd($value);
        }

        // $input['id_surats'] = $id;
        // $value = Value::create($input);
        // $value->save();
        // return redirect(url('/listsurat'));
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
        $dok = app_path().'../public/folder/'.$datasurat->file_surat;

     if(\File::exists(public_path('folder/'.$datasurat->file_surat))){
       \File::delete(public_path('folder/'.$datasurat->file_surat));
    }
        $datasurat->delete();
        return redirect('/listsurat')->with('sukses','dataterhapus');

    }


}
