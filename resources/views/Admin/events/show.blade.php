


<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

 <link rel="stylesheet" href="{{asset('css/admiALLC.css')}}">
    
  
  <link rel="stylesheet" href="/css/main.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/adminscript1.js')}}"> </script>


</head>
@extends('layouts.admin')

<head>
  <link rel="stylesheet" href="/css/search.css">
</head>

@section('main')


      <div class="container-xl cs">
        <div class="table-responsive">
          <div class="table-wrapper">
           

            {{-- <div class="card" class="col-sm-2" >
              <img src="{{ $event->event_image  }}" class="card-img-top" >
              <div class="card-body">
                <h5 class="card-title">{{ $event->event_label  }}</h5>
                <p class="card-text">{{ $event->event_description  }}</p>
                
              </div>
            </div> --}}
            <table class="table table-hover table-dark">
              <thead>
                <tr>
                  
                  <th>event_label</th>
                  <th>event_place</th>
                  <th>event_start</th>
                  <th>event_finish</th>
                 
                  
                
                </tr>
              </thead>
              <tbody>

        <tr>
          
          <td>{{ $event->event_label  }}</td>
          <td>{{ $event->event_place  }}</td>
          <td>{{ $event->event_start  }}</td>
          <td>{{ $event->event_finish }}</td>
        
               
        </tr>
        
        </table>
    









{{-- </div> --}}
  @endsection
 