@extends('layouts.base')

@section('content')
    {{--template pour une énigme gm--}}
    <template id="gm-team-template">
        <div class="container jumbotron gm-team">
            <div class="row align-items-start gm-teams mb-3">
                <div class="col team-name align-self-center text-center"></div>
                <div class="col-8 gm-riddle-col">
                    <div class="row justify-content-center"><span class="current-riddle-title">Énigme actuelle&nbsp;: </span></div>
                    <div class="row justify-content-center"><span class="current-riddle"></span></div>
                </div>
            </div>
            <div class="row progress">
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="accordion">
                <div class="card">
                    <div class="card-header p-0 pt-2">
                        <div class="text-center my-auto">
                            <span data-toggle="collapse">Détail</span>
                        </div>
                        <i class="oi oi-chevron-bottom"></i>
                    </div>
                    <div class="collapse">
                        <div class="card-body">
                            Terminées :
                            <ul></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

    {{--Création des onglets--}}
    <script>
        tablist.addTab({title: 'Suivi des équipes', active: true});
    </script>

    <div id="gm-riddle-list"></div>

    <script>
        const gmTeamList = new GMTeamList('#gm-riddle-list');
        gmTeamList.update();
    </script>
@endsection