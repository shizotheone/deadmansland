@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col s12">
        <div class="card">
            <table class="responsive-table">
                <thead>
                <tr>
                    <th>Alle Rollen im Überblick</th>
                </tr>
                </thead>

                <tbody>
                @foreach($roles->pluck('name') as $name)
                    <tr>
                        <td>{{$name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col s12 m3 l3">
        <div class="card-panel">
            <form action="{{ route('admin.roles.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="name" id="name" type="text" class="validate">
                        <label for="name">Rollenname</label>
                    </div>
                </div>
                <button class="btn btn-signin white" type="submit">Absenden
                    <i class="material-icons right">send</i>
                </button>

            </form>
        </div>
    </div>
</div>
@endsection
