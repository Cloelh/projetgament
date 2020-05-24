@extends('layouts.app')

@section('content')

<h1>Nos recette</h1>

        @foreach($recette as $r)
            <a href="/recette/{{$r->id}}" class="list-group list-group-recette" style="width:500px">
				<div class="list-group-item"><img style="max-height:200px;" src="{{$r->img}}"></div>
				<div class="list-group-item">{{$r->nom}}</div>
			</a>
		@endforeach		


@endsection