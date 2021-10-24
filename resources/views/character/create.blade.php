@extends('layouts.side')
@section('content')
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text DML-Fontcolor western-font">DEAD MAN'S LAND</h1>
            <div class="row center">
                <h5 class="header col s12 light DML-Fontcolor western-font">Whitelisting</h5>
            </div>
            <br><br>
        </div>
    </div>
    <div class="parallax"><img src="{{ asset('background1.jpg') }}" alt="Unsplashed background img 1"></div>
    </div>
    <div>
        <div class="line">&nbsp;</div>
        <div class="line2">&nbsp;</div>
    </div>
    <div class="container container-font">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row center">
                <h4 class="header col s12 light western-font">Erzähl uns was über deinen Charakter!</h4>
            </div>
            <div class="container">
                <div class="line">&nbsp;</div>
                <div class="line2">&nbsp;</div>
            </div>
            <form class="col s12" action="{{ route('character.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
                <div class="row center">
                    <p>
                        Während dein Whitelist-Fragebogen vom Team geprüft wird, können wir schon mal zu deiner Charaktergeschichte kommen. Erzähl uns doch alles über deinen Charakter.
                    </p>
                </div>
                <div class="container form-group">
                    <div class="form-group row">
                        <label for="name" class="col s6 offset-l3">{{ __('name') }}</label>

                        <div class="col s6 offset-l3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col s6 offset-l3">{{ __('lastname') }}</label>

                        <div class="col s6 offset-l3">
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthdate" class="col s6 offset-l3">{{ __('birthdate') }}</label>

                        <div class="col s6 offset-l3">
                            <input id="birthdate" type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>

                            @error('birthdate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="story" class="col s6 offset-l3">{{ __('story') }}</label>

                        <div class="col s6 offset-l3">
                            <textarea id="story" type="text" class="materialize-textarea form-control @error('story') is-invalid @enderror" name="story" value="{{ old('story') }}" required autocomplete="story" autofocus></textarea>

                            @error('birthdate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                        <div class="input-field col s6 offset-l3">
                            <textarea id="story" class="materialize-textarea white-text" data-length="800"></textarea>
                            <label for="story">Charakterstory</label>
                        </div>
                    </div>
                </div>
                <div class="row center">
                    <button class="btn btn-signin green" type="submit">Charakter anlegen
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Schreib die Geschichte mit Uns neu!</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="../../background9.jpg" alt="Unsplashed background img 3"></div>
    </div>

@endsection
