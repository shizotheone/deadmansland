@extends('layouts.side')

@section('content')

    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h1 class="header col s4 offset-s4 light western-font black-text">Registrierung</h1>
            </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col s6 offset-s3 register-background">
        <div class="col s10 offset-s1">
            <div class="card-side">

                <div class="card-body white-text">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">{{ __('Nickname') }}</label>

                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control white-text @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birthday">Geburtstdatum</label>

                            <div class="col-md-6">
                            <input id="birthday" type="text"  class="form-control white-text @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="=birthday" autofocus>

                            @if($errors->has('birthday'))
                                <span class="helper-text error">{{ $errors->first('birthday') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control white-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Passwort') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control white-text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Passwort bestätigen') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control white-text" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label>
                                <input type="checkbox" />
                                <span>Regeln gelesen und akzeptiert.</span>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label>
                                <input type="checkbox" />
                                <span>Datenschutzbestimmungen gelesen und akzeptiert.</span>
                            </label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 center">
                                <button type="submit" class="btn-large btn-primary green">
                                    {{ __('Registrieren') }}
                                </button>
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
    </div>
    <div class="parallax"><img src="background10.jpg" alt="Unsplashed background img 2"></div>
    </div>
    <div>
        <div class="line">&nbsp;</div>
        <div class="line2">&nbsp;</div>
    </div>
@endsection
