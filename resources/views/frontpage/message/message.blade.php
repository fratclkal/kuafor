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
                    <blockquote class="quote-review">
                        <div class="quote-review-left">
                            <div class="quote-review-avatar"><img class="quote-review-image" src="{{asset('homepage/images/testimonials-1-100x100.jpg')}}" alt="" width="100" height="100"/>
                            </div>
                        </div>
                        <div class="quote-review-body">
                            <div class="quote-review-header">
                                <p class="quote-review-title">My Son is Very Happy! </p>
                            </div>
                            <p class="quote-review-text">
                                <q>I have taken my 3 yr old son for his first men’s haircut and now I’m glad he has such a fantastic look. I recommend any of the barbers at Barbershop for service and pride in their work. I believe my son would never be allowed to leave the chair without a really handsome cut.</q>
                            </p>
                        </div>
                    </blockquote>
                    <blockquote class="quote-review">
                        <div class="quote-review-left">
                            <div class="quote-review-avatar"><span class="quote-review-letter">J</span>
                            </div>
                        </div>
                        <div class="quote-review-body">
                            <div class="quote-review-header">
                                <p class="quote-review-title">The Best Place in the City</p>
                            </div>
                            <p class="quote-review-text">
                                <q>I wouldn't go anywhere else in San Francisco. I've been coming here for the last year and I've never felt better about paying good money for a haircut. The guys know what they are doing, give solid advice, and cut like pros. I wasn't used to this before but I’ll visit Barbershop again.</q>
                            </p>
                        </div>
                    </blockquote>
                    <blockquote class="quote-review">
                        <div class="quote-review-left">
                            <div class="quote-review-avatar"><img class="quote-review-image" src="{{asset('homepage/images/testimonials-3-100x100.jpg')}}" alt="" width="100" height="100"/>
                            </div>
                        </div>
                        <div class="quote-review-body">
                            <div class="quote-review-header">
                                <p class="quote-review-title">Professional Barber Service</p>
                            </div>
                            <p class="quote-review-text">
                                <q>Polite, professional, charming and courteous team. The best haircut I have ever had! Simon was full of crack, was more than happy to suggest the best cut for me and he even offered a free beverage - what more could you want?! This barbershop is indeed my favorite one.</q>
                            </p>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

@endsection
