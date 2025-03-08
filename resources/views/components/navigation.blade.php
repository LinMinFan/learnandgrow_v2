<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto"> <!-- 使用 mr-auto 將左側選項對齊到左邊 -->
                <a class="navbar-brand" href="{{ route('index') }}">
                    <i class="fas fa-home"></i>
                </a>
            </ul>
            <ul class="navbar-nav ml-auto"> <!-- 右側選項對齊右邊 -->
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">聯繫我</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="memberDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                會員中心
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="memberDropdown">
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('admin.login') }}</a>
                                @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('admin.register') }}</a>
                                @endif
                            </div>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
