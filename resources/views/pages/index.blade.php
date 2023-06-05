@extends('layouts.main')
@section('title') Страницы@endsection
@section('description')  @endsection
@section('keywords') @endsection


@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../nova/assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Страницы</h2>
        <ol>
          <li><a href="/">Главное</a></li>
          <li>Страницы</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->



    <section id="services-cards" class="services-cards">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row gy-4">
          @foreach ($pages as $item)                  
          @if ($item->status === "ACTIVE")

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{Voyager::image('/'.$item->image)}});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <a href="{{ url('pages/'. $item->slug) }}">
                    <div class="card-body">
                      <h4 class="card-title">{{$item->title}}</h4>
                      <p>{{$item->excerpt}}</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
          @endif          

          @endforeach

          <div>
            <br>
            {{$pages->links('pagination::bootstrap-4')}}
          </div>

        </div>

      </div>
    </section>





  </main><!-- End #main -->     
       
@endsection

