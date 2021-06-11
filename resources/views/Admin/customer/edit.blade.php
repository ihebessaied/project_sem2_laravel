

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

 <link rel="stylesheet" href="{{asset('css/admiALLC.css')}}">
    
  </style>
  <link rel="stylesheet" href="/css/main.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.aa{
  background-color: #DCDCDC;
  border-radius: 5px;
  padding: 30px;
  margin-left: 150px;
  border: 0;
  box-shadow: 0 2px 6px 0 hsla(0, 0%, 0%, 0.2);
}
.AH2{
  font-family: Montserrat;
  font-weight: 800;
  color: #222;
  line-height: 33px;
}
.az{
  display: block;
  width: 100%;
  height: 2.875rem;
  padding: 0.875rem 1.375rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1;
  color: #495057;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 2px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  border-radius: 8px;
}
.tex{
  font-size: 15px;
  text-decoration: blod;
  font-weight: bold;
}
#btn1{
  border-radius: 20px;
}
.text-danger{
  margin-left: 190;
}
#aag{
  margin-left: 143px;
  font-size: 15%;
}
</style>
</head>
@extends('layouts.admin');

<head>
  <link rel="stylesheet" href="/css/search.css">
</head>
@section('main')

<div class="container">
  <!-- edit form column -->
  <div class="col-lg-12 text-lg-center">
      <h2 class="AH2">Edit Customer</h2>
      <br>
      <br>
  </div>
  <div class="col-lg-8 push-lg-4 personal-info aa">
       <form action="{{route('customers.update',["customer"=>$data->id])}}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label tex">Name :</label>
              <div class="col-lg-9">
                  <input name="name" class="az" type="text"  @error('name') is-invalid @enderror value={{$data->name}} />
              </div> 
               @error('name')
               <div class="text-danger">{{ $message }}</div>
          @enderror
         
          </div>
        
          <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label tex">Email :</label>
              <div class="col-lg-9">
                  <input name="email" class="az"  type="email" @error('email') is-invalid @enderror value={{$data->email}} />
              </div>
         

          @error('email')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>


          {{-- <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label tex">Adresse :</label>
            <div class="col-lg-9">
                <input name="adresse" class="az" type="text"  @error('adresse') is-invalid @enderror value={{$data->adresse}} />
            </div> 
             @error('adresse')
             <div class="text-danger">{{ $message }}</div>
        @enderror
       
        </div>

 --}}



        {{-- <div class="form-group row">
          <label class="col-lg-3 col-form-label form-control-label tex">Phone :</label>
          <div class="col-lg-9">
              <input name="phone" class="az" type="text"  @error('phone') is-invalid @enderror value={{$data->phone}} />
          </div> 
           @error('phone')
           <div class="text-danger">{{ $message }}</div>
      @enderror
     
      </div> --}}
          @if ($messageup != "")
            {{-- <div class="alert alert-success  alert-dismissible fade show">
                  {{ $messageup }}
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
             </div> --}}
             <div role="alert" class="flex flex-column flex-row-ns flex-nowrap-ns items-stretch-ns br2 overflow-hidden bg-success0 mb4 animated fadeIn">
               <div class="bg-success3 success6 ph4 ph3-ns pv3 pv3-ns f4" id="aag">
                 Okay, check your liste customer.
                   </h3>
                    {{-- <p class="mv0 lh-copy">{{ $messageup }} --}}
                      </p>  <!---->
                    </div></div>
          @endif
          
          {{-- <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Password</label>
              <div class="col-lg-9">
                  <input class="form-control" type="password" value="11111122333" />
              </div>
          </div>
          <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
              <div class="col-lg-9">
                  <input class="form-control" type="password" value="" />
              </div>
          </div> --}}
          <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label"></label>
              <div class="col-lg-9">
                  <input type="reset" id="#btn1" class="btn btn-secondary" value="Cancel" />
                  <input type="submit" id="#btn1" class="btn btn-primary " value="Save Changes" />
              </div>
          </div>
      </form>
  </div>
</div>
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
  <script>
    
  </script>
