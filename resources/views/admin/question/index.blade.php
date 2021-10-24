@extends('layouts.admin')

@section('content')
        <div class="row">
            <div class="col">
            <h5 class="white-text panel-space">Fragenkatalog</h5>
            </div>
            <div class="col">
                <a href="{{ route('admin.whitelist') }}" id="download-button"
                   class="btn-small waves-effect waves-light red lighten-1 button-spacer">Zurück</a>
            </div>
            <div class="col">
                <a href="{{ route('admin.question.create') }}" id="download-button"
                   class="btn-small waves-effect waves-light blue-grey lighten-1 button-spacer">Frage anlegen</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <ul class="collapsible">
                    @foreach($questions as $question)
                    <li>
                        <div class="collapsible-header"><b>{{ $question->id }}</b>&nbsp; - {{ $question->question }}</div>
                        <div class="collapsible-body white white-text">
                            <span>
                                <div class="row>">{{ $question->answer_a }}</div>
                                <div class="answer-spacer"></div>
                                <div class="row>">{{ $question->answer_b }}</div>
                                <div class="answer-spacer"></div>
                                <div class="row>">{{ $question->answer_c }}</div>
                            </span>
                        </div>
                    </li>
                    @endforeach
                </ul>
        </div>
        </div>
@endsection
