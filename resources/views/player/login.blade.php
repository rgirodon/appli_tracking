@extends('layouts.base')

@section('content')
    <form class="player-login" method="post" action="{{ url('player/checklogin') }}">
        <div class="container mb-3" data-toggle="buttons">
            <div class="row">
                <span class="text-left">Sélectionnez votre couleur d'équipe</span>
            </div>
            <div class="row">
                <div class="btn-group btn-group-toggle w-100">
                    <label class="btn btn-outline-danger">
                        <input type="radio" name="color" value="Rouge">Rouge
                    </label>
                    <label class="btn btn-outline-success">
                        <input type="radio" name="color" value="Verte">Vert
                    </label>
                    <label class="btn btn-outline-primary">
                        <input type="radio" name="color" value="Bleue">Bleu
                    </label>
                    <label class="btn btn-outline-warning">
                        <input type="radio" name="color" value="Jaune">Jaune
                    </label>
                    <label class="btn btn-outline-dark">
                        <input type="radio" name="color" value="Violet">Violet
                    </label>
                </div>
            </div>
        </div>

        <div class="container mb-3" data-toggle="buttons">
            <div class="row">
                <span class="text-left">Sélectionnez votre numéro d'équipe</span>
            </div>
            <div class="row">
                <div class="btn-group btn-group-toggle w-100">
                    <label class="btn btn-light border">
                        <input type="radio" name="num" value="1">1
                    </label>
                    <label class="btn btn-light border">
                        <input type="radio" name="num" value="2">2
                    </label>
                    <label class="btn btn-light border">
                        <input type="radio" name="num" value="3">3
                    </label>
                    <label class="btn btn-light border">
                        <input type="radio" name="num" value="4">4
                    </label>
                    <label class="btn btn-light border">
                        <input type="radio" name="num" value="5">5
                    </label>
                </div>
            </div>
        </div>

        {{ csrf_field() }}
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </form>
@endsection