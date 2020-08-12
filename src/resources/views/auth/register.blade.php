@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-5 mb-5 font-black text-2xl" style="color:#1f3a93;">{{ __('Register') }}</div>

                <div class=" card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row  mb-5">
                            <label for="name" class="block text-gray-600 font-bold mb-1 md:mb-0 pr-4">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control p-2 @error('name') is-invalid @enderror border-solid border border-gray-600" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="username" class="block text-gray-600 font-bold mb-1 md:mb-0 pr-4">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control p-2 @error('username') is-invalid @enderror border-solid border border-gray-600" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="email" class="block text-gray-600 font-bold mb-1 md:mb-0 pr-4">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control p-2 @error('email') is-invalid @enderror border-solid border border-gray-600" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="password" class="block text-gray-600 font-bold mb-1 md:mb-0 pr-4">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control p-2 @error('password') is-invalid @enderror border-solid border border-gray-600" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="password-confirm" class="block text-gray-600 font-bold mb-1 md:mb-0 pr-4">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control p-2 border-solid border border-gray-600" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary px-10 py-3 mt-5 mr-5 text-white" style="background:#1f3a93;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection