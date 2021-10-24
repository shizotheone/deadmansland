@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h5 class="white-text panel-space">Whitelist-Antrag von {{ $user->nickname }}</h5>
            <p class="white-text panel-space">Antrag vom {{ $character->created_at->format('d.m.Y h:m') }}</p>
        </div>
        <div class="col">
            <a href="{{ route('admin.whitelist') }}" id="download-button"
               class="btn-small waves-effect waves-light red lighten-1 button-spacer">Zurück</a>
        </div>
    </div>
<div class="container container-font">
    <div class="section card-panel">
        <form class="col s12" action="#" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group row center">
                    <input name="question_1" type="hidden" value="{{ $character->id }}">
                    <p>{{ $character->name }} {{ $character->lastname }} geboren am {{ $character->birthdate->format('d.m.Y') }}</p>
                    <p>{{ $character->story }}</p>
                </div>

            <div class="row center">
                <button class="btn btn-signin red" type="submit">Ablehnen
                    <i class="material-icons right">undo</i>
                </button>
                <button class="btn btn-signin green" type="submit">Annehmen
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
