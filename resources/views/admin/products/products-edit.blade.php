@extends("layouts.layout")
@section("title")
   Admins Add
@endsection
@section("content")
    @section("title-name")
        Admins 
    @endsection
    <main>
      <div class="container-fluid">
        <div class="card mb-4">
          <div class="card-header"><i class="fas fa-table mr-1"></i>Products Add</div>
            <div class="card-body">
                <div class="table-responsive">
                 <form method="POST" action="{{route('admin.products-update', ['id'=> $products->id])}}"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('Put')}}
                    <div class="form-group col-md-6">
                         Name:<input type="text" name="name" class="form-control" value="{{$products->name}}">
                         Price:<input type="number" name="price" class="form-control" value="{{$products->price}}">
                         Count:<input type="number" name="count" class="form-control" value="{{$products->count}}">
                         Content:<textarea class="form-control" name="content">{{$products->description}}</textarea>
                         Categories:<select class="form-control" name="categories">
                           <option>Salads</option>
                           <option>Alcogol Drink</option>
                           <option>Juice</option>
                           <option>Food</option>
                         </select>
                         Image:<input type="file" name="image" multiple="" class="form-control">
                         <button type="submit" class="btn btn-success">Update Product</button>
                        <a href="{{route('admin.products')}}" type="submit" class="btn btn-danger">Cancle</a> 
                    </div>
                </form>   
               </div>
            </div>
        </div>
      </div>
    </main>
@endsection







