@extends('frontpage.frontApp')
@section('content')

    <section class="box-wrap box-wrap-md bg-white">
        <div class="box-wrap-map">
            <div class="rd-google-map rd-google-map__model" data-zoom="14" data-x="-74.0150000" data-y="40.643180">
                <ul class="map_locations"></ul>
            </div>
        </div>
        <div class="box-wrap-content">
            <div class="shell">
                <div class="range">
                    <div class="cell-xs-12">
                        <div class="box-contacts box-contacts-horizontal box-wrap-content-interactive">
                            <div class="box-contacts-col">
                                <div class="box-contacts-block">
                                    <h3>Adres</h3>
                                    <address>123 Street W, Seattle WA 99999 United States</address>
                                </div>
                                <div class="box-contacts-block">
                                    <h3>Telefon Numarası</h3>
                                    <address>123 Street W, Seattle WA 99999 United States</address>
                                </div>
                                <div class="divider divider-nebula"></div>
                                <div class="box-contacts-block">
                                    <h3>Çalışma Saatleri</h3>
                                    <dl class="box-contacts-terms-list">
                                        <dt>Monday – Friday</dt>
                                        <dd>9am - 6pm</dd>
                                        <dt>Saturday and Sunday</dt>
                                        <dd>10am - 4pm</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="box-contacts-col box-contacts-right">
                                <div class="box-contacts-block">
                                    <h3>İletişime Geç</h3>
                                    <p>Adınızı ve telefon numaranızı bırakın, sizinle iletişime geçelim.</p>
                                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{asset('homepage/bat/rd-mailform.php')}}">
                                        <div class="form-group">
                                            <label class="form-label-outside" for="contact-full-name">İsim - Soyisim</label>
                                            <input class="form-control" id="contact-full-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label-outside" for="contact-phone">Telefon Numarası</label>
                                            <input class="form-control" id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                        </div>
                                        <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">Gönder</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
