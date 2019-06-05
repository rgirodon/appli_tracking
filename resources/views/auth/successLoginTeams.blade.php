@extends('layouts.app')

@section('content')
    <div class="container box">
        <h3 align="center"><strong>Vie ta vie {{ Auth::user()->name }} !</strong></h3>
    </div>
@endsection

@section('logout')
    @if(isset(Auth::user()->name))
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/player/logout') }}">
                    {{ __('Logout') }}
                </a>
            </div>
        </li>
    @endif
@endsection