@extends('layouts.base')

@section('content')
    {{--modale de validation des énigmes--}}
    <div class="modal fade" id="validation-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <form class="col">
                        <div class="form-group">
                            <label for="validation-modal-code" class="form-control-label">Veuillez entrer le code que vous avez reçu à la fin de cette énigme</label>
                            <input type="text" class="form-control" name="code" id="validation-modal-code" placeholder="Entrez le code ici">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Vérifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--template pour une énigme joueur--}}
    <template id="player-riddle-template">
        <div class="card player-riddle-card my-2">
            <div class="card-body">
                <div class="row mx-auto justify-content-between">
                    <h5 class="card-title"></h5>
                    <span class="timer">00:00</span>
                </div>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text"></p>

                <div class="row mx-auto">
                    <button class="btn btn-primary start-button my-1">Commencer l'énigme</button>
                </div>
                <div class="row mx-auto">
                    <button class="btn btn-primary validate-button my-1" data-toggle="modal" data-target="#validation-modal" style="display: none;">Valider l'énigme</button>
                </div>
                <div class="row mx-auto">
                    <button class="btn btn-primary cancel-button my-1" style="display: none;">Annuler l'énigme</button>
                </div>
            </div>
        </div>
    </template>

    {{--Création des onglets--}}
    <script>
        tablist.addTab({title: 'Accueil', active: true});
        tablist.addTab({title: 'Salon de clavardage avec les Game Masters'});
    </script>

    {{--Création des énigmes au chargement de la page--}}
    <script>
        tablist.contentOfTab(1).append($('<div>', {id: 'mySuperRiddleGrid'})); {{--div de base de la grille d'énigmes--}}
        const playerRiddleGrid = new PlayerRiddleGrid('#mySuperRiddleGrid');
        const res = playerRiddleGrid.update();
        console.log(res);
    </script>
@endsection