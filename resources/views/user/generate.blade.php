@extends('component.master')
@section('title','Generate')
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
.button-generate button{
    border-radius: 8px;
    width: 233px;
    height: 71px;
    border-radius: 8px;
    background: #FFBE4B;
}
.button-generate h3{
    font-family: Inter;
    font-style: normal;
    font-weight: 600;
    font-size: 32px;
    line-height: 39px;
    color: #FFFFFF;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.16);
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 10px;
}
</style>
<div class="container-fluid">
    <form method="POST" name="add_name" id="add_name" action="{{url('generate/donwload/'.$datasurat->id)}}">
    @csrf
  
        <div class="form-group">
            <div class="group1" style="display: block; padding-top: 50px;">
                <div class="row justify-content-md-center">
                    @foreach ($datavalue as $value)
                    <div class="col-md-auto pr-6">
                        <!-- <div class="align-self-center "> -->
                            <label for="tempat">{{$value->variable}}</label>
                            <input type="text" class="form-control" id="isi" name="{{$value->variable}}" placeholder='{{$value->variable}}'>
                        <!-- </div> -->
                    </div>
                    @endforeach
                    <!-- <div class="col-md-5 mx-auto">
                        <label for="tujuan">Tujuan Surat</label>
                        <input type="text" class="form-control" id="tujuan" name="">
                    </div> -->
                </div>
                <!-- <div class="row justify-content-center mb-3">
                        <div class="col-md-5 mx-auto">
                            <label for="tempat">Tempat Penulisan Surat</label>
                            <input type="text" class="form-control" id="tempat" name="">
                        </div>
                        <div class="col-md-5 mx-auto">
                            <label for="tujuan">Tujuan Surat</label>
                            <input type="text" class="form-control" id="tujuan" name="">
                        </div>
                </div> -->
                <hr>
        </div>
        <div class="row justify-content-end">
            <!-- <div class="mx-5 my-auto">
                <a href="#" id="toPage2" style="display: block"><img src="{{asset('asset/img/plus.png')}}" alt=""></a>
                <a href="#" id="toPage1" style="display: none"><img src="{{asset('asset/img/minus.png')}}" alt=""></a>
                <a href="#" id="toPage3" style="display: none"><img src="{{asset('asset/img/plus.png')}}" alt=""></a>
                <a href="#" id="toPage2-2" style="display: none"><img src="{{asset('asset/img/minus.png')}}" alt=""></a> 
            </div> -->
            <div class="button-generate">
                <button class="btn-lg" type="submit" name="submit"><h3>GENERATE</h3></button>
            </div>   
        </div>
    </form>
</div>
@endsection
<!-- @section('page-script')
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
@endsection -->