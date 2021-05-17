


<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" href="{{asset('css/admiALLC.css')}}">
    
  </style>
  <link rel="stylesheet" href="/css/main.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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







{{-- <div class="row"> pour diplay:flex ll tableou ou links µ --}}
  {{-- <div class="gra">
    
<table class="table align-middle">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Admin</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customer as $row)
          <tr>
        <th scope="row">{{$row->id}}</th>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->admin}}</td>
        <td>
   
            {{-- route('customers.show',['user'=> $row->id]);   --}}
       
         
        {{-- <a href="/customers/{{$row->id}}"> <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark">
            Show
          </button></a>
         <a href=""> <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">
            Edit
          </button></a>
         
          <a href=""> <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">
            Delete
          </button></a>
         
        </td>
      </tr>
      @endforeach
      
     
    </tbody>
  </table>

 

 {{ $customer->links() }}
      
 
</div> --}} 






{{-- <div class="limiter">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100 ver1 m-b-110">
        <div class="table100-head">
          <table>
            <thead>
              <tr class="row100 head">
                <th class="cell100 column1">Class name</th>
                <th class="cell100 column2">Type</th>
                <th class="cell100 column3">Hours</th>
                <th class="cell100 column4">Trainer</th>
                <th class="cell100 column5">Spots</th>
              </tr>
            </thead>
          </table>
        </div>

        <div class="table100-body js-pscroll">
          <table>
            <tbody>
              <tr class="row100 body">
                <td class="cell100 column1">Like a butterfly</td>
                <td class="cell100 column2">Boxing</td>
                <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                <td class="cell100 column4">Aaron Chapman</td>
                <td class="cell100 column5">10</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Mind & Body</td>
                <td class="cell100 column2">Yoga</td>
                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                <td class="cell100 column4">Adam Stewart</td>
                <td class="cell100 column5">15</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Crit Cardio</td>
                <td class="cell100 column2">Gym</td>
                <td class="cell100 column3">9:00 AM - 10:00 AM</td>
                <td class="cell100 column4">Aaron Chapman</td>
                <td class="cell100 column5">10</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Wheel Pose Full Posture</td>
                <td class="cell100 column2">Yoga</td>
                <td class="cell100 column3">7:00 AM - 8:30 AM</td>
                <td class="cell100 column4">Donna Wilson</td>
                <td class="cell100 column5">15</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Playful Dancer's Flow</td>
                <td class="cell100 column2">Yoga</td>
                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                <td class="cell100 column4">Donna Wilson</td>
                <td class="cell100 column5">10</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Zumba Dance</td>
                <td class="cell100 column2">Dance</td>
                <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                <td class="cell100 column4">Donna Wilson</td>
                <td class="cell100 column5">20</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Cardio Blast</td>
                <td class="cell100 column2">Gym</td>
                <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                <td class="cell100 column4">Randy Porter</td>
                <td class="cell100 column5">10</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Pilates Reformer</td>
                <td class="cell100 column2">Gym</td>
                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                <td class="cell100 column4">Randy Porter</td>
                <td class="cell100 column5">10</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Supple Spine and Shoulders</td>
                <td class="cell100 column2">Yoga</td>
                <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                <td class="cell100 column4">Randy Porter</td>
                <td class="cell100 column5">15</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Yoga for Divas</td>
                <td class="cell100 column2">Yoga</td>
                <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                <td class="cell100 column4">Donna Wilson</td>
                <td class="cell100 column5">20</td>
              </tr>

             

             
            </tbody>
          </table>
        </div>
      </div> --}}
      <div class="container-xl">
        <div class="table-responsive">
          <div class="table-wrapper">
            <div class="table-title">
              <div class="row">
                <div class="col-sm-6">
                  <h2>Users <b>Customers</b></h2>
                </div>
                <div class="col-sm-6">
                  <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                  <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>




                @foreach ($customer as $row)
                <tr>
                  <td>
                    <span class="custom-checkbox">
                      <input type="checkbox" id="checkbox1" name="options[]" value="1">
                      <label for="checkbox1"></label>
                    </span>
                  </td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>.</td>
                  <td>.</td>
                  <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  </td>
                </tr>
               

                @endforeach


              </tbody>
            </table>
            {{ $customer->links() }}
          </div>
        </div>        
      </div>
      <!-- Edit Modal HTML -->
      <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
              <div class="modal-header">						
                <h4 class="modal-title">Add Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">					
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" required>
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
      <!-- Edit Modal HTML -->
      <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
              <div class="modal-header">						
                <h4 class="modal-title">Edit Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">					
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" required>
                </div>					
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-info" value="Save">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Delete Modal HTML -->
      <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
              <div class="modal-header">						
                <h4 class="modal-title">Delete Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">					
                <p>Are you sure you want to delete these Records?</p>
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

  
{{-- </div> --}}
  @endsection
  
