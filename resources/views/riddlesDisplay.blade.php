@extends('base')

@section('content')
    <body>
    <div class="container">
        <header class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <h1>ESCAPE GAME TSE</h1>
            </div>
            <div class="col-lg-offset-3"></div>
        </header>

        <section class="row">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="#tabRiddles" data-toggle="tab">Avancement Enigmes</a></li>
                <li><a href="#tabMessage" data-toggle="tab">Messages</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active in" id="#tabRiddles">Avancement Enigmes</div>
                <div class="tab-pane" id="#tabMessage">Messages</div>
            </div>
        </section>

        <template id="riddleNotBegun">
            <div class="panel-heading">
                <a href="#item1" data-toggle="collapse"> <var>riddleName</var> A faire </a>
            </div>
            <div id="item1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div id="boutonCommencerEnigme" class="btn btn primary">Commencer Enigme</div>
                </div>
            </div>
        </template>

        <template id="riddleInProgress">
            <div class="panel-heading">
                <a href="#item2" data-toggle="collapse"> <var>riddleName</var> En cours </a>
            </div>
            <div id="item2" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div id="boutonValiderEnigme" class="btn btn primary">Valider Enigme</div>
                </div>
            </div>

        </template>

        <template id="riddleCompleted">
            <div class="panel-heading">
                <a href="#item3" data-toggle="collapse"> <var>riddleName</var> Terminée </a>
            </div>
            <div id="item3" class="panel-collapse collapse in">
                <div class="panel-body"> Temps mis : <var>timeMadeRiddle</var></div>
            </div>
        </template>
    </div>

@endsection