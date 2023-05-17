@extends('layouts.main')
@section('title') {{$pages->title}}@endsection
@section('description') {{$pages->meta_description}}@endsection
@section('keywords') {{$pages->meta_keywords}}@endsection


@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{Voyager::image('/'.$pages->image)}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>{{$pages->title}}</h2>
        <ol>
          <li><a href="/">Главное</a></li>
          <li>{{$pages->title}}</li>
        </ol>


      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-12">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="content">
                {!! $pages->body !!}
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  @foreach ($posts as $item)
                    <li><a href="">{{$item->title}},</a></li>
                  @endforeach
                </ul>

              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->
@endsection