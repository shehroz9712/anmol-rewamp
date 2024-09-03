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
                        <a class="btn btn-dark" href="{{ route('admin.admins.create') }}"><i class="lni lni-plus"></i>
                            Create New Admin</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
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
                                @foreach ($data as $user)
                                    <tr>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>

                                        <td>
                                            <a class="btn btn-dark" href="{{ route('admin.admins.show', $user->id) }}"><i
                                                    class="lni lni-magnifier" title="View"></i></a>
                                            <a class="btn btn-dark" href="{{ route('admin.admins.edit', $user->id) }}"
                                                title="Edit"><i class="lni lni-pencil-alt"></i></a>
                                            @if ($user->id != 1)
                                                <form id="delete-form-{{ $user->id }}"
                                                    action="{{ route('admin.admins.destroy', $user->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button class="btn btn-danger" title="Delete"
                                                    onclick="confirmDelete('delete-form-{{ $user->id }}')">
                                                    <i class="lni lni-trash"></i>
                                                </button>
                                            @endif
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
