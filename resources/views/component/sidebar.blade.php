<a href="{{route('listsurat.create')}}"><button
    type="button"
    class="btn btn-floating btn-lg"
    id="btn-back-to-top" style="background-color: #4D6EFF; color: white;"
    >
    <i class="fa fa-plus-circle"></i>
</button></a>
    <div class="list-group mt-5" onclick="myFunction(event)" id="navList" style="width: 14rem; text-align: right; right: 0; position: fixed;">
        <a class="list-group-item active category" href="{{route('listsurat.index')}}" aria-controls="home">All</a>
        <a class="list-group-item category" href="{{url('/perusahaan')}}" aria-controls="profile">Perusahaan</a>
        <a class="list-group-item category" href="{{url('/internal')}}" role="tab" aria-controls="messages">Internal</a>
        <a class="list-group-item category" href="{{url('/personal')}}" role="tab" aria-controls="settings">Personal</a>
    </div>
</div>