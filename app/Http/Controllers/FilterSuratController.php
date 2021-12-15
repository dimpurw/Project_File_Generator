<?php

namespace App\Http\Controllers;
use App\Models\surat;
use App\Models\Value;
use App\Models\category;
use Illuminate\Http\Request;
use DB;

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
        
        $messages = [
            'required' => 'Form Input Tidak Boleh Kosong',
        ];

        $this->validate($request,[         
            'error'=>'required',
            ], $messages
        );
        $datasurat = surat::find($id);
        $datavalue = DB::table('values as v')->join('surat as s', 's.id', '=', 'v.id_surats')->where('id_surats',$id)->get();
        return view ('user.generate',compact('datasurat','datavalue')); 
        
        
        
    }
    public function download(Request $request, $id)
    {
       
        $datasurat = surat::find($id);
        $datavalue = DB::table('values as v')->join('surat as s', 's.id', '=', 'v.id_surats')->select('v.variable')->where('id_surats',$id)->get();
        $max= DB::table('values as v')->where('id_surats',$id)->count('id_surats');
        $file = $datasurat->file_surat;
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('../public/folder/' . $file);
        $data = $request->except('_token');
        // dd($data);
        // for ($i=0; $i > $max; $i++){
        //     foreach($data as $isi){
        //         dd($isi);
        //         foreach ($datavalue as $value){
        //             dd($isi,$value->variable);
        //         $phpWord->setValue($value->variable, $isi);
        //         $phpWord->setValue('{lampiran}', 'Dimas');
        //         };
        //     };
        // };
        foreach ($datavalue as $value){
            $phpWord->setValue($value->variable, $request->get($value->variable));
        };
        $phpWord->saveAs('../public/folder/new/'. $file);
        return response()->download('../public/folder/new/'. $file);
        
        
        // $name = $datavalue->first();
        // $namea =$name->variable;
        // var_dump($request->get($namea));
        // var_dump($request->get($namea[0]));
        // $request = $request->except('_token');
        // foreach ($request as $key => $value) {
        //     dd($key, $value);
        // }
        // return $request->get("{Tempat}");
        // $count = count($request->get($namea));
        // dd($request);
        // for ($i=0; $i < $count ; $i++) { 
        //     foreach ($datavalue as $key => $variab) {
        //         $var = $variab->variable;
        //         $varisi = $request->get($var[$i]);
        //         var_dump($var, $varisi);
        //         $phpWord->setValue($var, $request->get($datavalue->var[$i]));
        //     }
        // }
        // $length = count($request->name.'[]');
    }
}
