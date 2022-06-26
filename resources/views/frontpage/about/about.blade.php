@extends('frontpage.frontApp')
@section('content')

    <div class="page-title">
        <div class="page-title-content">
            <div class="shell">
                <p class="page-title-header">HAKKIMIZDA</p>
            </div>
        </div>
    </div>

    <section class="section-xl bg-periglacial-blue text-center">
        <div class="shell">
            @foreach($about as $abouts)
            <div class="range range-sm-center range-50">
                <div class="cell-xs-12">
                    <h1>{{$abouts -> title}}</h1>
                </div>
                <div class="cell-lg-10">
                    <article class="box-spacer">
                        <dl class="terms-list">
                            <dt>{{$abouts -> content}}</dt>
                    </article>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection
