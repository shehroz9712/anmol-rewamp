@extends('user.layouts.app')
@section('css')
@endsection
@section('content')
    <!--start main wrapper-->
    <main class="main-wrapper mx-auto">
        <div class="container">

            <div class="row pt-5 pb-3">
                @include('user.layouts.profile')
                <div class="col-12 col-lg-8 d-flex">
                    <div class="card w-100">
                        <div class="card-body">
                            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-md-6 mb-3">
                                        <label for="inputFirstName"
                                            class="form-label @error('first_name') is-invalid @enderror">First Name</label>
                                        <input type="text" class="form-control" name="first_name" id="inputFirstName"
                                            placeholder="John" value="{{ old('first_name', $user->first_name) }}">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Last Name -->
                                    <div class="col-md-6 mb-3">
                                        <label for="inputLastName"
                                            class="form-label @error('last_name') is-invalid @enderror">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="inputLastName"
                                            placeholder="Doe" value="{{ old('last_name', $user->last_name) }}">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Campany  Name -->

                                    <div class="col-md-6 mb-3">
                                        <label for="inputLastName"
                                            class="form-label @error('company_name') is-invalid @enderror">Company
                                            Name</label>
                                        <input type="text" class="form-control" name="company_name" id="inputLastName"
                                            placeholder="Doe" value="{{ old('company_name', $user->company_name) }}">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6 mb-3">
                                        <label for="inputEmail"
                                            class="form-label @error('email') is-invalid @enderror">Email</label>
                                        <input type="email" class="form-control" name="email" id="inputEmail"
                                            placeholder="john.doe@example.com" value="{{ old('email', $user->email) }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Image -->
                                    <div class="col-md-6 mb-3">
                                        <label for="inputImage"
                                            class="form-label @error('image') is-invalid @enderror">Profile Image</label>
                                        <input type="file" class="form-control" name="image" id="inputImage">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-6 mb-3">
                                        <label for="inputPhone"
                                            class="form-label @error('phone') is-invalid @enderror">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="inputPhone"
                                            placeholder="123-456-7890" value="{{ old('phone', $user->phone) }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="col-md-6 mb-3">
                                        <label for="inputPassword"
                                            class="form-label @error('password') is-invalid @enderror">Password<small>
                                                (Leave Blank
                                                if you don't chnage password)</small></label>
                                        <input type="password" class="form-control" name="password" id="inputPassword"
                                            placeholder="********">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>s
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                        <div class="input-group" id="show_hide_confirm_password">
                                            <input type="password" class="form-control border-end-0"
                                                name="password_confirmation" id="inputConfirmPassword"
                                                placeholder="Confirm Password">

                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-md-12 mb-3 text-end">
                                        <button type="submit" class="btn btn-dark">Update</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable();

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
