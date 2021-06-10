@extends('layouts.homehouses')
@section('content')

@foreach($events as $e)
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
                  <th>name_joiner</th>
                  <th>email_joiner</th>
                  <th>tel_joiner</th>
                  <th>adresse_joiner</th>
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
                  <td>{{$ev->email_joiner}}</td>
                  <td>{{$ev->event_place}}</td>
                  <td>{{$ev->tel_joiner}}</td>
                  <td>{{$ev->adresse_joiner}}</td>

                 

                  @endforeach
            </tbody>
         </table>

@endsection