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
<div class="container-fluid">
    <form>
        <div class="form-group">
            <div class="group1" style="display: block; padding-top: 50px;">
                <div class="row justify-content-center mb-3 my-auto">
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
            <div class="mx-5">
                <a href="#" id="toPage2" style="display: block"><img src="{{asset('asset/img/plus.png')}}" alt=""></a>
                <a href="#" id="toPage1" style="display: none"><img src="{{asset('asset/img/minus.png')}}" alt=""></a>
                <a href="#" id="toPage3" style="display: none"><img src="{{asset('asset/img/plus.png')}}" alt=""></a>
                <a href="#" id="toPage2-2" style="display: none"><img src="{{asset('asset/img/minus.png')}}" alt=""></a> 
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
</script>
@endsection