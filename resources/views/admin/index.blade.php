@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col s4 offset-s4">
            <div class="card card-green">
                <div class="card-header center-align"><b>Admin Dashboard</b></div>

                <div class="card-body center-align">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Admin!
                </div>
            </div>
        </div>
    </div>

@endsection
