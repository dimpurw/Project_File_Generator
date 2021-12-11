  @foreach($folder as $surat)
          <?php
            $jenis = $surat->id_category;
          ?>
        <div role="tabpanel" class="tab-pane pb-4 active" id="0" aria-labelledby="0-tab" aria-expanded="true" >
          <div class="card row" style="height: 117px" onclick="mydisplay(document.getElementById('icon-display'+{{$surat->id}}))">
            <div class="card-body pt-2 col-6"  @if($jenis== 1) style="border-left: 16px solid #7A7A7A!important;text-align: justify;" @endif style="border-left: 16px solid #9FFFBE!important;text-align: justify;">
                  <h4 style="font-weight: normal; font-size: 18px;">{{substr($surat->file_surat,0,35)}}</h4>
                  <span style="font-weight: 300; font-size: 14px;">Last edited {{$surat->updated_at}} - {{$surat->users->name}}  <a href="#" target="_blank" style="color: #FFBE4B;">{{$surat->Pengirim}}</a></span>
                  <p >{{substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry', 0, 55) }}...</p>
            </div>
            <div class="card-body col-md-7 icon-display"  id="icon-display{{ $surat->id }}" style="background-color: #E5E5E5;left: 45;border:none;display: none;">
              <a href="{{route('listsurat.show',$surat->id)}}">
                <button
                  type="button"
                  class="btn btn-floating btn-lg mt-5 mr-2"
                  id="" style="background: #C5D9FF; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);"
                  >
                  <i class="fa fa-eye"></i>
                </button>
              </a>
              <a href="{{route('listsurat.edit',$surat->id)}}">
                <button
                    type="button"
                    class="btn btn-floating btn-lg mt-5 mr-2"
                    id="" style="background: #FFE5B6; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);"
                    >
                    <i class="fa fa-pencil"></i>
                </button>
              </a>
              <a href="{{url('/generate/'.$surat->id)}}">
                <button
                  type="button"
                  class="btn btn-floating btn-lg mt-5 mr-2"
                  id="" style="background: #C5FFEA; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);"
                  >
                  <i class="fa fa-print"></i>
                </button>
              </a>
              <a href="{{url('/listsurat/delete/'.$surat->id)}}">
                <button
                  type="submit"
                  class="btn btn-floating btn-lg mt-5"
                  id="" style="background: #FDC0C0; border-radius: 4px;width: 72px;height: 72px;transform: translate(10px, -45px);"
                  >
                  <i class="fa fa-trash-o"></i>
                </button>
              </a>
            </div>
          </div>
        </div>
        @endforeach