


<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

 {{-- <link rel="stylesheet" href="{{asset('css/admiALLC.css')}}"> --}}
    

  {{-- <link rel="stylesheet" href="/css/main.css"> --}}
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
#ts{
  display:flex;
}
#as{
  right: -205px;
}
</style>
{{-- <script src="{{asset('js/adminscript1.js')}}"> </script> --}}
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
 
</head>
@extends('layouts.admin');

<head>
  <link rel="stylesheet" href="/css/search.css">
</head>

@section('main')
<div class="aaa1">
      <div class="container-xl cs" >
        <div class="table-responsive">
          <div class="table-wrapper">
            <div class="table-title">
              <div class="row">
                <div class="col-sm-6">
                  <h2><b>Cars</b></h2>
                </div>
                <div class="col-sm-6" id="as">
                  <a id="btnbt" href="{{ route('cars.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Car</span></a>
                  {{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal" ><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>		--}}               
                </div>
              </div>
            </div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>
                    <span class="custom-checkbox">
                      <input type="checkbox" id="selectAll">
                      <label for="selectAll"></label>
                    </span>
                  </th>
                  <th>Matricule</th>
                  <th>Description</th>
                  <th>Number Place</th>
                  <th>Mane Game</th>
                  <th>Prix</th>
                  <th>Favorite</th>
                  <th>Penality</th>
                  {{-- mezelou les ddeux date  --}}
                </tr>
              </thead>
              <tbody>




                @foreach ($car as $row)
                <tr>
                  <td>
                    <span class="custom-checkbox">
                      <input type="checkbox" id="checkbox1" name="options[]" value="1">
                      <label for="checkbox1"></label>
                    </span>
                  </td>
                  <td>{{$row->matricule}}</td>
                  <td>{{$row->description}}</td>
                  <td>{{$row->nbplace}}</td>
                  <td>{{$row->mane_game}}</td>
                  <td>{{$row->prix}}</td>
                  <td>{{$row->favoir}}</td>
                  <td>{{$row->penalite}}</td>
                  <td id="ts">
                    {{-- //adress ou phone yomkin en cours  --}}
                    {{-- {{route('customer.edit',['customers' =>$row->id])}}   --}}
                    <a href="cars/{{$row->id}}/edit" class="edit"><i class="material-icons"  title="Edit">&#xE254;</i></a>
                   <a href="#deleteEmployeeModal" customerId={{$row->id}} id="deletc1" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  </td>
                </tr>
               

                @endforeach


              </tbody>
            </table>
            {{ $car->links() }}
          </div>
        </div>        
      </div>
      <!-- Edit Modal HTML -->
      <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
          <form action="{{route('customers.store')}}" method="POST" >
            @csrf
              <div class="modal-header">						
                <h4 class="modal-title">Add Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                                    
                <div class="input-group mb-3 dipal">
                  {{-- @if ($errors->any())
                  <div class="alert alert-danger">
                     invalid
                  </div>
              @endif --}}
                  <div>
                    <label for="name">Name:</label>
                  <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" aria-label="Username">
                  </div>
                  @error('name')
                  {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                  <div class="alert alert-danger  alert-dismissible fade show">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                  @enderror

                  
                </div>

                <div class="input-group mb-3">
                <div><label for="name">E-mail:</label>
                  <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" href="#" placeholder="E-mail" aria-label="Username">
                  </div>  
                  @error('email')
                  {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                  <div class="alert alert-danger  alert-dismissible fade show">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                  @enderror
                </div>

              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Add">
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <!-- Delete Modal HTML -->
      <div id="deleteEmployeeModal" customerid="0" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
          <form action="" method="POST" id="FormDelete">
              @method('DELETE')
              @csrf 
              <div class="modal-header">						
                <h4 class="modal-title">Delete Car</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">					
                <p>Are you sure you want to delete these Car?</p>
                <p class="text-warning"><small>This action cannot be undone.</small></p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-danger" value="Delete">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
 
{{-- </div> --}}
  @endsection
  
{{-- <script>

$(document).ready(function(){
  $("#addform").on('submit',function(e){
  e.preventDefault();
  $.ajax({
    type:"POST",
    url:{{route('customers.store')}},
    data:$("#addform").serialize(),
    succes:function (response){
      console.log(response);
      alert("donneeee");
    },
    error:function(error){
      alert("errrerererer");
    }
  })
  })
}) --}}

{{-- </script> --}}




