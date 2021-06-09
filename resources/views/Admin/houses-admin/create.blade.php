<head>
  <link rel="stylesheet" href="/css/search.css" />
</head>

@extends('layouts.admin'); @section('main')

<form action="{{action('Admin\HouseController@store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="modal-header">
      <h4 class="modal-title">Add house</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  </div>
  <div class="modal-body">
      <div class="input-group mb-3 dipal">
          <div>
              <label for="name">Name:</label>
              <input type="text" value="" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="House's Name" aria-label="Username" />
          </div>
          @error('Name') {{--
          <div class="alert alert-danger">{{ $message }}</div>
          --}}
          <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          @enderror
      </div>
      <div class="input-group mb-3 dipal">
          <div>
              <label for="name">Emplacement:</label>
              <input type="text" value="" class="form-control @error('Emplacement') is-invalid @enderror" name="Emplacement" placeholder="Bizerte" aria-label="Username" />
          </div>
          @error('Emplacement') {{--
          <div class="alert alert-danger">{{ $message }}</div>
          --}}
          <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          @enderror
      </div>
      <div class="input-group mb-3 dipal">
          <div>
              <label for="name">Nombre de chambre:</label>
              <input type="Number" value="" class="form-control @error('Nombre de chambre') is-invalid @enderror" name="nombre_chambre" placeholder="4" aria-label="Username" />
          </div>
          @error('Nombre de chambre') {{--
          <div class="alert alert-danger">{{ $message }}</div>
          --}}
          <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          @enderror
      </div>
      <div class="input-group mb-3 dipal">
          <div>
              <label for="name">Date de depart:</label>
              <input type="date" value="" class="form-control @error('date') is-invalid @enderror" name="taken_time" placeholder="02/02/2021" aria-label="Username" />
          </div>
          @error('Date de depart') {{--
          <div class="alert alert-danger">{{ $message }}</div>
          --}}
          <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          @enderror
      </div>
      <div class="input-group mb-3 dipal">
          <div>
              <label for="name">Date Retour:</label>
              <input type="date" value="" class="form-control @error('date') is-invalid @enderror" name="return_time" placeholder="02/02/2021" aria-label="Username" />
          </div>
          @error('Date Retour') {{--
          <div class="alert alert-danger">{{ $message }}</div>
          --}}
          <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          @enderror
      </div>
      <div class="input-group mb-3 dipal">
          <div>
              <label for="name">Status:</label>
              <input type="Number" value="" class="form-control @error('Status') is-invalid @enderror" name="status" placeholder="3" aria-label="Username" />
          </div>
          @error('Status') {{--
          <div class="alert alert-danger">{{ $message }}</div>
          --}}
          <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          @enderror
      </div>

      <div class="input-group mb-3 dipal">
          <div>
              <label for="name">Image:</label>
              <input type="file" value="" class="form-control @error('Image') is-invalid @enderror" name="house_image" placeholder="Image" aria-label="Username" required />
          </div>
          @error('Image') {{--
          <div class="alert alert-danger">{{ $message }}</div>
          --}}
          <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          @enderror
      </div>
      <div class="input-group mb-3 dipal">
          <div>
              <label for="name">Price:</label>
              <input type="text" value="" class="form-control @error('name') is-invalid @enderror" name="prix" placeholder="10000" aria-label="Username" />
          </div>
          @error('Price') {{--
          <div class="alert alert-danger">{{ $message }}</div>
          --}}
          <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          @enderror
      </div>
  </div>
  <div class="modal-footer">
      <input type="reset" class="btn btn-default" data-dismiss="modal" value="Cancel" />
      <input type="submit" class="btn btn-success" value="Add" />
  </div>
</form>

@endsection
