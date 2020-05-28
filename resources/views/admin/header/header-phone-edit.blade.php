@extends("layouts.layout")
@section("title")
    Header
@endsection
@section("content")
      @section("title-name")
          Header 
      @endsection
      @section("name")
          Phone Update
      @endsection
   <main> 
       <div class="container-fluid">
          <div class="card mb-4" style="margin-top: 60px">
              <div class="card-header"><i class="fas fa-table mr-1"></i>Phone Update</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{route('admin.header-phone-update')}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group col-md-6">
                                @error('call_name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                      Call Name:<input type="text"  name="call_name"  
                                       class="form-control @error('call_name') is-invalid @enderror"
                                       value="{{$logo->call_name}}"><br>
                                @error('phone')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                      Phone:<input  type="number"  name="phone" 
                                      class="form-control @error('phone') is-invalid @enderror"                    
                                      value="{{$logo->phone}}"><br>
                                @error('reserv_name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                      Reserv Name:<input type="text"  name="reserv_name" 
                                      class="form-control @error('reserv_name') is-invalid @enderror" 
                                      value="{{$logo->reserv_name}}"><br>
                                <button type="submit" class="btn btn-success">Update Phone
                                </button> 
                                <a href="{{route('admin.header')}}" type="submit" class="btn btn-danger">Cancle</a>  
                            </div>
                        </form>  
                   </div>
               </div>
            </div>
         </div>
    </main>  
@endsection