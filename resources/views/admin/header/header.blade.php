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
           @if (count($logo) == 0)
               <p class="error-message">Please in terminal ran db:seed command</p>
           @else   
             <div class="card mb-4">
               <div class="card-header"><i class="fas fa-table mr-1"></i>Header Logo</div> 
                 <div class="card-body">  
                    <div class="table-responsive">
                       <table class="table table-bordered"  width="100%" cellspacing="0">
       @foreach($logo as $logo)
              @if($logo->type=='image')
                       <thead>
                         <tr>
                          <th>Type</th>
                          <th>Show</th>
                          <th>Image Name</th>
                          <th>Image</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                       <tr>
                         <td>{{$logo->type}}</td>
                         <td>{{$logo->show}}</td>
                         <td>{{$logo->image_name}}</td>
                         <td><img src="{{asset('user/images/' . $logo->image)}}" alt="" style="width:70px;"></td>
                         <td>
                           <a href="{{route('admin.header-edit', ['id' => $logo->id])}}" class="edit btn btn-success">Edit</a>
                         </td>
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
                         <td>{{$logo->type}}</td>
                         <td>{{$logo->show}}</td>
                         <td>{{$logo->name}}</td>
                         <td><a href="{{route('admin.header-edit', ['id' => $logo->id])}}" class="edit btn btn-success">Edit</a></td>
                       </tr>
                     </tbody> 
              @endif
                   </table>
                </div>
              </div>
            </div> 
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Header Settings</div> 
        <div class="card-body">  
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
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
                  <td>{{$logo->call_name}}</td>
                  <td>{{$logo->phone}}</td>
                  <td>{{$logo->reserv_name}}</td>
                  <td><a href="{{route('admin.header-phone-edit', ['id' => $logo->id])}}" class="edit btn btn-success">Edit</a></td>
                </tr>
              </tbody> 
             </table>       
          </div>
        </div>
      </div>
        <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Header Title</div> 
        <div class="card-body">  
          <div class="table-responsive">
             <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead >
                  <tr>
                    <th>Name</th>
                    <th>FavIcon</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody >
                  <tr>
                   <td>{{$logo->column}}</td>
                   <td><img src="{{asset('user/images/' . $logo->favicon)}}" alt="" style="width:70px;"></td>
                   <td><a href="{{route('admin.header-title-edit', ['id' => $logo->id])}}" class="btn btn-success">Edit</a></td>
                 </tr>
               </tbody> 
              </table>   
        @endforeach      
          </div>
        </div>
      </div>
   @endif
      </div>   
    </main>
@endsection 
   
   
   