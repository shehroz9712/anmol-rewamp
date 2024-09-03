@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper mx-auto">
        <div class="container">

            <div class="row pt-5 pb-3">
                @include('user.layouts.profile')
                <div class="col-12 col-lg-8 d-flex">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="align-items-center d-flex justify-content-between mb-3">

                                <h5 class="mb-0">Pixels<span class="fw-light ms-2">({{ $imagePixels->count() }})</span>
                                </h5>
                                <a href="{{ route('user.pixels.create') }}" class="btn btn-dark">Generate Pixel</a>

                            </div>
                            <div class="product-table">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-striped table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>URL</th>
                                                <th>NO of Pixel</th>
                                                <th>Views</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($imagePixels as $image)
                                                @php
                                                    $pixels = explode(',', $image->pixel); // Split the string into an array
                                                    $count = count($pixels); // Count the number of elements in the array
                                                @endphp
                                                <tr>
                                                    <td>{{ $image->id }}</td>
                                                    <td><a href="{{ $image->url }}" target="_blank">Click Here</a></td>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $image->views }}</td>
                                                    <td>
                                                        <a class="btn btn-dark"
                                                            href="{{ route('user.pixels.show', $image->id) }}"><i
                                                                class="lni lni-magnifier" title="View"></i></a>
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
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable();

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
