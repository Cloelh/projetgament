@extends('layouts.app')

@section('content')

<h1>Du producteur à votre assiette en 2 clic</h1>

<h2>Comment ça marche ?</h2>

<h2>Nos recette</h2>
        @foreach($recette as $r)
            <a href="/recette/{{$r->id}}" class="list-group list-group-recette" style="width:500px">
				<div class="list-group-item"><img style="max-height:200px;" src="{{$r->img}}"></div>
				<div class="list-group-item">{{$r->nom}}</div>
			</a>
		@endforeach		


@endsection