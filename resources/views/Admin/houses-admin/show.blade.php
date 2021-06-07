<head>
  <link rel="stylesheet" href="/css/search.css">
</head>



@extends('layouts.admin');

@section('main')

  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5><i class="fas fa-user-tag"></i>House Details : <strong>{{$house->name}}TND</strong></h5>

  <h6>Emplacement : <strong>{{$house->Emplacement}}</strong></h6>
    <h5 class="card-title">Nombre de chambre  : <strong>{{$house->nombre_chambre}}</strong></h5>
    <h6 class="card-subtitle mb-2 text-muted">Status<strong>{{$house->status}}</strong></h6>
   
  </div>
</div>
@endsection     



