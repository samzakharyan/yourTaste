@extends("layouts.layout")
@section("title")
   About 
@endsection
@section("content")
   @section("title-name")
        About 
   @endsection
   @section("name")
        About Edit
        @if (!$about) 
          <p>Please in terminal run <span class="error-message">"php artisan db:seed"</span> command!!!</p>
        @else
   @endsection
  <main>
    <div class="container-fluid">
         <form role="form"  action="{{route('admin.about-update')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}} 
            
          @error('title_about')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
                <label>Title:</label>
                <input type="text" name="title_about" value="{{$about->title_about}}" class="form-control "/><br>
          @error('subtitle_about')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror     
                <label>Subtitle:</label>
                 <input type="text" name="subtitle_about" value="{{$about->subtitle_about}}" class="form-control"/><br>
          @error('description_about')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror     
                <label>Description:</label>
                <textarea type='text' name="description_about" cols="6" rows="10" 
                class="form-control">{{$about->description_about}}</textarea><br>
          @error('image_about')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror              
                <label class="col-lg-3 col-form-label form-control-label" for="photo-about">
                  <img  id="preview-about" class="preview" src="{{asset('user/images/' . $about->image_about)}}" />
                </label>
                <input type="file"   name="image_about"   multiple=""  class="form-control photo"
                id="photo-about" accept="image/gif, image/jpeg, image/png, image.jpg"/><br>      
                <button type="submit"  class="btn btn-success">Update About</button>
          </form>  
      </div>
    </main>     
          @endif             
@endsection