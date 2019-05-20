
@extends('layouts.customer.app')
@section('content')
<section class="work-area section-gap-top" id="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Our Rentals</h3>
                        <h2><span>Check</span> Our Rentals</h2>
                    </div>
                </div>
    
                <div class="col-lg-12 d-none">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter=".all"></li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 grid-sizer"></div>
    
                    {{-- <div class="col-lg-8 col-md-12 grid-item all wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                        <div class="single-work">
                            <div class="relative">
                                <div class="thumb">
                                    <img class="image img-fluid" src="interface/img/work/w1.jpg" alt="">
                                </div>
                                <div class="middle">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">Client Project</div>
                                </div>
                                <a class="overlay" href="project-details.html"></a>
                            </div>
                        </div>
                    </div> --}}
    
                    @foreach ($products as $product)
                        <div class="col-lg-4 grid-item col-md-6 all wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="single-work">
                                <div class="relative">
                                    <div class="thumb">
                                        <img class="image img-fluid" src="{{asset('storage/uploads/equipments/'.$product->image)}}" alt="">
                                    </div>
                                    <div class="middle">
                                        <div class="cat">{{$product->name}}</div>
                                    </div>
                                    <a class="overlay" href="{{route('shop.show',$product->slug)}}"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
    
                    {{-- <div class="col-lg-4 grid-item col-md-6 all wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="single-work">
                            <div class="relative">
                                <div class="thumb">
                                    <img class="image img-fluid" src="interface/img/work/w3.jpg" alt="">
                                </div>
                                <div class="middle">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">Client Project</div>
                                </div>
                                <a class="overlay" href="project-details.html"></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-8 grid-item col-md-12 all wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="single-work">
                            <div class="relative">
                                <div class="thumb">
                                    <img class="image img-fluid" src="interface/img/work/w4.jpg" alt="">
                                </div>
                                <div class="middle">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">Client Project</div>
                                </div>
                                <a class="overlay" href="project-details.html"></a>
                            </div>
                        </div>
                    </div> --}}
    
                    <div class="col-lg-4 text-center grid-item col-md-12 all creative wow fadeIn" data-wow-duration="2s">
                        <a href="#" class="primary-btn" data-text="View More">
                            <span>V</span>
                            <span>i</span>
                            <span>e</span>
                            <span>w</span>
                            <span> </span>
                            <span>M</span>
                            <span>o</span>
                            <span>r</span>
                            <span>e</span>
                        </a>
                    </div>
    
                </div>
            </div>
        </div>
    </section>
@endsection