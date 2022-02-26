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
            <div class="group1" style="display: block; padding-top: 75px;"  id="dynamic_field" >
                <div class="row justify-content-md-center">
                    @foreach ($datavalue as $value)
                    <div class="col-md-auto pr-6">
                            <label for="tempat">{{$value->variable}}</label>
                            <input type="text" class="form-control" id="isi" name="{{$value->variable}}" placeholder='{{$value->variable}}'>
                            <!--  @if($errors->has('generate'))
                    <span class="alert-danger" style="font-size: 12px">{{($errors->first('generate'))}}</span>
                  @endif -->
                    </div>
                    @endforeach
                </div>
                <hr>
            </div>
            <!-- <div class="group2" style="display: none;">
                <div class="row justify-content-md-center">
                    @foreach ($datavalue as $value)
                    <div class="col-md-auto pr-6">
                            <label for="tempat">{{$value->variable}}</label>
                            <input type="text" class="form-control" id="isi" name="{{$value->variable}}[1]" placeholder='{{$value->variable}}'>
                    </div>
                    @endforeach
                </div>
                <hr>
            </div>  
            <div class="group3" style="display: none;">
                <div class="row justify-content-md-center">
                    @foreach ($datavalue as $value)
                    <div class="col-md-auto pr-6">
                            <label for="tempat">{{$value->variable}}</label>
                            <input type="text" class="form-control" id="isi" name="{{$value->variable}}[2]" placeholder='{{$value->variable}}'>
                    </div>
                    @endforeach
                </div>
                <hr>
            </div> -->
        </div>
        <div class="row justify-content-end">
            <!-- <div class="mx-5 my-auto">
                <a href="#" id="remove" class="btn"><img src="{{asset('asset/img/minus.png')}}" alt=""></a>
                <a href="#"  id="add"><img src="{{asset('asset/img/plus.png')}}" alt=""></a>
            </div> -->
            <div class="button-generate">
                <button class="btn-lg" type="submit" name="submit"><h3>GENERATE</h3></button>
            </div>   
        </div>
    </form>
</div>
@endsection
@section('page-script')
<script>
      var i=0;  

      $('#add').click(function(){  
           ++i;  
           $('#dynamic_field').append('<div id="row'+i+'" class="dynamic-added"><div class="row justify-content-md-center" > @foreach ($datavalue as $value) <div class="col-md-auto pr-6"><label for="tempat">{{$value->variable}}</label><input type="text" class="form-control" id="isi" name="{{$value->variable}}['+i+']" placeholder="{{$value->variable}}"></div>@endforeach</div><button type="button" name="remove" id="'+i+'" class="btn btn-primary-outline" style="background-color: #E5E5E5;"><img src="{{asset('asset/img/minus.png')}}" alt=""></button><hr></div>');  
      });  


       $(document).on('click', '.btn', function(){
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
</script>
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