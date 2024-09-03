@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
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
                                    <th>Full Name</th>
                                    <th>Subject</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $page)
                                    <tr>
                                        <td>{{ $page->fullname }}</td>
                                        <td>{{ $page->subject }}</td>
                                        <td>{{ $page->email }}</td>
                                        <td>{{ $page->phone }}</td>
                                        <td>{{ $page->message }}</td>


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
@endsection
