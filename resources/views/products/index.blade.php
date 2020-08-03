@extends('layouts.app')
@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Products Informations</h3>
            <a href="{{route('products.create')}}" class="btn btn-primary btn-sm pull-right">New Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(Session::has('status'))
                <div class="alert alert-success">{{Session::get('status')}}</div>
            @endif

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Active</th>
                  <th>Created</th>
                  <th>Last Update</th>
                  <th>image</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $p)
                    <tr>
                    <td>{{++$key}}</td>
                    <td>{{$p->category->category_name}}</td>
                    <td>{{$p->product_name}}</td>
                    <td>{{$p->qty}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->is_active}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>{{$p->updated_at}}</td>
                    <td>{{$p->image}}</td>
                    <td>
                    <img src="{{asset('image/products/'.$p->image)}}" style="width: 80px; height: 50px;">
                    </td>
                    <td>
                        <a href="{{route('products.edit', $p->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{route('products.destroy', $p->id)}}" class="btn btn-danger btn-sm"
                        onclick="event.preventDefault();document.getElementById('product-form-delete').submit();">Delete</a>
                    </td>
                    </tr>

                    <form action="{{route('products.destroy', $p->id)}}" method="post" id="product-form-delete" >
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{$p->id}}">
                    </form>
                @endforeach

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

