@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col l4 m6 s12">
            <div class="card admin-card-color">
                <div class="card-content">
                    <span class="card-title">Fragenkatalog</span>
                    <div class="card-spacer-admin"></div>
                    <div class="card-content">
                        Aktuell gibt es {{ $questions }} Whitelist-Fragen im Fragenkatalog
                    </div>
                </div>
                <div class="card-action admin-card-action">
                    <a href="{{ route('admin.question.index') }}">Fragen auflisten</a>
                </div>
                <div class="card-action admin-card-action">
                    <a href="{{ route('admin.question.create') }}">neue Frage anlegen</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card admin-card-color">
                <div class="card-content">
                    <span class="card-title">Whitelist-Anträge</span>
                    <div class="card-spacer-admin"></div>
                    <div class="card-content">
                        Aktuell gibt es {{ $whitelists }} offene Whitelist-Anträge
                    </div>
                </div>
                <div class="card-action admin-card-action">
                    <a href="{{ route('admin.whitelist.index') }}">offene Whitelist-Anträge</a>
                </div>
                <div class="card-action admin-card-action">
                    <a href="#">abgeschlossene Whitelist-Anträge</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card admin-card-color">
                <div class="card-content">
                    <span class="card-title">Characters</span>
                    <div class="card-spacer-admin"></div>
                    <div class="card-content">
                        Aktuell gibt es {{ $characters }} offene Charakter-Erstellungen
                    </div>
                </div>
                <div class="card-action admin-card-action">
                    <a href="{{ route('admin.character.index') }}">alle Charaktere anzeigen</a>
                </div>
                <div class="card-action admin-card-action">
                    <a href="#">nicht gewhitelistete Charaktere anzeigen</a>
                </div>
            </div>
        </div>
    </div>
@endsection
