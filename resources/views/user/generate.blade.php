<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('css/bootstrap2.css')}}" rel="stylesheet" type="text/css">
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
            <div class="group1" style="display: block">
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
            <div class="group2" style="display: none">
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
            <div class="group3" style="display: none">
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
        </div>
        <div class="row justify-content-end">
            <div class="my-auto mx-auto">
                <a href="#" id="toPage1" style="display: none">1</a>
                <a href="#" id="toPage2" style="display: inline-block">2</a>
                <a href="#" id="toPage1-2" style="display: none">1</a>
                <a href="#" id="toPage3" style="display: inline-block">3</a>
                <a href="#" id="toPage2-2" style="display: none">2</a>
            </div>
            <div class="button-generate">
                <input type="image" name="submit" src="{{asset('asset/img/Generate.png')}}">
            </div>   
        </div>
    </form>
</div>
@endsection
@section('page-script')
<script>
            $('#toPage2').click(function() {
                $('.group1').show();
                $('.group2').show();
                $('#toPage2').hide();
                $('#toPage1').show();
                $('#toPage3').show();
            });

            $('#toPage1').click(function() {
                $('.group1').show();
                $('.group2').hide();
                $('#toPage2').show();
                $('#toPage1').hide();
                $('#toPage3').show();
            });
            
            $('#toPage2-2').click(function() {
                $('.group1').show();
                $('.group2').show();
                $('.group3').hide();
                $('#toPage2').hide();
                $('#toPage2-2').hide();
                $('#toPage1-2').hide();
                $('#toPage1').show();
                $('#toPage3').show();
            });

            $('#toPage3').click(function() {
                $('.group1').show();
                $('.group2').show();
                $('.group3').show();
                $('#toPage2-2').show();
                $('#toPage2').hide();
                $('#toPage1-2').show();
                $('#toPage1').hide();
                $('#toPage3').hide();
            });
            
            $('#toPage1-2').click(function() {
                $('.group1').show();
                $('.group2').hide();
                $('.group3').hide();
                $('#toPage2-2').hide();
                $('#toPage1-2').hide();
                $('#toPage2').show();
                $('#toPage1').hide();
                $('#toPage3').show();
            });
</script>
@endsection