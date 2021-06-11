






{{-- /****************************************************************************************************** --}}












{{-- 
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

 <link rel="stylesheet" href="{{asset('css/admiALLC.css')}}">
 <style>
  form{
      margin-left: 60px;
     
  }
  .h2{
      font-family: Roboto,Arial,Helvetica,sans-serif;
      font-weight: 700;
    font-size: 70px;
    line-height: 100px;
      margin-bottom: 20px;
  }
  
  .divm{
      margin-top: 40px
  }
</style> 
  </style>
  <link rel="stylesheet" href="/css/main.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/adminscript1.js')}}"> </script>
  
 
</head>
@extends('layouts.admin');

<head>
  <link rel="stylesheet" href="/css/search.css">
</head>

@section('main')
<form action="{{route('cars.store')}} " method="POST" class="cs">
  {{-- @method('PUT') --}}
  
  <



{{-- /****************************************************************************************************** --}}








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
            <h2><b>Add Car</b></h2>
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
      <form action="{{route('cars.update',["car"=>$data->id])}}" method="post"  enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @if ($messageup != "")
              <div class="alert alert-success  alert-dismissible fade show">
                    {{ $messageup }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
            @endif
       
      
          <div   class="form-group row"  >
            <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">Matricule</label>
            <div class="col-sm-7">
                <input type="text" name="Matricule" class="form-control  @error ('Matricule') is-invalid @enderror "  placeholder="name" value="{{$data->matricule ?? ''}}">
                @error('Matricule')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
        </div>
      
        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">Modele</label>
          <div class="col-sm-7">
            <select class="form-select az" name="modele" aria-label="Default select example">
              @foreach ($modele as $mod)
              @if ($mod->id == $data->modele_id)
              {
              <option selected value="{{$mod->id}}">{{$mod->name}}</option>
              }
              @else{
              <option value="{{$mod->id}}">{{$mod->name}}</option> 
              }   
              @endif
              
              @endforeach
            </select>
          </div>
          </div>
        
       
         
          <div class="form-group row">
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="placeevent">Number place</label>
              <div class="col-sm-7">
                  <input type="Number" name="nbplace" class="form-control  @error ('nbplace') is-invalid @enderror" placeholder="Number place" value="{{$data->nbplace ?? ''}}">
                    @error('nbplace')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="favoir">Favorite</label>
            <div class="col-sm-7">
                <input type="Number" name="nbplace" class="form-control  @error ('favoir') is-invalid @enderror" placeholder="favoir" value="{{$data->favoir ?? ''}}">
                  @error('favoir')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
        </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datedeb">Nomber Gamme</label>
              <div class="col-sm-7">
                  <input type="Number" name="nbgame" class="form-control  @error ('nbgame') is-invalid @enderror"  value="{{$data->nbgame ?? ''}}" placeholder="Number Gamme">
                   @error('nbgame')<div class="text-danger">{{ $message }}</div>@enderror
                  
              </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datefin">Prix</label>
              <div class="col-sm-7">
                  <input type="Number" name="prix" class="form-control  @error ('prix') is-invalid @enderror"  value="{{$data->prix ?? ''}}" placeholder="date de fin">
                   @error('prix')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datefin">Description</label>
            <div class="col-sm-7">
            <textarea  class="form-control" @error('description') is-invalid @enderror placeholder="Leave a comment here" name="description" id="floatingTextarea2" style="height: 100px">{{$data->description ?? ''}}</textarea>
            </div>

        </div>
        {{-- <div class="form-group row">
          <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datedeb">status</label>
          <div class="col-sm-7">
              <input type="number" name="status" class="form-control  @error ('status') is-invalid @enderror"  value="{{ old('status') }}" placeholder="status">
               @error('status')<div class="text-danger">{{ $message }}</div>@enderror
              
          </div>
      </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill" for="datefin">Image</label>
          <div class="col-sm-7">
              <input  type="file" required name="house_image" class="form-control  @error ('house_image') is-invalid @enderror" placeholder="Image">
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
      </div> --}}
          <div class="form-group" >
              <div class="col-sm-offset-2 col-sm-10 col-sm-2  " >
                  <button type="submit" name="btValider" class="btn btn-warning">Save</button>
                  <button type="reset" name="btValider" class="btn btn-warning">Cancel</button>
              </div>
          </div>
      </form>
  </fieldset>


@endsection





























