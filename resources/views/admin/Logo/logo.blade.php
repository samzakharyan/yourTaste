@extends("layouts.layout")
@section("title")
Logo 
@endsection
@section("content")
@section("title-name")
Logo
@endsection
@section("name")
User Logo
@endsection
<main>
  <div class="container-fluid">
    @foreach($logo as $l)
    <div class="column nature">
      <div class="content">
        @if($l->type=='image')
        <img src="{{asset('user/images/' . $l->image)}}" alt="Lights" style="width:100px;">
        <h6>Image-Name:</h6><h2>{{$l->image_name}}</h2>
        <h6>Type:</h6><p class="type">{{$l->type}}</p>
        <h6>Show:</h6><p>{{$l->show}}</p>
        <a href="{{route('admin.logo-edit', ['id' => $l->id])}}" class=" edit btn btn-success">Edit</a>

        @else
        <h6>Name:</h6><h2>{{$l->name}}</h2>
        <h6>Type:</h6><p class="type">{{$l->type}}</p>
        <h6>Show:</h6><p>{{$l->show}}</p>
        <a href="{{route('admin.logo-edit', ['id' => $l->id])}}" class="edit btn btn-success">Edit</a>
        @endif 
      </div>
    </div>
    @endforeach
  </div>
</main>
@endsection


