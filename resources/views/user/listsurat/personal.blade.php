<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
@extends('component.master')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light" style="height: 50px; background-color: #FFBE4B;">
        <div class="container-fluid">
        </div>
    </nav>
 
    <div class="container">
        <div class="row">
            <div class="col mb-3">
                 @foreach($datasurat as $surat)
                <div class="media surat mt-5" id="list-surat1" style="background-color: white; border: 1px solid #D5D3D3; box-sizing: border-box; border-radius: 4px; border-left-width:10px; border-left-color: #7A7A7A;">
                    <div class="media-body ml-5" id="deskrip-surat1" onclick="listIcon('icon-display', 1);">
                        <h5 class="card-title" style="font-weight: normal; font-size: 18px;">Surat {{$surat->SuratKerjasama}}</h5>
                        <span style="font-weight: 300; font-size: 14px;">Last edited {{$surat->updated_at}}1 - <a href="#" target="_blank" style="color: #FFBE4B;">{{$surat->Pengirim}}</a></span>
                        <p class="card-text mt-2">{{substr($surat->Isi, 0, 100) }}...</p>
                    </div>
                    <div class="media-body ml-5" id="del-surat1" style="display: none;">
                        <p class="card-text" style="padding: 4rem; text-align: center; color: #FF0000; font-weight: 500; font-size: 18px;">Surat Perjanjian Kerjasama has been Deleted <i class="fa fa-trash-o"></i></p>
                    </div>
                    <div class="icon-surat" style="width: 25rem;">
                        <div id="icon-display1" class="icon-display" style="display: none;">
                            <a href="{{route('listsurat.show',$surat->id)}}">
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5D9FF; border-radius: 4px;"
                                >
                                <i class="fa fa-eye"></i>
                            </button></a>
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #FFE5B6; border-radius: 4px;"
                                >
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5FFEA; border-radius: 4px;"
                                >
                                <i class="fa fa-print"></i>
                            </button>
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                onclick="deleteList(1);"
                                id="" style="background: #FDC0C0; border-radius: 4px;"
                                >
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
            
            <div class="col-3">
                @include('component.sidebar')
            </div>
        </div>
    </div>
@endsection