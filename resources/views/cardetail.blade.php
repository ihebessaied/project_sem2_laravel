<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
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
</style>
  </head>

  <body>
    <main class="container">
@foreach ($cardd as $a)
{{-- <img data-image="black" src="{{$a->image}}" alt="aaaaaa"> --}}
      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black" src="{{$a->image}}" alt="aaaaaa">
        
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

            <div class="cable-choose">
             {{ $a->name}}
            </div>

            <a href="#">How to configurate your headphones</a>
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>{{$a->prix}} TND</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>
      </div> 
      @endforeach
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
