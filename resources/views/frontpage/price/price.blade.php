@extends('frontpage.frontApp')
@section('content')

    <section class="section-xl bg-periglacial-blue text-center">
        <div class="shell">
            <div class="range range-sm-center range-50">
                <div class="cell-xs-12">
                    <h2>Fiyat Listesi</h2>
                </div>
                <div class="cell-xs-12">
                    <div class="range range-30">
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><a class="product-image" href="single-product.html"><img src="{{asset('homepage/images/home-1-585x580.jpg')}}" alt="" width="164" height="168"/></a>
                                <p class="product-title"><a href="single-product.html">Saç</a></p>
                                <p class="product-price">₺50
                                </p>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><a class="product-image" href="single-product.html"><img src="{{asset('homepage/images/home-1-585x580.jpg')}}" alt="" width="210" height="168"/></a>
                                <p class="product-title"><a href="single-product.html">Saç + Sakal</a></p>
                                <p class="product-price">₺70
                                </p>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><a class="product-image" href="single-product.html"><img src="{{asset('homepage/images/home-1-585x580.jpg')}}" alt="" width="175" height="168"/></a>
                                <p class="product-title"><a href="single-product.html">Sakal</a></p>
                                <p class="product-price">₺25
                                </p>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><a class="product-image" href="single-product.html"><img src="{{asset('homepage/images/home-1-585x580.jpg')}}" alt="" width="175" height="168"/></a>
                                <p class="product-title"><a href="single-product.html">Saç + Sakal + Maske</a></p>
                                <p class="product-price">₺85
                                </p>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><a class="product-image" href="single-product.html"><img src="{{asset('homepage/images/home-1-585x580.jpg')}}" alt="" width="175" height="168"/></a>
                                <p class="product-title"><a href="single-product.html">Perma</a></p>
                                <p class="product-price">₺100
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
