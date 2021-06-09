
    <div id="resu">
		@foreach ($data as $car)
		<article class="card card-product-list">
			<div class="row no-gutters">
				<aside class="col-md-3">
				<a href="#" class="img-wrap"><img src={{$car->image}}></a>
				</aside> <!-- col.// -->
				<div class="col-md-6">
					<div class="info-main">
						<a href="#" class="h5 title"> {{$car->modele_id}}  </a>
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
							{{-- <div class="label-rating">7/10</div> --}}
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
						<a href="/card/{{$car->id}}" class="btn btn-primary btn-block"> Details </a>
							<a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i> 
								<span class="text">Add to wishlist</span></a>
						</p>
					</div> <!-- info-aside.// -->
				</aside> <!-- col.// -->
			</div> <!-- row.// -->
		</article> <!-- card-product .// -->
		@endforeach
		<input id="dateg" name="dateg" type="hidden" value="{{$datg}}">

		<input id="dater" name="dater" type="hidden" value="{{$datr}}"> 
					
	</div>

		



