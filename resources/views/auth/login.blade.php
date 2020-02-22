@extends('layouts.app')

@section('content')

<form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
    @csrf
    <span class="login100-form-title p-b-32" style="font-size: 24px; text-align: center;" >
        {{ trans('auth.account_login') }}
    </span>

    <span class="txt1 p-b-11">
        {{ trans('auth.username') }}
    </span>
    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
        <input type="text" name="username"  class="input100  @error('username') is-invalid @enderror" value="{{ old('username') }}" autocomplete="username" autofocus>
        @error('username')
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="focus-input100"></span>
    </div>
    
    <span class="txt1 p-b-11">
        {{ trans('auth.password') }}
    </span>
    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
        <span class="btn-show-pass">
            <i class="fa fa-eye"></i>
        </span>
        <input id="password" type="password"  class="input100 @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="focus-input100"></span>
    </div>
    
    <div class="flex-sb-m w-full p-b-48">
        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="label-checkbox100" for="ckb1">
                {{ trans('auth.remeber_me') }}
            </label>
        </div>

        <div>
            <a href="#" class="txt3">
                {{ trans('auth.forgot_password') }}
            </a>
        </div>
    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
            {{ trans('auth.login') }}
        </button>
    </div>

</form>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('auth.login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ trans('auth.username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('auth.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ trans('auth.remeber_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ trans('auth.forgot_password') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
