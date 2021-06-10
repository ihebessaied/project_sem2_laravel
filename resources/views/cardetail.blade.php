<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car details</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{asset('css/carDatails.css')}}" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
<style>
  .inl{
    display:flex;
  }
  .pc2{
    margin-left: 88px;
  }
  .icon{
    width: 28px;
    height: auto;
  }
  .cart-btn{
    color: #fff;
    background-color: #3167eb;
    border-color: #3167eb;
  }
  .cart-btn:hover{
    color: #fff;
    background-color: #1650e0;
    border-color: #154cd4;
  }
  .cable-config a{
    font-size: 16px;
  }
</style>
  </head>

  <body>
    <main class="container">
@foreach ($cardd as $a)
      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black" src={{$a->image}} alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

    

        <!-- Product Description -->
        <div class="product-description">
          <span>Headphones</span>
          <h1>Beats EP</h1>
          <p>{{$a->description}}</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="inl">
          <div class="product-color">
            <span>Place Number</span>

            <div class="color-choose">
              <div>
                <img src="/img/pas.png" alt="" class="icon"> {{$a->nbplace}}
              </div>
            </div>

          </div>
          <!-- Product Color -->
          <div class="product-color pc2">
            <span>Mane Game</span>

            <div class="color-choose">
              <div>
              <img src="/img/val.png" alt="" class="icon"> {{$a->mane_game}}
              </div>
            </div>

          </div>
        </div>


       


          <!-- Cable Configuration -->
          <div class="cable-config">
            

            {{-- <span>$data->{{$data->name}}</span> --}}

            {{-- <div class="cable-choose">
             {{ $a->name}}
            </div> --}}
            <div class="product-price">
              <span>{{$a->prix}} TND</span>
             
              
            </div>
 <form action="/addpanier/{{$a->id}}" method="POST">
        @csrf
            <a href="#">Chose Our date And Rent Now</a>
            <div class="form-group row">
              <label for="example-date-input" class="col-2 col-form-label">Date Get car </label>
              <div class="col-10">
                <input name="dateget" class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-date-input" class="col-2 col-form-label">Date Return </label>
              <div class="col-10">
                <input name="datereturn" class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>
            </div>
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
       
         
          <input type="submit" class="cart-btn" value="Add to cart">
        </form>
        </div>
      </div> 
      @endforeach
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
