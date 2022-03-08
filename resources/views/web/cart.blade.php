@extends('layouts.mainlayout')
@section('title', 'Cart')
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
                <h4 class="display-3 text-white animated zoomIn">My Cart</h4>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container products mb-5">
        <div class="row">
        @if(session('cart'))
        @php $total = 0 @endphp
        <table id="cart" class="table table-condensed">
            <thead class="bg-light">
            <tr>
                <th style="width:50%">Product Details</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Sub Total</th>
                <th style="width:10%">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                                <div class="col-sm-9">
                                    <h5 class="nomargin">{{ $details['name'] }}</h5>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                        </td>
                        <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td><a href="{{ url('products') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total {{ $total }}</strong></td>
                <td><a href="{{ url('checkout') }}" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i> Checkout</a></td>
            </tr>
            </tfoot>
        </table>
        <section id="do_action">
            <div class="container">
                <div class="heading">
                    <h3>What would you like to do next?</h3>
                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <table id="coupon" class="table">
                                <tr>
                                    <td colspan="2"><h5>Use Coupon Code</h5></td>
                                    <td width="10%"></td>
                                </tr>
                                <tr>
                                    <td><input class="coupon_code form-control" type="text" name="coupon" placeholder="Enter Coupon Code" value=""></td>
                                    <td><a style="margin-top: 0px" class="btn btn-primary update btn_apply_coupon" href="javascript:void(0)" onclick="check_coupon();">Apply</a></td>
                                </tr>
                                <tr class="d-none">
                                    <td class="tr_coupon_message" colspan="2">
                                        <div class="coupon_result"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="total_area">
                            <table id="coupon" class="table table-bordered">
                                <tr>
                                    <td colspan="2"><h6>Cart Total</h6></td>
                                    <td width="10%"><span class="cart_total">1,200.00</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><h6>Discount Amount</h6></td>
                                    <td width="10%"><span class="discount_amount">10.00</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><h6>Shipping Cost</h6></td>
                                    <td width="10%"><span class="shipping_cost">Free</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><h6>Net Total</h6></td>
                                    <td width="10%"><span class="cart_total">1,190.00</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @else
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Empty Cart!</h4>
            <p>There are no items in your cart yet!</p>
            <hr>
            <p class="mb-0">No worries, You can continue your shopping by clicking below button.</p>
            <br><a href="{{ url('products') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
            <a href="/" class="btn btn-info"><i class="fa fa-globe"></i> Explore Website</a>
        </div>
        @endif
        </div><!-- End row -->
    </div>
    </div>
    <!-- Pricing End -->
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection

@section('scripts')
    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var element = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "PATCH",
               data: {_token: '{{ csrf_token() }}', id: element.attr("data-id"), quantity: element.parents("tr").find(".quantity").val()},
               success: function (response) {
                window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var element = $(this);
            if(confirm("Are you sure to remove this item?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: element.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection