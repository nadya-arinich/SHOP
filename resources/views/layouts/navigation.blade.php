<header class="main-header-area">
    <div class="header-middle py-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-middle-wrap position-relative">
                        <div class="header-contact d-none d-lg-flex">
                            <i class="pe-7s-call"></i>
                            <a href="tel://+375 29 258 20 20">+375 29 258 20 20</a>
                        </div>

                        <a href="{{ asset('/')}}" class="header-logo">
                            <img src="{{ asset('assets/img/dark.png')}}" alt="Header Logo">
                        </a>
                        <div class="col-lg-3 col-6">
                            <div class="header-right">
                                <ul>
                                    <li class="dropdown d-none d-lg-block">
                                        <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="stickysettingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                            <i class="pe-7s-users"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="stickysettingButton">
                                            <li class="dropdown-item">
                                                <x-nav-link :href="route('login')">
                                                    {{ __('Войти') }}
                                                </x-nav-link>
                                            </li>
                                            <li class="dropdown-item">
                                                <x-nav-link :href="route('register')">
                                                    {{ __('Регистрация') }}
                                                </x-nav-link>  
                                            </li>
                                            <li class="dropdown-item">  
                                                @auth
                                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                    {{ __('Личный кабинет') }}
                                                </x-dropdown-link>
                                                @elseauth
                                            </li>
                                            <li class="dropdown-item"> 
                                                @endauth
                                                <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                    {{ __('Выход') }}
                                                </x-dropdown-link>
                                                </form>
                                            </li>   
                                        </ul>
                                    </li>
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="pe-7s-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li class="drop-holder">
                                    <x-nav-link :href="asset('/')">
                                        Главная
                                    </x-nav-link>
                                </li>
                                <li class="megamenu-holder">
                                    <x-nav-link :href="route('catalogs')">
                                        Каталог
                                    </x-nav-link>
                                </li>
                                <li class="drop-holder">
                                    <x-nav-link :href="route('basket')">
                                        Корзина
                                    </x-nav-link>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-sticky py-4 py-lg-0">
        <div class="container">
            <div class="header-nav position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6">
                        <a href="{{ asset('/')}}" class="header-logo">
                            <img src="{{ asset('assets/img/dark.png')}}" alt="Header Logo">
                        </a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="main-menu">
                            <nav class="main-nav">
                                <ul>
                                    <li class="drop-holder">
                                        <x-nav-link :href="asset('/')">
                                            Главная
                                        </x-nav-link>
                                    </li>
                                    <li class="megamenu-holder">
                                        <x-nav-link :href="route('catalogs')">
                                            Каталог
                                        </x-nav-link>
                                    </li>
                                    <li>
                                        <x-nav-link :href="route('basket')">
                                            Корзина
                                        </x-nav-link>
                                    </li>
                                    <li class="dropdown d-none d-lg-block">
                                        <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="stickysettingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                                <i class="pe-7s-users"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="stickysettingButton">
                                            <li class="dropdown-item">
                                                    <x-nav-link :href="route('login')">
                                                        {{ __('Войти') }}
                                                    </x-nav-link>
                                            </li>
                                            <li class="dropdown-item">
                                                    <x-nav-link :href="route('register')">
                                                        {{ __('Регистрация') }}
                                                    </x-nav-link>  
                                            </li>
                                            <li class="dropdown-item">  
                                                    @auth
                                                    <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                        {{ __('Личный кабинет') }}
                                                    </x-dropdown-link>
                                                    @elseauth
                                            </li>
                                            <li class="dropdown-item"> 
                                                    @endauth
                                                    <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                            {{ __('Выход') }}
                                                    </x-dropdown-link>
                                                    </form>
                                            </li>   
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="header-right">
                            <ul>
                                <li class="mobile-menu_wrap d-block d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                        <i class="pe-7s-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-body">
            <div class="inner-body">
                <div class="offcanvas-top">
                    <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                </div>
                <div class="header-contact offcanvas-contact">
                    <i class="pe-7s-call"></i>
                    <a href="tel://+375 29 258 20 20">+375 29 258 20 20</a>
                </div>
                <div class="offcanvas-user-info">
                    <ul class="dropdown-wrap">
                        <li class="dropdown">
                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="pe-7s-users"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                <li class="dropdown-item">
                                    <x-nav-link :href="route('login')">
                                        {{ __('Войти') }}
                                    </x-nav-link>
                                </li>
                                <li class="dropdown-item">
                                    <x-nav-link :href="route('register')">
                                        {{ __('Регистрация') }}
                                    </x-nav-link>  
                                </li>
                                <li class="dropdown-item">  
                                    @auth
                                    <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        {{ __('Личный кабинет') }}
                                    </x-dropdown-link>
                                    @elseauth
                                </li>
                                <li class="dropdown-item"> 
                                    @endauth
                                        <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                            <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                                            {{ __('Выход') }}
                                            </x-dropdown-link>
                                        </form>
                                </li>   
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-menu_area">
                    <nav class="offcanvas-navigation">
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children">
                                <x-nav-link :href="asset('/')">
                                    Главная
                                </x-nav-link>
                            </li>
                            <li class="menu-item-has-children">
                                <x-nav-link :href="route('catalogs')">
                                    Каталог
                                </x-nav-link>
                            </li>
                            <li class="menu-item-has-children">
                                <x-nav-link :href="route('basket')">
                                    Корзина
                                </x-nav-link>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>




