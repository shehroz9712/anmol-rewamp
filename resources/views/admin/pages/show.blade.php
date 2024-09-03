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
                        {{ Breadcrumbs::render('admin.pages.show', $page) }}

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
                                    <th>ID</th>
                                    <td>{{ $page->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $page->name }}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{ $page->slug }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $page->title }}</td>
                                </tr>
                                <tr>
                                    <th>Content</th>
                                    <td>{!! $page->content !!}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        @if ($page->image)
                                            <img src="{{ asset('images/' . $page->image) }}" alt="Image"
                                                class="img-thumbnail" style="max-width: 200px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Meta Title</th>
                                    <td>{{ $page->meta_title }}</td>
                                </tr>
                                <tr>
                                    <th>Meta Description</th>
                                    <td>{{ $page->meta_description }}</td>
                                </tr>
                                <tr>
                                    <th>Meta Keywords</th>
                                    <td>{{ $page->meta_keywords }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-danger float-end">back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
