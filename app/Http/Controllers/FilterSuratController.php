<?php

namespace App\Http\Controllers;
use App\Models\surat;
use App\Models\category;
use Illuminate\Http\Request;

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
}
