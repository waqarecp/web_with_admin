@extends('layouts.mainlayout')
@section('title', 'Products')
@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">

    @if(Session::has('message'))
        <div class="alert alert-{!! session('type') !!} alert-dismissible col-md-8 offset-2" role="alert">
            {!! session('message') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Products</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Products</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container products">
        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3  p-1">
                <div class="card">
                <img src="{{ $product->photo }}" class="card-img-top" alt="..." width="500" height="300">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ substr(strtolower($product->description),0,50) }}
                    <p class="btn-holder">
                        <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button"><i class="fa fa-shopping-cart"></i> Add to cart</a> </p>
                    </p>
                </div>
                </div>
                </div>
            @endforeach
            {{$products->links()}}
        </div><!-- End row -->
    </div>
    </div>
    <!-- Pricing End -->
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection