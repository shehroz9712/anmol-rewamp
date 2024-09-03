@extends('admin.layouts.app')
@section('css')
    <style>
        .btn-group span {
            margin-bottom: 0 !important;
            padding: .5rem !important;
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important
        }
    </style>
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
                                    <th>URL</th>
                                    <th>NO of Pixel</th>
                                    <th>Views</th>
                                    <th>Status</th>
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
                                        <td class="mt-3">
                                            @php

                                            @endphp
                                            <div class="btn-group">

                                                <span
                                                    class="alert  d-inline-block mb-2 p-1  {{ $image->status ? 'alert-success ' : 'alert-danger' }} ">{{ ucfirst($image->status ? 'Active' : 'pending') }}</span>
                                                <button type="button"
                                                    class="btn {{ $image->status ? 'btn-success split-bg-success ' : 'btn-danger split-bg-danger' }} dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle
                                                        Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                                                    @if ($image->status == 0)
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.pixels.change.status', ['id' => $image->id, 'status' => 'active']) }}">Active</a>
                                                    @else
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.pixels.change.status', ['id' => $image->id, 'status' => 'pending']) }}">Pending</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-dark" href="{{ route('admin.pixels.show', $image->id) }}"><i
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
    </main>
@endsection
@section('script')
    <script src="{{ pluginFile('datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ pluginFile('datatable/js/dataTables.bootstrap5.min.js') }}"></script>

    </script>
@endsection
