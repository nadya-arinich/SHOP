<x-guest-layout>
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/img/breadcrumb/bg/1-1-1919x388.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">Корзина</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product_remove">Действие</th>
                                <th class="product-thumbnail">Изображение</th>
                                <th class="cart-product-name">Наименование</th>
                                <th class="product-price">Цена</th>
                                
                            </tr>
                        </thead>
                        @foreach($products as $product)
                        <tbody>
                            <tr>
                                <td class="product_remove">
                                    <a href="{{asset('basket/delete/'. $product->id)}}">
                                        <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                    </a>
                                </td>
                                <td width="200px">
                                    <img src="{{asset('products/'.$product->picture)}}" width="100%">
                                </td>
                                <td class="product-name">{{$product->name}}</td>
                                <td class="product-price">{{$product->price}} BYN</td>
                                
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 ml-auto">
                    <div class="cart-page-total">
                        <h2>Итого к оплате: {{$sum}}  BYN</h2>
                    </div>
                </div>
            </div>
            </br>
            </br>
            <form method="post" action="{{asset('basket/order')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Имя</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmailAdress" class="form-label">Адресс доставки</label>
                    <input type="text" class="form-control" id="exampleInputEmailAdress" name="adress">
                </div>
                <button type="submit" class="btn btn-custom-size lg-size btn-pronia-primary">Оформить</button>
            </form>
        </div>
    </main>
                
</x-guest-layout>
