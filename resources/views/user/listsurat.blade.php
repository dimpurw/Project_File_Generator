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
         <!-- semua surat -->
         @include('component.semua')
      </div>
    </div>
    <!-- tombol modal tambah surat -->
     @include('component.modal')
    <!-- nav tab -->
   @include('component.sidebar')
  </div>
</div>
@endsection
