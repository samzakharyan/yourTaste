@extends("layouts.layout")
@section("title")
   Testimonials 
@endsection
@section("content")
   @section("title-name")
        Testimonials 
   @endsection
   @section("name")
        Testimonials Edit
        @if (!$test) 
          <p>Please in terminal run <span class="error-message">"php artisan db:seed"</span> command!!!</p>
        @else
   @endsection
  <main>
    <div class="container-fluid">
       <form action="{{route('admin.testimonials-update')}}" method="POST" enctype="multipart/form-data">
           {{csrf_field()}}
           {{method_field('PUT')}}
          @error('title_test')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Title:</label>
               <input type="text"  name="title_test"
               class="form-control" value="{{$test->title_test}}">
          @error('image_test')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label class="col-lg-3 col-form-label form-control-label" for="photo-test">
                  <img  id="preview-test" class="preview" src="{{asset('user/images/' . $test->image_test)}}" />
              </label>
                <input  type="file"   name="image_test"   multiple=""  class="form-control  photo"
                accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-test" />
          @error('description_1')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
             <div class="form-group">
                <label>Description:</label>
               <textarea name="description_1" class="form-control" cols="5" rows="4">{{$test->description_1}}
               </textarea>    
          @error('name_test1')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Name:</label>
               <input type="text"  name="name_test1" class="form-control" value="{{$test->name_test1}}">    
          @error('text_test1')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Text:</label>
               <input type="text"  name="text_test1" class="form-control" value="{{$test->text_test1}}"> 
             </div>
             <div class="form-group">
          @error('description_2')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label>Description:</label> 
               <textarea name="description_2" class="form-control" cols="5" rows="4">{{$test->description_2}}
               </textarea>    
          @error('name_test2')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label> Name:</label>
              <input type="text"  name="name_test2" class="form-control" value="{{$test->name_test2}}">    
          @error('text_test2')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Text:</label>
               <input type="text"  name="text_test2" class="form-control" value="{{$test->text_test2}}"> 
             </div>
             <div class="form-group">
          @error('description_3')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Description:</label> 
                <textarea name="description_3" class="form-control" cols="5" rows="4">{{$test->description_3}}
                </textarea>    
          @error('name_test3')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Name:</label>
               <input type="text"  name="name_test3" class="form-control" value="{{$test->name_test3}}">    
          @error('text_test3')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Text:</label>
               <input type="text"  name="text_test3" class="form-control" value="{{$test->text_test3}}"> 
               </div>

               <button type="submit" class="btn btn-success">Update  Testimonials</button> 
         </form>                     
      </div>
    </main>
  @endif         
@endsection