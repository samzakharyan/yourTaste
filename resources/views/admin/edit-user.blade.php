
@extends("leyouts.leyout")
@section("content")

<form action="{{route('user.update', ['id' => $user->id])}}" method="POST">
    @csrf
    <input type="text" placeholder="name">        
    <input type="text" placeholder="email">
    <button type="submit">Update</button>     
</form>

@endsection
























<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h1>Edit User</h1>
                </div>

             <div class="card-body">
                 <form action="">
                   <div class="form-group">
                     <label>Name</label> 
                     <input type="text" name="username" value="{{$users->name}}" class="form-control"> 
                     <div class="form-group">
                          <label>Give Role</label>
                            <select name="usertype" class="form-control">
                              <option value="Admin">Admin</option>
                              <option value="vendor">Vendor</option>
                          </select>
                     </div>
                     <button type="submit" class="btn btn-success">Update</button>
                     <a href="/tables" class="btn btn-danger">Cancel</a>
                   </div>  



                 </form>
             </div>   
            </div>
        </div>
    </div>
</div> -->