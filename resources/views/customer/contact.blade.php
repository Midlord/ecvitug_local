
@extends('layouts.customer.app')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">Contact Us</h1>
        <p>Fowl living for lights our ears bearing to heaven signs</p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div
          class="map-wrap"
          style="width:100%; height: 445px;"
          id="map"
        ></div>
      </div>

      <div class="col-lg-4 d-flex flex-column address-wrap">
        <div class="single-contact-address d-flex flex-row">
          <div class="icon"><i class="ti-home"></i></div>
          <div class="contact-details">
            <h5>Angeles, Pampanga, Philippines</h5>
            <p>3025 Kuliat Street Lourdes Sur</p>
          </div>
        </div>
        <div class="single-contact-address d-flex flex-row">
          <div class="icon"><i class="ti-headphone"></i></div>
          <div class="contact-details">
            <h5>00 (958) 9865 562</h5>
            <p>Mon to Fri 9am to 6 pm</p>
          </div>
        </div>
        <div class="single-contact-address d-flex flex-row">
          <div class="icon"><i class="ti-email"></i></div>
          <div class="contact-details">
            <h5>support@ecvitug.com</h5>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <form
          class="form-area "
          id="myForm"
          enctype="multipart/form-data"
          action="{{route('contact.store')}}"
          method="post"
          class="contact-form text-right"
        >
        @csrf
          <div class="row">
            <div class="col-lg-6 form-group form-group-top">
              <input
                name="contact_name"
                placeholder="Enter your name"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter your name'"
                class="common-input mb-20 form-control"
                required=""
                value="{{Auth::check() ? Auth::user()->name : old('name')}}"
                type="text"
              />
              @if ($errors->has('contact_name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('contact_name') }}</strong>
              </span>
              @endif

              <input
                name="contact_email"
                placeholder="Enter email address"
                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter email address'"
                class="common-input mb-20 form-control"
                value="{{Auth::check() ? Auth::user()->email : old('contact_email')}}"
                required=""
                type="email"
              />
              @if ($errors->has('contact_email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('contact_email') }}</strong>
              </span>
              @endif

              <input
                name="contact_subject"
                placeholder="Enter your subject"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter your subject'"
                class="common-input mb-20 form-control"
                value="{{old('contact_subject')}}"
                required=""
                type="text"
              />

              @if ($errors->has('contact_subject'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('contact_subject') }}</strong>
              </span>
              @endif

            </div>
            <div class="col-lg-6 form-group">
              <textarea
                class="common-textarea form-control"
                name="contact_msg"
                placeholder="Messege"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Messege'"
                value="{{old('contact_msg')}}"
                required=""
              ></textarea>
            </div>

            @if ($errors->has('contact_msg'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('contact_msg') }}</strong>
            </span>
            @endif

            <div class="col-lg-12 text-center">
              {!! NoCaptcha::display() !!}
              @if ($errors->has('g-recaptcha-response'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                  </span>
              @endif
          </div>
            <div class="col-lg-12">
              <div class="alert-msg" style="text-align: left;"></div>

              <button
                class="primary-btn"
                type="submit"
                style="float: right;"
                data-text="Send Message"
              >
                <span>S</span> <span>e</span> <span>n</span> <span>d</span>
                <span> </span> <span>M</span> <span>e</span> <span>s</span>
                <span>s</span> <span>a</span> <span>g</span> <span>e</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection