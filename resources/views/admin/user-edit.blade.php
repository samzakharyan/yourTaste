@extends("leyouts.leyout")
@section("title")
Users Edit
@endsection
@section("content")
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card mb-4" style="margin-top: 60px">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Users Update</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{url('admin/user-update', ['id' => $users->id])}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            Name:<input type="text"  name="name"  value="{{$users->name}}"  class="form-control"><br>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            Email:<input type="text"  name="email" value="{{$users->email}}" class="form-control"><br>
                            <button type="submit" class="update-user btn btn-success">Update</button>    
                            <a href="{{url('admin/users')}}" type="submit" class="btn btn-danger">Cancle</a> 
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection







