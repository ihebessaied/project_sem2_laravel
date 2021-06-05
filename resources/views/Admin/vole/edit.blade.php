

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
        
      
      {{-- <link rel="stylesheet" href="/css/main.css"> --}}
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
</head>
@extends('layouts.admin');

@section('main')
{{-- @foreach ($car as $data) --}}
<form action="{{route('cars.update',["car"=>$data->id])}}" method="POST">
  @method('PUT')
  @csrf
  <p class="h2">Edit Car</p>
  @if ($messageup != "")
              <div class="alert alert-success  alert-dismissible fade show">
                    {{ $messageup }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
            @endif
    <div class="divm">

    <div class="row">
      <div class="col"> 
        <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Matricule</label>
      <div class="col-sm-10">
        <input type="text" name="Matricule" class="form-control az" @error('Matricule') is-invalid @enderror id="inputEmail3" placeholder="XXXX" value="{{$data->matricule ?? ''}} ">
      </div>
    </div>
    @error('Matricule')
            {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
            <div class="alert alert-danger  alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
            @enderror</div>
      <div class="col">
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
    <div class="row">
      <div class="col">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Number place</label>
          <div class="col-sm-10">
            <input type="Number" name="nbplace" class="form-control az" @error('nbplace') is-invalid @enderror id="inputEmail3" placeholder="0" value="{{$data->nbplace ?? ''}}">
          </div>
        </div>
        @error('nbplace')
        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
        <div class="alert alert-danger  alert-dismissible fade show">
          {{ $message }}
          <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
        @enderror
      </div>
      <div class="col">
       <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Mage Game</label>
      <div class="col-sm-10">
      <input type="Number" class="form-control az" @error('nbgame') is-invalid @enderror name="nbgame" id="inputEmail3" placeholder="0" value="{{$data->mane_game ?? ''}}">
      </div>
    </div>
    @error('nbgame')
    {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
    <div class="alert alert-danger  alert-dismissible fade show">
      {{ $message }}
      <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
    @enderror
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Prix</label>
          <div class="col-sm-10">
            <input type="Number" class="form-control az" @error('prix') is-invalid @enderror name="prix" id="inputEmail3" placeholder="XXX TND" value="{{$data->prix ?? ''}}">
          </div>  
        </div>
        @error('prix')
        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
        <div class="alert alert-danger  alert-dismissible fade show">
          {{ $message }}
          <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
        @enderror
        
      </div>
      <div class="col"></div>
    </div>
    {{-- <div class="row">
      <div class="col">
        <div>
            <label for="formFileLg" class="form-label" @error('image') is-invalid @enderror>Car Image</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" value="{{$data->image ?? ''}}">
          </div>
        </div>
        
      </div>
      @error('image')
      {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
      {{-- <div class="alert alert-danger  alert-dismissible fade show">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div> --}}
      {{-- @enderror --}}
      <div class="col"></div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-floating">
          <textarea  class="form-control" @error('description') is-invalid @enderror placeholder="Leave a comment here" name="description" id="floatingTextarea2" style="height: 100px">{{$data->description}}</textarea>
          <label for="floatingTextarea2">Description</label>
          

        </div>
        @error('description')
        {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
        <div class="alert alert-danger  alert-dismissible fade show">
          {{ $message }}
          <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
        @enderror
        
      </div>
    </div>
   
    

   
    <div class="row aaa">
      <div class="col"> <button type="reset" class="btn btn-secondary btn-lg btn-block">Cancel</button></div>
      <div class="col"> <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button></div>

       
      
    </div>
            
</div>
  </form>
  {{-- @endforeach --}}
@endsection