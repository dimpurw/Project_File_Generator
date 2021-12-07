@section('title','View')
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
</style>
<div class="container-fluid d-flex justify-content-center" style="height: 100%" >
    <div class="col-7">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="font-size: 18px">
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
    <div class="d-flex justify-content-end mt-5">
      <button type="button" class="btn-lg" style="background-color: #FFBE4B; color: #FFFFFF;" >GENERATE</button>     
    </div>
</div>
@endsection
