@extends('layouts.homehouses')
@section('content')
 <!--Cars List-->
 <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our cars</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum 0r sit amet consectetur.</h3>
                </div>
                <div class="row">
					@foreach($houses as $h)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/houses/{{$h->pic}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$h->name}} {{$h->emplacement}}</div>
                                
                            </div>
                        </div>
                    </div>
					@endforeach
                </div>
				{{ $houses->links()}}
}
            </div>
        </section>
        <!--End Cars List-->
@endsection
