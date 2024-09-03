@extends('user.layouts.app')
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
                        {{ Breadcrumbs::render('user.users.show', $data) }}

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
                                    <th scope="row">First Name</th>
                                    <td>{{ $data->first_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Last Name</th>
                                    <td>{{ $data->last_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Image</th>
                                    <td>
                                        @if ($data->image)
                                            <img src="{{ $data->image->imageurl }}" alt="{{ $data->image->alt ?? 'Image' }}"
                                                width="100px">
                                        @else
                                            No image available
                                        @endif


                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row">Status</th>
                                    <td>{!! status($data->status) !!}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Created At</th>
                                    <td>{{ dateformat($data->created_at, 'Y-m-d H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Updated At</th>
                                    <td>{{ dateformat($data->updated_at, 'Y-m-d H:i:s') }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('user.users.index') }}" class="btn btn-danger float-end">back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
