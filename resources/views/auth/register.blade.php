@extends('base')

@section('title', 'Login')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h1 class="text-center text-muted mb-3 mt-5 fw-bold">Sign up</h1>
            <p class="text-center text-muted mb-5 fw-bold">Create an account if you don't have one.</p>
            <form method="POST" action="{{route('register')}}" class="row g-3" id="form-register" >
                @csrf

                <div class="col-md-6">
                    <label for="firstname" class="form-label fw-bold fw-bold">First Name</label>
                    <input type="text"  class="form-control fw-bold fw-bold" id="firstname" name="firstname" value="{{old('firstname')}}" required autocomplete="firstname" autofocus>
                    <small class="text-danger fw-bold fw-bold" id="error-register-firstname"></small>
                </div>

                <div class="col-md-6">
                    <label for="lastname" class="form-label fw-bold">Last Name</label>
                    <input type="text" class="form-control fw-bold" id="lastname" name="lastname" value="{{old('lastname')}}" required autocomplete="lastname" autofocus>
                    <small class="text-danger fw-bold fw-bold" id="error-register-lastname"></small>
                </div>

                <div class="col-md-12">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control fw-bold" id="email" name="email" value="{{old('email')}}" required autocomplete="email" url-emailExist="{{route('app_exist_email')}}" token="{{ csrf_token() }}">
                    <small class="text-danger fw-bold fw-bold" id="error-register-email"></small>
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control fw-bold" id="password" name="password" value="{{old('password')}}" required autocomplete="password" autofocus>
                    <small class="text-danger fw-bold" id="error-register-password"></small>
                </div>

                <div class="col-md-6">
                    <label for="password-confirm" class="form-label fw-bold">Password Confirmation</label>
                    <input type="password" class="form-control fw-bold" id="password-confirm" name="password-confirm" value="{{old('passord-confirm')}}" required autocomplete="password-confirm" autofocus>
                    <small class="text-danger fw-bold" id="error-register-password-confirm"></small>
                </div>

                <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input fw-bold" type="checkbox" id="agreeTerms" name="agreeTerms">
                      <label class="form-check-label fw-bold" for="agreeTerms">Agree Terms</label><br>
                      <small class="text-danger fw-bold" id="error-register-agreeTerms"></small>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-secondary fw-bold" type="button" id="register-user">Register</div></button>
                </div>

                <p class="text-center text-muted mt-4 fw-bold">Already have an account ? <a href="{{route('login')}}">Login</a> </p>


            </form>
        </div>
    </div>
</div>

@endsection
