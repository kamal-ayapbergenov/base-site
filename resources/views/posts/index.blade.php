@extends('layouts.main')
@section('title') Блог@endsection
@section('description') @endsection
@section('keywords') @endsection


@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../nova/assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Блог</h2>
        <ol>
          <li><a href="/">Главное</a></li>
          <li>Блог</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-5 posts-list">
              @foreach ($posts as $item)                  
              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="{{Voyager::image('/'.$item->image)}}" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="{{ url('blog/'. $item->slug) }}">{{$item->title}}</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ url('blog/'. $item->slug) }}"><time datetime="2022-01-01">{{$item->created_at}}</time></a></li>
                      <!--<li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">12 Comments</a></li>-->
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      {{$item->excerpt}}
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{ url('blog/'. $item->slug) }}">Подробнее <i class="bi bi-arrow-right"></i></a>
                  </div>

                </article>
              </div>
              @endforeach
              
              <!-- End post list item -->

            </div><!-- End blog posts list -->

<div>
  <br>
  {{$posts->links('pagination::bootstrap-4')}}

</div>
 
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Ключевые слов</h3>
                <ul class="mt-3">
                  @foreach ($posts as $item)
                    <li><a href="{{ url('blog/'. $item->slug) }}">{{$item->meta_keywords}} <span></span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Последные новости</h3>

                <div class="mt-3">

                  @foreach ($posts as $item)
                  <div class="post-item mt-3">
                    <img height="71" src="{{Voyager::image('/'.$item->image)}}" alt="{{$item->title}}" class="flex-shrink-0">
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
                  @foreach ($posts as $item)
                    <li><a href="{{ url('blog/'. $item->slug) }}">{{$item->seo_title}}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->     
       
@endsection

