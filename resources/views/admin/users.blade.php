@extends("leyouts.leyout")
@section("content")

<div id="layoutSidenav_content">





  <main>
    <div class="container-fluid">

      <div class="card mb-4" style="margin-top: 60px">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Users Tables</div>
        <a href="{{url('user-add')}}" class="btn btn-primary">Add User</a>   
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    <a href="{{url('user-edit', ['id' => $user->id])}}" class="btn btn-success">Edit</a>   
                  </td>
                  <td>
                   <!-- <button class="deleteUser  btn btn-danger" data-id="{{ $user->id }}" data-token="{{ csrf_token() }}" >Delete </button> -->
                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                     Delete
                   </button>
                   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         Are you sure?  You delete this user
                       </div>
                       <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="{{url('user-delete', ['id' => $user->id])}}" method="post">
                         {{csrf_field()}}
                         {{method_field('DELETE')}}
                         <button type="submit" class="btn btn-danger">  Yes.Delete</button>
                       </form>   
                     </div>
                   </div>
                 </div>
               </div>



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