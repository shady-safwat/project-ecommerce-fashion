@extends('site.app')

@section('content')
<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Register Your Account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Name -->
                        <div class="form-group row">
                            <div class="input-group col-lg-12 mb-4">
                                <input id="name" type="text" name="name" placeholder="Name" class="form-control bg-white border-left-0 border-md @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="form-group row">
                            <div class="input-group col-lg-12 mb-4">
                                <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md @error('email') is-invalid @enderror"  autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group row">
                            <div class="input-group col-lg-12 mb-4">
                                <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md @error('password')" is-invalid @enderror  autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Confirmation -->
                        <div class="form-group row">
                            <div class="input-group col-lg-12 mb-4">
                                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group row col-lg-12 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>


                        <div class="text-center mt-3 w-100">
                            <p class="text-muted font-weight-bold">{{ __('Already Registered?') }} <a href="{{ route('login') }}" class="text-primary ml-2">{{ __('Login') }}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
