


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
  <script>
    $(document).ready(function(){
      // Activate tooltip
      // $('[data-toggle="tooltip"]').tooltip();
      
      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function(){
        if(this.checked){
          checkbox.each(function(){
            this.checked = true;                        
          });
        } else{
          checkbox.each(function(){
            this.checked = false;                        
          });
        } 
      });
      checkbox.click(function(){
        if(!this.checked){
          $("#selectAll").prop("checked", false);
        }
      });
    });
  </script>
  <style>
   #fl{
     display: flex;
   }
  </style>
</head>
@extends('layouts.admin');

<head>
  <link rel="stylesheet" href="/css/search.css">
</head>

@section('main')

  

<div class="container-xl cs">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-7">
            <h2><b>Edit Events</b></h2>
          </div>
          <div class="col-sm-7">
            {{-- <a href="{{route ('events.create')}}" class="btn btn-success"
             data-toggle="modal">
             <i class="material-icons">&#xE147;</i>
               <span>Add New Event</span></a> --}}
            {{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal" ><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 --}}
          
          </div>
        </div>
      </div>
                      {{-- method action b route khir --}}
      {{-- <form action="{{ action('Admin\EventController@update ') }}" method="put"> --}}
      {{-- form create events --}}
      <form action="{{ route('events.update',['event' => $event->id]) }}" method="post">
        @method('PUT')
        @csrf
          <div   class="form-group row"  >
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">event_label</label>
              <div class="col-sm-7">
                  <input type="text" name="event_label" class="form-control  @error ('event_label') is-invalid @enderror "  placeholder="event_label" value="{{ $event->event_label }}">
                  @error('event_label')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="placeevent">event_place</label>
              <div class="col-sm-7">
                  <input type="text" name="event_place" class="form-control  @error ('event_place') is-invalid @enderror" placeholder="event_place" value="{{ $event->event_place }}">
                    @error('event_place')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datedeb">Start Event</label>
              <div class="col-sm-7">
                  <input type="date" name="event_start" class="form-control  @error ('event_start') is-invalid @enderror"  value="{{ $event->event_start }}" placeholder="Date depart event">
                   @error('event_start')<div class="text-danger">{{ $message }}</div>@enderror
                  
              </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datefin">Finish Event</label>
              <div class="col-sm-7">
                  <input type="date" name="event_finish" class="form-control  @error ('event_finish') is-invalid @enderror"  value="{{ $event->event_finish }}" placeholder="Date fin event">
                   @error('event_finish')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
          </div>
          <div class="form-group" >
              <div class="col-sm-offset-2 col-sm-10 col-sm-2  " >
                  <button type="submit" name="btValider" class="btn btn-warning">Valider</button>
                  <button type="reset" name="btValider" class="btn btn-warning">reset</button>
              </div>
          </div>
      </form>
  </fieldset>
</div>      
  @endsection
  
