<?php

namespace App\Http\Controllers;
use App\Models\surat;
use App\Models\value;
use App\Models\category;
use Illuminate\Http\Request;
use DB;

class FilterSuratController extends Controller
{
     public function perusahaan()
    {
        $datasurat = surat::where('JenisSurat','=','Perusahaan')->get();
        return view('user.listsurat.perusahaan', compact('datasurat'));
    }
    public function internal()
    {
        $datasurat = surat::where('JenisSurat','=','Internal')->get();        
        return view('user.listsurat.perusahaan', compact('datasurat'));
    }
    public function personal()
    {
        $datasurat = surat::where('JenisSurat','=','Personal')->get();        
        return view('user.listsurat.perusahaan', compact('datasurat'));
    }
     public function tambah(Request $request)
    {$messages = [
    'required' => 'Silahkan Masukkan Nama Folder !!!',
    'unique' => 'Nama Folder Sudah Ada !!!',
    ];
         $this->validate($request,[         
            'jenis'=>'required|unique:category|',
        ],$messages
    );
        $input = $request->all();
        $surat = category::create($input);
        // dd($surat);
        return redirect(url('/listsurat'));
    }
    public function generate(Request $request, $id)
    {
        $datasurat = surat::find($id);
        $datavalue = DB::table('values as v')->join('surat as s', 's.id', '=', 'v.id_surats')->where('id_surats',$id)->get();
        // $file = $datasurat->file_surat;
        // $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('../public/folder/' . $file);
        // $phpWord->setValue('{Tujuan_', 'tes1');
        // return response()->download('../public/folder/'. $file);
        return view ('user.generate',compact('datasurat','datavalue')); 
        // dd($datavalue);
        
        
    }
    public function download(Request $request, $id)
    {
       
        $datasurat = surat::find($id);
        $datavalue = DB::table('values as v')->join('surat as s', 's.id', '=', 'v.id_surats')->select('v.variable')->where('id_surats',$id)->get();
        $max= DB::table('values as v')->where('id_surats',$id)->count('id_surats');
        $file = $datasurat->file_surat;
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('../public/folder/' . $file);
        // for ($i=0; $i > $max; $i++){
            foreach ($datavalue as $value){
            $phpWord->setValue($value->variable, 'dani');
            // $phpWord->setValue('{lampiran}', 'Dimas');
            };
        // };
        $phpWord->saveAs('../public/folder/new/'. $file);
        return response()->download('../public/folder/new/'. $file);
        
    }
}
