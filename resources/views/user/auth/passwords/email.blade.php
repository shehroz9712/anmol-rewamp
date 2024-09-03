@extends('user.layouts.authapp')

@section('content')
    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-primary">
                        <div class="card-body p-5">

                            <img src="{{ getLogo() }}" class="mb-4" width="145" alt="Logo">
                            <h4 class="fw-bold">Reset Password</h4>
                            <p class="mb-0">Enter your email for reset password</p>

                            <div class="form-body my-3">
                                <form class="row g-3" method="POST" action="{{ route('user.password.email') }}">
                                    @csrf

                                    <div class="col-12">
                                        <label for="inputEmailAddress"
                                            class="form-label @error('email') is-invalid @enderror">Email</label>
                                        <input type="email" class="form-control" name="email" id="inputEmailAddress"
                                            placeholder="jhon@example.com" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-dark">Send Password Reset Link</button>
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
