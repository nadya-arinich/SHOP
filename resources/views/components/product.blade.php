
    <div class="col-md-4 col-sm-6">
        <div class="product-item">
            <div class="product-img">
                @if($product->picture)
                    <a href="{{ asset('product')}}">
                        <img src="{{asset('products/'.$product->picture)}}" width="80%" />
                    </a>
                @endif
            </div>
            <div class="product-content">
                <a class="product-name">{{$product->name}}</a>
                <div class="price-box">
                    <span class="new-price">Цена: {{$product->price}}  BYN </span>
                    <br>
                    <button data-id="{{$product->id}}" data-price="{{$product->price}}" class="add_to_cart">В корзину</button>
                </div>
            </div>
            <br>
        </div>
    </div>
