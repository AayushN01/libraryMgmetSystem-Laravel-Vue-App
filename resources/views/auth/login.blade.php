@extends('backend.layouts.app')
@section('title','Login')
@section('guest')
<div class="container-fluid">
    <!-- Log In page -->
    <div class="row">
        <div class="col-lg-9 p-0 vh-100  d-flex justify-content-center">
            <div class="accountbg d-flex align-items-center">
                <div class="account-title text-center text-white">
                    <h4 class="mt-3 text-white">Welcome To <span class="text-warning">Library Management System</span> </h4>
                    <h1 class="text-white">Let's Get Started</h1>
                    <p class="mt-3 font-size-14">Access a world of knowledge! Log in to your library management system now to explore a vast collection of books, e-materials, and more. Enjoy the convenience of online study materials at your fingertips.
                    </p>
                    <div class="border w-25 mx-auto border-warning"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 pr-0">
            <div class="card mb-0 shadow-none">
                <div class="card-body">
                    <h3 class="text-center m-0">
                        <a href="#" class="logo logo-admin"><img src="{{ asset('backend/assets/images/logo/library-logo.png') }}" height="60" alt="logo" class="my-3"></a>
                    </h3>
                    <div class="px-2 mt-2">
                        <h4 class="text-primary font-size-18 mb-2 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to Dashboard.</p>
                        @if(Illuminate\Support\Facades\Session::has('error'))
                        <div class="alert alert-danger">
                            {{Illuminate\Support\Facades\Session::get('error')}}
                        </div>
                        @endif
                        <form class="form-horizontal my-4 loginForm" action="{{route('login.submit')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email" id="username" placeholder="Enter email" required>
                                </div>
                                @error('email')
                                    <span class="text text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                </div>
                                @error('password')
                                    <span class="text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <a href="pages-recoverpw-2.html" class="text-muted font-13"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>

                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">© {{ date('Y') }} Aayush</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Log In page -->
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
<script>
    $(document).ready(function(){
        $('.loginForm').validate();
    });
</script>
@endpush
