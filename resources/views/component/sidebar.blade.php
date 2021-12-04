<button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top" style="background-color: #4D6EFF; color: white;" data-toggle="modal" data-target="#exampleModalCenter">
    <i class="fa fa-plus-circle"></i>
</button>
    <div class="list-group mt-5" onclick="myFunction(event)" id="navList" style="width: 14rem; text-align: right; right: 0; position: fixed;">
        <a class="list-group-item active category" href="{{route('listsurat.index')}}" aria-controls="home">All</a>
        <a class="list-group-item category" href="{{url('/perusahaan')}}" aria-controls="profile">Perusahaan</a>
        <a class="list-group-item category" href="{{url('/internal')}}" role="tab" aria-controls="messages">Internal</a>
        <a class="list-group-item category" href="{{url('/personal')}}" role="tab" aria-controls="settings">Personal</a>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>