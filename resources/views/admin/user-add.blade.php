@extends("layouts.layout")
@section("title")
Users Add
@endsection
@section("content")
@section("title-name")
Users 
@endsection
@section("name")
Users Add
@endsection
<main>
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
                        Name:<input type="text"  name="name"    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"><br>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        Email:<input type="text"  name="email"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"><br>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        Password:<input type="text"  name="password"  class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"><br>
                        <button type="submit" class="btn btn-success">Add</button>    
                        <a href="{{url('admin/users')}}" type="submit" class="btn btn-danger">Cancle</a> 
                    </form>  
                </div>
            </div>
        </div>
    </div>
</main>
@endsection







