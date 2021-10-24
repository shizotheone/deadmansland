@extends('layouts.admin')

@section('content')
        <div class="row">
            <div class="col">
            <h5 class="white-text panel-space">Whitelistkatalog</h5>
            </div>
            <div class="col">
                <a href="{{ route('admin.whitelist') }}" id="download-button"
                   class="btn-small waves-effect waves-light red lighten-1 button-spacer">Zurück</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <ul class="collection">
                    @foreach($whitelists as $whitelist)
                        @foreach($users as $user)
                            @if($user->id === $whitelist->user_id)
                                <?php $nickname = $user->nickname ?>
                            @endif
                        @endforeach
                    <li class="collection-item">
                        <div>
                            <b>{{ $nickname }}</b>&nbsp; - {{ $whitelist->created_at->format('d.m.Y') }}
                            <a class="secondary-content" href="{{ route('admin.whitelist.show', $whitelist->id) }}">
                                <i class="material-icons blue-text right">search</i>
                            </a>
                            <a class="secondary-content" href="">
                                <i class="material-icons red-text right">close</i>
                            </a>
                            <a class="secondary-content" href="">
                                <i class="material-icons green-text right">add</i>
                            </a>
                            <a class="secondary-content" href="">
                                <i class="material-icons orange-text right">account_circle</i>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
        </div>
        </div>
@endsection
