@extends("layouts.layout")
@section("title")
   Team
@endsection
@section("content")
   @section("title-name")
        Team 
   @endsection
   @section("name")
        Team Edit
        @if (!$team) 
          <p>Please in terminal run <span class="error-message">"php artisan db:seed"</span> command!!!</p>
        @else
   @endsection
    <main>
       <div class="container-fluid">
        <form action="{{route('admin.team-update')}}" method="POST" enctype="multipart/form-data">
           {{csrf_field()}}
           {{method_field('PUT')}}
          @error('title_team')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror    
                 <label>Title:</label>
                 <input type="text" name="title_team" class="form-control" value="{{$team->title_team}}">
           @error('subtitle_team')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror      
                 <label>Subtitle:</label>
                 <input type="text" name="subtitle_team" class="form-control" value="{{$team->subtitle_team}}">
            <div class="parent-div">
              <div class="div">
          @error('image_team1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror      
              <label class="col-lg-3 col-form-label form-control-label" for="photo-team1">
                  <img  id="preview-team1" class="preview" src="{{asset('user/images/' . $team->image_team1)}}" />
              </label>
                <input type="file"   name="image_team1"   multiple=""  class="form-control  photo"
                id="photo-team1" accept="image/gif, image/jpeg, image/png, image.jpg"/>
          @error('text_team1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <div class="form-group">
                <label>Description:</label>
                <textarea type="text" name="text_team1" class="form-control" cols="6" rows="4">{{$team->text_team1}}</textarea>
              </div>
          @error('icon_1_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-icon11">
                  <img  id="preview-1-1" src="{{asset('user/images/' . $team->icon_1_1)}}" />
              </label>
                <input  type="file"   name="icon_1_1"   multiple=""  class="form-control"
                 accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-icon11" />
          @error('url_1_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <input type="text" name="url_1_1" class="form-control" value="{{$team->url_1_1}}">
          @error('icon_1_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-icon12">
                  <img  id="preview-1-2" src="{{asset('user/images/' . $team->icon_1_2)}}" />
              </label>
                 <input  type="file"   name="icon_1_2"   multiple=""  class="form-control"
                 accept="image/gif, image/jpeg, image/png, image.jpg"  id="photo-icon12"/>
          @error('url_1_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <input type="text" name="url_1_2" class="form-control" value="{{$team->url_1_2}}">
          @error('name_team1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
                 <label>Name:</label>
                 <input type="text" name="name_team1" class="form-control" value="{{$team->name_team1}}">
          @error('position_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
                <label>Position:</label>
                <input type="text" name="position_1" class="form-control" value="{{$team->position_1}}">
              </div>
              <div class="div">
          @error('image_team2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-team2">
                  <img  id="preview-team2" class="preview" src="{{asset('user/images/' . $team->image_team2)}}" />
              </label>
                <input type="file"   name="image_team2"   multiple=""  class="form-control photo"
                id="photo-team2" accept="image/gif, image/jpeg, image/png, image.jpg"/>
          @error('text_team2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <div class="form-group">
                <label>Description:</label>
                <textarea type="text" name="text_team2" class="form-control" cols="6" rows="4">{{$team->text_team2}}</textarea>
              </div>
          @error('icon_2_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-icon21">
                  <img  id="preview-2-1" src="{{asset('user/images/' . $team->icon_2_1)}}" />
              </label>          
                 <input  type="file"   name="icon_2_1"   multiple=""  class="form-control"
                 accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-icon21" />
          @error('url_2_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <input type="text" name="url_2_1" class="form-control" value="{{$team->url_2_1}}">
          @error('icon_2_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-icon22">
                  <img  id="preview-2-2" src="{{asset('user/images/' . $team->icon_2_2)}}" />
              </label>          
                 <input  type="file"   name="icon_2_2"   multiple=""  class="form-control"
                 accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-icon22" />
          @error('url_2_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <input type="text" name="url_2_2" class="form-control" value="{{$team->url_2_2}}">
          @error('name_team2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
                <label>Name:</label>
                <input type="text" name="name_team2" class="form-control" value="{{$team->name_team2}}">
          @error('position_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
                 <label>Position:</label>
                 <input type="text" name="position_2" class="form-control" value="{{$team->position_2}}">
              </div>
              <div class="div">
          @error('image_team3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-team3">
                  <img  id="preview-team3" class="preview" src="{{asset('user/images/' . $team->image_team3)}}" />
              </label>
                <input type="file"   name="image_team3"   multiple=""  class="form-control photo"
                id="photo-team3" accept="image/gif, image/jpeg, image/png, image.jpg"/>
          @error('text_team3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <div class="form-group">
                <label>Description:</label>
                <textarea type="text" name="text_team3" class="form-control" cols="6" rows="4">{{$team->text_team3}}</textarea>
              </div>
          @error('icon_3_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-icon31">
                  <img  id="preview-3-1" src="{{asset('user/images/' . $team->icon_3_1)}}" />
              </label>
                 <input  type="file"   name="icon_3_1"   multiple=""  class="form-control"
                 accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-icon31" />
          @error('url_3_1')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
               <input type="text" name="url_3_1" class="form-control" value="{{$team->url_3_1}}">
          @error('icon_3_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <label class="col-lg-3 col-form-label form-control-label" for="photo-icon32">
                  <img  id="preview-3-2" src="{{asset('user/images/' . $team->icon_3_2)}}" />
              </label>
                <input  type="file"   name="icon_3_2"   multiple=""  class="form-control"
                accept="image/gif, image/jpeg, image/png, image.jpg" id="photo-icon32" />
          @error('url_3_2')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <input type="text" name="url_3_2" class="form-control" value="{{$team->url_3_2}}">
          @error('name_team3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
                <label>Name:</label>
                <input type="text" name="name_team3" class="form-control" value="{{$team->name_team3}}">
          @error('position_3')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
                <label>Position:</label>
                <input type="text" name="position_3" class="form-control" value="{{$team->position_3}}">
              </div>
            </div>  
         <button type="submit"  class="btn btn-success">Update Team  Info</button>
        </form>
      </div>
    </main>
  @endif         
@endsection