<?php 
// Handle AJAX request (start)
if( isset($_POST['ajax']) && isset($_POST['tempatps']) ){
    echo $_POST['tempatps'];
    exit;
}
// Handle AJAX request (end)
?>
@extends('component.master')
@section('content')
<style>
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
}
<a class="navbar-brand" href="#" ><img src="{{asset('../asset/img/back.png')}}" style="width: 64px"></a>
</style>
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	<a class="navbar-brand" href="#" ><img src="{{asset('../asset/img/back.png')}}" style="width: 64px"></a>
	<div class="container">
		
		<div class="collapse navbar-collapse" id="navcol-1">
			<div class="nav navbar-nav w-100 justify-content-between">
				<div class="nav-item"><p>Text Option</p>
				<select>
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
				<select>
					<option value="Bold">Bold</option>
					<option value="Regular" selected>Regular</option>
					<option value="Italic">12</option>
				</select>

				</div>
				<div class="nav-item"><p>Line Height and Spacing</p>
					<select>
						<option value="16">16</option>
					</select>
					<select>
						<option value="4%">4%</option>
					</select>
				</div>
				<div class="nav-item"><p>Paragraph spacing and Alignment</p>
					<select>
						<option value="auto">Auto</option>
					</select>
					<select>
						<option value="left">Left</option>
					</select>
				</div>
				<div class="nav-item">
					<a class="navbar-brand" href="#" ><img src="{{asset('../asset/img/view.png')}}" style="width: 72px"></a>
					<a class="navbar-brand" href="#" ><img src="{{asset('../asset/img/edit.png')}}" style="width: 28px"></a>
					<a class="navbar-brand" href="#" ><img src="{{asset('../asset/img/delete.png')}}" style="width: 28px"></a>
				</div>
			</div>
		</div>
	</div>
</nav>
<!-- Navbar -->

<div class="container-fluid" style="height: 100%" >
	<form method="post">
  <div class="row">
    <div class="col-5">
  <div class="form-group">
    <label for="exampleInputEmail1">Tempat Penulisan Surat</label>
    <input type="text" class="form-control" id='tempatps' name="tempatps" aria-describedby="later" placeholder="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputname">Tanggal Penulisan Surat</label>
    <input type="date" class="form-control" id="tanggalps" name="tanggalps" placeholder="">
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
    <select class="form-control" id="tandatangan" name="tandatangan" style="height: 100%">
    <option value="Ada">Ada</option>
      <option value="Tidak Ada" selected>Tidak Ada</option>
    </select>
  </div>

    </div>
    <div>
    	
    </div>
    <div class="col-7">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="font-size: 18px">
		<div id='response_tempatps'>
			<p>halo</p>
		</div>
		<div id='response_tanggalps'>
			<p>halo</p>
		</div>
		<div id='response_tujuanps'>
			<p>halo</p>
		</div>
		<div id='response_alamatps'>
			<p>halo</p>
		</div>
		<div id='response_salampembuka'>
			<p>halo</p>
		</div>
		<div id='response_isisurat'>
			<p>halo</p>
		</div>
		<div id='response_salampenutup'>
			<p>halo</p>
		</div>
		<div id='response_pengirimsurat'>
			<p>halo</p>
		</div>
		<div id='response_tandatangan'>
			<p>halo</p>
		</div>
			</div>
	<div class="form-row pull-right">
    <div class="col-custom-1" style="margin-right: 52px;;margin-top: 10.5px;">
      <select class="custom-select" id="tandatangan" name="tandatangan" style="width: 315px;height: 38px" >
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
        $(document).ready(function(){
            $('#tempatps').keyup(function(){
                var name = $('#tempatps').val();

                $.ajax({
                    type: 'post',
                    data: {ajax: 1,name: tempatps},
                    success: function(response){
                        $('#response').text( response);
                    }
                });
            });
        });
        </script>



@endsection
