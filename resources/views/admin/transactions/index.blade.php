@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ $pageTitle }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        {{ Breadcrumbs::render() }}
                    </nav>
                </div>
            </div>

            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
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
    </main>
@endsection
@section('script')
    <script src="{{ pluginFile('datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ pluginFile('datatable/js/dataTables.bootstrap5.min.js') }}"></script>

    </script>
@endsection
