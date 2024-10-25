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
                <h1 class="breadcrumb__title">Project</h1>
              </div>
              <div class="breadcrumb__right">
                <ul>
                  <li> <a href="#">home</a> </li>
                  <li> <a href="#">Project</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb area end -->


    <!-- Portfolio area start -->
    <section class="portfolio__area-6 pt-150">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="portfolio__list-6">
                    @foreach($portfolios as $portfolio)
                        <div class="portfolio__item-4">
                            <div class="shine">
                                {{-- <a href="{{ route('portfolio.details', $portfolio->id) }}"> --}}
                                  <img src="{{ asset($portfolio->image) }}" alt="Portfolio Image" width="80">                                       
                                </a>
                            </div>
                            <div class="portfolio__content-4">
                                <p>{{ $portfolio->short_description }}</p>
                                {{-- <a href="{{ route('portfolio.details', $portfolio->id) }}"> --}}
                                    <h2 class="portfolio__title-4">{{ $portfolio->title }}</h2>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Portfolio area end -->


  </main>



@endsection