@extends('core.layouts.master')

@push('css')

@endpush

@section('content')
    @include('site.partials.notification')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1>{{ __('messages.introduction_one') }}</h1>
                    <h2>{{ __('messages.introduction_two') }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                  <h2>{{ __('admin.about') }}</h2>
                  <p>保持熱情，持續學習</p>
                  <p>每天進步一點點</p>
                </div>
                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            {{ __('messages.expertise') }}
                        </p>
                        <ul>
                            <li>
                                <i class="ri-check-double-line"></i> Web 設計與開發
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Linux 系統配置
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> RDBMS 資料庫應用
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> 系統架構規劃
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Oop 物件導向程式設計
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Restful Api
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            {{ __('messages.certificate') }}
                        </p>
                        <ul>
                            <li>
                                乙級網頁設計技術士
                            </li>
                            <li>
                                LPIC Level 1
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container">
                <div class="section-title">
                  <h2>{{ __('admin.skills') }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <h4>
                                <a href="">程式語言</a>
                            </h4>
                            <p>Html Css JavaScript jQuery Php Ajax Sql C C++ </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <h4>
                                <a href="">資料庫</a>
                            </h4>
                            <p>MySQL MariaDB RDBMS 資料庫軟體應用 資料備份與復原</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="fa-brands fa-laravel"></i>
                            </div>
                            <h4>
                                <a href="">框架與寫作風格</a>
                            </h4>
                            <p>Laravel WordPress OOP SOLID CleanCode RESTfulAPI 系統架構規劃 模組化系統設計</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="fa-brands fa-linux"></i>
                            </div>
                            <h4>
                                <a href="">Linux </a>
                            </h4>
                            <p>SSH ShellScript Docker 作業系統基本操作 測試環境建置規劃 資訊設備環境設定 伺服器網站管理維護</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Skills Section -->
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">
                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('images/skills/php.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('images/skills/laravel.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('images/skills/mysql.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('images/skills/html.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('images/skills/css.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('images/skills/javascript.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('images/skills/linux.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('images/skills/docker.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->
        <!-- ======= Experience Section ======= -->
        <section id="experience" class="experience">
            <div class="container">
                <div class="section-title">
                    <h2>{{ __('admin.experience') }}</h2>
                  </div>
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="icon-box mt-5 mt-lg-0">
                            <i class="fa-solid fa-building"></i>
                            <h4>諾亞克科技股份有限公司</h4>
                            <p>php工程師</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="fa-solid fa-building"></i>
                            <h4>新保科技有限公司</h4>
                            <p>軟體工程師</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="fa-solid fa-building"></i>
                            <h4>樂活多媒體有限公司</h4>
                            <p>後端工程師</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("{{ asset('images/features.jpg') }}");'></div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->
    </main>
    <!-- End #main -->
@endsection

@push('js')
    
@endpush