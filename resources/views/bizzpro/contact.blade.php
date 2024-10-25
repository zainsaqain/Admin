@extends('layouts.app')

@section('content')

<main>

  <!-- Breadcrumb area start -->
  <section class="breadcrumb__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__inner">
            <div class="breadcrumb__left">
              <h1 class="breadcrumb__title">Newsletter</h1>
            </div>
            <div class="breadcrumb__right">
              <ul>
                <li> <a href="{{ url('/') }}">Home</a> </li>
                <li> <a href="#">Newsletter</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb area end -->

  <!-- Newsletter subscription section -->
  <section class="contact__area-6 pt-150 pb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="contact__item">
            <i class="fa-solid fa-envelope"></i>
            <h4 class="title">Stay Updated</h4>
            <p>Subscribe to our newsletter and get the latest updates, articles, and promotions.</p>
          </div>
        </div>

        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <div class="col-lg-6">
          <div class="blog__form">
              <span class="blog__form-title">Subscribe to our Newsletter</span>
              <form action="{{ route('newsletter.subscribe') }}" method="POST">
                  @csrf
                
                      <div class="col-md-6">
                          <input type="email" name="email" id="email" placeholder="Email" required>
                      </div>
                      <div class="contact__submitwrap">
                          <button class="contact__submit btn-rollover" type="submit">Subscribe Now
                              <i class="fa-solid fa-arrow-right"></i>
                          </button>
                      </div>
                  </div>
              </form>
              @if(session('success'))
              <p>{{ session('success') }}</p>
          @endif
          
          @if(session('error'))
              <p>{{ session('error') }}</p>
          @endif
         
         
            </div>
      </div>
      
      
      </div>
    </div>
  </section>
  <!-- /Newsletter subscription section -->

  <!-- All JS Files -->
  <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/progressbar.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

</main>

@endsection
