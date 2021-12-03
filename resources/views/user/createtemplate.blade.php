@extends('component.master')
@section('content')
<style>
.bg-warning{
	/*width: 1440px;*/
	height: 96px;
}
.container-fluid{
	width: 80%;
}
.card{
	height: 100%;
	background: #FFFFFF;
border: 1px solid #C4C4C4;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
</style>
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	<div class="d-flex justify-content-around">

		<div class="d-flex justify-content-start">
			<div class="p-2 bd-highlight">Back
			</div>
		</div>

		<div class="d-flex justify-content-center">
			<div class="p-2 bd-highlight">
				<select id="select_font" onchange="changeFont(this);">
					<option value="10">10</option>
					<option value="11" selected>11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select>
			</div>
			<div class="p-2 bd-highlight">
				<select id="select_font" onchange="changeFont(this);">
					<option value="Bold">Bold</option>
					<option value="Regular" selected>Regular</option>
					<option value="Italic">12</option>
				</select>
			</div>
		</div>

		<div class="d-flex justify-content-center">
			<div class="p-2 bd-highlight">
				<select id="select_font" onchange="changeFont(this);">
					<option value="10">10</option>
					<option value="11" selected>11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select>
			</div>
			<div class="p-2 bd-highlight">
				<select id="select_font" onchange="changeFont(this);">
					<option value="Bold">Bold</option>
					<option value="Regular" selected>Regular</option>
					<option value="Italic">12</option>
				</select>
			</div>
		</div>

	</div>
</nav>
<!-- Navbar -->

<div class="container-fluid">
  <div class="row">
    <div class="col-5">
			<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
<<<<<<< HEAD
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
=======
    <label for="exampleInputname">Tanggal Penulisan Surat</label>
    <input type="date" class="form-control" id="tanggalps" name="tanggalps" placeholder="" oninput="tanggallps()">
  </div>
  <div class="form-group">
    <label for="exampleInputname">Tujuan Surat</label>
    <input type="text" class="form-control" id="tujuanps" name="tujuanps" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleInputname">Alamat Tujuan</label>
    <input type="text" class="form-control" id="alamatps" name="alamatps" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleInputname">Salam Pembuka</label>
    <input type="text" class="form-control" id="salampembuka" name="salampembuka" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleInputname">Isi Surat</label>
    <input type="text" class="form-control" id="isisurat" name="isisurat" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleInputname">Salam Penutupan</label>
    <input type="text" class="form-control" id="salampenutup" name="salampenutup" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputname">Pengirim Surat</label>
    <input type="text" class="form-control" id="pengirimps" name="pengirimps" placeholder="">
  </div>
   <div class="form-group">
    <label >Tanda Tangan</label>
    <select class="form-control" id="tandatangan" name="tandatangan" value="" oninput="tandatt()" >
    <option value="Ada">Ada</option>
      <option value="Tidak Ada">Tidak Ada</option>
    </select>
>>>>>>> master
  </div>

    </div>
    <div class="col-7">
<<<<<<< HEAD
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
				dsadsad
=======
      <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="font-size: 18px">
		<div class="text-right" >
			<p id='response_tempatps'></p>
		</div><br>
		<div class="hr"id='response_tanggalps'>
			<p></p>
		</div>
		<div id='response_tujuanps' style="margin-top: 50px;">
			<p></p>
		</div>
		<div id='response_alamatps'  style="margin-top: 50px;">
			<p></p>
		</div>
		<div id='response_salampembuka' style="margin-top: 50px;">
			<p></p>
		</div>
		<div id='response_isisurat' style="margin-top: 50px;">
			<p></p>
		</div>
		<div id='response_salampenutup' style="margin-top: 50px;">
			<p></p>
		</div>
		<div id='response_pengirimps' style="margin-top: 50px;">
			<p></p>
		</div>
		<div class="text-right" id='response_tandatangan' style="margin-top: 50px;">
			<p></p>
		</div>
>>>>>>> master
			</div>
			<div class="offset-10">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
    </div>
  </div>
</div>

<<<<<<< HEAD

</form>


=======
        <script>
       var tempatps = document.getElementById('tempatps');
       
       var tujuanps = document.getElementById('tujuanps');
       var alamatps = document.getElementById('alamatps');
       var salampenutup = document.getElementById('salampenutup');
       var salampembuka = document.getElementById('salampembuka');
       var isisurat = document.getElementById('isisurat');
       var pengirimps = document.getElementById('pengirimps');
      
	tempatps.onkeyup = function(){
    document.getElementById('response_tempatps').innerHTML = tempatps.value;
	}
	
	tujuanps.onkeyup = function(){
    document.getElementById('response_tujuanps').innerHTML = tujuanps.value;
	}
	alamatps.onkeyup = function(){
    document.getElementById('response_alamatps').innerHTML = alamatps.value;
	}
	salampembuka.onkeyup = function(){
    document.getElementById('response_salampembuka').innerHTML = salampembuka.value;
	}
	salampenutup.onkeyup = function(){
    document.getElementById('response_salampenutup').innerHTML = salampenutup.value;}
    isisurat.onkeyup = function(){
    document.getElementById('response_isisurat').innerHTML = isisurat.value;}
    pengirimps.onkeyup = function(){
    document.getElementById('response_pengirimps').innerHTML = pengirimps.value;}
    function tanggallps() {
  var z = document.getElementById("tanggalps").value;
  document.getElementById("response_tanggalps").innerHTML =  z;
}
 
		function tandatt() {
  var x = document.getElementById("tandatangan").value;
  document.getElementById("response_tandatangan").innerHTML =  x;
}
        </script>
>>>>>>> master



@endsection
