@extends("leyouts.leyout")
@section("content")

<div id="layoutSidenav_content">

 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="deleteFormID">
        <div class="modal-body"> 
          {{csrf_field()}}
          {{method_field('delete')}}
          <input type="hidden" name="id" id="delete_id">
          Are you sure!!  You want to Delete this User?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Yes. Delete</button>
        </div>
      </div>
    </div>
  </div>
  <main>
    <div class="container-fluid">
      <div class="card mb-4" style="margin-top: 60px">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Users Tables</div> 
        <div class="card-body">  
          <a href="{{url('admin/user-add')}}" class="btn btn-primary">Add User</a> 
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              @foreach($users as $user)
              <tbody >
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                    <a href="{{url('admin/user-edit', ['id' => $user->id])}}" class="btn btn-success">Edit</a>   
                  </td>
                  <td>
                   <button type="button"  class="deletebtn btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                     Delete
                   </button>
                 </td>
               </tr>
             </tbody> 
             @endforeach
           </table>
         </div>
       </div>
     </div>
   </div>
 </main>
 @endsection