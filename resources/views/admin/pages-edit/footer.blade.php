@extends("layouts.layout")
@section("title")
   Footer 
@endsection
@section("content")
   @section("title-name")
        Footer 
   @endsection
   @section("name")
        Footer Edit
        @if (!$footer) 
          <p>Please in terminal run <span class="error-message">"php artisan db:seed"</span> command!!!</p>
        @else
   @endsection
  <main>
    <div class="container-fluid">
        <form action="{{route('admin.footer-update')}}" method="POST" enctype="multipart/form-data">
           {{csrf_field()}}
           {{method_field('PUT')}}
          @error('find')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Find:</label>
               <input type="text"  name="find"  class="form-control" value="{{$footer->find}}"><br>
          @error('find_text')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Find Us:</label>
               <input  type="text"  name="find_text" class="form-control" value="{{$footer->find_text}}"><br>
          @error('reserv_info')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Reservation:</label>
               <input type="text"  name="reserv_info" class="form-control" value="{{$footer->reserv_info}}"><br>
          @error('phone_footer')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Phone:</label>
               <input type="text"  name="phone_footer"  class="form-control" value="{{$footer->phone_footer}}"><br>
          @error('mail')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Mail:</label>
               <input type="text"  name="mail" class="form-control" value="{{$footer->mail}}"><br>
          @error('url')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Url Mail:</label>
               <input  type="text"  name="url" class="form-control" value="{{$footer->url}}"><br>
          @error('image_footer')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-footer">
                  <img  id="preview-footer" class="preview" src="{{asset('user/images/' . $footer->image_footer)}}" />
              </label>
               <input type="file"  name="image_footer" multiple=""  class="form-control photo" id="photo-footer"><br>
          @error('hours')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Open Hours:</label>
               <input  type="text"  name="hours" class="form-control" value="{{$footer->hours}}"><br>
          @error('closed_time')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Closed Time:</label>
               <input type="text"  name="closed_time" class="form-control" value="{{$footer->closed_time}}"><br>
          @error('week')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Week:</label>
               <input type="text"  name="week"  class="form-control" value="{{$footer->week}}"><br>
          @error('times')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Times:</label>
               <input  type="text"  name="times" class="form-control" value="{{$footer->times}}"><br>
          @error('week_1')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Week 1:</label>
               <input type="text"  name="week_1" class="form-control"  value="{{$footer->week_1}}"><br>
          @error('times_1')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Times 1:</label>
               <input type="text"  name="times_1"  class="form-control" value="{{$footer->times_1}}"><br>
          @error('icon_1')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-icon1">
                  <img  id="preview-icon1" src="{{asset('user/images/' . $footer->icon_1)}}" />
              </label>
               <input  type="file"  name="icon_1" class="form-control" id="photo-icon1"><br>
                <label>  
         @error('url_footer1')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               Url Social Network:
             </label>
               <input type="text"  name="url_footer1" multiple="" class="form-control" value="{{$footer->url_footer1}}"><br>
          @error('icon_2')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-icon2">
                  <img  id="preview-icon2" src="{{asset('user/images/' . $footer->icon_2)}}" />
              </label>
               <input type="file"  name="icon_2" multiple="" class="form-control" id="photo-icon2"><br>
               <label>  
         @error('url_footer2')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               Url Social Network:
             </label>
               <input  type="text"  name="url_footer2" class="form-control" value="{{$footer->url_footer2}}"><br>
          @error('icon_3')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label class="col-lg-3 col-form-label form-control-label" for="photo-icon3">
                  <img  id="preview-icon3" src="{{asset('user/images/' . $footer->icon_3)}}" />
              </label>
               <input type="file"  name="icon_3" multiple="" class="form-control" id="photo-icon3"><br>
                <label>  
          @error('url_footer4')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               Url Social Network:
             </label>
               <input type="text"  name="url_footer3"  class="form-control" value="{{$footer->url_footer3}}"><br>
          @error('icon_4')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label class="col-lg-3 col-form-label form-control-label" for="photo-icon4">
                  <img  id="preview-icon4" src="{{asset('user/images/' . $footer->icon_4)}}" />
              </label>
               <input  type="file"  name="icon_4" multiple="" class="form-control" id="photo-icon4"><br>
                <label>  
        @error('url_footer4')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               Url Social Network:
             </label>
               <input type="text"  name="url_footer4" class="form-control" value="{{$footer->url_footer4}}"><br>
          @error('text')
               <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Text:</label>
               <input type="text"  name="text" class="form-control" value="{{$footer->text}}"><br>

               <button type="submit" class="btn btn-success">Update Footer</button>
         </form>                                  
      </div>
    </main>   
  @endif  
@endsection