<!-- tombol modal tambah surat -->
<div class="col-md-1" >
    <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #4D6EFF; color: white;"> <i class="fa fa-plus-circle fa-2x" style="align-items: center;">
    </i>
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
            <div class="col-9 text-left"><h4 style="font-weight: 500; font-size: 32px; line-height: 39px;">Unggah File</h4></div>
            <div class="col-9 text-left"><p style="font-weight: 300; font-size: 18px; line-height: 22px">Pilih file dan folder untuk diunggah ke sistem</p></div>
            <form class="col-9 text-center" enctype="multipart/form-data" method="post" action="{{route('listsurat.store')}}">
            @csrf
            <input type="text" class="form-control" id="id_users" name="id_users" value="{{auth()->user()->id}}" hidden>
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
                  <span class="form-text" style="font-size: 12px">format file: docx,doc,docm,dot</span>
                  @if($errors->has('file_surat'))
                    <span class="alert-danger" style="font-size: 12px">{{($errors->first('file_surat'))}}</span>
                  @endif
                </div>
              </div>
              <div class="col-sm-12 text-right">
                <button type="submit" type="submit" class="btn btn-primary mb-2" style="width: 50%">Upload</button>
              </div>
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
            <div class="col-9 text-left"><h4 style="font-weight: 500; font-size: 32px; line-height: 39px;">Folder Baru</h4></div>
            <div class="col-9 text-left"><p style="font-weight: 300; font-size: 18px; line-height: 22px">Buat Folder Baru</p></div>
            <form class="col-9 text-center" method="POST" action="{{url('/tambahfolder')}}">
            @csrf
              <div class="form-group row text-left">
                <p class="col-4">Nama Folder</p>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="filesurat" name="jenis" placeholder="comp/desktop/1111.docx" value="{{old('jenis')}}">
                  @if($errors->has('jenis'))
                    <span class="alert-danger" style="font-size: 12px" style="font-size: 12px">{{($errors->first('jenis'))}}</span>
                  @endif
                </div>
              </div>
              <div class="col-sm-12 text-right">
                <button type="submit" type="submit" class="btn btn-primary mb-2" style="width: 50%">Upload</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$( function() {
    $( "#myTab" ).tabs();
  } );
function mydisplay(x){
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
$(".alert").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});
</script>