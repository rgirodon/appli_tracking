@extends('layouts.base')

@section('content')
    <div class="container box">
        @if(isset(Auth::user()->name))
            <script>window.location = "/gm";</script>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ url('/gm/checklogin') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Enter login</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login"/>
            </div>
        </form>
    </div>
@endsection


