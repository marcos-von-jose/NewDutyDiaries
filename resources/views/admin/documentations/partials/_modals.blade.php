<!-- Modal -->
<!-- <div class="modal fade" id="newDocumentation" tabindex="-1" aria-labelledby="newDocumentation" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Documentation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('documentations.store') }}" id="documentation-upload-form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type="file" name="doc_img" id="doc-img" data-max-file-size="2M" data-show-errors="true" data-max-file-size-preview="2M">
                <input type="text" name="caption" id="caption" class="form-control mt-2" placeholder="Write caption here">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Save" id="submit-doc-form" class="btn btn-primary btn-sm">
            </div>
        </form>
      </div>
    </div>
  </div> -->
  <!-- Modal -->
<div class="modal fade" id="newDocumentation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header rounded-3">
          <h5 class="modal-title" id="#exampleModalLabel">New Documentation</h5>
        </div>
            <form action="{{route('documentations.store')}}" id="documentation-upload-form" method="POST" enctype="multipart/form-data">  
              @csrf
              <div class="modal-body rounded-3">
                
                <input type="file" class="dropify" name="doc_img" id="doc-img" data-max-file-size="5M" data-show-errors="true" data-max-file-size-preview="5M">
                <input type="text" class="form-control col-12 mt-2" name="caption" value="{{ old('caption') }}" placeholder="Write your caption here.">
                
              </div>
              <div class="modal-footer rounded-3">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Save" id="submit-doc-form" class="btn btn-success btn-sm">
              </div>
            </form>    
      </div>
    </div>
  </div>
  <!-- End Modal -->
  @include('admin.documentations.partials._scripts')