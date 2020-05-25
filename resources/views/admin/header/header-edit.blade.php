@extends("layouts.layout")
@section("title")
Header
@endsection
@section("content")
        @section("title-name")
           Header
        @endsection
        @section("name")
           Header Update
        @endsection
	    	    <main> 
		        	<div class="container-fluid">
		        		<div class="container">
		        			<div class="col-lg-8 push-lg-4 personal-info">
					    <form role="form"  action="{{route('admin.header-update')}}" method="post" 
					    enctype="multipart/form-data">
					                	{{csrf_field()}}
					                	{{method_field('PUT')}}
					                     <div class="type-header">Change<span>. Logo</span></div>
					                        <div class="div-parent">
					                     	    <div class="div-text" style="{{$logo->type == 'text' ? 'background: #007BFF' : 'background: : #89898C'}}">
					                     	    	<label for="text" class="label-type">Text</label>
					                     	    	<input type="radio" id="text" name="type" value="text"/>
					                     	    </div>
					                     	    <div class="div-image"  style="{{$logo->type == 'image' ? 'background: #007BFF' : 'background: : #89898C'}}">
					                     	    	<label for="image" class="label-type">Image</label>
					                     	    	<input type="radio" id="image" name="type" value="image"/>
					                     	    </div>
					                        </div>	     
					            @error('type')
					                 <div class="alert alert-danger">{{ $message }}</div>
					            @enderror
                
					            @error('show')
					                 <div class="alert alert-danger">{{ $message }}</div>
					            @enderror
					                <div class="form-group row" style="margin-top: 70px;">
					                	<label class="col-lg-3 col-form-label form-control-label">Show</label>
					                	    <div class="col-lg-9">
					                	    	<input type="radio" id="hide" name="show" value="0"/>
					                	    	<label for="hide">Hide</label><br>
					                	    	<input type="radio" id="showw" name="show" value="1" checked="" />
					                	    	<label for="showw">Show</label><br>
					                	    </div>
					                </div>
					                <div class="form-group row name" style="{{$logo->type == 'text' ? 'display: block' : 'display: none'}}">
					            @error('name')
					                 <div class="alert alert-danger">{{ $message }}</div>
					            @enderror
					                	<label class="col-lg-3 col-form-label form-control-label">Logo Text</label>
					                	    <div class="col-lg-9">
					                	    	<input type="text" name="name" id="name" class="form-control" 
					                	    	value="{{$logo->name}}"/>
					                	    </div>
					                </div>	
					                <div class="form-group row image-name" 
					                style="{{$logo->type == 'image' ? 'display: block' : 'display: none'}}">
					            @error('image_name')
					                 <div class="alert alert-danger">{{ $message }}</div>
					            @enderror		
					                	<label class="col-lg-3 col-form-label form-control-label">Image Name</label>
					                	    <div class="col-lg-9">
					                	    	<input type="text" value="{{$logo->image_name}}" name="image_name" id="image-name" 
					                	    	class="form-control"/>
					                	    </div><br>
					            @error('image')
					                <div class="alert alert-danger">{{ $message }}</div>
					            @enderror 
					                	<label class="col-lg-3 col-form-label form-control-label" for="photo">
					                		<img id="preview" src="{{asset('user/images/' . $logo->image)}}" alt="click" />
					                	</label>
					                	     <div class="col-lg-9">
					                	     	<input type="file" name="image"  multiple=""  class="form-control" id="photo" 
					                	     	aria-describedby="inputGroupFileAddon01"  
					                	     	accept="image/gif, image/jpeg, image/png, image.jpg" />
					                	     </div>
					                </div>
					                <div class="form-group row">
					                	<label class="col-lg-3 col-form-label form-control-label"></label>
					                	     <div class="col-lg-9">
					                	     	<button type="submit"  class="btn btn-success">Update Logo</button>
					                	     	<a href="{{route('admin.header')}}" type="submit" class="btn btn-danger">Cancle</a> 
					                	     </div>
					                </div>
				               </form>
        					</div>   
        				</div>
        			</div>
        		</main>	
        @endsection