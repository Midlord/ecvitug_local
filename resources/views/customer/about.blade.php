
@extends('layouts.customer.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">About Us</h1>
        <p>Fowl living for lights our ears bearing to heaven signs</p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start About Area -->
<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-5 about-left">
                <img class="img-fluid" src="{{asset('images/projects/about_cover.jpg')}}" alt="">
            </div>
            <div class="offset-lg-1 col-lg-5 col-md-12 about-right">
                <div class="section-title">
                    <h2 class="mb-4">Lets <br />
                        Introduce About Myself</h2>
                </div>
                <div class="mb-35 wow fadeIn" data-wow-duration=".8s" data-wow-delay=".3s">
                    <p>
                        We were in business for more than nine years and we have a lot of completed and ongoing projects to show you around. We learned most of the pitfalls of construction and develop methods on how to mitigate them
                    </p>
                    <p>Despite our solid experience and high quality service, we still proud ourselves as the cheapest contractor around. We guarantee that, compared to all other established contractors in our area, we are the one offering the most competitive price. This is due to the following.
                    </p>
                </div>
                <a href="#" class="primary-btn" data-text="Read More">
                    <span>R</span>
                    <span>e</span>
                    <span>a</span>
                    <span>d</span>
                    <span></span>
                    <span>M</span>
                    <span>o</span>
                    <span>r</span>
                    <span>e</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Service Area -->
<section class="service-area section-gap-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>Our Services</h3>
                    <h2><span>What We Offer</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.0s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-building"></i>
                        <h4 class="ml-3">Solid Experience</h4>
                    </div>
                    <p>We were in business for more than nine years and we have a lot of completed and ongoing projects to show you around. We learned most of the pitfalls of construction and develop methods on how to mitigate them.
                        Possess high school diploma, valid license with excellent driving record, reliable vehicle.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="flaticon-water"></i>
                        <h4 class="ml-3">Competitive Cost</h4>
                    </div>
                    <p>Despite our solid experience and high quality service, we still proud ourselves as the cheapest contractor around. We guarantee that, compared to all other established contractors in our area, we are the one offering the most competitive price. This is due to the following.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="flaticon-content"></i>
                        <h4 class="ml-3">Quality Works</h4>
                    </div>
                    <p>Our solid experience and established teams allow us to deliver projects at an exceptional level of quality. Our long presence in the industry provides us with experienced workers while our established teams provide necessary checks to ensure compliance with standards and specifications.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="flaticon-art"></i>
                        <h4 class="ml-3">Expertise working</h4>
                    </div>
                    <p>Expertise working with a wide range of construction materials and equipment; familiarity with building processes, from project initiation through completion.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="flaticon-button"></i>
                        <h4 class="ml-3">Laborer</h4>
                    </div>
                    <p>Participated in broad range of construction projects involving demolition, site maintenance and clean up, materials transport, and general support of all phases of construction. Assisted framing and siding teams.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-lock"></i>
                        <h4 class="ml-3">Safety</h4>
                    </div>
                    <p>In a strong safety culture, people value and expect a safe and healthy workplace, people in the workplace are considered to be the most valuable resource, and safety and health is valued along with productivity, quality and pay.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Area -->    
@stop

