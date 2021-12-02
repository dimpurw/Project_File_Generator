<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
            <div class="group1" style="display: block" id="1">
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
            <div class="group2" style="display: none" id="2">
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
            <div class="group3" style="display: none" id="3">
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
            <!-- <a href="#" id="toPage2" style="display: block">Next</a>
            <a href="#" id="toPage1" style="display: none">Previous</a>
            <a href="#" id="toPage3" style="display: none">Next</a>
            <a href="#" id="toPage2-2" style="display: none">Previous</a> -->
        <div class="row justify-content-end">
            <div class="button-generate">
                <input type="image" name="submit" src="{{asset('asset/img/Generate.png')}}">
            </div>   
        </div>
    </form>
</div>
<!-- <script>
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
                $('#toPage3').hide();
            });
            
            $('#toPage2-2').click(function() {
                $('.group1').show();
                $('.group2').show();
                $('.group3').hide();
                $('#toPage2').hide();
                $('#toPage2-2').hide();
                $('#toPage1').show();
                $('#toPage3').show();
            });

            $('#toPage3').click(function() {
                $('.group1').show();
                $('.group2').show();
                $('.group3').show();
                $('#toPage2-2').show();
                $('#toPage2').hide();
                $('#toPage1').hide();
                $('#toPage3').hide();
            });
</script> -->
@endsection