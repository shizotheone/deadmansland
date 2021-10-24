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
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
</div>
    <div>
        <div class="line">&nbsp;</div>
        <div class="line2">&nbsp;</div>
    </div>
<div class="container container-font">
    <div class="section">
        <!--   Icon Section   -->
        <div class="row center">
            <h4 class="header col s12 light western-font">Willkommen beim Whitelisting-Verfahren</h4>
        </div>
        <div class="row center text-font">
            <p>Um bei uns auf dem Server spielen zu können, musst du eine Reihe an Fragen beantworten. Durch unsere zufällig gewählten Fragen werden wir dein Verständnis von Roleplay auf den Prüfstand stellen. Denn nur wenn wir alle die selben Vorstellungen von Roleplay haben, können wir einzigartiges Spielerlebnis erfahren.</p>
            <p>Nachdem du den Whitelist-Bogen ausgefüllt hast, wirst du automatisch zur Charackterstellung geleitet. Für deine Charaktererstellung benötigst du eine ordentliche Charaktergeschichte.</p>
        </div>
        <div class="row center">
            <a href="{{ route('whitelisting.create') }}" id="download-button"
               class="btn-small waves-effect waves-light green">Whitelist Fragebogen starten</a>
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
