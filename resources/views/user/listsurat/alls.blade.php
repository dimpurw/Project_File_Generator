<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('css/bootstrap2.css')}}" rel="stylesheet" type="text/css">
@extends('component.master')
@section('content')
<style type="text/css">
    
.nav .nav-link:hover{
    color: #FFFFFF;

}

.nav-item.active{
    background-color: #FF8B8B;
    border-color: #FF8B8B;
}

.nav-link{
    color: #868686;
}
.nav-link.active{
    background-color: #FF8B8B;
    color: #FFFFFF;
}

.nav-item{
    background-color: #D6D6D6;
    text-align: right;
    border: 1px solid #E5E5E5;

}
 .kotak {
    background: #FFFFFF;
border: 1px solid #B7B7B7;
      width:197px;
    height:158px;
   justify-content: center;
align-items: center;
padding: 24px 16px;
    }  
.kotak a img{
    width: 46.75px;
height: 44px;
}
.col-sm-6 .kanan:hover{
    background: #5776FF;
    color: #FFFFFF
}
.col-sm-6 .kiri:hover{
    background: yellow;
    : #FFFFFF
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-warning" style="background-color: #FFBE4B;height: 64px">
    <a class="navbar-brand" href="#" ><img src="{{asset('../asset/img/back.png')}}" style="width: 24px"></a>
</nav>
<div class="container-fluid">
    <div class="row ml-5 mt-5">
        <div class="col-md-8 mb-3" #style="background-color: red;height: 200px">
       <!--  Konten surat -->
            <div class="tab-content">
                <!-- semua surat -->
                 
                 @if(isset($datasurat) && count($datasurat) > 0)
                 @foreach($datasurat as $surat)
                 @if($surat->JenisSurat == 'Perusahaan')
                <div class="tab-pane active" id="semua" role="tabpanel" aria-labelledby="semua-tab" aria-expanded="true" style="border-radius: 4px;">
                  @else
                  <div class="tab-pane active" id="semua" role="tabpanel" aria-labelledby="semua-tab" aria-expanded="true" style="border-radius: 4px;">
                  @endif
                    <div class="card mb-4">
                        <div class="card-body pb-0 col-7" style="border-left: 16px solid #7A7A7A!important;text-align: justify;">
                            <h4 class="card-title" style="font-weight: normal; font-size: 18px;">Surat {{$surat->JenisSurat}}</h4>
                             <span style="font-weight: 300; font-size: 14px;">Last edited {{$surat->updated_at}} - <a href="#" target="_blank" style="color: #FFBE4B;">{{$surat->Pengirim}}</a></span>
                             <p >{{substr($surat->Isi, 0, 100) }}...</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif        
                 <!-- perusahaan -->
                 
                 @if($surat->JenisSurat == 'Perusahaan')
                 @foreach($datasurat as $surat)
                <div class="tab-pane" id="perusahaan" role="tabpanel" aria-labelledby="perusahaan-tab" aria-expanded="false">
                    <div class="card">
                        <div class="card-body pb-0 col-7" style="border-left: 16px solid #7A7A7A!important;text-align: justify;">
                            <h4 class="card-title" style="font-weight: normal; font-size: 18px;">Card 2</h4>
                             <span style="font-weight: 300; font-size: 14px;">Last edited Jun 8, 2021 - <a href="#" target="_blank" style="color: #FFBE4B;">Anggraeni Hayyu</a></span>
                             <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @else()
                <div class="tab-pane" id="perusahaan" role="tabpanel" aria-labelledby="perusahaan-tab" aria-expanded="false">
                    <div class="card">
                      Belum ada data
                    </div>
                </div>
                @endif
                <!-- internal -->
                @if($surat->JenisSurat == 'Internal')
                 @foreach($datasurat as $surat)
                 
                <div class="tab-pane" id="internal" role="tabpanel" aria-labelledby="internal-tab" aria-expanded="false">
                    <div class="card">
                        <div class="card-body pb-0 col-7" style="border-left: 16px solid #9FFFBE!important;text-align: justify;">
                            <h4 class="card-title" style="font-weight: normal; font-size: 18px;">Card 3</h4>
                             <span style="font-weight: 300; font-size: 14px;">Last edited Jun 8, 2021 - <a href="#" target="_blank" style="color: #FFBE4B;">Anggraeni Hayyu</a></span>
                             <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                        </div>
                    </div>
                </div>
                @endforeach
                 @else()
                <div class="tab-pane" id="internal" role="tabpanel" aria-labelledby="internal-tab" aria-expanded="false">
                    <div class="card">
                      Belum ada data
                    </div>
                </div>
                @endif
            </div>
        </div>
        <!-- modal tambah surat -->
        <div class="col-md-1" >
           <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #4D6EFF; color: white;"> <i class="fa fa-plus-circle fa-2x" style="align-items: center;">
            </i>
        </div>
            <div class="col-md-3 pr-0">
            <ul class="nav flex-column nav-item me-3 float-right" id="myTab" role="tablist" aria-orientation="vertical" style="border-radius:0px;width: 191px">
            <li class="nav-item" role="presentation">
            <a href="#semua" class="nav-link active" id="semua-tab" data-toggle="tab" data-target="#semua"  role="tab" aria-controls="semua" aria-selected="true" style="border-radius:0px">All</a></li>
            <li class="nav-item" role="presentation">
            <a href="#perusahaan" class="nav-link" id="perusahaan-tab" data-toggle="tab" data-target="#perusahaan"  role="tab" aria-controls="perusahaan" aria-selected="false" style="border-radius:0px">
            Perusahaan</a></li>

            <li class="nav-item" role="presentation">
            <a href="#internal" class="nav-link" id="internal-tab" data-toggle="tab" data-target="#internal"  role="tab" aria-controls="internal" aria-selected="false" style="border-radius:0px">Internal</a>
            </li>
            </ul>
            </div>
    </div>
</div>
<!-- modalnya -->
<div class="modal fade baru" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body center" style="width: 757px;height: 446px;align-content: center;align-items: center;">
        <div class="container-fluid align-self-center">
            <div class="row ml-2" style="margin-top: 130px;text-align: center;">
                <div class="col-sm-6" style="left: 10px;">
                     <button type="button" class="btn kotak kanan">
                    <p style="font-size: 18px;color: #484848">Unggah Dokumen</p>
                     <img src="{{asset('../asset/img/unggah.png')}}" class="center"style="width: 28px;">
                     </button>
                </div>
                <div class="col-sm-6"  style="left: 10px;">
                     <button type="button" class="btn kotak kiri">
                        <p style="font-size: 18px;color: #484848">Folder Baru</p>
                       <img src="{{asset('../asset/img/folder.png')}}" class="center"style="width: 28px;">
                     </button>
                </div>
            </div>
      </div>
        </div>
    </div>
  </div>
</div>
@endsection
<script>
$('#myTab a').click(function (e) {
     e.preventDefault();
    $(this).tab('show');

     //removing active class from other selected/default tab
   
});
</script>
