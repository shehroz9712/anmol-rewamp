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
                        {{ Breadcrumbs::render('user.roles.show', $data) }}

                    </nav>
                </div>

            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <table class="table table-bordered mt-3">

                            <tbody>
                                <tr>
                                    <td>Role Name</td>
                                    <td>{{ $data->name }}</td>
                                </tr>
                                <tr class="text-capitalize">
                                    <td>Role Permissions</td>
                                    <td>
                                        @foreach ($data->permissions as $permission)
                                            {{ $permission->name }}@if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('user.roles.index') }}" class="btn btn-danger float-end">back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
