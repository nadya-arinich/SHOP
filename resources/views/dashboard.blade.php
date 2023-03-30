<x-guest-layout>
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/img/breadcrumb/bg/1-1-1919x388.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">{{ __('Личный кабинет') }}, {{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="account-page-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-content table-responsive">
                            <div class="table">
                                <div class="myaccount-orders">
                                    <h4 class="small-title">Мои заказы</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                
                                                <th class="cart-product-name">Наименование</th>
                                                <th class="product-price">Цена</th>
                                                </tr>
                                            </thead>
                                            @foreach($_COOKIE as $basket)
                                            <tbody>
                                                <tr>
                                                    <td class="product-name"> {{$basket->$name}}</td>
                                                    <td class="product-price">{{$basket->$price}} BYN</td>
                                                    
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        

    
</x-guest-layout>
