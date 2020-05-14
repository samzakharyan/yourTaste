@extends("layouts.layout")
@section("title")
Header 
@endsection
@section("content")
@section("title-name")
Header
@endsection
@section("name")
Header Panel
@endsection
<main>
 <div class="container-fluid">
  <div class="card mb-4" style="margin-top: 60px">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Header</div> 
    <div class="card-body">  
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
       
       @foreach($logo as $l)
          @if($l->type=='image')
         <thead>
          <tr>
            <th>Type</th>
            <th>Show</th>
            <th>Image Name</th>
            <th>Image</th>
            <th>Edit</th>
          </tr>
        </thead>

        <tbody >
          <tr>
            <td>{{$l->type}}</td>
            <td>{{$l->show}}</td>
            <td>{{$l->image_name}}</td>
            <td><img src="{{asset('user/images/' . $l->image)}}" alt="Lights" style="width:70px;"></td>
            <td><a href="{{route('admin.header-edit', ['id' => $l->id])}}" class=" edit btn btn-success">Edit</a></td>
          </tr>
        </tbody> 
        @else 
        <thead>
          <tr>
            <th>Type</th>
            <th>Show</th>
            <th>Name</th>
            <th>Edit</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>{{$l->type}}</td>
            <td>{{$l->show}}</td>
            <td>{{$l->name}}</td>
            <td><a href="{{route('admin.header-edit', ['id' => $l->id])}}" class=" edit btn btn-success">Edit</a></td>
          </tr>
        </tbody> 
        @endif   
        <div class="phone-div">
        <thead >
          <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Reserv Name</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody >
          <tr>
            <td>{{$l->call_name}}</td>
            <td>{{$l->phone}}</td>
            <td>{{$l->reserv_name}}</td>
            <td><a href="{{route('admin.header-phone-edit', ['id' => $l->id])}}" class=" edit btn btn-success">Edit</a></td>
          </tr>
        </tbody>  
        </div>  
        @endforeach
      </table>
    </div>
  </div>
</div>
</div>
</main>
@endsection


