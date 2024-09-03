@extends('user.layouts.authapp')

@section('content')
    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-9 col-xl-9 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-primary">
                        <div class="card-body p-5">
                            <img src="{{ getLogo() }}" class="mb-4" width="145" alt="Logo">
                            <h4 class="fw-bold">Get Started Now</h4>
                            <p class="mb-0">Create your account</p>

                            <div class="form-body">
                                <form class="row g-3" method="POST" action="{{ route('user.register') }}">
                                    @csrf

                                    <div class="col-6">
                                        <label for="inputFirstName"
                                            class="form-label @error('first_name') is-invalid @enderror">First Name</label>
                                        <input type="text" class="form-control" name="first_name" id="inputFirstName"
                                            placeholder="John" value="{{ old('first_name') }}">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="inputLastName"
                                            class="form-label @error('last_name') is-invalid @enderror">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="inputLastName"
                                            placeholder="Doe" value="{{ old('last_name') }}">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="inputLastName"
                                            class="form-label @error('company_name') is-invalid @enderror">Company
                                            Name</label>
                                        <input type="text" class="form-control" name="company_name" id="inputLastName"
                                            placeholder="abc" value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="inputEmailAddress"
                                            class="form-label @error('email') is-invalid @enderror">Email</label>
                                        <input type="email" class="form-control" name="email" id="inputEmailAddress"
                                            placeholder="john@example.com" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-6">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" class="form-control border-end-0" name="password"
                                                id="inputChoosePassword" placeholder="Enter Password">
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                    class="bi bi-eye-slash-fill"></i></a>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                        <div class="input-group" id="show_hide_confirm_password">
                                            <input type="password" class="form-control border-end-0"
                                                name="password_confirmation" id="inputConfirmPassword"
                                                placeholder="Confirm Password">

                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="inputPhone"
                                            class="form-label @error('phone') is-invalid @enderror">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="inputPhone"
                                            placeholder="123-456-7890" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- <div class="col-6">
                                        <label for="inputImage"
                                            class="form-label @error('image') is-invalid @enderror">Profile Image</label>
                                        <input type="file" class="form-control" name="image" id="inputImage">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}


                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-dark">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
    <!--authentication-->
@endsection
