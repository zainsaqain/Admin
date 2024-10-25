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

<!-- Registered Users area start -->

<!-- User area start -->
<section class="portfolio__area-6 pt-150"> <!-- Reuse same structure and classes -->
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="portfolio__list-6"> <!-- Reuse same class for list -->
                    @foreach($users as $user)
                        <div class="portfolio__item-4"> <!-- Reuse same class for item -->
                            <div class="shine">
                                <img src="{{ $user->image ? asset('storage/' . $user->image) : asset('default-user.png') }}" alt="User Image" width="80">
                            </div>
                            <div class="portfolio__content-4"> <!-- Reuse same class for content -->
                                <p>{{ $user->email }}</p>
                                <h2 class="portfolio__title-4">{{ $user->name }}</h2> <!-- Similar title styling -->
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