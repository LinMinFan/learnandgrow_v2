@extends('core.layouts.portfolio')

@push('css')

@endpush

@section('content')
  <main>
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="section-title">
            <h2>{{ __('admin.portfolio') }}</h2>
            <p>你可能會經歷多次失敗，但你絕不可被打倒。事實上，經歷失敗是人生必經之路，它們讓你更認識自己，知道自己無論陷入多艱苦的困境，也依然是可以走出來的。</p>
          </div>
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-web">Web</li>
                <li data-filter=".filter-api">Api</li>
              </ul>
            </div>
          </div>
          <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="{{ asset('images/portfolio/portfolio_v1.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>作品集第一版</h4>
                <p>php 原生 搭配 bootstrap</p>
                <a href="{{ asset('images/portfolio/portfolio_v1_l.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="web 1"><i class="bx bx-plus"></i></a>
                <a href="https://linminfan.github.io/" class="details-link" title="More Details" target="blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="{{ asset('images/portfolio/vote.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>投票系統</h4>
                <p>php 原生 搭配 bootstrap</p>
                <a href="{{ asset('images/portfolio/vote_l.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="web 2"><i class="bx bx-plus"></i></a>
                <a href="http://220.128.133.15/s1110204/vote/index.php" class="details-link" title="More Details" target="blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="{{ asset('images/portfolio/calendar.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>萬年曆</h4>
                <p>php 原生</p>
                <a href="{{ asset('images/portfolio/calendar_l.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="web 3"><i class="bx bx-plus"></i></a>
                <a href="http://220.128.133.15/s1110204/mycalendar/index.php" class="details-link" title="More Details" target="blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="{{ asset('images/portfolio/bweb1.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>乙級網頁設計 題組一</h4>
                <p>php 原生</p>
                <a href="{{ asset('images/portfolio/bweb1_l.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="web 4"><i class="bx bx-plus"></i></a>
                <a href="http://220.128.133.15/s1110204/bweb01/index.php" class="details-link" title="More Details" target="blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="{{ asset('images/portfolio/bweb2.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>乙級網頁設計 題組二</h4>
                <p>php 原生</p>
                <a href="{{ asset('images/portfolio/bweb2_l.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="web 5"><i class="bx bx-plus"></i></a>
                <a href="http://220.128.133.15/s1110204/bweb02/index.php" class="details-link" title="More Details" target="blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="{{ asset('images/portfolio/bweb3.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>乙級網頁設計 題組三</h4>
                <p>php 原生</p>
                <a href="{{ asset('images/portfolio/bweb3_l.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="web 6"><i class="bx bx-plus"></i></a>
                <a href="http://220.128.133.15/s1110204/bweb03/index.php" class="details-link" title="More Details" target="blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-api">
              <img src="{{ asset('images/portfolio/api_book.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>台南景點電子書</h4>
                <p>ajax 串接政府資訊 json 資料</p>
                <a href="{{ asset('images/portfolio/api_book_l.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="api 1"><i class="bx bx-plus"></i></a>
                <a href="http://220.128.133.15/s1110204/mybook/index.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Portfolio Section -->
  </main>
@endsection

@push('js')
    <script defer src="{{ asset('js/portfolio.js') }}"></script>
@endpush