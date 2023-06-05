@extends('layouts.main')
@section('title') Блефаропластика в Ташкенте @endsection
@section('content')



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">«DR. YAKUBOV LAZER MED»</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Благодаря инновационным методам, технологическому прогрессу, высококвалифицированным и опытным врачам сегодня есть возможность преобразить внешний вид, без причинения вреда своему здоровью. </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ url('pages/o-nas') }}" class="btn-get-started">Посмотреть контакты</a>
            <a href="https://youtu.be/mB5pnnlmFvA?t=8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Отзыв</span></a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->



  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Почему нас выбирают</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('nova/assets/img/why-us-bg.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Безопасность пациентов</h3>
                    <h4 class="mb-3"></h4>
                    <p>Безопасность наших пациентов гарантирована профессиональным уровнем врачей, современным оборудованием и научно доказанными способами коррекции.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Большой опыт</h3>
                    <h4 class="mb-3"></h4>
                    <p>Хирург с большим опытом работы, который признан одним из лучших среди Европейский стран.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Диалог с пациентами</h3>
                    <h4 class="mb-3"></h4>
                    <p>Для хорошего и долгосрочного результата пластической операции хирург и пациент должны говорить на одном языке.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Мировой уровень</h3>
                    <h4 class="mb-3"></h4>
                    <p>Квалифицированные хирурги с Европейскими сертификатами.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Мастерство врачей</h3>
                    <h4 class="mb-3"></h4>
                    <p>Квалификация сотрудников — показатель нашего качества. Хирург клиники ведет научную деятельность, состоит в профессиональных сообществах, хорошо известен среди хирургов и пациентов.</p>
                  </div>
                </div><!-- End slide item -->
                

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Искусство</h3>
                    <h4 class="mb-3"></h4>
                    <p>Эстетическое видение человека и его природы — важная часть профессии пластического хирурга.</p>
                  </div>
                </div><!-- End slide item -->
                
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="departments" class="why-us">
      <div class="container aos-init aos-animate">

        <div class="section-header">
          <h2>Услуги</h2>
          <p>Благодаря инновационным методам, технологическому прогрессу, высококвалифицированным и опытным врачам сегодня есть возможность преобразить внешний вид, без причинения вреда своему здоровью.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-0" aria-selected="false" tabindex="-1" role="tab">Блефаропластика</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1" aria-selected="true" role="tab">Пластика век (блефаропластика)</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2" aria-selected="false" tabindex="-1" role="tab">Подтяжка лица — фейслифтинг</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3" aria-selected="false" tabindex="-1" role="tab">Маммопластика</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4" aria-selected="false" tabindex="-1" role="tab">Пластика живота</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5" aria-selected="false" tabindex="-1" role="tab">Косметология</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">

            <div class="tab-pane" id="tab-0" role="tabpanel">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Выделяют следующие виды блефаропластики:</h3>
                    <p class="fst-italic">Радиоволновая блефаропластика
Лазерная блефаропластика,
Пластика губ,
Булхорн — подтяжка верхней губы,
Нитевой безоперационный Булхорн,
V-Y пластика «Париж»,
Укорачивающая пластика губ,
Корнер лифт и «валентинка»,
Резекция мышцы DAO,
Операция Кессельринга,
Уменьшение объема губ,
Ботокс в губы,
Филлеры увеличение губ,
Липофилинг лица,
Нитевая подтяжка губ,
Сангапури (европеизация),
Пластика носа,
Открытая ринопластика,
Закрытая ринопластика,
Коррекцию носа филлером,
Коррекция носа нитями,
Подтяжка бровей,
Direct brow lift,
Через верхнее веко — Транспальпебральная,
Височная подяжка бровей,
Нитевая подтяжка бровей,
Пластика ушей,
Коррекция лопоухости,
Пластика мочки уха
</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="image/doctor-600-525.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
              <div class="tab-pane active show" id="tab-1" role="tabpanel">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Пластика век (блефаропластика)</h3>
                    <p class="fst-italic">Операция по изменению формы век, разреза глаз (от др.-греч. βλέφαρον — веко). Данный вид оперативного вмешательства предполагает иссечение избытков кожного покрова и жировых образований.</p>
                    <p>Пластика верхних век, Пластика нижних век,
Одномоментная пластика верхних и нижних век,
Сангапури (пластика азиатских век),
Круговая блефаропластика,
Трансконъюктивальная блефаропластика,
Радиоволновая блефаропластика,
Лазерная блефаропластика,
Эпикантопластика,
Кантопексия</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="image/blepharoplasty_zholtikov.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2" role="tabpanel">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Подтяжка лица — фейслифтинг</h3>
                    <p class="fst-italic">Подтяжка лица, фейсли́фтинг (англиц. от face lifting) — пластическая операция, направленная на устранение морщин, обвисания кожи, носогубных складок и других признаков старения при помощи удаления избыточного количества жировой клетчатки, подтягивания подлежащих мышц и перераспределения кожи лица и шеи с иссечением её избытка.</p>
                    <p>Face lift круговая подтяжка лица,
Mini face lift подтяжка лица без наркоза! под местной анестезией,
SMAS lift,
MACS lift,
S – lift,
Week-end face lift (Голливудская),
Подтяжка лба и бровей,
Платизмопластика – подтяжка шеи,
Удаление второго подбородка,
Височная подяжка,
Нитевая подтяжка лица,
Контурная пластика лица,
Липосакция лица</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="image/podtyajka-litsa.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3" role="tabpanel">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Маммопластика</h3>
                    <p class="fst-italic">Увеличение или же уменьшение молочных железы</p>
                    <p>Увеличение груди силиконовыми имплантами,
Увеличение груди филлером,
Увеличение груди липофилингом,
Нитевая подтяжка груди,
Подтяжка груди — мастопексия,
Уменьшение молочных желез,
Коррекция ареолы (соска)</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="image/umenshit_grud_plastikoi.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4" role="tabpanel">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Пластика живота</h3>
                    <p class="fst-italic">Абдоминопла́стика (от лат. abdomen «живот») — объёмное оперативное вмешательство, осуществляемое с целью восстановления эстетических пропорций живота. </p>
                    <p>
Полная абдоминопластика,
Мини-абдоминопластика,
Средняя абдоминопластика,
Реверсивная абдоминопластика, Абдоминопластика с липосакцией
</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="image/pacient.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5" role="tabpanel">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Косметология</h3>
                    <p class="fst-italic">Косметология (от греч. κοσμητικός- красота и -λογία — учение) — наука, изучающая эстетические проблемы организма человека, их этиологии, проявления и методы коррекции, также — свод методик, направленных на коррекцию эстетических проблем внешности человека.</p>
                    <p>
Классическая косметология
Пилинг
Уходовая косметология
Инъекционная косметология
Филлер – гиалуроновая кислота
4D нитевая подтяжка
Микросклеротерапия сосудистых звездочек
Аппаратная косметология
Ультразвуковая SMAS подтяжка лица
Ультразвуковая липосакция
Безоперационная интимная пластика
Лазерная косметология
Лечение целлюлита
Лечение выпадения волос
Лечение рубцов (шрамов)</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="image/yulduz-kos.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>НОВЕЙШИЕ ФРАНЦУЗСКИЕ МЕТОДИКИ</h3>
            <p>Якубов Шерзод Ильхамович — сертифицированный пластический хирург, с многолетним опытом работы в пластической и эстетической хирургии. Именно французская школа сформировала его основные знания и навыки в пластической хирургии, что позволяет быстро и четко оперировать, не затягивать время пластической операции.</p>
            <a class="cta-btn" href="tel:+998 90 900 04 08">Поговорить о консультации</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Последние новости</h2>

        </div>

        <div class="row gy-5">

          @foreach ($posts as $item)
          @if ($item->status == "PUBLISHED" && $item->status != "DRAFT" && $item->status != "PENDING")
              
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="post-box">
                <div class="post-img"><img src="{{Voyager::image('/'.$item->image)}}" class="img-fluid" alt=""></div>
                <div class="meta">
                  <span class="post-date">{{$item->created_at}}</span>
                </div>
                <h3 class="post-title">{{$item->title}}</h3>
                <p>{{$item->excerpt}}...</p>
                <a href="{{ url('blog/'. $item->slug) }}" class="readmore stretched-link"><span>Подробнее</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            
          @endif          
          @endforeach

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->



  <section id="contact" class="contact">
    <div class="container position-relative aos-init aos-animate" data-aos="fade-up">
      
      <div class="section-header">
        <h2>Геопозиция</h2>

      </div>

      <div class="row gy-4 d-flex justify-content-end">

        <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">

          <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2841.1732844736325!2d69.21300143418048!3d41.348194159396535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8d5a3d419329%3A0x5539bf2709c05b87!2sNANO%20Medical%20Clinic!5e0!3m2!1sru!2s!4v1677056665407!5m2!1sru!2s" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div><!-- End Contact Form -->

      </div>

    </div>
  </section>



@endsection