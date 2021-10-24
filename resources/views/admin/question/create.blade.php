@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col s12 m5">
            <div class="card-panel">
                <h5>Frage anlegen</h5>
                <form class="col s12" action="{{ route('admin.question.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!--<h5>Neue Frage anlegen</h5>-->
                    <div class="form-group row">
                        <label for="question" class="col-md-4 col-form-label text-md-right">Frage</label>

                        <div class="col-md-6">
                            <textarea id="question" type="text" class="materialize-textarea form-control @error('question') is-invalid @enderror" name="question" value="{{ old('nickname') }}" required autocomplete="question" autofocus></textarea>

                            @error('question')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="answer_a" class="col-md-4 col-form-label text-md-right">Antwort A</label>

                        <div class="col-md-6">
                            <textarea id="answer_a" type="text" class="materialize-textarea form-control @error('answer_a') is-invalid @enderror" name="answer_a" value="{{ old('answer_a') }}" required autocomplete="answer_a" autofocus></textarea>

                            @error('answer_a')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="answer_b" class="col-md-4 col-form-label text-md-right">Antwort B</label>

                        <div class="col-md-6">
                            <textarea id="answer_b" type="text" class="materialize-textarea form-control @error('answer_b') is-invalid @enderror" name="answer_b" value="{{ old('answer_b') }}" required autocomplete="answer_b" autofocus></textarea>

                            @error('answer_b')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="answer_c" class="col-md-4 col-form-label text-md-right">Antwort C</label>

                        <div class="col-md-6">
                            <textarea id="answer_c" type="text" class="materialize-textarea form-control @error('answer_c') is-invalid @enderror" name="answer_c" value="{{ old('answer_c') }}" required autocomplete="answer_c" autofocus></textarea>

                            @error('answer_c')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-signin white" type="submit">Absenden
                        <i class="material-icons right">send</i>
                    </button>
                </form>
                <span>&nbsp;</span>
            </div>
        </div>
    </div>
@endsection
