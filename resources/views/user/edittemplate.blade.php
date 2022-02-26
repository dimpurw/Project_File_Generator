@section('title','Edit')
@extends('component.master')
@section('content')
<style>
.container{
	color: #7A7A7A;
}
.bg-warning{
	/*width: 1440px;*/
	height: 96px;
}
.container-fluid{
	width: 80%;
	margin-top: 80px;	
}
.card{
	height: 100%;
	background: #FFFFFF;
	border: 1px solid #C4C4C4;
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.box{
	 width: 50px;
	 height: 50px;
	 padding-top: 10px;
	 margin-right: 10px;
}
.active{
	background-color: #FFE5B6;
}
.btn-primary-outline {
  background-color: #E5E5E5;
  border-color: #E5E5E5;
}
</style>
<div class="container-fluid" style="height: 100%">
	<form method="POST" action="{{ route('tambahfile',$datasurat->id) }}">
		@csrf  
		<div class="row">
			<div class="col-5">
				<h2>Value Data File</h2>
				<div class="form-inline-block">
					<div class="form-group">
						<table style="border: none;" id="dynamic_field">	
							<tr>
								<td style="border : none;"><input type="text" name="multiInput[0]" placeholder="Tambah Value" class="form-control" /></td>
								<td style="border : none;"><button type="button" name="add" id="add" class="btn btn-primary-outline"><img src="{{asset('asset/img/plus_circle.png')}}"></button></td>
								<!-- @if($errors->has('value'))
									<span class="alert-danger" style="font-size: 12px">{{($errors->first('value'))}}</span>
								@endif -->
							</tr>
						</table>
						<div class="card mt-5" style="width: 18rem;">
						<div class="card-body">
							<h5 class="card-title">Daftar Variable</h5>
							@foreach($value as $v)
							<p class="card-text">{{$v->variable}}</p>
							@endforeach
						</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="col-7">
				<div class="card shadow-lg p-3 mb-5 bg-white rounded" style="font-size: 18px">
					@include('component.edit')
					<div class="text-right" >
						<p id='response_TempatPenulisan'></p>
					</div><br>
					<div class="hr"id='response_TanggalPenulisan'>
						<p></p>
					</div>
					<div id='response_TujuanSurat' style="margin-top: 50px;">
						<p></p>
					</div>
					<div id='response_AlamatTujuan'  style="margin-top: 50px;">
						<p></p>
					</div>
					<div id='response_salampembuka' style="margin-top: 50px;">
						<p></p>
					</div>
					<div id='response_isi' style="margin-top: 50px;">
						<p></p>
					</div>
					<div id='response_salampenutup' style="margin-top: 50px;">
						<p></p>
					</div>
					<div id='response_Pengirim' style="margin-top: 50px;">
						<p></p>
					</div>
					<div class="text-right" id='response_ttd' style="margin-top: 50px;">
						<p></p>
					</div>
				</div>
				<div class="col-custom-2 float-right">
					<!-- tombol modal tambah surat -->	
           			<button type="button" class="btn btn-floating btn-lg" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #4D6EFF; color: white;">Perbaruhi</button>
					<button type="submit" class="btn-lg btn-warning float-right ml-3" style="color: white;">Simpan</button>   
				</div>
			</div>
		</div>
  	</form>
</div>

<!-- modal didalam modal upload -->
<div class="modal fade baru" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                 <form class="col-9 text-center" enctype="multipart/form-data" method="post" action="{{ route('listsurat.update', $datasurat->id) }}">
				@method('PATCH')
				 @csrf
                 <div class="form-group row text-left">
					<label for="staticEmail" class="col-sm-3 col-form-label">Jenis Surat</label>
					<div class="col-sm-8">
						
						<select class="form-control" id="JenisSurat" name="id_category">
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
			<button type="submit" type="submit" class="btn btn-primary mb-2" style="width: 50%">Upload</button></div>
			</form>
            </div>
      	</div>
        </div>
    </div>
  </div>
</div>

  <script>
       var TempatPenulisan = document.getElementById('TempatPenulisan');
       var TujuanSurat = document.getElementById('TujuanSurat');
       var AlamatTujuan = document.getElementById('AlamatTujuan');
       var salampenutup = document.getElementById('salampenutup');
       var salampembuka = document.getElementById('salampembuka');
       var isi = document.getElementById('isi');
       var Pengirim = document.getElementById('Pengirim');

	TempatPenulisan.onkeyup = function(){
    document.getElementById('response_TempatPenulisan').innerHTML = TempatPenulisan.value;
	}
	
	TujuanSurat.onkeyup = function(){
    document.getElementById('response_TujuanSurat').innerHTML = TujuanSurat.value;
	}

	AlamatTujuan.onkeyup = function(){
    document.getElementById('response_AlamatTujuan').innerHTML = AlamatTujuan.value;
	}

	salampembuka.onkeyup = function(){
    document.getElementById('response_salampembuka').innerHTML = salampembuka.value;
	}

	salampenutup.onkeyup = function(){
    document.getElementById('response_salampenutup').innerHTML = salampenutup.value;}

    isi.onkeyup = function(){
    document.getElementById('response_isi').innerHTML = isi.value;}

    Pengirim.onkeyup = function(){
    document.getElementById('response_Pengirim').innerHTML = Pengirim.value;}

    function tanggallps() {
  	var z = document.getElementById("TanggalPenulisan").value;
 	 document.getElementById("response_TanggalPenulisan").innerHTML =  z;
	}
 
	function tandatt() {
  	var x = document.getElementById("ttd").value;
  	document.getElementById("response_ttd").innerHTML =  x;
	}
  </script>
@endsection
@section('page-script')
<script>
      var i=0;  

      $('#add').click(function(){  
           ++i;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td style="border : none;"><input type="text" name="multiInput['+i+']" placeholder="Masukkan Value" class="form-control name_list" /></td><td style="border : none;"><button type="button" name="remove" id="'+i+'" class="btn btn-primary-outline"><img src="{{asset('asset/img/minus_circle.png')}}" alt=""></button></td></tr>');  
      });  


      $(document).on('click', '.btn', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });

</script>
@endsection
