 <link href="{{asset('css/bootstrap2.css')}}" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"> -->
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

<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	<a class="navbar-brand" href="#" ><img src="{{asset('../asset/img/back.png')}}" style="width: 64px"></a>
	<div class="container">
		
		<div class="collapse navbar-collapse" id="navcol-1">
			<div class="nav navbar-nav w-100 justify-content-between">
				<div class="nav-item"><p>Text Option</p>
					<div class="row col-lg-12">
						<select class="custom-select col-5">
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16" selected>16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select>
				<select class="custom-select col-7">
					<option value="Bold">Bold</option>
					<option value="Regular" selected>Regular</option>
					<option value="Italic">12</option>
				</select>
					</div>
				</div>
				<div class="nav-item"><p>Line Height and Spacing</p>
					<select class="custom-select col-5">
						<option value="16">16</option>
					</select>
					<select class="custom-select col-5">
						<option value="4%">4%</option>
					</select>
				</div>
				<div class="nav-item"><p>Paragraph spacing and Alignment</p>
					<select class="custom-select col-5">
						<option value="auto">Auto</option>
					</select>
					<select class="custom-select col-5">
						<option value="left">Left</option>
					</select>
				</div>
				<div class="nav-item" >
					<div class="d-flex align-items-center" style="padding-top: 23px">
					<a class="box btn" href="#" ><img src="{{asset('../asset/img/view.png')}}" style="width: 28px;"></a>
					<a class="box btn active" href="#" ><img src="{{asset('../asset/img/edit.png')}}" style="width: 28px;"></a>
					<a class="box btn" href="#" ><img src="{{asset('../asset/img/delete.png')}}" style="width: 28px"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>
<!-- Navbar -->

<div class="container-fluid" style="height: 100%" >

    <div class="col-7">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="font-size: 18px">
		<div class="text-right" >
			<p id='response_TempatPenulisan'></p>
		</div><br>
		<div class="hr"id='response_TanggalPenulisan'>
			<p></p>
		</div>
		<div id='response_TujuanPenulisan' style="margin-top: 50px;">
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
	<div class="form-row pull-right">
    <div class="col-custom-1" style="margin-right: 52px;;margin-top: 10.5px;">
      <select class="custom-select" id="jenissurat" name="jenissurat" style="width: 315px;height: 38px" >
      	 <option selected>Folder</option>
    	<option value="Perusahaan">Perusahaan</option>
      <option value="Internal">Internal</option>
       <option value="Personal">Personal</option>
    </select>
    </div>
    <div class="col-custom-2">
      <button type="submit" class="btn-lg btn-primary" >SAVE</button>     
    </div>
	</div>
    </div>
  </div>
  </form>
</div>
  <script>
       var TempatPenulisan = document.getElementById('TempatPenulisan');
       var TujuanPenulisan = document.getElementById('TujuanPenulisan');
       var AlamatTujuan = document.getElementById('AlamatTujuan');
       var salampenutup = document.getElementById('salampenutup');
       var salampembuka = document.getElementById('salampembuka');
       var isi = document.getElementById('isi');
       var Pengirim = document.getElementById('Pengirim');

	TempatPenulisan.onkeyup = function(){
    document.getElementById('response_TempatPenulisan').innerHTML = TempatPenulisan.value;
	}
	
	TujuanPenulisan.onkeyup = function(){
    document.getElementById('response_TujuanPenulisan').innerHTML = TujuanPenulisan.value;
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
