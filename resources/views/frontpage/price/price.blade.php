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
                        @foreach($price as $prices)
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <article class="product"><img src="{{asset('homepage/images/home-1-585x580.jpg')}}" alt="" width="164" height="168"/>
                                <p class="product-title">{{$prices -> shaved_name}}</p>
                                <p class="product-price">{{$prices -> shaved_price}}₺</p>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
