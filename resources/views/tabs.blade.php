@extends('base')

@section('content')
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Accueil</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum accueil</div>
    </div>

    <script>
        addTab('tab2');
        addTab('tab3');
        contentTab(2).text('J\'ai été ajouté avec JS');
        contentTab(3).append('<button class="btn btn-primary m-5">J\'ai été ajouté avec JS</button>');
    </script>
@endsection