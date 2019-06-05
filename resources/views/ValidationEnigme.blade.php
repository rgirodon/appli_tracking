@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="html">
            <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary">Code</button>
        </div>
        <div class="modal fade" id="formulaire">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Validation:</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row">
                        <form class="col" action="{{ url('/validationEnigme/validationMdp')}}">
                            <div class="form-group">
                                <label for="nom" class="form-control-label">Code</label>
                                <input type="text" class="form-control" name ="nom" id="nom" placeholder="Entrez le code">
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection