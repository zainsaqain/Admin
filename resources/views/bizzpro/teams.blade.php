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
                <h1 class="breadcrumb__title">Our Team</h1>
              </div>
              <div class="breadcrumb__right">
                <ul>
                  <li> <a href="#">home</a> </li>
                  <li> <a href="#">Our Team</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb area end -->


    <!-- team area start -->
    <div class="team-area pt-5 pb-130">
      <div class="container">
          <div class="team__items-2">
              @foreach($teams as $team)
                  <div class="team__item-2" data-aos="fade-up" data-aos-delay="300">
                      <div class="team__thumb-2 border-radius-20">
                          <div class="shine">
                              <a href="about.html">
                                <img src="{{ asset('images/' . $team->image) }}" alt="Team Image">
                              </a>
                          </div>
                          <ul class="team__social-2">
                              <li><a class="color-base" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a class="color-base" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a class="color-base" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                          </ul>
                      </div>
                      <div class="team__content-2">
                          <a href="about.html">
                              <h3 class="team__name">{{ $team->name }}</h3>
                          </a>
                          <p class="team__post">{{ $team->description }}</p>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
  
    <!-- team area end -->


  </main>



@endsection