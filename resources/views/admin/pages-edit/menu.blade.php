@extends("layouts.layout")
@section("title")
   Menu 
@endsection
@section("content")
   @section("title-name")
        Menu 
   @endsection
   @section("name")
        Menu Edit
        @if (!$menu) 
          <p>Please in terminal run <span class="error-message">"php artisan db:seed"</span> command!!!</p>
        @else
   @endsection
  <main>
    <div class="container-fluid">
        <form action="{{route('admin.menu-update')}}" method="POST" enctype="multipart/form-data">
           {{csrf_field()}}
           {{method_field('PUT')}}
          @error('title_menu')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror    
                <label>Title:</label>
                <input type="text" name="title_menu" class="form-control" value="{{$menu->title_menu}}" >
          @error('subtitle_menu')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror      
                <label>Subtitle:</label>
                <input type="text" name="subtitle_menu" class="form-control" value="{{$menu->subtitle_menu}}">
            <div class="parent-div">
              <div class="div">
          @error('image_menu1')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-menu1">
                  <img  id="preview-menu1" class="preview" src="{{asset('user/images/' . $menu->image_menu1)}}" />
              </label>
                <input  type="file"   name="image_menu1"   multiple=""  class="form-control photo"
                accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-menu1" />
          @error('name_menu1')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <div class="form-group">
                <label>Name:</label>
               <input type="text" name="name_menu1" class="form-control" value="{{$menu->name_menu1}}">
             </div>
          @error('info_1')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Info:</label>
                <input type="text" name="info_1" class="form-control" value="{{$menu->info_1}}">
          @error('price_1')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Price:</label>
                <input type="text" name="price_1" class="form-control" value="{{$menu->price_1}}">
              </div>
              <div class="div">
          @error('image_menu2')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-menu2">
                  <img  id="preview-menu2" class="preview" src="{{asset('user/images/' . $menu->image_menu2)}}" />
              </label>
                <input  type="file"   name="image_menu2"   multiple=""  class="form-control photo"
                accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-menu2" />
          @error('name_menu2')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <div class="form-group">
                <label>Name:</label>
               <input type="text" name="name_menu2" class="form-control" value="{{$menu->name_menu2}}">
             </div>
          @error('info_2')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Info:</label>
                <input type="text" name="info_2" class="form-control" value="{{$menu->info_2}}">
          @error('price_2')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Price:</label>
                <input type="text" name="price_2" class="form-control" value="{{$menu->price_2}}">
              </div>
              <div class="div">
          @error('image_menu3')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-menu3">
                  <img  id="preview-menu3" class="preview" src="{{asset('user/images/' . $menu->image_menu3)}}" />
              </label>
                <input  type="file"   name="image_menu3"   multiple=""  class="form-control photo"
                accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-menu3" />
          @error('name_menu3')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <div class="form-group">
                <label>Name:</label>
               <input type="text" name="name_menu3" class="form-control" value="{{$menu->name_menu3}}">
             </div>
          @error('info_3')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
               <label>Info:</label> 
               <input type="text" name="info_3" class="form-control" value="{{$menu->info_3}}">
          @error('price_3')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Price:</label>
                <input type="text" name="price_3" class="form-control" value="{{$menu->price_3}}">
              </div>
              <div class="div">
          @error('image_menu4')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-menu4">
                  <img  id="preview-menu4" class="preview" src="{{asset('user/images/' . $menu->image_menu4)}}" />
              </label>
                <input  type="file"   name="image_menu4"   multiple=""  class="form-control photo"
                accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-menu4" />
          @error('name_menu4')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <div class="form-group">
                <label>Name:</label>
               <input type="text" name="name_menu4" class="form-control" value="{{$menu->name_menu4}}">
             </div>
          @error('info_4')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Info:</label>
                <input type="text" name="info_4" class="form-control" value="{{$menu->info_4}}">
          @error('price_4')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Price:</label>
                <input type="text" name="price_4" class="form-control" value="{{$menu->price_4}}">
              </div>
              <div class="div">
          @error('image_menu5')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-menu5">
                  <img  id="preview-menu5" class="preview" src="{{asset('user/images/' . $menu->image_menu5)}}" />
              </label>
                <input  type="file"   name="image_menu5"   multiple=""  class="form-control photo"
                accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-menu5" />
          @error('name_menu5')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <div class="form-group">
                <label>Name:</label>
               <input type="text" name="name_menu5" class="form-control" value="{{$menu->name_menu5}}">
             </div>
           @error('info_5')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Info:</label>
                <input type="text" name="info_5" class="form-control" value="{{$menu->info_5}}">
          @error('price_5')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Price:</label>
                <input type="text" name="price_5" class="form-control" value="{{$menu->price_5}}">
              </div>
              <div class="div">
          @error('image_menu6')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-menu6">
                  <img  id="preview-menu6" class="preview" src="{{asset('user/images/' . $menu->image_menu6)}}" />
              </label>
                <input  type="file"   name="image_menu6"   multiple=""  class="form-control photo"
                accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-menu6" />
          @error('name_menu6')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
              <div class="form-group">
                <label>Name:</label>
               <input type="text" name="name_menu6" class="form-control" value="{{$menu->name_menu6}}">
             </div>
          @error('info_6')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Info:</label>
                <input type="text" name="info_6" class="form-control" value="{{$menu->info_6}}">
          @error('price_6')
              <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                <label>Price:</label>
                <input type="text" name="price_6" class="form-control" value="{{$menu->price_6}}"> 
              </div>
            </div>
               <button type="submit" class="btn btn-success">Update Menu</button> 
         </form>                                    
      </div>
    </main>
  @endif         
@endsection