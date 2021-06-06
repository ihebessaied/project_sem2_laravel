@extends('layouts.homehouses')
@section('content')
<!--Cars List-->
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Events</h2>
                    <h3 class="section-subheading text-muted">Our Events is a good idea to start .</h3>
                </div>
                <div class="row">
				@foreach($events as $e)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src={{$e->event_image}}/>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$e->event_label}} {{$e->event_place}}</div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $events->links()}}
                


            </div>
        </section>
        <!--End event List-->
@endsection
