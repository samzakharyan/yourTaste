@extends("layouts.layout")
@section("title")
   Products
@endsection
@section("content")
   @section("title-name")
        Products
   @endsection
   @section("name")
        Products Panel
   @endsection
  <main>
    <div class="container-fluid">
      <div class="card mb-4" >
        <div class="card-header"><i class="fas fa-table mr-1"></i>Products</div> 
          <div class="card-body">  
                 <a href="{{route('admin.products-add')}}" class="btn btn-primary">Add Product</a> 
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                   <tr>
                     <th>ID</th>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Price</th>
                     <th>Count</th>
                     <th>Content</th>
                     <th>Categories</th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </tr>
                </thead>
        @foreach($products as $products)
                <tbody >
                   <tr>
                     <td>{{$products->id}}</td>
                     <td><img src="{{asset('user/images/' . $products->image)}}"style="width: 100px" /></td>
                     <td>{{$products->name}}</td>
                     <td>{{$products->price}}$</td>
                     <td>{{$products->count}}</td>
                     <td>{{$products->description}}</td>
                     <td>{{$products->categories}}</td>
                     
                      <td>
                       <a href="{{route('admin.products-edit', ['id' => $products->id])}}" class="btn btn-success">Edit</a>        
                     </td>
                    <td>
                       <button type="button"  class="delete-product btn btn-danger" id="{{ $products->id }}"  data-url="{{route('admin.products-admin',['id' => $products->id])}}">
                        Delete
                      </button>
                    </td>
                  </tr>
                </tbody>
        @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>     
@endsection