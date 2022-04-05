@extends('admin.layouts.app')

@section('content')

    <div class="pagetitle">
      <h1>Edit Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Products</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Product</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="{{ url('admin/products/' . $product->id) }}" method="POST">
              @csrf
              @method('PUT')
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" class="form-control" type="text" name="name" value="{{ $product->name }}" >
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Description</label>
                  <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description">{{ $product->description }}</textarea>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Price</label>
                  <input type="number" name="price" class="form-control" placeholder=""
                        value="{{ $product->price }}">
                </div>
              
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

        

         

        </div>
      </div>
    </section>
    @endsection