<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon joli site</title>
    {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
    {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
    {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
    <style> textarea { resize: none; } </style>
</head>
<body>
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
</body>
</html>
