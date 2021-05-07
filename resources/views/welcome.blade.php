<html>
<head>
 <meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Website title - bootstrap html template</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="/css/boots.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- plugin: fancybox  -->
<script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
<link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/resp.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>
<style>
	.ic{
		width: 20px;
		height: auto;
		margin-right: 20px;
	}
	.mrr{
		font-weight:bold;
	}
</style>
</head>
@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
     <!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">
    
    <div class="row">
        <aside class="col-md-3">
            
    <div class="card">
        <article class="filter-group">
            <header class="card-header">
                <form class="pb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-append">
                        <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                    <i class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Passengers</h6>
                </a>
            </header>
            <div class="filter-content collapse show" id="collapse_1" style="">
                <div class="card-body">
                    
                    <ul class="list-menu">
                    <li><img src="/img/passenger.png" class="ic" alt=""><a href="#" class="mrr">1  </a></li>
                    <li><img src="/img/passenger.png" class="ic" alt=""><a href="#" class="mrr">2 </a></li>
                    <li><img src="/img/passenger.png" class="ic" alt=""><a href="#" class="mrr">3 </a></li>
                    <li><img src="/img/passenger.png" class="ic" alt=""><a href="#" class="mrr">4+  </a></li>
                    </ul>
    
                </div> <!-- card-body.// -->
            </div>
        </article> <!-- filter-group  .// -->
        <article class="filter-group">
            <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                    <i class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Brands </h6>
                </a>
            </header>
            <div class="filter-content collapse show" id="collapse_2" style="">
                <div class="card-body">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" checked="" class="custom-control-input">
                      <div class="custom-control-label">Mercedes  
                          <b class="badge badge-pill badge-light float-right">120</b>  </div>
                    </label>
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" checked="" class="custom-control-input">
                      <div class="custom-control-label">Toyota 
                          <b class="badge badge-pill badge-light float-right">15</b>  </div>
                    </label>
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" checked="" class="custom-control-input">
                      <div class="custom-control-label">Mitsubishi 
                          <b class="badge badge-pill badge-light float-right">35</b> </div>
                    </label>
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" checked="" class="custom-control-input">
                      <div class="custom-control-label">Nissan 
                          <b class="badge badge-pill badge-light float-right">89</b> </div>
                    </label>
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <div class="custom-control-label">Honda 
                          <b class="badge badge-pill badge-light float-right">30</b>  </div>
                    </label>
        </div> <!-- card-body.// -->
            </div>
        </article> <!-- filter-group .// -->
        <article class="filter-group">
            <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                    <i class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Price range </h6>
                </a>
            </header>
            <div class="filter-content collapse show" id="collapse_3" style="">
                <div class="card-body">
                    <input type="range" class="custom-range" min="0" max="100" name="">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Min</label>
                      <input class="form-control" placeholder="$0" type="number">
                    </div>
                    <div class="form-group text-right col-md-6">
                      <label>Max</label>
                      <input class="form-control" placeholder="$1,0000" type="number">
                    </div>
                    </div> <!-- form-row.// -->
                    <button class="btn btn-block btn-primary">Apply</button>
                </div><!-- card-body.// -->
            </div>
        </article> <!-- filter-group .// -->
        
        <article class="filter-group">
            <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
                    <i class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">More filter </h6>
                </a>
            </header>
            <div class="filter-content collapse in" id="collapse_5" style="">
                <div class="card-body">
                    <label class="custom-control custom-radio">
                      <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
                      <div class="custom-control-label">Any condition</div>
                    </label>
    
                    <label class="custom-control custom-radio">
                      <input type="radio" name="myfilter_radio" class="custom-control-input">
                      <div class="custom-control-label">Brand new </div>
                    </label>
    
                    <label class="custom-control custom-radio">
                      <input type="radio" name="myfilter_radio" class="custom-control-input">
                      <div class="custom-control-label">Used items</div>
                    </label>
    
                    <label class="custom-control custom-radio">
                      <input type="radio" name="myfilter_radio" class="custom-control-input">
                      <div class="custom-control-label">Very old</div>
                    </label>
                </div><!-- card-body.// -->
            </div>
        </article> <!-- filter-group .// -->
    </div> <!-- card.// -->
    
        </aside> <!-- col.// -->
        <main class="col-md-9">
    
    @foreach ($car as $car)
    <article class="card card-product-list">
        <div class="row no-gutters">
            <aside class="col-md-3">
            <a href="#" class="img-wrap"><img src="{{$car->image}}"></a>
            </aside> <!-- col.// -->
            <div class="col-md-6">
                <div class="info-main">
                    <a href="#" class="h5 title"> {{$car->modele}}  </a>
                    <div class="rating-wrap mb-3">
                        <ul class="rating-stars">
                            <li style="width:80%" class="stars-active"> 
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                            </li>
                            <li>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                            </li>
                        </ul>
                        <div class="label-rating">7/10</div>
                    </div> <!-- rating-wrap.// -->
                    
                <p> {{$car->description}}</p>
                </div> <!-- info-main.// -->
            </div> <!-- col.// -->
            <aside class="col-sm-3">
                <div class="info-aside">
                    <div class="price-wrap">
                        <span class="price h5"> {{$car->prix}} TND </span>	
                        <del class="price-old"> $85</del>
                    </div> <!-- info-price-detail // -->
                    <p class="text-success">Free shipping</p>
                    <br>
                    <p>
                        <a href="#" class="btn btn-primary btn-block"> Details </a>
                        <a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i> 
                            <span class="text">Add to wishlist</span></a>
                    </p>
                </div> <!-- info-aside.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </article> <!-- card-product .// -->
    @endforeach
    
    
    
    
    
    
    
    <nav aria-label="Page navigation sample">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    
        </main> <!-- col.// -->
    
    </div>
    
    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
 </div>
@endsection
</html>
               