<x-guest-layout>
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/img/breadcrumb/bg/1-1-1919x388.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">Каталог</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                                <div class="product-grid-view row g-y-20">
                                    @foreach($catalogs as $one)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{asset('catalog/'.$one->id)}}"><img src="{{$one->picture}}" alt="Product Images" ></a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="{{asset('catalog/'.$one->id)}}">{{$one->name}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </main>                                       
                            
        <br>
        

    </div>


</x-guest-layout>
