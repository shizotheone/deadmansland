@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card white darken-1">
                <table class="responsive-table table-white">
                    <thead>
                    <tr>
                        <th>Nickname</th>
                        <th>E-Mail</th>
                        <th>Rolle</th>
                        <th>Blacklist</th>
                        <th>bearbeiten</th>
                        <th>löschen</th>
                        <th>Passwort reset</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->nickname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->getRoleNames()->toArray()) }}</td>
                            @if($user->blacklist == 0)
                                <td>Nein</td>
                            @else
                                <td>Ja</td>
                            @endif
                            <td><a class="waves-effect waves-teal btn-flat"
                                   href="{{ route('admin.user.edit', $user->id) }}"><i
                                        class="material-icons blue-text">edit</i></a></td>
                            <td>
                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="post">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="DELETE">

                                    <a class="waves-effect waves-teal btn-flat"
                                       onclick="$(this).closest('form').submit();"><i class="material-icons red-text">delete</i></a>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('admin.user.password_reset', $user->id) }}" method="post">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="POST">

                                    <a class="waves-effect waves-teal btn-flat"
                                       onclick="$(this).closest('form').submit();"><i class="material-icons orange-text">vpn_key</i></a>
                                </form>
                            <td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
