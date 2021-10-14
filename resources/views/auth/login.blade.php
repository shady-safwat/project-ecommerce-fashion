@extends('site.app')

@section('content')
<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Login Your Account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-group row">
                            <div class="input-group col-lg-12 mb-4">
                                <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md @error('email') is-invalid @enderror name='email' value='{{ old('email')}}'" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group row">
                            <div class="input-group col-lg-6 mb-4">
                                <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md @error('password') is-invalid @enderror " required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group col-lg-12 mx-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group row col-lg-12 mx-auto mt-3">
                            <button type="submit" class="btn btn-primary me-1">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="form-group row">
                            <div class="input-group col-lg-6 mb-4 mt-3">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4 mt-2">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <!-- Social Login -->
                        <div class="form-group row col-lg-12 mx-auto">
                            <a href="{{ route('facebook.login') }}" class="btn btn-primary btn-block py-2 btn-facebook">
                                <i class="fab fa-facebook-f fa-fw"></i>
                                <span class="font-weight-bold">{{ __('Register with Facebook') }}</span>
                            </a>
                        </div>

                        <div class="text-center mt-3 w-100">
                            <p class="text-muted font-weight-bold">{{ __('Dont have an account?') }} <a href="{{route('register')}}" class="text-primary ml-2">{{ __('register') }}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
