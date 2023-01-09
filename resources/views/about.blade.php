@extends('layouts.main')
@section('title','О нас')

@section('content')


<!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('images/breadcrumb/bg/1-1-1919x388.jpg')}}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">О нас</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-area section-space-top-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-content">
                            <h2 class="about-title">Наша <span>история</span></h2>
                            <p class="about-desc">Pronia – это совершенно новый подход к появлению цветов в Вашем доме:</p>

                            <p class="about-desc">230 квадратных метров зеленых джунглей, в которых обитают комнатные растения от классических фикусов до экзотических бананов, бонсаев разных размеров и растений-хищников</p>
                            <p class="about-desc">Мини-сады с необычными суккулентами и кактусами, флорариумы и фитодекор</p>
                            <p class="about-desc">Доставка букетов и горшечных растений</p>
                            <p class="about-desc">Консультации биологов, пересадка растений</p>
                            <p class="about-desc"></p>Каждый привык получать экспертную консультацию в мебельном салоне или магазине электроники. В салоне Pronia мы используем
                            такой же подход при продаже растений. Здесь Вам не придется выбирать комнатное растение наугад. Биологи салона Pronia дадут
                            исчерпывающую консультацию по любому растению, представленному в салоне и помогут выбрать именно то, что подойдет под условия
                            вашего жилья и ожидания. А еще Вы сможете получить консультацию по уходу за приобретенным цветком спустя любое время после
                            покупки. Достаточно позвонить в Pronia.</p>
                            <div class="about-signature">
                                <img src="{{asset('images/about/icon/2.png'}}" alt="Signature">
                                <img src="{{asset('images/banner/onas.jpg')}}" alt=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<!-- Main Content Area End Here -->
@endsection
