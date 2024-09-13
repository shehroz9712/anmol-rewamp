@extends('user.layouts.app')

@section('content')
    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-primary">
                        <div class="card-body p-5">

                            <img src="{{ getLogo() }}" class="mb-4" width="145" alt="Logo">
                            <h4 class="fw-bold">Get Started Now</h4>
                            <p class="mb-0">Enter your credentials to login your account</p>

                            <div class="form-body my-5">
                                <form class="row g-3" method="POST" action="{{ route('user.login') }}">
                                    @csrf

                                    <div class="col-12">
                                        <label for="inputEmailAddress"
                                            class="form-label @error('email') is-invalid @enderror"">Email</label>
                                        <input type="email" class="form-control" name="email" id="inputEmailAddress"
                                            placeholder="jhon@example.com" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
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
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        @if (Route::has('user.password.request'))
                                            <a class="" href="{{ route('user.password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-dark">Login</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('user.register') }}">Don't have account click here</a>
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
