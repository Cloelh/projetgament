@extends('layouts.app')

@section('content')

    <h1>Mon compte</h1>

    <div>{{ Auth::user()->name}}</div>
    
    
   

    @if (Auth::user()->name == 'admin') 

        <a href='/ajoutRecette/create' >Ajouter une recette</a>

    @endif

@endsection