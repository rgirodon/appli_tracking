@extends('layouts.app')

@section('logout')
    @if(isset(Auth::user()->name))
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/joueur/logout') }}">
                    {{ __('Logout') }}
                </a>
            </div>
        </li>
    @endif
@endsection

@section('content')
    <form method="post" action="{{ url('player/checklogin') }}">
        <div class="container-fluid border">
            <p class="text-left">Selectionnez votre couleur d'équipe :</p>
        </div>
        <div class=" container-fluid btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-danger">
                <input type="radio" name="color" value="Rouge">Rouge
            </label>
            <label class="btn btn-outline-success">
                <input type="radio" name="color" value="Verte">Verte
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="color" value="Bleue">Bleue
            </label>
            <label class="btn btn-outline-secondary">
                <input type="radio" name="color" value="Grise">Grise
            </label>
            <label class="btn btn-outline-dark">
                <input type="radio" name="color" value="Noire">Noire
            </label>
        </div>
        <div class="container-fuild border">
            <p class="text-left">Selectionnez votre numéro d'équipe :</p>
        </div>
        <div class=" container-fluid btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-light">
                <input type="radio" name="num" value="1">1
            </label>
            <label class="btn btn-light">
                <input type="radio" name="num" value="2">2
            </label>
            <label class="btn btn-light">
                <input type="radio" name="num" value="3">3
            </label>
            <label class="btn btn-light">
                <input type="radio" name="num" value="4">4
            </label>
            <label class="btn btn-light">
                <input type="radio" name="num" value="5">5
            </label>
        </div>

        {{ csrf_field() }}
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary" value="Login"/>
        </div>
    </form>
@endsection