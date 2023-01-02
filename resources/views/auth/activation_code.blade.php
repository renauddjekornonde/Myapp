@extends('base')

@section('title', 'Account activation')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="text-center text-muted mb-3 mt-5 fw-bold">Activation</h1>

            @if(Session::has('Warning'))
            <div class="alert alert-warning text-center fw-bold" role="alert">
                {{Session::get('Warning')}}
            </div>
            @endif

            <form action="{{route('app_activation_code', ['token'=>$token])}}" method="POST">
                @csrf

                <div class="mb-2">
                    <label for="activation_code" class="fw-bold">Activation Code</label>
                    <input type="text" name="activation_code" id="activation_code" class="fw-bold form-control mb-3" required>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <a href="#" class="fw-bold">Change your email address</a>
                    </div>
                    <div class="col-md-6 text-end">
                    <a href="#" class="fw-bold">Resend the activation code</a>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <button class="btn btn-secondary fw-bold" type="submit">Activate</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
