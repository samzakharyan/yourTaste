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
		<form action="{{route('admin.header-update')}}" method="post" enctype="multipart/form-data" >
			{{csrf_field()}}
			{{method_field('PUT')}}
			@error('type')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<div class="type-header">Change<span>. Logo</span></div>
			<div class="div-parent">
				<div class="div-text">
					<label for="text" class="label-type">Text</label>
					<input type="radio" id="text" name="type" value="text"/>
				</div>

				<div class="div-image">
					<label for="image" class="label-type">Image</label>
					<input type="radio" id="image" name="type" value="image"/>
				</div>
			</div>
			
			<h3>Show:</h3>
				<input type="radio" id="hide" name="show" value="0"/>
				<label for="hide">Hide</label><br>
				<input type="radio" id="showw" name="show" value="1"/>
				<label for="showw">Show</label><br>
			<div class="parents-input">
				@error('name')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror
					<h3 class="name">Logo Text:</h3>
					<input type="text" name="name" id="name" class="name form-control"  value=""/>
				@error('image-name')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror
					<h3 class="image-name">Image Name:</h3>
					<input type="text" value="" name="image-name" id="image-name" class="image-name form-control"/>
				@error('image')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror
					<h3 class="image">Photo:</h3>
					<label for="photo">
						<img id="preview" src="https://webdevtrick.com/wp-content/uploads/preview-img.jpg" alt="your image"  style="width: 70px;"/>
					</label>
					<input type="file" name="image"  multiple="" class="image" id="photo" aria-describedby="inputGroupFileAddon01" style="display: none"/>
			</div>
			<button type="submit"  class="btn btn-success">Update Logo</button>
			<a href="{{route('admin.header')}}" type="submit" class="btn btn-danger">Cancle</a> 	
		</form>
	</div>
</main>	
@endsection