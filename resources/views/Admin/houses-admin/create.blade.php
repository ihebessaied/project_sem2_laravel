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
  <link rel="stylesheet" href="/css/search.css" />
</head>

@extends('layouts.admin'); @section('main')
<div class="container-xl cs">
    <div class="table-responsive">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-7">
              <h2><b>Add Houses</b></h2>
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
        {{-- form create events --}}
        <form action="{{ action('Admin\HouseController@store') }}" method="post"  enctype="multipart/form-data">
         @csrf
            <div   class="form-group row"  >
                <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">name</label>
                <div class="col-sm-7">
                    <input type="text" name="name" class="form-control  @error ('name') is-invalid @enderror "  placeholder="name" value="{{ old('name') }}">
                    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="placeevent">Emplacement</label>
                <div class="col-sm-7">
                    <input type="text" name="Emplacement" class="form-control  @error ('Emplacement') is-invalid @enderror" placeholder="Emplacement" value="{{ old('Emplacement') }}">
                      @error('Emplacement')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datedeb">nombre_chambre</label>
                <div class="col-sm-7">
                    <input type="number" name="nombre_chambre" class="form-control  @error ('nombre_chambre') is-invalid @enderror"  value="{{ old('nombre_chambre') }}" placeholder="nombre_chambre">
                     @error('nombre_chambre')<div class="text-danger">{{ $message }}</div>@enderror
                    
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datefin">taken_time</label>
                <div class="col-sm-7">
                    <input type="date" name="taken_time" class="form-control  @error ('taken_time') is-invalid @enderror"  value="{{ old('taken_time') }}" placeholder="date de fin">
                     @error('taken_time')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datefin">return_time</label>
              <div class="col-sm-7">
                  <input type="date" name="return_time" class="form-control  @error ('return_time') is-invalid @enderror" placeholder="return_time" required>
                    {{ old('return_time') }}
                  
                   @error('event_description')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datedeb">status</label>
            <div class="col-sm-7">
                <input type="number" name="status" class="form-control  @error ('status') is-invalid @enderror"  value="{{ old('status') }}" placeholder="status">
                 @error('status')<div class="text-danger">{{ $message }}</div>@enderror
                
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datedeb">Favorite</label>
              <div class="col-sm-7">
                  <input type="number" name="favoir" class="form-control  @error ('favoir') is-invalid @enderror"  value="{{ old('favoir') }}" placeholder="0">
                   @error('favoir')<div class="text-danger">{{ $message }}</div>@enderror
                  
              </div>
        </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datefin">Image</label>
            <div class="col-sm-7">
              <div class="input-group-prepend">
               <span class="input-group-text">Upload :</span>
              </div>
              
                <input  type="file" style="border-radius: 5px black;" required name="house_image" class="form-control-file  @error ('house_image') is-invalid @enderror">
              
                  {{ old('house_image') }}
                </textarea>
                
                 @error('house_image')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datedeb">prix</label>
            <div class="col-sm-7">
                <input type="number" name="prix" class="form-control  @error ('prix') is-invalid @enderror"  value="{{ old('prix') }}" placeholder="prix">
                 @error('prix')<div class="text-danger">{{ $message }}</div>@enderror
                
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


@endsection
