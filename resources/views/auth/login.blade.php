@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mb-4" style="color: #2d4d73; font-family: 'Poppins', sans-serif;">
            To do list
        </h1>
        <div class="col-md-8">
            <div class="card">
                <div class="bg-white rounded-lg shadow-lg py-4 px-5 card-body">
                    <div class="font-weight-bold mb-3 " style="color: #2d4d73;">Login to you account</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <a href="{{ route('password.request') }}" class="font-weight-bold" style="color: #2d4d73; font-size: 12px">Forgot password</a>
                            <button type="submit" style="background: #6d05a1 0% 0% no-repeat padding-box;" class="btn btn-sm d-flex align-items-center justify-content-between border-0 text-white font-weight-bold py-2 px-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 20.333 17.792">
                                    <path id="arrow-right-to-bracket-regular" d="M20.333,35.813V45.979a3.812,3.812,0,0,1-3.813,3.813H13.662a.953.953,0,1,1,0-1.906h2.859a1.912,1.912,0,0,0,1.906-1.906V35.813a1.912,1.912,0,0,0-1.906-1.906H13.662a.953.953,0,0,1,0-1.906h2.859A3.813,3.813,0,0,1,20.333,35.813Zm-6.612,4.432-5.083-5.4a.952.952,0,1,0-1.39,1.3l3.57,3.8H.953a.953.953,0,0,0,0,1.906h9.865l-3.571,3.8a.952.952,0,0,0,.041,1.347.964.964,0,0,0,.655.259.949.949,0,0,0,.694-.3l5.083-5.4A.949.949,0,0,0,13.721,40.245Z" transform="translate(0 -32)" fill="#fff"/>
                                </svg>
                                <span class="ml-3">Login</span>
                            </button>
                        </div>
                        <!-- <a href="{{ route('register') }}" class="font-weight-bold" style="color: #2d4d73; font-size: 12px">REGISTER</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
