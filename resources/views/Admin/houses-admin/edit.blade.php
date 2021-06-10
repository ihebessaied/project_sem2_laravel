

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
.cs{
  margin-left: 350px
}
</style>
</head>
@extends('layouts.admin');

<head>
  <link rel="stylesheet" href="/css/search.css">
</head>
@section('main')
@foreach ($hous as $house)
<form action="/houses-admin/{{$house->id}}" method="POST" enctype="multipart/form-data"> 
@method('PUT')
@csrf
<div class="row">
<div class="col">
 <div class="form-group">
  <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="name">Name</label>
                
    <input type="text" value="{{$house->name}}" name="nameh" @error('nameh') is-invalid @enderror class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
   {{-- -------------------Erreur ---------------------------------}}

   @error('nameh')
 <div class="alert alert-danger shadow" role="alert" style="border-left:#721C24 5px solid; border-radius: 0px">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true" style="color:#721C24">&times;</span>
   </button>
   <div class="row">
     <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
     </svg>
       <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Danger!</b>{{ $message }}</p>
   </div>
 </div>
   @enderror

   {{-- ----------------------Fin Erreur ---------------------------}}

</div>
<div class="col">
<div class="form-group">
  <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="emplacement">Emplacement</label>
                
    <input value="{{$house->Emplacement}}"name="Emplacementh" @error('Emplacementh') is-invalid @enderror type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
</div>
   {{-- -------------------Erreur ---------------------------------}}

   @error('Emplacementh')
 <div class="alert alert-danger shadow" role="alert" style="border-left:#721C24 5px solid; border-radius: 0px">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true" style="color:#721C24">&times;</span>
   </button>
   <div class="row">
     <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
     </svg>
       <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Danger!</b>{{ $message }}</p>
   </div>
 </div>
   @enderror

   {{-- ----------------------Fin Erreur ---------------------------}}
</div>
 
  
  <div class="form-group">
    <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">Nombre Chambre</label>
                
    <input type="Number"  value="{{$house->nombre_chambre}}" name="nombre_chambreh" @error('nombre_chambreh') is-invalid @enderror class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

     {{-- -------------------Erreur ---------------------------------}}

     @error('nombre_chambreh')
     <div class="alert alert-danger shadow" role="alert" style="border-left:#721C24 5px solid; border-radius: 0px">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true" style="color:#721C24">&times;</span>
       </button>
       <div class="row">
         <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
         </svg>
           <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Danger!</b>{{ $message }}</p>
       </div>
     </div>
       @enderror
    
       {{-- ----------------------Fin Erreur ---------------------------}}
  <div class="row">
  <div class="col"><div class="form-group">
    <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">Status</label>
                
    <input type="Number" value="{{$house->status}}" name="statush" @error('statush') is-invalid @enderror class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

   {{-- -------------------Erreur ---------------------------------}}

   @error('statush')
 <div class="alert alert-danger shadow" role="alert" style="border-left:#721C24 5px solid; border-radius: 0px">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true" style="color:#721C24">&times;</span>
   </button>
   <div class="row">
     <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
     </svg>
       <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Danger!</b>{{ $message }}</p>
   </div>
 </div>
   @enderror

   {{-- ----------------------Fin Erreur ---------------------------}}
</div>
  <div class="col"><div class="form-group">
    <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">Taken Time</label>
                
    <input type="text" value="{{$house->taken_time}}" name="taken_timeh" @error('taken_timeh') is-invalid @enderror class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>


   {{-- -------------------Erreur ---------------------------------}}

   @error('taken_timeh')
 <div class="alert alert-danger shadow" role="alert" style="border-left:#721C24 5px solid; border-radius: 0px">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true" style="color:#721C24">&times;</span>
   </button>
   <div class="row">
     <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
     </svg>
       <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Danger!</b>{{ $message }}</p>
   </div>
 </div>
   @enderror

   {{-- ----------------------Fin Erreur ---------------------------}}
</div>
  </div>
  
  
  <div class="form-group">
    <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">Return Time</label>
                
    <input type="text" value="{{$house->return_time}}" name="return_timeh" @error('return_timeh') is-invalid @enderror class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
     {{-- -------------------Erreur ---------------------------------}}

     @error('return_timeh')
     <div class="alert alert-danger shadow" role="alert" style="border-left:#721C24 5px solid; border-radius: 0px">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true" style="color:#721C24">&times;</span>
       </button>
       <div class="row">
         <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
         </svg>
           <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Danger!</b>{{ $message }}</p>
       </div>
     </div>
       @enderror
    
       {{-- ----------------------Fin Erreur ---------------------------}}
  <div class="form-group">
    <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">Prix</label>
                
    <input type="Number" value="{{$house->prix}}" class="form-control" name="prixh" @error('prixh') is-invalid @enderror id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
   {{-- -------------------Erreur ---------------------------------}}

   @error('prixh')
 <div class="alert alert-danger shadow" role="alert" style="border-left:#721C24 5px solid; border-radius: 0px">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true" style="color:#721C24">&times;</span>
   </button>
   <div class="row">
     <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
     </svg>
       <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Danger!</b>{{ $message }}</p>
   </div>
 </div>
   @enderror

   {{-- ----------------------Fin Erreur ---------------------------}}

   <div class="form-group">
    <label class="col-sm-2 col-form-label text-warning bg-light rounded-pill " for="nomevent">Image House</label>
                
    <div style="width: 25%">
      <img class="img-fluid" src="{{asset('storage')}}/{{ $house->house_image}}" alt="..." />
    </div>
    <input type="file" value="{{$house->prix}}" class="form-control" name="house_image" >
  </div>

  <input type="submit" class="btn btn-danger" value="Save">
  <!-- <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  <!-- <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div> -->
</form>
@endforeach
  @endsection

<!-- {{-- <script>

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

{{-- </script> --}} -->
  <script>
    
  </script>
