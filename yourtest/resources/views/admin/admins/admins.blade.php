@extends("layouts.layout")
@section("title")
   Admins
@endsection
@section("content")
   @section("title-name")
        Admins
   @endsection
   @section("name")
        Admins Panel
   @endsection
  <main>
    <div class="container-fluid">
      <div class="card mb-4" >
        <div class="card-header"><i class="fas fa-table mr-1"></i>Admins</div> 
          <div class="card-body">  
                 <a href="{{route('admins.register')}}" class="btn btn-primary">Add Admin</a> 
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                   <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </tr>
                </thead>
        @foreach($admins as $admin)
                <tbody >
                   <tr>
                     <td>{{$admin->id}}</td>
                     <td>{{$admin->name}}</td>
                     <td>{{$admin->email}}</td>
                      <td>
                       <a href="{{route('admin.edit-admin', ['id' => $admin->id])}}" class="btn btn-success">Edit</a>        
                     </td>
                    <td>
                       <button type="button"  class="delete-admin btn btn-danger" id="{{ $admin->id }}"  data-url="{{route('admin.delete-admin',['id' => $admin->id])}}">
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