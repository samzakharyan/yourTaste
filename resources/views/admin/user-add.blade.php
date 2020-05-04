@extends("leyouts.leyout")
@section("title")
Users Add
@endsection
@section("content")
<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol></div>
        <div class="container-fluid">
            <div class="card mb-4" style="margin-top: 60px">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Users Add</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{url('admin/add-user')}}" method="post">
                            {{csrf_field()}}
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            Name:<input type="text"  name="name"  class="form-control"><br>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            Email:<input type="text"  name="email"  class="form-control"><br>
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            Password:<input type="text"  name="password"  class="form-control"><br>
                            <button type="submit" class="btn btn-success">Add</button>    
                            <a href="{{url('admin/users')}}" type="submit" class="btn btn-danger">Cancle</a> 
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection







