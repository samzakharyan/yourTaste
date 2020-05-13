@extends("layouts.layout")
@section("title")
Logo Edit
@endsection
@section("content")
@section("title-name")
Logo 
@endsection
@section("name")
User Logo Edit
@endsection
<main> 
	<div class="container-fluid">
		<form  action="{{route('admin.logo-update')}}"   method="post" enctype="multipart/form-data" >
			{{csrf_field()}}
			{{method_field('PUT')}}
			@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<div class="type-header">Type<span>. Logo</span></div>
			<div class="div-parent">
				<div class="div-text">
					<label for="text" class="label-type">Text</label>
					<input type="radio" id="text" name="type" value="text">
				</div>

				<div class="div-image">
					<label for="image" class="label-type">Image</label>
					<input type="radio" id="image" name="type" value="image">
				</div>
			</div>
			<div class="col-6 type-style">
				<h3>Show:</h3>
				<input type="radio" id="hide" name="show" value="0">
				<label for="zero">0</label><br>
				<input type="radio" id="show" name="show" value="1">
				<label for="one">1</label><br>
				@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<h3 class="name">Name:</h3>
				<input type="text" name="name" id="name" class=" name  form-control"  value="{{$logo->name}}"><br>
				@error('image-name')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<h3 class="image-name">Image Name:</h3>
				<input type="text" value="{{$logo->image_name}}" name="image-name" id="image-name" class="form-control  image-name"  ><br>
				@error('image')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<h3 class="image">Photo:</h3>
				<img id="preview" src="https://webdevtrick.com/wp-content/uploads/preview-img.jpg"
				alt="your image"  style="width: 70px;"/>
				<input type="file" name="image"  multiple=""class="image form-control @error('image') is-invalid @enderror" value="{{ old('image') }}"   id="photo" aria-describedby="inputGroupFileAddon01"><br><br>
				<button type="submit"  class="btn btn-success">Update Logo</button>
				<a href="{{route('admin.logo')}}" type="submit" class="btn btn-danger">Cancle</a> 
			</div>
		</form>
	</div>
</main>	
@endsection