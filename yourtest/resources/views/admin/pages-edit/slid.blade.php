@extends("layouts.layout")
@section("title")
   Slids 
@endsection
@section("content")
   @section("title-name")
        Slids 
   @endsection
   @section("name")
        Slids Edit
        @if (!$slid) 
          <p>Please in terminal run <span class="error-message">"php artisan db:seed"</span> command!!!</p>
        @else
   @endsection
  <main>
    <div class="container-fluid">
        <form  action="{{route('admin.slid-update')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}}  
              <div class="parent-div">
                <div class="div">
          @error('slid_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror              
                <label class="col-lg-3 col-form-label form-control-label" for="photo-slide1">
                  <img  id="preview-slide1" class="preview" src="{{asset('user/images/' . $slid->slid_1)}}" />
                </label>
                <input type="file"   name="slid_1"   multiple=""  class="form-control photo"
                id="photo-slide1" accept="image/gif, image/jpeg, image/png, image.jpg"/><br>
          @error('title_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Title Slider-1:</label>
               <input type="text"  name="title_1" class="form-control" value="{{$slid->title_1}}"><br> 
          @error('text_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Text</label>
               <input type="text"  name="text_1" class="form-control" value="{{$slid->text_1}}"><br>
          @error('url_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Url</label>
               <input type="text"  name="url_1" class="form-control" value="{{$slid->url_1}}"><br> 
          @error('button_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Button</label>
               <input type="text"  name="button_1" class="form-control" value="{{$slid->button_1}}"><br>
                </div>
                <div class="div">
          @error('slid_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror              
                <label class="col-lg-3 col-form-label form-control-label" for="photo-slide2">
                  <img  id="preview-slide2" class="preview" src="{{asset('user/images/' . $slid->slid_2)}}" />
                </label>
                <input type="file"   name="slid_2"   multiple=""  class="form-control photo"
                id="photo-slide2" accept="image/gif, image/jpeg, image/png, image.jpg"/><br> 
          @error('title_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Title Slider-2:</label>
               <input type="text"  name="title_2" class="form-control" value="{{$slid->title_2}}"><br> 
          @error('text_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Text</label>
               <input type="text"  name="text_2" class="form-control" value="{{$slid->text_2}}"><br>
          @error('url_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Url</label>
               <input type="text"  name="url_2" class="form-control" value="{{$slid->url_2}}"><br> 
          @error('button_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Button</label>
               <input type="text"  name="button_2" class="form-control"  value="{{$slid->button_2}}"><br>
                </div>
                <div class="div">
          @error('slid_3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror              
                <label class="col-lg-3 col-form-label form-control-label" for="photo-slide3">
                  <img  id="preview-slide3" class="preview" src="{{asset('user/images/' . $slid->slid_3)}}" />
                </label>
                <input type="file"   name="slid_3"   multiple=""  class="form-control photo"
                id="photo-slide3" accept="image/gif, image/jpeg, image/png, image.jpg"/> <br>
          @error('title_3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Title Slider-3:</label>
               <input type="text"  name="title_3" class="form-control"  value="{{$slid->title_3}}"><br> 
          @error('text_3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Text</label>
               <input type="text"  name="text_3" class="form-control"  value="{{$slid->text_3}}"><br>
          @error('url_3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Url</label>
               <input type="text"  name="url_3" class="form-control"  value="{{$slid->url_3}}"><br> 
          @error('button_3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <label>Button</label>
               <input type="text"  name="button_3" class="form-control"  value="{{$slid->button_3}}"><br>
                </div>
              </div>
              <button type="submit" class="btn btn-success">Update Slid</button>
             </form>                            
        </div>
    </main>
  @endif         
@endsection