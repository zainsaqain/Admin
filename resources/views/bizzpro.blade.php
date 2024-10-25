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
                <h1 class="breadcrumb__title">Service</h1>
              </div>
              <div class="breadcrumb__right">
                <ul>
                  <li> <a href="#">home</a> </li>
                  <li> <a href="#">Service</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb area end -->


    <!-- service area start -->
    <div class="service-area pt-150 pb-130">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-xxl-4 col-xl-4 col-md-6 mb-4">
                        <div class="service__item style2">
                            <div class="service__content">
                                <div class="icon-box">
                                  
                                  <img src="{{ asset($service->image) }}" alt="Service Image">
                                  
                                </div>
                                {{-- <a href="{{ route('services.show', $service->id) }}"> --}}
                                    <div class="service__title">{{ $service->name }}</div>
                                </a>
                                <p>{{ $service->description }}</p>
                                {{-- <a class="db-btn-arrow" href="{{ route('services.show', $service->id) }}"> --}}
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service area end -->


  </main>
  @endsection

