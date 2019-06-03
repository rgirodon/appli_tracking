@extends('layouts.app')

{{--@section('content')
<form method="Post">
    <select name="taskOption">
        <option value="Jaune">Jaune</option>
        <option value="Bleu">Bleu</option>
        <option value="Vert">Vert</option>
        <option value="Rouge">Rouge</option>
        <option value="Orange">Orange</option>
    </select>
    <select name="taskOption">
        <option value="un">1</option>
        <option value="Deux">2</option>
        <option value="Trois">3</option>
        <option value="Quatre">4</option>
        <option value="CinQ">5</option>
        <option value="un">6</option>
        <option value="un">7</option>
        <option value="un">8</option>
    </select>
    <input type="submit" value="Submit the form" />
</form>
@endsection--}}

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
    <div class=" container-fluid btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-success">
            <input type="radio" checked>Rouge
        </label>
        <label class="btn btn-success">
            <input type="radio">Vert
        </label>
        <label class="btn btn-success">
            <input type="radio">Bleu
        </label>
        <label class="btn btn-success">
            <input type="radio">Jaune
        </label>
        <label class="btn btn-success">
            <input type="radio">Orange
        </label>
    </div>
    <div class=" container-fluid btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-success">
            <input type="radio" checked>1
        </label>
        <label class="btn btn-success">
            <input type="radio" checked>2
        </label>
        <label class="btn btn-success">
            <input type="radio" checked>3
        </label>
        <label class="btn btn-success">
            <input type="radio" checked>4
        </label>
        <label class="btn btn-success">
            <input type="radio" checked>5
        </label>
    </div>
@endsection