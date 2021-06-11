

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        body {
      background: #eecda3;
      background: -webkit-linear-gradient(to right, #cac9c7, #cccbcb);
      background: linear-gradient(to right, #d1cfcc, #dfdfdf);
      min-height: 100vh;
    }
    </style>
</head>



@extends('layouts.app')

@section('content')

<div class="px-4 px-lg-0">
    <!-- For demo purpose -->
    <div class="container text-white py-5 text-center">
    
     
    </div>
    <!-- End -->
  
    <div class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
  
            <!-- Shopping cart table -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Car</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Nmber place</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Number gamme</div>
                    </th>
                   
                  </tr>
                </thead>
                <tbody>
                    @foreach ($car as $c)
                    <tr>
                        <th scope="row" class="border-0">
                          <div class="p-2">
                          <img src="{{$c->image}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                            </div>
                          </div>
                        </th>
                        <td class="border-0 align-middle"><strong>{{$c->prix}} TND</strong></td>
                        <td class="border-0 align-middle"><strong>{{$c->nbplace}}</strong></td>
                        <td class="border-0 align-middle"><strong>{{$c->mane_game}}</strong></td>
                        <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    @endforeach
                  
                  {{-- <tr>
                    <th scope="row">
                      <div class="p-2">
                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5><span class="text-muted font-weight-normal font-italic">Category: Electronics</span>
                        </div>
                      </div>
                    </th>
                    <td class="align-middle"><strong>$79.00</strong></td>
                    <td class="align-middle"><strong>3</strong></td>
                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="p-2">
                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
                        </div>
                      </div>
                      <td class="align-middle"><strong>$79.00</strong></td>
                      <td class="align-middle"><strong>3</strong></td>
                      <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                      </td>
                  </tr> --}}
                </tbody>
              </table>
            </div>
            <!-- End -->
          </div>
        </div>
  
        
  </div>
    </div>
    @endsection