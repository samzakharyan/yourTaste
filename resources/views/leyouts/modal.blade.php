
<!-- <button type="button"  class="deletebtn btn btn-danger" data-toggle="modal" data-target="#exampleModal">
 Delete
</button> -->
            


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="docuemnt">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">@yield('modal-title') </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @yield('modal-content')
      </div>
      <div class="modal-footer">@yield('modal-footer')
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="docuemnt">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">@yield('modall-title') </h5>
      </div>
      <div class="modal-body">
      @yield('modall-content')
      </div>
      <div class="modal-footer">@yield('modall-footer')
      </div>
    </div>
  </div>
</div>



  <!-- <button type="submit" class="delete-user btn btn-danger" id="{{ $user->id }}">Yes. Delete</button> -->  