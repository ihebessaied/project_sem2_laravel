<head>
  <link rel="stylesheet" href="/css/search.css">
</head>



@extends('layouts.admin');

@section('main')

  
  <h1><i class="fas fa-user-tag"></i>House Details : <strong>{{$house->name}}TND</strong></h1>

    <h1 class="card-title"><strong>{{$house->Emplacement}}</strong></h1>
    <h1 class="card-title">Nombre de chambre  : <strong>{{$house->nombre_chambre}}</strong></h1>
    <h1 class="card-subtitle mb-2 text-muted">Status : <strong>{{$house->status}}</strong></h1>
    <h1 class="card-subtitle mb-2 text-muted">Prix : <strong>{{$house->prix}}</strong>USD</h1>
    <h1 class="card-subtitle mb-2 text-muted"><img class="img-fluid" style="width: 250px;" src="{{asset('storage')}}/{{ $house->house_image}}" alt="..." /></td></h1>
    
@endsection     



