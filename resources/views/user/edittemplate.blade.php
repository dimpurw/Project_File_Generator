 <link href="{{asset('css/bootstrap2.css')}}" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
	<form method="POST" action="{{ route('listsurat.store') }}">  
		<div class="row">
			<div class="col-5">
				<h2>Value Data File</h2>
				<div class="form-inline-block">
					<div class="form-group" id="dynamic_field">
						<table>	
							<tr>
								<td><input type="text" name="name[]" placeholder="Tambah Value" class="form-control" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-primary-outline"><img src="{{asset('asset/img/plus_circle.png')}}"></button></td>
							</tr>
						</table>
					</div>
				</div> 
			</div>
			<div class="col-7">
				<div class="card shadow-lg p-3 mb-5 bg-white rounded" style="font-size: 18px">
					@include('component.show')
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
				<div class="col-custom-2">
					<button type="submit" class="btn-lg btn-warning float-right" style="color: white;">Simpan</button>   
				</div>
			</div>
		</div>
  	</form>
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
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Masukkan Value" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-primary-outline"><img src="{{asset('asset/img/minus_circle.png')}}" alt=""></button></td></tr>');  
      });  


      $(document).on('click', '.btn', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
    });  
</script>
@endsection
