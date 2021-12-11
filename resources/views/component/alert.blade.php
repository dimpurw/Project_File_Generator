@if(session('sukses'))
<!-- Modal -->
<div role="tabpanel" class="alert tab-pane active pb-4"  aria-expanded="true" >
  <div class="card row" style="height: 117px;background-color: #FDC0C0">
    <div class="card-body pb-0"  style="border-left: 16px solid #FF3C3C!important;text-align: justify;padding-top: 35px;" >
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <p class="card-text" style=" text-align: center; color:#FF0000; font-weight: 500; font-size: 24px;">Surat has been Deleted <i class="fa fa-trash-o"></i></p>
    </div>
  </div>
</div>
@endif