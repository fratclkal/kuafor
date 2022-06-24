@extends('frontpage.frontApp')
@section('content')

    <div class="page-title">
        <div class="page-title-content">
            <div class="shell">
                <p class="page-title-header">Yorumlarınız</p>
            </div>
        </div>
    </div>

    <section class="section-xl bg-periglacial-blue text-center">
        <div class="shell">
            <div class="range range-sm-center">
                <div class="cell-sm-10 cell-md-10 cell-lg-6">
                    <h3>Yorum Yap</h3>
                    <!-- RD Mailform-->
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="POST" action="{{route('createMessage')}}">
                        @csrf
                        <div class="range range-sm-bottom range-15">
                            <div class="cell-sm-6">
                                <div class="form-group">
                                    <label class="form-label-outside" for="contact-first-name">İsim</label>
                                    <input class="form-control" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="cell-sm-6">
                                <div class="form-group">
                                    <label class="form-label-outside" for="contact-last-name">Soyisim</label>
                                    <input class="form-control" id="contact-last-name" type="text" name="sur_name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label-outside" for="contact-message">Yorumunuz</label>
                                    <textarea class="form-control" id="contact-message" name="comment" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="cell-sm-6">
                                <div class="form-group">
                                    <label class="form-label-outside" for="contact-email">E-mail</label>
                                    <input class="form-control" id="contact-email" type="email" name="e_mail" data-constraints="@Email @Required">
                                </div>
                            </div>
                            <div class="cell-sm-6 offset-custom-1">
                                <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">Yorum Yap</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section-xl bg-periglacial-blue text-center">
        <div class="shell">
            <div class="range range-sm-center range-75">
                <div class="cell-xs-12">
                    <h2>Yorumlarınız</h2>
                    <div class="p text-width-medium">
                        <p class="big">Siz değerli müşterilerimizin kıymetli yorumları bizim için bir başarı ölçütüdür..</p>
                    </div>
                </div>
                <div class="cell-lg-10">
                    @foreach($message as $messages)
                    <blockquote class="quote-review">
                        <div class="quote-review-left">
                            <div class="quote-review-avatar"><img class="quote-review-image" src="{{asset('homepage/images/icon-service-4-70x62.png')}}" alt="" width="100" height="100"/>
                            </div>
                        </div>
                        <div class="quote-review-body">
                            <div class="quote-review-header">
                                <p class="quote-review-title">{{$messages -> name, $messages -> sur_name}}</p>
                            </div>
                            <p class="quote-review-text">
                                <q>{{$messages -> comment}}</q>
                            </p>
                        </div>
                    </blockquote>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
