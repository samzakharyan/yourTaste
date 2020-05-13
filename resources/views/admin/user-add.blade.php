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
                   <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group col-md-6">
                        Name:<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>
                        Email: <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>
                        Password:<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>
                        Confirm Password:  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"><br>        
                        <button type="submit" class="btn btn-primary" id="register">
                            {{ __('Register') }}
                        </button>  
                        <a href="{{url('admin/users')}}" type="submit" class="btn btn-danger">Cancle</a> 
                    </div>
                </form>   
                
            </div>
        </div>
    </div>
</div>
</main>
@endsection







