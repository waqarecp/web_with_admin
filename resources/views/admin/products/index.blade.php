@extends('admin.layouts.app');

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
              <table class="table table-bordered table-responsive user_datatable" id ="user_datatable">
                <thead>
                <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <!-- <th>Date Created</th> -->
                <th style="width: 10%">Actions</th>
               </tr>
                </thead>
                <tbody>
      
                </tbody>
              </table>
             
              <!-- End Table with stripped rows -->

            </div>
    
          </div>

        </div>
      </div>
    </section>
    <script type="text/javascript">
  $(function () {

    // var table = $('#user_datatable').DataTable({
    //     //   dom: "<'row'<'col-sm-3'l><'col-sm-3'f><'col-sm-6'p>>" +
    //     //  "<'row'<'col-sm-12'tr>>" +
    //     //  "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    //         aoColumnDefs: [{
    //             bSortable: false,
    //             aTargets: [0,1,2,3,4,5,6,7]
    //         }],
    //         processing: true,
    //         serverSide: true,
    //         ajax: {
    //             url: "{{ route('products.get') }}",
    //             dataType: "json",
    //             type: "POST",
    //             data: {
    //                 _token: "{{ csrf_token() }}"
    //             }
    //         },
    //         "columns": [
    //             {
    //                 "data": "id"
    //             },     
    //             {
    //                 "data": "name"
    //             },    
    //             {
    //                 "data": "description"
    //             },    
    //             {
    //                 "data": "price"
    //             },   
    //             {
    //                 "data": "created_at"
    //             },  
    //             {
    //                 "data": "action"
    //             },
          



    //         ]
    //     });
       
    // });


    var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
              url: "{{ route('products.get') }}",
              dataType: "json",
              type: "POST",
              data: {
                  _token: "{{ csrf_token() }}"
              }
          },
        // ajax: "{{ route('products.get') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
            {data: 'price', name: 'price'},
            // {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });


  });
</script>
    @endsection

