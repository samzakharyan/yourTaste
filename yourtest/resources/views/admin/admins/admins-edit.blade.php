@extends("layouts.layout")
@section("title")
 Admins Edit
@endsection
@section("content")
    @section("title-name")
       Admins 
    @endsection
    @section("name")
       Admins Edit
    @endsection
        <main> 
            <div class="container-fluid">
                <div class="card mb-4">
                  <div class="card-header"><i class="fas fa-table mr-1"></i>Admins Update</div>
                    <div class="card-body">
                        <div class="table-responsive">
                          <form action="{{route('admin.update-admin', ['id' => $admins->id])}}" method="POST">
                             {{csrf_field()}}
                             {{method_field('PUT')}}
                             <div class="form-group col-md-6">
                                 @error('name')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                       Name:<input  type="text"  name="name"  value="{{$admins->name}}"  
                                       class="form-control @error('name') is-invalid @enderror"/><br>
                                 @error('email')
                                       <div   class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                       Email:<input   type="text"  name="email" value="{{$admins->email}}" 
                                       class="form-control @error('email') is-invalid @enderror"/><br>
                                 <button type="submit" class="update-user btn btn-success">Update</button>  
                                 <a href="{{route('admin.admins')}}" type="submit" class="btn btn-danger">Cancle</a> 
                             </div>
                          </form> 
                        </div>
                    </div>
                </div>
            </div>
          </main>
@endsection







