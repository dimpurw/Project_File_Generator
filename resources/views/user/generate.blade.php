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
                            @if($errors->has('error'))
                                    <span class="alert-danger" style="font-size: 12px">{{($errors->first('error'))}}</span>
                            @endif
                    </div>
                    @endforeach
                </div>
                <hr>
        </div>
        <div class="row justify-content-end">
            <div class="button-generate">
                <button class="btn-lg" type="submit" name="submit"><h3>GENERATE</h3></button>
            </div>   
        </div>
    </form>
</div>
@endsection
