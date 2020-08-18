@extends("layouts.user-layout")
@section("title")
   My  Info
@endsection
@section("content")
                <main>
                    <div class="container-fluid">
                        <div class="card mb-4" style="margin-top: 60px">
                          <div class="card-header"><i class="fas fa-table mr-1"></i>Update My Info</div>
                            <div class="card-body">
                                <form action="{{route('info.update', ['id' => $user->id])}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                 <div class="form-group col-md-6">
                                 @error('name')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                   New Name:<input  type="text"  name="name" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" /><br>
                                 @error('email')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                   New Email:<input   type="text"  name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}"/><br>
                                @error('password')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                   New Password:<input   type="text"  name="password" class="form-control @error('password') is-invalid @enderror"/><br>
                                   Confirm Password:<input   type="text"  name="conf-password" class="form-control @error('password') is-invalid @enderror"/><br>
                                     <button type="submit" class="update-user btn btn-success">Update</button>  
                                     <a href="{{route('home')}}" type="submit" class="btn btn-danger">Cancle</a>
                                  </div> 
                                </form> 
                            </div>
                        </div>
                    </div>
                </main>          
@endsection