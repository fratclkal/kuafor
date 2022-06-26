@extends('frontpage.frontApp')
@section('content')

    <section class="section-lg bg-periglacial-blue">
        <div class="shell">
            <div class="range range-50">
                @foreach($gallery as $gallerys)
                <div class="cell-md-8">
                    <h3>{{$gallerys -> gallery_title}}</h3>
                    <figure class="figure-default figure-lighter"><img src="{{asset('/galeri/'. $gallerys -> path)}}" alt="" width="770" height="485"/>

                    </figure>
                    <p style="color: black;">{{$gallerys -> gallery_comment}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection
