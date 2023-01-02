@extends('base')

@section('title', 'Login')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h1 class="text-center text-muted mb-3 mt-5 fw-bold">Please sign in</h1>
                <p class="text-center text-muted mb-5 fw-bold">Your articles are waiting for you.</p>
                <form method="POST" action="{{route('login')}}">
                    @csrf

                    @error('email')
                        <div class="alert alert-danger text-center fw-bold" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    @error('password')
                        <div class="alert alert-danger text-center fw-bold" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    <label for="email" class="fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="fw-bold form-control mb-3 @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus>

                    <label for="password" class="fw-bold">Password</label>
                    <input type="password" name="password" id="password" class="fw-bold form-control mb-3  @error('password') is-invalid @enderror" required autocomplete="current-password">

                    <div class="row mb-3">
                        <div class="col-md-6">

                            <div class="form-check form-switch">
                                <input class="form-check-input fw-bold" type="checkbox" role="switch" id="remember" name="remember" {{old('remember')? 'checked': ''}}>
                                <label class="form-check-label fw-bold" for="remember">Remember me</label>
                            </div>

                        </div>
                        <div class="col-md-6 text-end fw-bold">
                            <a href="#">Forgot password?</a>
                          </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-secondary fw-bold" type="submit">Sign in</div></button>
                    </div>

                    <p class="text-center text-muted mt-4 fw-bold">Not registered yet ? <a href="{{route('register')}}">Create an account</a> </p>
                </form>
            </div>
        </div>
    </div>

@endsection
