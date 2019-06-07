@extends('layouts.base')

@section('content')
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
@endsection
