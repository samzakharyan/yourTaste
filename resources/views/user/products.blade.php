@extends("layouts.user-layout")
@section("title")
  Products
@endsection
@section("content")
                <main>
                    <div class="container-fluid">
                        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Products</div>
            <div class="card-body">
                <div class="table-responsive">


                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                   <tr>
                   	 {{-- <td></td> --}}
                     <th>ID</th>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Price</th>
                     <th>Content</th>
                     <th>Categories</th>
                   </tr>
                </thead>
        @foreach($products as $products)
                <tbody >
                   <tr>
                   	{{-- <td><input type="checkbox" class="form-check-input checked" id="materialChecked2"></td> --}}
                     <td>{{$products->id}}</td>
                     <td><img src="{{asset('user/images/' . $products->image)}}"style="width: 100px" /></td>
                     <td>{{$products->name}}</td>
                     <td>{{$products->price}}$</td>
                     <td>{{$products->description}}</td>
                     <td>{{$products->categories}}</td>
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

