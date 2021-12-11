@extends('component.master')
@section('title','List Surat')
@section('content')
<div class="container-fluid">
  <div class="row ml-5 mt-5">
    <div class="col-md-8 mb-3" #style="background-color: red;height: 200px">
    <!--  Konten surat -->
      <div class="tab-content">
        <!-- alert hapus -->
         @include('component.alert')
      
         @include('component.semua')
        <!-- filter surat -->
        @foreach($datasurat as $surat)
          <?php $jenis = $surat->id;?>
        <div role="tabpanel" class="tab-pane pb-4 {{ $surat->id == 0 ? 'active' : '' }}" id="tab{{$surat->id}}" aria-labelledby="{{$surat->id}}-tab" >
          @foreach($surat->categorys as $item)
          <div class="card row" style="height: 117px;margin-top: 20px" onclick="mydisplay(document.getElementById('icon-display'+{{$item->id}}))">
            <div class="card-body pt-2 col-6"  @if($jenis == 1) style="border-left: 16px solid #7A7A7A!important;text-align: justify;" @elseif($jenis == 2) style="border-left: 16px solid #9FFFBE!important;text-align: justify;"  @endif style="border-left: 16px solid #0AD729 !important;text-align: justify;">
                  <h4 style="font-weight: normal; font-size: 18px;">{{substr($item->file_surat,0,35)}}</h4>
                  <span style="font-weight: 300; font-size: 14px;">Last edited {{$item->updated_at}} - {{$item->users->name}}<a href="#" target="_blank" style="color: #FFBE4B;"></a></span>
                  <p >{{substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry', 0, 55) }}...</p>
            </div>
            <div class="card-body col-md-7 icon-display"  id="icon-display{{ $item->id }}" style="background-color: #E5E5E5;left: 45;border:none;display: none;">
              <a href="{{route('listsurat.show',$item->id)}}">
                <button
                  type="button"
                  class="btn btn-floating btn-lg mt-5 mr-2"
                  id="" style="background: #C5D9FF; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);">
                  <i class="fa fa-eye"></i>
                </button>
              </a>
              <a href="{{route('listsurat.edit',$item->id)}}">
                <button
                    type="button"
                    class="btn btn-floating btn-lg mt-5 mr-2"
                    id="" style="background: #FFE5B6; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);">
                    <i class="fa fa-pencil"></i>
                </button>
              </a>
              <a href="{{url('/generate/'.$item->id)}}">
                <button
                  type="button"
                  class="btn btn-floating btn-lg mt-5 mr-2"
                  id="" style="background: #C5FFEA; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);">
                  <i class="fa fa-print"></i>
                </button>
              </a>
              <a href="{{url('/listsurat/delete/'.$item->id)}}">
                <button
                  type="submit"
                  class="btn btn-floating btn-lg mt-5"
                  id="" style="background: #FDC0C0; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);">
                  <i class="fa fa-trash-o"></i>
                </button>
              </a>
            </div>
          </div>
          @endforeach
        </div>
        @endforeach        
      </div>
    </div>

    <!-- tombol modal tambah surat -->
     @include('component.modal')
    <!-- nav tab -->
   @include('component.sidebar')
  </div>
</div>
@endsection
