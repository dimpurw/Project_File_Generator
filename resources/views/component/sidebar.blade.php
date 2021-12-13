<div class="col-md-3 pr-0">
  <ul class="nav flex-column nav-item me-3 float-right" id="myTab" role="tablist" style="border-radius:0px;width: 191px">
  <li class="nav-item" role="presentation">
        <a href="{{route('listsurat.index')}}" class="nav-link active" id="0-tab" role="tab" aria-controls="0" aria-selected="true" style="border-radius:0px">All</a></li>
  	@foreach($folder as $folders)
      <li class="nav-item" role="presentation">
        <a href="{{url('/listsurat/folder/'.$folders->id)}}" class="{{ $folders->id == 0 ? 'nav-link active' : 'nav-link' }}" id="{{$folders->id}}-tab"  role="tab" aria-controls="{{$folders->id}}" aria-selected="false" style="border-radius:0px">{{$folders->jenis}}</a>
      </li>
  	@endforeach
  </ul>
</div>