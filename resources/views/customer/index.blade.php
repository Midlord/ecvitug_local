@extends('layouts.customer.app')
@section('content')
<section class="home-banner-area">
    <div class="container-fluid">
        <div class="row fullscreen d-flex align-items-center">
            <div class="banner-content col-lg-4 col-md-8 justify-content-center ">
                <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">Bu<span>i</span>ld <br />
                    ri<span>g</span>ht</h1>
                <div class="designation mb-25 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <p>Broad vision. Careful though, Hand Carfted Design. Engineering your dreams with us</p>
                </div>
                <a href="{{route('about')}}" class="primary-btn" data-text="Explore More">
                    <span>E</span>
                    <span>x</span>
                    <span>p</span>
                    <span>l</span>
                    <span>o</span>
                    <span>r</span>
                    <span>e</span>
                    <span> </span>
                    <span>M</span>
                    <span>o</span>
                    <span>r</span>
                    <span>e</span>
                </a>
            </div>
            <div class="banner-img offset-lg-1 col-lg-7 col-md-6">
                <img class="img-fluid" src="interface/img/banner-img.png" alt="">
            </div>
            <div class="social-icons">
                <ul>
                    <li><a href="index.html"><i class="ti-facebook"></i>facebook</a></li>
                    <li><a href="index.html"><i class="ti-twitter"></i>twitter</a></li>
                    <li><a href="index.html"><i class="ti-instagram"></i>ti-instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-5 about-left">
                <img class="img-fluid shadow" src="{{asset('images/banner.jpg')}}" alt="">
            </div>
            <div class="offset-lg-1 col-lg-5 col-md-12 about-right">
                <div class="section-title">
                    <h2 class="mb-4">Lets <br />
                        Introduce Our Company</h2>
                </div>
                <div class="mb-35 wow fadeIn" data-wow-duration=".8s" data-wow-delay=".3s">
                    <p>
                        We were in business for more than nine years and we have a lot of completed and ongoing projects to show you around. We learned most of the pitfalls of construction and develop methods on how to mitigate them
                    </p>
                    <p>Despite our solid experience and high quality service, we still proud ourselves as the cheapest contractor around. We guarantee that, compared to all other established contractors in our area, we are the one offering the most competitive price. This is due to the following.
                    </p>
                </div>
                <a href="{{route('about')}}" class="primary-btn" data-text="Read More">
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
                        <i class="flaticon-ring"></i>
                        <h4 class="ml-3">Rentals</h4>
                    </div>
                    <p>An so vulgar to on points wanted. No rapturous resolving continued household northward gay he it otherwise</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-area section-gap-top" id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>Our Portfolio</h3>
                    <h2><span>Check</span> Our Work</h2>
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

                <div class="col-lg-8 col-md-12 grid-item all wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
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
                </div>

                <div class="col-lg-4 grid-item col-md-6 all wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="single-work">
                        <div class="relative">
                            <div class="thumb">
                                <img class="image img-fluid" src="interface/img/work/w2.jpg" alt="">
                            </div>
                            <div class="middle">
                                <h4>2D Vinyl Design</h4>
                                <div class="cat">Client Project</div>
                            </div>
                            <a class="overlay" href="project-details.html"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-item col-md-6 all wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
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
                </div>

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
{{--  <section class="pricing-area section-gap-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>Pricing Plan</h3>
                    <h2><span>Choose</span> Your Package</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="pricing_item">
                    <h3 class="p_title">Weeding</h3>
                    <p class="p_criteria">Attend only first day</p>
                    <h1 class="p_price">$46.00</h1>
                    <div class="p_list">
                        <ul>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-close cross"></span> Unlimited Entrance</li>
                            <li><span class="ti-close cross"></span> Unlimited Entrance</li>
                        </ul>
                        <a class="primary-btn mt-4" href="#" data-text="Book Now">
                            <span>B</span>
                            <span>o</span>
                            <span>o</span>
                            <span>k</span>
                            <span> </span>
                            <span>N</span>
                            <span>o</span>
                            <span>w</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing_item">
                    <h3 class="p_title">Studio</h3>
                    <p class="p_criteria">Attend only first day</p>
                    <h1 class="p_price">$76.00</h1>
                    <div class="p_list">
                        <ul>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-close cross"></span> Unlimited Entrance</li>
                            <li><span class="ti-close cross"></span> Unlimited Entrance</li>
                        </ul>
                        <a class="primary-btn mt-4" href="#" data-text="Book Now">
                            <span>B</span>
                            <span>o</span>
                            <span>o</span>
                            <span>k</span>
                            <span> </span>
                            <span>N</span>
                            <span>o</span>
                            <span>w</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing_item">
                    <h3 class="p_title">Fashion</h3>
                    <p class="p_criteria">Attend only first day</p>
                    <h1 class="p_price">$96.00</h1>
                    <div class="p_list">
                        <ul>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-check"></span> Unlimited Entrance</li>
                            <li><span class="ti-close cross"></span> Unlimited Entrance</li>
                            <li><span class="ti-close cross"></span> Unlimited Entrance</li>
                        </ul>
                        <a class="primary-btn mt-4" href="#" data-text="Book Now">
                            <span>B</span>
                            <span>o</span>
                            <span>o</span>
                            <span>k</span>
                            <span> </span>
                            <span>N</span>
                            <span>o</span>
                            <span>w</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  --}}
<section class="blog-area section-gap-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>Our Blog</h3>
                    <h2><span>Latest</span> Good Story</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-recent-blog mb-lg-3 mb-5">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{asset('images/blogs/b.jpg')}}" alt="">
                    </div>
                    <a href="#">
                        <h4 class="mt-4 mb-3">Pictures of the year 2018, from the migrant caravan to Serena do
                            Williams Harbor dangerous</h4>
                    </a>
                    <div class="mb-3 bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div class="meta">
                            <span class="ti-user mr-1"></span> Admin
                            <span class="ti-calendar mr-1"></span> 20/09/2018
                        </div>
                    </div>
                    <p>
                        Unfeeling agreeable suffering it on smallness newspaper be. So come must
                        time no as. Do on unpleasing possession as of unreserved. Yet joy exquisite
                        put sometimes enjoyment perpetual now. Behind lovers eat having length horses
                        vanity say had its damn owes meter exquisite.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-recent-blog mb-lg-3 mb-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="thumb">
                                <img class="f-img img-fluid mx-auto" src="{{asset('images/blogs/b2.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-md-0 mt-3">
                            <a href="#">
                                <h4 class="mb-lg-3 mb-2">Spirits in the sky over Northern Ireland lake</h4>
                            </a>
                            <div class="bottom d-flex justify-content-between align-items-center flex-wrap mb-3">
                                <div class="meta">
                                    <span class="ti-user mr-1"></span> Admin
                                    <span class="ti-calendar mr-1"></span> 20/09/2018
                                </div>
                            </div>
                            <p>
                                Behind lovers eat having length horses vanity say had its mega.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="single-recent-blog mb-lg-3 mb-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="thumb">
                                <img class="f-img img-fluid mx-auto" src="{{asset('images/blogs/b3.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-md-0 mt-3">
                            <a href="#">
                                <h4 class="mb-lg-3 mb-2">Spirits in the sky over Northern Ireland lake</h4>
                            </a>
                            <div class="bottom d-flex justify-content-between align-items-center flex-wrap mb-3">
                                <div class="meta">
                                    <span class="ti-user mr-1"></span> Admin
                                    <span class="ti-calendar mr-1"></span> 20/09/2018
                                </div>
                            </div>
                            <p>
                                Behind lovers eat having length horses vanity say had its mega.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="single-recent-blog mb-lg-3 mb-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="thumb">
                                <img class="f-img img-fluid mx-auto" src="{{asset('images/blogs/bobcat.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-md-0 mt-3">
                            <a href="#">
                                <h4 class="mb-lg-3 mb-2">Spirits in the sky over Northern Ireland lake</h4>
                            </a>
                            <div class="bottom d-flex justify-content-between align-items-center flex-wrap mb-3">
                                <div class="meta">
                                    <span class="ti-user mr-1"></span> Admin
                                    <span class="ti-calendar mr-1"></span> 20/09/2018
                                </div>
                            </div>
                            <p>
                                Behind lovers eat having length horses vanity say had its mega.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@stop
