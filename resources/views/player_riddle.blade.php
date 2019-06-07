@extends('base')

@section('content')
    <template id="player-riddle-row-template">
        <div class="row">
            <div class="col d-flex justify-content-around"></div>
        </div>
    </template>

    <template id="player-riddle-template">
        <div class="card player-riddle-card my-2">
            <div class="card-body">
                <div class="row mx-auto justify-content-between">
                    <h5 class="card-title"></h5>
                    <span class="timer" style="display: none;">00:00</span>
                </div>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text"></p>

                <div class="row mx-auto">
                    <button class="btn btn-primary start-button my-1">Commencer l'énigme</button>
                </div>
                <div class="row mx-auto">
                    <button class="btn btn-primary validate-button my-1" style="display: none;">Valider l'énigme</button>
                </div>
                <div class="row mx-auto">
                    <button class="btn btn-primary cancel-button my-1" style="display: none;">Annuler l'énigme</button>
                </div>
            </div>
        </div>
    </template>

    <div id="mySuperRiddleGrid"></div>

    <script>
        // on commence par créer une PlayerRiddleGrid sur la div sélectionnée
        const playerRiddleGrid = new PlayerRiddleGrid('#mySuperRiddleGrid');
        // on ajoute une PlayerRiddle à la ligne par défaut (la numéro 1)
        const playerRiddle1_1 = playerRiddleGrid.addPlayerRiddle(1);
        // on peut modifier les attributs d'une PlayerRiddle un par un
        playerRiddle1_1.setTitle('Nom énigme 1');
        playerRiddle1_1.setSubtitle('Sous-titre');
        playerRiddle1_1.setDescription('Description : Lorem ipsum dolor sit amet, consectetur adipisicing elit.');

        // on ajoute une nouvelle ligne
        playerRiddleGrid.addRow();
        // on ajoute une nouvelle énigme à la ligne 2
        const playerRiddle2_1 = playerRiddleGrid.addPlayerRiddle(2);
        // on peut aussi modifier les atributs avec un array object
        playerRiddle2_1.setAttributes({
            title: 'Nom énigme 2',
            subtitle: 'Sous-titre',
            showTimer: true,
            showButtons: {validate: true, cancel: true, start: false},
            description: 'Description : Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        });
        // ces énigmes seront vides de mots
        const playerRiddle2_2 = playerRiddleGrid.addPlayerRiddle(2);
        const playerRiddle2_3 = playerRiddleGrid.addPlayerRiddle(2);
    </script>

    {{--    <div id="basicUsage">00:00:00</div>--}}
    {{--    <script>--}}
    {{--        var timer = new Timer();--}}
    {{--        timer.start();--}}
    {{--        timer.addEventListener('secondsUpdated', function (e) {--}}
    {{--            $('#basicUsage').html(timer.getTimeValues().toString());--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection