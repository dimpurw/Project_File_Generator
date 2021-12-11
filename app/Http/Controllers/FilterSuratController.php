<?php

namespace App\Http\Controllers;
use App\Models\surat;
use App\Models\category;
use Illuminate\Http\Request;

class FilterSuratController extends Controller
{
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
        return redirect(url('/listsurat'));
    }
    
    public function generate(Request $request, $id)
    {
        $datasurat = surat::find($id);
        $file = $datasurat->file_surat;
        // $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('../public/folder/' . $file);
        // $phpWord->setValue('{Tujuan_', 'tes1');
        // return response()->download('../public/folder/'. $file);
        return view ('user.generate',compact('datasurat')); 
        
        
    }
    public function download(Request $request, $id)
    {
        $datasurat = surat::find($id);
        $file = $datasurat->file_surat;
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('../public/folder/' . $file);
        $phpWord->setValue('{Tujuan_', 'tes1');
        return response()->download('../public/folder/'. $file);
    }
}
