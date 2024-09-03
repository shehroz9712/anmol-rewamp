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
                    <div class="mb-3 text-end">
                        <a class="btn btn-dark" href="{{ route('admin.pages.create') }}"><i class="lni lni-plus"></i>
                            Create New Page</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $page)
                                    <tr>
                                        <td>{{ $page->id }}</td>
                                        <td>{{ $page->name }}</td>
                                        <td>{{ $page->slug }}</td>
                                        <td>{{ $page->title }}</td>

                                        <td>
                                            <a class="btn btn-dark" href="{{ route('admin.pages.show', $page->id) }}"><i
                                                    class="lni lni-magnifier" title="View"></i></a>
                                            <a class="btn btn-dark" href="{{ route('admin.pages.edit', $page->id) }}"
                                                title="Edit"><i class="lni lni-pencil-alt"></i></a>
                                            {{-- @if ($page->id != 1)
                                                <form id="delete-form-{{ $page->id }}"
                                                    action="{{ route('admin.pages.destroy', $page->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button class="btn btn-danger" title="Delete"
                                                    onclick="confirmDelete('delete-form-{{ $page->id }}')">
                                                    <i class="lni lni-trash"></i>
                                                </button>
                                            @endif --}}
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
@endsection
