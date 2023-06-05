@extends('layouts.main')
@section('title') {{$posts->title}}@endsection
@section('description') {{$posts->meta_description}}@endsection
@section('keywords') {{$posts->meta_keywords}}@endsection


@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../nova/assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>{{$posts->title}}</h2>
        <ol>
          <li><a href="/">Главное</a></li>
          <li>{{$posts->title}}</li>
        </ol>


      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{Voyager::image('/'.$posts->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{$posts->title}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="{{$posts->created_at}}">{{$posts->created_at}}</time></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                {!! $posts->body !!}
               
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  @foreach ($des as $item)
                    <li><a href="{{ url('blog/'. $item->slug) }}">{{$item->meta_description}}</a>,</li>
                  @endforeach
                </ul>

              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Последные новости</h3>

                <div class="mt-3">

                  @foreach ($lastnews as $item)
                  <div class="post-item mt-3">
                    <img height="70px" src="{{Voyager::image('/'.$item->image)}}" alt="{{$item->title}}" class="flex-shrink-0">
                    <div>
                      <h4><a href="{{ url('blog/'. $item->slug) }}">{{$item->title}}</a></h4>
                      <time datetime="{{$item->created_at}}">{{$item->created_at}}</time>
                    </div>
                  </div><!-- End recent post item-->

                  @endforeach
                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Теги</h3>
                <ul class="mt-3">
                  @foreach ($keywords as $item)
                    <li><a href="{{ url('blog/'. $item->slug) }}">{{$item->seo_title}}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->
@endsection