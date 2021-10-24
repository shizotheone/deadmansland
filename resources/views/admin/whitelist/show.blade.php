@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h5 class="white-text panel-space">Whitelist-Antrag von {{ $user->nickname }}</h5>
            <p class="white-text panel-space">Antrag vom {{ $whitelist->created_at }}</p>
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
                    <input name="question_1" type="hidden" value="{{ $whitelist->question_1 }}">
                    <p>
                        <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_1){{ $question->question }} <?php $questioning = $question ?>@endif
                                @endforeach
                        </b></p>
                    <p>
                        <label>
                            <input name="answer_1_a" type="checkbox"
                                   @if($whitelist->answer_1_a == 1 ) checked="checked" @endif disabled="disabled" />
                            <span>{{ $questioning->answer_a }}</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="answer_1_b" type="checkbox"
                                   @if($whitelist->answer_1_b == 1 ) checked="checked" @endif disabled="disabled" />
                            <span>{{ $questioning->answer_b }}</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="answer_1_c" type="checkbox"
                                   @if($whitelist->answer_1_c == 1 ) checked="checked" @endif disabled="disabled" />
                            <span>{{ $questioning->answer_c }}</span>
                        </label>
                    </p>
                </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_2){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_2_a" type="checkbox"
                               @if($whitelist->answer_2_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_2_b" type="checkbox"
                               @if($whitelist->answer_2_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_2_c" type="checkbox"
                               @if($whitelist->answer_2_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
            </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_3){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_3_a" type="checkbox"
                               @if($whitelist->answer_3_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_3_b" type="checkbox"
                               @if($whitelist->answer_3_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_3_c" type="checkbox"
                               @if($whitelist->answer_3_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
            </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_4){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_4_a" type="checkbox"
                               @if($whitelist->answer_4_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_4_b" type="checkbox"
                               @if($whitelist->answer_4_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_4_c" type="checkbox"
                               @if($whitelist->answer_4_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
            </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_5){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_5_a" type="checkbox"
                               @if($whitelist->answer_5_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_5_b" type="checkbox"
                               @if($whitelist->answer_5_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_5_c" type="checkbox"
                               @if($whitelist->answer_5_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
            </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_6){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_6_a" type="checkbox"
                               @if($whitelist->answer_6_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_6_b" type="checkbox"
                               @if($whitelist->answer_6_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_6_c" type="checkbox"
                               @if($whitelist->answer_6_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
            </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_7){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_7_a" type="checkbox"
                               @if($whitelist->answer_7_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_7_b" type="checkbox"
                               @if($whitelist->answer_7_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_7_c" type="checkbox"
                               @if($whitelist->answer_7_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
            </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_8){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_8_a" type="checkbox"
                               @if($whitelist->answer_8_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_8_b" type="checkbox"
                               @if($whitelist->answer_8_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_8_c" type="checkbox"
                               @if($whitelist->answer_8_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
            </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_9){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_9_a" type="checkbox"
                               @if($whitelist->answer_8_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_9_b" type="checkbox"
                               @if($whitelist->answer_9_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_9_c" type="checkbox"
                               @if($whitelist->answer_9_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
            </div>
            <div class="form-group row center">
                <p>
                    <b>@foreach($questions as $question)
                            @if($question->id === $whitelist->question_10){{ $question->question }} <?php $questioning = $question ?>@endif
                        @endforeach
                    </b>
                </p>
                <p>
                    <label>
                        <input name="answer_10_a" type="checkbox"
                               @if($whitelist->answer_10_a == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_a }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_10_b" type="checkbox"
                               @if($whitelist->answer_10_b == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_b }}</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="answer_10_c" type="checkbox"
                               @if($whitelist->answer_10_c == 1 ) checked="checked" @endif disabled="disabled" />
                        <span>{{ $questioning->answer_c }}</span>
                    </label>
                </p>
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
