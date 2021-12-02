@extends('component.master')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light" style="height: 50px; background-color: #FFBE4B;">
        <div class="container-fluid">
        </div>
    </nav>
 
    <div class="container">
        <div class="row">
            <div class="col mb-3">
                <div class="media surat mt-5" id="listSurat" style="background-color: white; border: 1px solid #D5D3D3; box-sizing: border-box; border-radius: 4px; border-left-width:10px; border-left-color: #9FFFBE;">
                    <div class="media-body ml-5" id="deskripSurat" onclick="listIcon()">
                        <h5 class="card-title" style="font-weight: normal; font-size: 18px;">Surat Perjanjian Kerjasama</h5>
                        <span style="font-weight: 300; font-size: 14px;">Last edited Jun 8, 2021 - <a href="#" target="_blank" style="color: #FFBE4B;">Anggraeni Hayyu</a></span>
                        <p class="card-text mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    </div>
                    <div class="media-body ml-5" id="delListSurat" style="display: none;">
                        <p class="card-text" style="padding: 4rem; text-align: center; color: #FF0000; font-weight: 500; font-size: 18px;">Surat Perjanjian Kerjasama has been Deleted <i class="fa fa-trash-o"></i></p>
                    </div>
                    <div class="icon-surat" style="width: 25rem;">
                        <div id="icon-display" class="icon-display" style="display: none;">
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5D9FF; border-radius: 4px;"
                                >
                                <i class="fa fa-eye"></i>
                            </button>
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
                                onclick="deleteList()"
                                id="" style="background: #FDC0C0; border-radius: 4px;"
                                >
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="media surat" id="listSurat" style="background-color: white; border: 1px solid #D5D3D3; box-sizing: border-box; border-radius: 4px; border-left-width:10px; border-left-color: #9FFFBE;">
                    <div class="media-body ml-5" id="deskripSurat" onclick="listIcon()">
                        <h5 class="card-title" style="font-weight: normal; font-size: 18px;">Surat Kunjungan Kerja</h5>
                        <span style="font-weight: 300; font-size: 14px;">Last edited Jun 8, 2021 - <a href="#" target="_blank" style="color: #FFBE4B;">Anggraeni Hayyu</a></span>
                        <p class="card-text mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    </div>
                    <div class="media-body ml-5" id="delListSurat" style="display: none;">
                        <p class="card-text" style="padding: 4rem; text-align: center; color: #FF0000; font-weight: 300; font-size: 18px;">Surat Perjanjian Kerjasama has been Deleted <i class="fa fa-trash-o"></i></p>
                    </div>
                    <div class="icon-surat" style="width: 25rem;">
                        <div id="icon-display" class="icon-display" style="display: none;">
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5D9FF; border-radius: 4px;"
                                >
                                <i class="fa fa-eye"></i>
                            </button>
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
                                onclick="deleteList()"
                                id="" style="background: #FDC0C0; border-radius: 4px;"
                                >
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="media surat" id="listSurat" style="background-color: white; border: 1px solid #D5D3D3; box-sizing: border-box; border-radius: 4px; border-left-width:10px; border-left-color: #9FFFBE;">
                    <div class="media-body ml-5" id="deskripSurat" onclick="listIcon()">
                        <h5 class="card-title" style="font-weight: normal; font-size: 18px;">Surat Undangan</h5>
                        <span style="font-weight: 300; font-size: 14px;">Last edited Jun 8, 2021 - <a href="#" target="_blank" style="color: #FFBE4B;">Anggraeni Hayyu</a></span>
                        <p class="card-text mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    </div>
                    <div class="media-body ml-5" id="delListSurat" style="display: none;">
                        <p class="card-text" style="padding: 4rem; text-align: center; color: #FF0000; font-weight: 300; font-size: 18px;">Surat Perjanjian Kerjasama has been Deleted <i class="fa fa-trash-o"></i></p>
                    </div>
                    <div class="icon-surat" style="width: 25rem;">
                        <div id="icon-display" class="icon-display" style="display: none;">
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5D9FF; border-radius: 4px;"
                                >
                                <i class="fa fa-eye"></i>
                            </button>
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
                                onclick="deleteList()"
                                id="" style="background: #FDC0C0; border-radius: 4px;"
                                >
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="media surat" id="listSurat" style="background-color: white; border: 1px solid #D5D3D3; box-sizing: border-box; border-radius: 4px; border-left-width:10px; border-left-color: #9FFFBE;">
                    <div class="media-body ml-5" id="deskripSurat" onclick="listIcon()">
                        <h5 class="card-title" style="font-weight: normal; font-size: 18px;">Surat Pemberitahuan</h5>
                        <span style="font-weight: 300; font-size: 14px;">Last edited Jun 8, 2021 - <a href="#" target="_blank" style="color: #FFBE4B;">Anggraeni Hayyu</a></span>
                        <p class="card-text mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    </div>
                    <div class="media-body ml-5" id="delListSurat" style="display: none;">
                        <p class="card-text" style="padding: 4rem; text-align: center; color: #FF0000; font-weight: 300; font-size: 18px;">Surat Perjanjian Kerjasama has been Deleted <i class="fa fa-trash-o"></i></p>
                    </div>
                    <div class="icon-surat" style="width: 25rem;">
                        <div id="icon-display" class="icon-display" style="display: none;">
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5D9FF; border-radius: 4px;"
                                >
                                <i class="fa fa-eye"></i>
                            </button>
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
                                onclick="deleteList()"
                                id="" style="background: #FDC0C0; border-radius: 4px;"
                                >
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="media surat" id="listSurat" style="background-color: white; border: 1px solid #D5D3D3; box-sizing: border-box; border-radius: 4px; border-left-width:10px; border-left-color: #9FFFBE;">
                    <div class="media-body ml-5" id="deskripSurat" onclick="listIcon()">
                        <h5 class="card-title" style="font-weight: normal; font-size: 18px;">Surat Pemberitahuan</h5>
                        <span style="font-weight: 300; font-size: 14px;">Last edited Jun 8, 2021 - <a href="#" target="_blank" style="color: #FFBE4B;">Anggraeni Hayyu</a></span>
                        <p class="card-text mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    </div>
                    <div class="media-body ml-5" id="delListSurat" style="display: none;">
                        <p class="card-text" style="padding: 4rem; text-align: center; color: #FF0000; font-weight: 300; font-size: 18px;">Surat Perjanjian Kerjasama has been Deleted <i class="fa fa-trash-o"></i></p>
                    </div>
                    <div class="icon-surat" style="width: 25rem;">
                        <div id="icon-display" class="icon-display" style="display: none;">
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5D9FF; border-radius: 4px;"
                                >
                                <i class="fa fa-eye"></i>
                            </button>
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
                                onclick="deleteList()"
                                id="" style="background: #FDC0C0; border-radius: 4px;"
                                >
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                @include('component.sidebar')
            </div>
        </div>
    </div>
@endsection