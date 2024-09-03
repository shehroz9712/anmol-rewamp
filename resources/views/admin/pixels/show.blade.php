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
                        {{ Breadcrumbs::render('admin.pixels.show', $imagePixel) }}
                    </nav>
                </div>
            </div>

            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{ uploads('logos/' . $imagePixel->image) }}" alt="Image"
                                            style="max-width: 100px;"></td>
                                </tr>
                                <tr>
                                    <th>URL</th>
                                    <td><a href="{{ $imagePixel->url }}">{{ $imagePixel->url }}</a></td>
                                </tr>
                                <tr>
                                    <th>Total Cost</th>
                                    <td>{{ number_format($imagePixel->total_cost, 2) }} AED</td>
                                </tr>
                                <tr>
                                    <th>User ID</th>
                                    <td>{{ $imagePixel->user_id }}</td>
                                </tr>
                                <tr>
                                    <th>Pixels</th>
                                    <td>{{ $imagePixel->pixel }}</td>
                                </tr>
                                <tr>
                                    <th>Pixel Count</th>
                                    <td>{{ $count }}</td>
                                </tr>
                                <tr>
                                    <th>Views</th>
                                    <td>{{ $imagePixel->views }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $imagePixel->status ? 'Active' : 'Inactive' }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $imagePixel->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{ $imagePixel->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <a href="{{ route('user.appointments.index') }}" class="btn btn-danger float-end">back</a> --}}

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
