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
        $folder = category::all();
        $surats = surat::latest()->get();
        $datasurat = category::with('categorys')->get();
        return view('user.listsurat', compact('datasurat','folder','surats'));

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
            'id_category'=>'required',
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
        $value = Value::where('id_surats',$id)->get();
        $file = $datasurat->file_surat;
        $phpWord = \PhpOffice\PhpWord\IOFactory::load('../public/folder/' . $file);
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        $htmlWriter->save('../resources/views/component/edit.html');
        return view('user.edittemplate', compact ('datasurat','folder','datasurats', 'value'));
    }

    public function tambah(Request $request, $id)
    {
        // $messages = [
        //     'required' => 'Silahkan isi bidang ini !!!',
        //     'mimes' => 'Format File tidak cocok'
        // ];

        // $this->validate($request,[         
        //     'multiInput'=>'required',
        //     ], $messages
        // );

        foreach ($request->multiInput as $value) { 
            Value::create([
                'id_surats' => $id,
                'variable' => $value,
            ]);
        }
        
        return redirect(url('/listsurat/' . $id . '/edit'));
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
        $messages = [
            'required' => 'Silahkan Pilih File !!!',
            'mimes' => 'Format File tidak cocok'
        ];

        $this->validate($request,[         
            'file_surat'=>'required|mimes:docx,doc,docm,dotx',
            ], $messages
        );


        $datasurat = surat::find($id);

        if($request->file_surat != ''){        
            $path = public_path().'/folder/';

            if($datasurat->file_surat != ''  && $datasurat->file_surat != null){
                $file_old = $path.$datasurat->file_surat;
                unlink($file_old);
            }

            $file = $request->file_surat;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            
            // $value = Value::where('id_surats',$id)->get();

            $datasurat->update(['file_surat' => $filename,'id_category'=>$request->id_category]);
            DB::table('values')->where('id_surats', $id)->delete();

            return redirect(url('/listsurat/' . $id . '/edit'));
        }
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
