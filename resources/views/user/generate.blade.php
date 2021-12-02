@extends('component.master')
@section('content')
<style>
html, body{
  height: 100%
}
.bg-warning{
	height: 64px;
}
.container-fluid{
	height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
		<div class="d-flex justify-content-start">
            <div class="back-button">
                <a href="#"><img type="back" name="back" src="{{asset('asset/img/Back.png')}}"/></a>
            </div>
		</div>
</nav>
<!-- Navbar -->
<div class="container-fluid">
    <form>
        <div class="form-group">
            <div class="row justify-content-center mb-3">
                <div class="col-md-5 mx-auto">
                    <label for="tempat">Tempat Penulisan Surat</label>
                    <input type="tempat" class="form-control" id="tempat">
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="tujuan">Tujuan Surat</label>
                    <input type="tujuan" class="form-control" id="tujuan">
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-5 mx-auto">
                    <label for="tempat">Tempat Penulisan Surat</label>
                    <input type="tempat" class="form-control" id="tempat">
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="tujuan">Tujuan Surat</label>
                    <input type="tujuan" class="form-control" id="tujuan">
                </div>
            </div>
            <hr>
            <div class="row justify-content-center mb-3">
                <div class="col-md-5 mx-auto">
                    <label for="tempat">Tempat Penulisan Surat</label>
                    <input type="tempat" class="form-control" id="tempat">
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="tujuan">Tujuan Surat</label>
                    <input type="tujuan" class="form-control" id="tujuan">
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-5 mx-auto">
                    <label for="tempat">Tempat Penulisan Surat</label>
                    <input type="tempat" class="form-control" id="tempat">
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="tujuan">Tujuan Surat</label>
                    <input type="tujuan" class="form-control" id="tujuan">
                </div>
            </div>
            <hr>
            <div class="row justify-content-center mb-3">
                <div class="col-md-5 mx-auto">
                    <label for="tempat">Tempat Penulisan Surat</label>
                    <input type="tempat" class="form-control" id="tempat">
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="tujuan">Tujuan Surat</label>
                    <input type="tujuan" class="form-control" id="tujuan">
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-5 mx-auto">
                    <label for="tempat">Tempat Penulisan Surat</label>
                    <input type="tempat" class="form-control" id="tempat">
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="tujuan">Tujuan Surat</label>
                    <input type="tujuan" class="form-control" id="tujuan">
                </div>
            </div>
            <hr>
        </div>
        <div class="row justify-content-end">
            <div class="button-generate">
                <input type="image" name="submit" src="{{asset('asset/img/Generate.png')}}">
            </div>   
        </div>
    </form>
</div>
@endsection