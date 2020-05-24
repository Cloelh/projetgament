@extends('layouts.app')

@section('content')

<p><a href="/recette">Retour au recettes</a></p>


<img src="{{$recette->img}}" />
<h1>{{$recette->nom}}</h1>
<p>{{$recette->temps}}</p>
<p>{{$recette->description}}</p>

        @foreach($recette->ingredient as $i)
            <div>{{$i->pivot->quantité}} {{$i->nom}}</div>
		@endforeach
       


@endsection