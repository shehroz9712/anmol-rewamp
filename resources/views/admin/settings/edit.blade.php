@extends('user.layouts.app')
@section('content')
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ $pageTitle }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        {{ Breadcrumbs::render('user.roles.edit', $data) }} </nav>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.roles.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ $data->name }}"
                                    placeholder="Name">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="permission" class="form-label">Permission:</label>
                                <div class="m-1 row">
                                    @php
                                        $rolePermissions = $data->permissions->pluck('id')->toArray();
                                    @endphp

                                    @foreach ($permissions as $perm)
                                        <div class="col-2 form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="permission[]"
                                                value="{{ $perm->id }}" id="flexSwitchCheckChecked{{ $perm->id }}"
                                                {{ in_array($perm->id, $rolePermissions) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked{{ $perm->id }}">
                                                {{ $perm->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 text-end mt-3">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
@endsection
