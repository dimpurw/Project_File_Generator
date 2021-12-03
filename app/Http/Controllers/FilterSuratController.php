<?php

namespace App\Http\Controllers;
use App\Models\surat;
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
}
