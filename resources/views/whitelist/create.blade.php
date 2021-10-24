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
                <h4 class="header col s12 light western-font">Viel Erfolg {{ Auth::user()->nickname }}</h4>
            </div>
            <div class="container">
                <div class="line">&nbsp;</div>
                <div class="line2">&nbsp;</div>
            </div>
            <form class="col s12" action="{{ route('whitelisting.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <?php $i=1 ?>
            @foreach($questions as $question)
                    <div class="form-group row center">
                    <input name="question_{{$i}}" type="hidden" value="{{ $question->id }}">
                    <div class="">
                        <p class=""><b>{{ $question->question }}</b></p>
                    </div>
                    <p>
                        <label>
                            <input name="answer_{{$i}}_a" type="checkbox" {{ old('answer_'.$i.'_a') ? 'checked' : '' }}/>
                            <span>{{ $question->answer_a }}</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="answer_{{$i}}_b" type="checkbox" {{ old('answer_'.$i.'_b') ? 'checked' : '' }}/>
                            <span>{{ $question->answer_b }}</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="answer_{{$i}}_c" type="checkbox" {{ old('answer_'.$i.'_c') ? 'checked' : '' }}/>
                            <span>{{ $question->answer_c }}</span>
                        </label>
                    </p>
                </div>
                <?php $i++ ?>
            @endforeach
                <div class="row center">
                    <p>
                        Wenn du mit dem Fragebogen fertig bist, sende diesen über den Button unterhalb ab und das Team wird sich deine Antworten anschauen.
                    </p>
                </div>
                <div class="row center">
            <button class="btn btn-signin green" type="submit">Fragebogen Absenden
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
