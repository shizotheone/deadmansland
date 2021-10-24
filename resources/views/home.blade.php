@extends('layouts.side')

@section('content')
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text DML-Fontcolor western-font">DEAD MANS LAND</h1>
            <div class="row center">
                <h5 class="header col s12 light DML-Fontcolor DML-HandFont">Willkommen zurück</h5>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
    </div>
    <div>
        <div class="line">&nbsp;</div>
        <div class="line2">&nbsp;</div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col s6 offset-s3">
                <div class="headline-font white-text center">
                    <h5>Hallo {{Auth::User()->nickname}}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m4">
            <div class="card-panel teal">
                <span class="white-text headline-font">Whitelist - Status @if(Auth::User()->whitelisted == 1) <span class="green-text secondary-content">erfolgreich gewhitelisted</span> @elseif(Auth::User()->whitelist_send == 1)<span class="orange-text secondary-content">Prüfung ausstehend</span>@else<span class="red-text secondary-content">nicht gewhitelisted</span> @endif</span><br>
                <div class="card-spacer-panel"></div>
                @if(Auth::User()->whitelisted == 1)

                    <p class="white-text">Du wurdest erfolgreich gewhitelisted und du bist für den Serverbeitritt freigeschalten. Solltest du nicht auf den Server kommen, wende dich bitte an den Support!</p>

                    @elseif(Auth::User()->whitelist_send == 1)

                    <p class="white-text">Dein Whitelist-Antrag wurde noch nicht bearbeitet.</p>
                    <p class="white-text">Whitelist Übersicht</p>
                    <div class="card-spacer-panel"></div>
                    <table>
                        <thead>
                        <tr class="white-text">
                            <th>Datum</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($whitelists as $whitelist)
                        @if($whitelist->user_id === Auth::User()->id)
                            <tr class="grey-text">
                                <td>{{$whitelist->created_at->format('d.m.Y - h:m')}}</td>
                                @if($whitelist->status === 1)
                                <td class="orange-text">wird geprüft</td>
                                    @elseif($whitelist->status === 3)
                                    <td class="red-text">nicht bestanden</td>
                                    @endif
                            </tr>
                        @endif
                    @endforeach
                        </tbody>
                    </table>
                    @else
                    <p class="white-text">Du bist aktuell nicht gewhitelisted, um auf dem Server spielen zu können musst du dich whitelisten. Hier kommst du direkt zum Whitelist-Fragebogen.</p>
                    <div class="center">
                    <a href="{{ route('whitelisting.index') }}" id="download-button"
                       class="btn-small waves-effect waves-light darken-3 center-align green center">jetzt whitelisten</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card-panel teal">
                <span class="white-text headline-font">Charaktere <span class="yellow-text secondary-content">{{$characterscount}}</span></span><br>
                <div class="card-spacer-panel"></div>
                @if($characterscount == 0)
                    <p class="white-text">Du hast noch keinen Character erstellt. Bitte erstelle deinen Character.</p>
                    <div class="center">
                        <a href="{{ route('character.create') }}" id="download-button"
                           class="btn-small waves-effect waves-light darken-3 center-align green center">Charakter ersteller</a>
                    </div>
                    @else
                    <table>
                        <thead>
                        <tr class="white-text">
                            <th>Datum</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($characters as $character)
                            @if($character->user_id === Auth::User()->id)
                                <tr class="grey-text">
                                    <td>{{$character->created_at->format('d.m.Y - h:m')}}</td>
                                    <td>{{$character->name}} {{$character->lastname}}</td>
                                    @if($character->status === 1)
                                        <td class="orange-text">wird geprüft</td>
                                    @elseif($character->status === 2)
                                        <td class="green-text">bestanden</td>
                                    @elseif($character->status === 3)
                                        <td class="red-text">nicht bestanden</td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
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
        <div class="parallax"><img src="background9.jpg" alt="Unsplashed background img 3"></div>
    </div>
@endsection
