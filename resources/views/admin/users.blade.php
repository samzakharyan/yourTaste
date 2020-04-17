@extends("leyouts.leyout")
@section("content")

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            
            <div class="card mb-4" style="margin-top: 60px">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Users Tables</div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-body">
                  <a href="#" class="btn btn-primary">ADD</a>
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
                        <tbody>
                          @foreach($users as $user)
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-success">Edit</a>

                                
                                
                            </td>
                            <td>
                                <form action="{{route('delete', ['id' => $user->id])}}" method="post">
                                   {{csrf_field()}}
                                   {{method_field('DELETE')}}
                                   <button type="submit" class="btn btn-danger">Delete</button>
                               </form>
                               
                           </td>
                           
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
</div>
</main>
@endsection