@extends('base')

@section('content')
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <div id="mySuperTeam"></div>

    <script>
        const gmTeam1 = new GMTeam('#mySuperTeam');
        gmTeam1.setTeamName('super équipe JS');
        gmTeam1.setRiddleName('super énigme JS lorem ipsum dolor sit amet consectetur adipiscing elit')
    </script>
    <script>

    </script>
@endsection