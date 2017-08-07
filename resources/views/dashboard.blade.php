@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <h1 class="text-center">
                    Welcome {{ Auth::user()->name }}
                </h1>

                <img class="profile-img" src="{{ Auth::user()->avatar }}"
                    alt="avatar">
                
                <a href="/logout" class="btn btn-primary col-xs-12">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
