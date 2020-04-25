@extends("leyouts.leyout")
@section("content")

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card mb-4" style="margin-top: 60px">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Users Update</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/add-user" method="post">
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
                            <a href="/users" type="submit" class="btn btn-danger">Cancle</a> 
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection







