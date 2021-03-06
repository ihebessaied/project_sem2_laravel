@extends('layouts.homehouses')
@section('content')
<!--event List-->
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
                            <a class="portfolio-link" data-bs-toggle="modal" href="#event{{$e->id}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('storage')}}/{{ $e->event_image}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$e->event_label}} {{$e->event_place}}</div>
                                
                            </div>
                        </div>
                    </div>
                    <!--Modal-->
                    <div class="portfolio-modal modal fade" id="event{{$e->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-bs-dismiss="modal"> <img src="assets/img/close-icon.svg" alt="Close modal" /> </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <h2 class="text-uppercase">{{$e->event_label}} </h2>
                                                <p class="item-intro text-muted">.</p> <img class="img-fluid d-block mx-auto" src="{{asset('storage')}}/{{ $e->event_image}}" alt="..." />
                                                <p>{{ $e->event_description}}</p>
                                                <ul class="list-inline">
                                                    <li> <strong>Event:</strong> {{ $e->event_label}}</li>
                                                    <li> <strong>start at:</strong>  {{ $e->event_start}}</li>
                                                    <li> <strong>finish date:</strong>  {{ $e->event_finish}}</li>
                                                </ul>
                                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"> <i class="fas fa-times me-1"></i> Close Project </button>
                                                {{-- <button href="{{ route('joinevent') }}" type="button" class="btn btn-default"><i class="fas fa-sign-in-alt"></i>Join Now</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal end-->
                    @endforeach
                </div>
                {{ $events->links()}}
                


            </div>
        </section>
        <!--End event List-->
@endsection
