@extends("leyouts.leyout")


@section("title")
Users
@endsection

@section("content")
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <div class="card mb-4" style="margin-top: 60px">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Users</div> 
        <div class="card-body">  
          <a href="{{url('admin/user-add')}}" style="margin-top: 10px; margin-bottom: 10px;"  class="btn btn-primary">Add User</a> 
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

                    <button type="button"  class="deletebtn btn btn-danger" id="{{ $user->id }}" data-toggle="modal" data-target="#exampleModal" data-url="{{route('admin.delete', ['id' => $user->id])}}">
                     Delete
                   </button>

                   <!-- DELETE MODAL -->           
                   @extends('leyouts.modal')

                   @section('modal-title') 
                     Delete   User  
                   @endsection
                   @section('modal-content') 
                   <p class="result"></p>
                   @endsection

                   @section('modal-footer')
                   <button type="submit" class="delete-user btn btn-danger" id="{{ $user->id }}">Yes. Delete</button>  
                   @endsection

                   <!-- END DELLETE MODAL -->

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