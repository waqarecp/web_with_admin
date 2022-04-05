@extends('admin.layouts.app')
@section('content')

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">

              <div class="pt-2">
                  <a class="right btn btn-sm btn-primary" href="{{ url('admin/products') }}">Back To Products</a>

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Product Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Name</div>
                    <div class="col-lg-9 col-md-8">{{ $product->name}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Description</div>
                    <div class="col-lg-9 col-md-8">{{ $product->description}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Price</div>
                    <div class="col-lg-9 col-md-8">{{ $product->price}}</div>
                  </div>


                </div>

          

            

              

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    @endsection