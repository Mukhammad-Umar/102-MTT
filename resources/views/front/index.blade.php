@extends('front.layout')

@section('main')
<div class="inside-container">
    <div class="container main-content">
        <!-- Intro Section start -->
        <section class="intro-section spad">
            <div class="container">
                    <div class="section-title">
                        <h2>Eng So`ngi Yangiliklar</h2>
                    </div>
                    @foreach($news as $news)
                        <div class="row news_blog">
                            <div class="col-lg-6 food">
                                <img src="{{ asset('public/img/' . $news->image)}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="about-text">
                                    <a href="{{route('news', [$news->id])}}"><h3>{{$news->title}}</h3></a>
                                    <p>
                                        {{ Str::limit($news->information, 250, '...') }}
                                    </p>
                                    @if (Str::length($news->information) > 250 )
                                        <a href="{{route('news', [$news->id])}}">To`liq o`qish -></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="col-12 link-to">
                        <p> Kop`roq yangiliklar uchun<a href="http://mdo.uz/" target="_blank"> Vazirlik saytiga o`ting <span>-></span></a></p>
                    </div>
            </div>
        </section>
        <!-- Intro Section end -->
    
        <!-- accordion_area  -->
        <div class="accordion_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq_ask">
                            <h3>Nega biz?</h3>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Chunki bizning bog'cha <span>2020-yilda yangi va zamonaviy</span> qilib
                                                rekonstruksiya qilindi.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Bizda bolalar uchun barcha sharoitlar mavjud va zamon talabiga to'la tokis javob
                                            bera oladigan inshaotga egamiz.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Har bir guruh uchun 2tadan pedagog tarbiyachilar ajratilingan.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">Bolalarning tili o`zgacha boladi va ularga o`zlari chunadigan
                                            tilda muloqot olib borish uchun tajribali tarbiyachilar talab qilinadi va biz
                                            shunday tarbiyachilarga egamiz.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Bizda ingliz tili, rus tili, gimnaziya, raqs va boshqa kurslar mavjud.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">Biz yana sport va boshqa turdagi to`garaklarni ochishni ham
                                            rejalashtiryabmiz.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 why-us-image">
                        <div class="accordion_thumb">
                            <img src="{{ asset('public/img/banner/accordion.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ accordion_area  -->
    </div>
</div>
@endsection

    @section('js')
        <script>
            $(document).ready(function () {
                $('.carousel-item:eq(0)').addClass('active');
            });
        </script>
    @endsection