@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>

            </div>
            <!--end breadcrumb-->


            <div class="row">
                <div class="col-12 col-lg-4 col-xxl-4 d-flex">
                    <div class="card rounded-4 w-100">
                        <div class="card-body">
                            <div class="">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <h5 class="mb-0"> Earning</h5>
                                    <img src="{{ uploads('logos/' . Auth::guard('admin')->user()->image) }}" width="24"
                                        height="24" alt="">
                                </div>
                                <p class="mb-4">Total  Earning</p>
                                <div class="d-flex align-items-center justify-content-between">

                                    <div class="">
                                        <h3 class=" text-indigo">AED{{ $total_cost }}</h3>
                                        {{-- <p class="mb-3">58% of sales target</p> --}}
                                        <a href="{{ route('admin.pixels.index') }}"
                                            class="btn btn-dark rounded-5 border-0 px-4">View
                                            Details</a>
                                    </div>
                                    <img src="assets/images/apps/gift-box-3.png" width="100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xxl-2 d-flex">
                    <div class="card rounded-4 w-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                <div style="border: 1px black solid;"
                                    class="wh-42 d-flex align-items-center bg-white justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary">
                                    <span class="material-icons-outlined fs-5 text-black">shopping_cart</span>
                                </div>
                                {{-- <div>
                                    <span class="text-success d-flex align-items-center">+0%<i
                                            class="material-icons-outlined">expand_less</i></span>
                                </div> --}}
                            </div>
                            <div>
                                <h4 class="mb-0">{{ $image_pixel_count }}</h4>
                                <p class="mb-3">Total Orders</p>
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xxl-2 d-flex">
                    <div class="card rounded-4 w-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                <div style="border: 1px black solid;"
                                    class="wh-42 d-flex align-items-center bg-white justify-content-center rounded-circle bg-success bg-opacity-10 text-success">
                                    <span class="material-icons-outlined fs-5 text-black">attach_money</span>
                                </div>
                                {{-- <div>
                                    <span class="text-success d-flex align-items-center">+14%<i
                                            class="material-icons-outlined">expand_less</i></span>
                                </div> --}}
                            </div>
                            <div>
                                <h4 class="mb-0">{{ $totalPixels }}</h4>
                                <p class="mb-3">Total Pixels Sales</p>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ">
                        <div class="card rounded-4 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-3">
                                    <div class="">
                                        <h5 class="mb-0">Transactions</h5>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-striped">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->first_name }}</td>
                                                    <td>{{ $user->last_name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>

                                                    <td>
                                                        <a class="btn btn-dark"
                                                            href="{{ route('admin.users.show', $user->id) }}"><i
                                                                class="lni lni-magnifier" title="View"></i></a>
                                                        <a class="btn btn-dark"
                                                            href="{{ route('admin.users.edit', $user->id) }}"
                                                            title="Edit"><i class="lni lni-pencil-alt"></i></a>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card rounded-4 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-3">
                                    <div class="">
                                        <h5 class="mb-0">Transactions</h5>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>no of Image Pixels</th>
                                                <th>amount</th>
                                                <th>Status</th>
                                                <th>payment method</th>
                                                <th>payment id</th>
                                                {{-- <th>Actions</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $transaction)
                                                @php
                                                    $pixels = explode(',', $transaction->user->ImagePixel); // Split the string into an array
                                                    $count = count($pixels); // Count the number of elements in the array
                                                @endphp
                                                <tr>
                                                    <td>{{ $transaction->id }}</td>
                                                    <td>{{ $transaction->user->first_name }}</td>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $transaction->amount }}</td>
                                                    <td>{{ $transaction->status }}</td>
                                                    <td>{{ $transaction->payment_method }}</td>
                                                    <td>{{ $transaction->payment_id }}</td>

                                                    {{-- <td>
                                                        <a class="btn btn-dark" href="{{ route('admin.pixels.show', $image->id) }}"><i
                                                                class="lni lni-magnifier" title="View"></i></a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
    </main>
@endsection
@section('script')
    <script src="{{ pluginFile('apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ jsFile('dashboard2.js') }}"></script>

    {{-- <script src="{{ pluginFile('datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script> --}}
@endsection
