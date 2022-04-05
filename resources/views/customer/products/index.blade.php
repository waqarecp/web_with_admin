@extends('admin.layouts.app')

@section('content')

    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
          <!-- <li class="breadcrumb-item">Tables</li> -->
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products</h5>
              <a type ="button" class="btn btn-block btn-primary btn-sm right" href="{{ route('products.create')}}">Add New Product</a>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

              <!-- Table with stripped rows -->
              <!-- datatable -->
              <table class="table ">
                <thead>
                <tr>
                <th>No</th>
                <th>Name</th>
                <th>description</th>
                <th>Price</th>
                <th>Date Created</th>
                <th>Actions</th>
               </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td>
                    <form action="{{ url('admin/products/' . $product->id) }}" method="POST">

                        <a href="{{ url('admin/products/' . $product->id) }}" title="show">
                          <i class="fas fa-eye text-success"></i>
                        </a>

                        <a href="{{ url('admin/products/' .$product->id. '/edit') }}">
                            <i class="fas fa-edit"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash  text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
                </tbody>
              </table>
             
              <!-- End Table with stripped rows -->

            </div>
            {{ $products->links() }}
          </div>

        </div>
      </div>
    </section>
    @endsection