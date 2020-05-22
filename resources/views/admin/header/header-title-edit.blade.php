@extends("layouts.layout")
@section("title")
    Header
@endsection
@section("content")
      @section("title-name")
          Header 
      @endsection
      @section("name")
          Title Update
      @endsection
   <main> 
       <div class="container-fluid">
          <div class="card mb-4" style="margin-top: 30px">
              <div class="card-header"><i class="fas fa-table mr-1"></i>Title Update</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{route('admin.header-title-update')}}" method="POST"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group col-md-6">
                                @error('column')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                      Column:<input type="text"  name="column"  
                                      class="form-control"><br>
                                @error('favicon')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                     <label class="col-lg-3 col-form-label form-control-label" for="favicon">
                                       <img id="preview" src="https://webdevtrick.com/wp-content/uploads/preview-img.jpg"
                                       alt="your image"  style="width: 70px;"/>
                                     </label>
                                      <input  type="file"  name="favicon" 
                                       class="form-control" multiple="" id="favicon" style="display: none;"><br>
                                <button type="submit" class="btn btn-success">Update Title
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