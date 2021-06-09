


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
                  <h2><b>Events</b></h2>
                </div>
                <div class="col-sm-7">
                  <a href="{{route('events.create')}}" class="btn btn-success">
                   <i class="material-icons">&#xE147;</i>
                     <span>Add New Event</span></a>
                  {{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal" ><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 --}}
                
                </div>
              </div>
            </div>
            {{-- table show all events --}}
            <table class="table table-hover table-dark">
              <thead>
                 <tr>
                    <th>
                       <span class="custom-checkbox">
                       <input type="checkbox" id="selectAll">
                       <label for="selectAll"></label>
                       </span>
                    </th>
                    <th>event_label</th>
                    <th>event_place</th>
                    <th>event_start</th>
                    <th>event_finish</th>
                    {{-- 
                    <th>event_image</th>
                    <th>event_description</th>
                    --}}
                    <th>Ations</th>
                 </tr>
              </thead>
              <tbody>
                 @foreach ($eventss as $key => $ev)
                 <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$ev->event_label}}</td>
                    <td>{{$ev->event_place}}</td>
                    <td>{{$ev->event_start}}</td>
                    <td>{{$ev->event_finish}}</td>
                    {{-- 
                    <td>{{$ev->event_image}}</td>
                    <td>{{$ev->event_description}}</td>
                    --}}
                    <td id="fl">
                       <a  href=" {{ route('events.show', ['event' => $ev->id]) }} " class="btn btn-info">show</a>
                       <a  href="#" class="btn btn-warning">Edit</a>
                       <form action="/events/{{$ev->id}}" method="POST">
                          @method('DELETE')
                          @csrf
                          {{-- <a  href="#" class="btn btn-danger">Delete</a> --}}
                          <input type="submit" class="btn btn-danger" value="Delete">
                       </form>
                    </td>
                 </tr>
                 <tr>
                    @endforeach
              </tbody>
           </table>
           {{-- {{ $ev->links() }} --}}
           </div>
           </div>        
           </div>







     

      <!-- Add new Event Button -->
      <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
              <div class="modal-header">						
                <h4 class="modal-title">ADD NEW EVENT</h4>
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
      /<div id="deleteEmployeeModal" customerid="0" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
          <form action="" method="POST" id="FormDelete">
              @method('DELETE')
              @csrf 
              <div class="modal-header">						
                <h4 class="modal-title">Delete Event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">					
                <p>Are you sure you want to delete these event?</p>
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
  
