@extends('layouts.main')

@section('content')

    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h1 class="header col s4 offset-s4 light western-font grey-text">anmelden</h1>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col s4 offset-s4">
                        <div class="card-side">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email"
                                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-4">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror white-text" name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror white-text" name="password"
                                                   required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <label>
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                                <span>{{ __('Remember Me') }}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary blue-grey">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link red" href="{{ route('password.request') }}">
                                                    {{ __('Passwort vergessen?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="background8.jpg" alt="Unsplashed background img 2"></div>
    </div>
    <div>
        <div class="line">&nbsp;</div>
        <div class="line2">&nbsp;</div>
    </div>

@endsection

