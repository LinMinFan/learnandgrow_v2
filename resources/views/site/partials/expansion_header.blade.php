<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-between">
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="{{ route('index') }}" class="logo">
                    <i class="fa-solid fa-house"></i>
                </a>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="home_index active">
                            <a href="{{ route('index') }}">
                                {{ __('admin.home') }}
                            </a>
                        </li>
                        <li class="portfolio">
                            <a href="{{ route('portfolio.index') }}">
                                {{ __('admin.portfolio') }}
                            </a>
                        </li>
                        <li class="drop-down">
                            <a href="#">
                                串接功能
                            </a>
                            <ul>
                                <a href="{{ route('ecpay.test') }}" target="blank">
                                    綠界科技 金流
                                </a>
                                <a href="{{ route('chat.index') }}" target="blank">
                                    ChatGPT
                                </a>
                            </ul>
                        </li>
                        <li class="contact">
                            <a href="{{ route('contact') }}">
                                {{ __('admin.contact') }}
                            </a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                </li>
                            @else
                                <li class="member drop-down">
                                    <a href="">
                                        {{ __('admin.member_center') }}
                                    </a>
                                    <ul>
                                        <a href="{{ route('login') }}">
                                            {{ __('admin.login') }}
                                        </a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">
                                                {{ __('admin.register') }}
                                            </a>
                                        @endif
                                    </ul>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </nav>
                <!-- .nav-menu -->
            </div>
        </div>
    </div>
</header>
<!-- End Header -->