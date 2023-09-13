@extends('components.layouts.master')
@push('style')
    <style>
        .login-wrapper {
            margin-bottom: 20vh;
        }
    </style>
@endpush
@section('content')
    <div class="container">

        <div class="login-wrapper">
            <div class="loginbox">
                <div class="login-auth">
                    <div class="login-auth-wrap">
                        <h1>Signup! <span class="d-block"> New Account.</span></h1>
                        <form action="#">
                            <div class="form-group">
                                <label class="form-label">Name <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email <span>*</span></label>
                                <input type="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password <span>*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder="Enter Password">
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Confirm Password <span>*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control" placeholder="Enter Confirm Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="custom_check mt-0 mb-0"><span>Remember me</span>
                                    <input type="checkbox" name="remeber">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-outline-light w-100 btn-size">Sign Up</button>
                            {{-- <div class="login-or">
                                <span class="span-or-log">Or, Sign up with your email</span>
                            </div> --}}
                            {{-- 
                            <div class="social-login">
                                <a href="#"
                                    class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img
                                            src="{{ asset('assets/img/icons/google.svg') }}" class="img-fluid"
                                            alt="Google"></span>Sign
                                    up with Google</a>
                            </div>
                            <div class="social-login">
                                <a href="#"
                                    class="mb-0 d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img
                                            src="{{ asset('assets/img/icons/facebook.svg') }}" class="img-fluid"
                                            alt="Facebook"></span>Sign
                                    up with Facebook</a>
                            </div> --}}

                            <div class="text-center dont-have" target="_black">Already have login ? <a
                                    href="/admin
                                ">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
