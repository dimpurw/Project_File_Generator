<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('css/bootstrap2.css')}}" rel="stylesheet" type="text/css">
@extends('component.master')
@section('content')
<style type="text/css">
.card:hover{
     transform: translateX(50px);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
  
} 
ul.nav-item li.nav-link:hover{
    color: #FFFFFF;
    transform: translateX(-18px);

}
.nav-item.active:hover{
    color: #FFFFFF;
    transform: unset;
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
<div class="container-fluid">
    <div class="row ml-5 mt-5">
        <div class="col-md-8 mb-3" #style="background-color: red;height: 200px">
       <!--  Konten surat -->
            <div class="tab-content">
                <!-- semua surat -->    
                 @if (isset($datasurat) && count($datasurat) > 0)
                  @foreach($datasurat as $surat)
                 <?php 
                    $jenis = $surat->id_category;
                  ?>
                <div role="tabpanel" class="tab-pane active pb-4" id="semua" aria-labelledby="semua-tab" aria-expanded="true" >
                    <div class="card row" style="height: 117px" onclick="mydisplay(document.getElementById('icon-display'+{{$surat->id}}))">
                        <div class="card-body pb-0 col-7"  @if($jenis== 1) style="border-left: 16px solid #7A7A7A!important;text-align: justify;" @endif style="border-left: 16px solid #9FFFBE!important;text-align: justify;">
                            <div>
                             <h4 style="font-weight: normal; font-size: 18px;">{{$surat->file_surat}}</h4>
                             <span style="font-weight: 300; font-size: 14px;">Last edited {{$surat->updated_at}} - <a href="#" target="_blank" style="color: #FFBE4B;">{{$surat->Pengirim}}</a></span>
                             <p ></p></div>
                        </div>

                        <div class="card-body col-md-6 icon-display"  id="icon-display{{ $surat->id }}" style="background-color: #E5E5E5;left: 45;border:none;display: none;">
                             <div class="icon-display" >
                            <a href="{{route('listsurat.show',$surat->id)}}"><button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5D9FF; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);"
                                >
                                <i class="fa fa-eye"></i>
                            </button></a>
                            <a href="{{route('listsurat.edit',$surat->id)}}">
                            <button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #FFE5B6; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);"
                                >
                                <i class="fa fa-pencil"></i>
                            </button></a>
                           <a href=""><button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                id="" style="background: #C5FFEA; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);"
                                >
                                <i class="fa fa-print"></i>
                            </button></a>
                            <a href=""><button
                                type="button"
                                class="btn btn-floating btn-lg mt-5 mr-2"
                                onclick="deleteList(1);"
                                id="" style="background: #FDC0C0; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);"
                                >
                                <i class="fa fa-trash-o"></i>
                            </button></a>
                        </div>
                        </div>
                    </div>
                </div>                         
                 @endforeach
                 @else()
                 <div role="tabpanel" class="tab-pane active pb-4" id="semua" aria-labelledby="semua-tab" aria-expanded="true" >Tidak ada Data </div>
                 @endif

                 <!-- perusahaan -->
                  
                 
                  
                 
                <!-- internal -->
                
               
  
                 
            </div>
        </div>
        <!-- tombol modal tambah surat -->
        <div class="col-md-1" >
           <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #4D6EFF; color: white;"> <i class="fa fa-plus-circle fa-2x" style="align-items: center;">
            </i>
        </div>
        <!-- nav tab -->
            <div class="col-md-3 pr-0">
            <ul class="nav flex-column nav-item me-3 float-right" id="myTab" role="tablist" style="border-radius:0px;width: 191px">
            <li class="nav-item" role="presentation">
            <a href="#semua" class="nav-link active" id="semua-tab" data-toggle="tab"  role="tab" aria-controls="semua" aria-selected="true" style="border-radius:0px">All</a></li>
            @foreach($folder as $folders)
            <li class="nav-item" role="presentation">
            <a href="#{{$folders->jenis}}" class="nav-link" id="{{$folders->jenis}}-tab" data-toggle="tab" role="tab" aria-controls="{{$folders->jenis}}" aria-selected="false" style="border-radius:0px">
            {{$folders->jenis}}</a></li>
            @endforeach
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
                     <button type="button" class="btn kotak kanan" data-toggle="modal" data-target="#unggahdokumen">
                    <p style="font-size: 18px;color: #484848">Unggah Dokumen</p>
                     <img src="{{asset('../asset/img/unggah.png')}}" class="center"style="width: 28px;">
                     </button>
                </div>
                <div class="col-sm-6"  style="left: 10px;">
                     <button type="button" class="btn kotak kiri"  data-toggle="modal" data-target="#buatfolder">
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

<!-- modal didalam modal upload -->
<div class="modal fade baru" id="unggahdokumen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body center" style="width: 757px;height: 446px;align-content: center;align-items: center;">
        <div class="container-fluid align-self-center">
            <div class="row ml-2 " style="margin-top: 100px;justify-content: center;">
                <div class="col-9 text-left"><h4 style="font-weight: 500;
font-size: 32px;
line-height: 39px;">Unggah File</h4></div>
                <div class="col-9 text-left"><p style="font-weight: 300;
font-size: 18px;
line-height: 22px">Pilih file dan folder untuk diunggah ke sistem</p></div>
                 <form class="col-9 text-center" enctype="multipart/form-data" method="post" action="{{route('listsurat.store')}}">
  @csrf
                 <div class="form-group row text-left">
    <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Surat</label>
    <div class="col-sm-8">
       
      <select class="form-control" id="JenisSurat" name="id_category" value="">
         @foreach($folder as $folders)
    <option value="{{$folders->id}}">{{$folders->jenis}}</option>
        @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row text-left">
    <label for="inputPassword" class="col-sm-3 col-form-label">Pilih File</label>
    <div class="col-sm-8">
      <input type="file" class="form-control" id="filesurat" name="file_surat" placeholder="comp/desktop/1111.docx">
    </div>
  </div>
  <div class="col-sm-12 text-right">
  <button type="submit" type="submit" class="btn btn-primary mb-2" style="width: 50%">Upload</button></div>
</form>
            </div>
      </div>
        </div>
    </div>
  </div>
</div>

<!-- modal buat folder -->
<div class="modal fade baru" id="buatfolder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body center" style="width: 757px;height: 446px;align-content: center;align-items: center;">
        <div class="container-fluid align-self-center">
            <div class="row ml-2 " style="margin-top: 100px;justify-content: center;">
                <div class="col-9 text-left"><h4 style="font-weight: 500;
font-size: 32px;
line-height: 39px;">Folder Baru</h4></div>
                <div class="col-9 text-left"><p style="font-weight: 300;
font-size: 18px;
line-height: 22px">Buat Folder Baru</p></div>
                 <form class="col-9 text-center" method="POST" action="{{url('/tambahfolder')}}">
                    @csrf
  <div class="form-group row text-left">
    <p class="col-4">Nama Folder</p>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="filesurat" name="jenis" placeholder="comp/desktop/1111.docx">
    </div>
  </div>
  <div class="col-sm-12 text-right">
  <button type="submit" type="submit" class="btn btn-primary mb-2" style="width: 50%">Upload</button></div>
</form>
            </div>
      </div>
        </div>
    </div>
  </div>
</div>
@endsection
<!-- @foreach($datasurat as $surat) -->
<script>
$('#myTab a').click(function (e) {
     e.preventDefault();
    $(this).tab('show');

     //removing active class from other selected/default tab
   
});
function mydisplay(x){
  //var x = document.getElementById("icon-display{{$surat->id}}");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<!-- @endforeach -->