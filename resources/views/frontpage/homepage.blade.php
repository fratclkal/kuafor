@extends('frontpage.app')
@section('content')

    <section class="section-xl bg-periglacial-blue text-center text-md-left">
        <div class="shell-fluid shell-condensed">
            <div class="range range-md-reverse range-xs-middle range-md-right range-50">
                <div class="cell-md-5 cell-lg-4">
                    <div class="inset-1">
                        <h2>WHO WE ARE</h2>
                        <div class="p text-width-smallest">
                            <p class="big">Barbershop is a team of highly qualified barbers dedicated to offering the best value. We do this by providing high quality salon services for men and boys, in a warm, friendly atmosphere.</p>
                        </div><a class="btn btn-sm btn-style-1 btn-primary" href="about.html">Read more</a>
                    </div>
                </div>
                <div class="cell-md-7 cell-lg-6">
                    <div class="row row-gutter-custom range-15">
                        <div class="col-xs-4">
                            <figure class="figure-fullwidth"><img src="{{asset('homepage/images/about-1-300x460.jpg')}}" alt="" width="300" height="460"/>
                            </figure>
                        </div>
                        <div class="col-xs-4">
                            <figure class="figure-fullwidth"><img src="{{asset('homepage/images/about-2-300x460.jpg')}}" alt="" width="300" height="460"/>
                            </figure>
                        </div>
                        <div class="col-xs-4">
                            <figure class="figure-fullwidth"><img src="{{asset('homepage/images/about-3-300x460.jpg')}}" alt="" width="300" height="460"/>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="shell-fluid shell-condensed">
            <div class="range range-condensed">
                <div class="cell-md-6 cell-md-6-mod-1 image-wrap-left bg-white bg-image" style="background-image: url({{asset('homepage/images/home-three-2-910x800.jpg')}});">
                    <div class="image-wrap-inner">
                        <h2>OUR<br>SERVICES</h2>
                        <p class="big">Barbershop offers world-class men's haircuts, beard grooming, and hot razor shaves. Here are just some of the services we are famous for.</p><a class="btn btn-style-1 btn-primary" href="services.html">read more</a>
                    </div>
                </div>
                <div class="cell-md-6 cell-md-6-mod-2 image-wrap-right bg-gray-dark bg-image" style="background-image: url({{asset('homepage/images/home-three-3-1011x800.jpg')}});">
                    <div class="image-wrap-inner">
                        <div class="range range-condensed range-inner-bordered">
                            <div class="cell-xs-6">
                                <article class="box-icon">
                                    <figure class="box-icon-image"><img src="{{asset('homepage/images/icon-service-light-3-70x62.png')}}" alt="" width="70" height="62"/>
                                    </figure>
                                    <p class="box-icon-header"><a class="link-underlined" href="services.html">BEARD trim</a></p>
                                    <p class="box-icon-text">Well-trimmed beard is a must-have element of every men???s image</p>
                                </article>
                            </div>
                            <div class="cell-xs-6">
                                <article class="box-icon">
                                    <figure class="box-icon-image"><img src="{{asset('homepage/images/icon-service-light-4-70x62.png')}}" alt="" width="70" height="62"/>
                                    </figure>
                                    <p class="box-icon-header"><a class="link-underlined" href="services.html">Mustache TRIM</a></p>
                                    <p class="box-icon-text">Mustaches also need to be trimmed regularly</p>
                                </article>
                            </div>
                            <div class="cell-xs-6">
                                <article class="box-icon">
                                    <figure class="box-icon-image"><img src="{{asset('homepage/images/icon-service-light-1-70x62.png')}}" alt="" width="70" height="62"/>
                                    </figure>
                                    <p class="box-icon-header"><a class="link-underlined" href="services.html">TRADITIONAL HAIRCUTS</a></p>
                                    <p class="box-icon-text">One of the most popular services our barbers provide</p>
                                </article>
                            </div>
                            <div class="cell-xs-6">
                                <article class="box-icon">
                                    <figure class="box-icon-image"><img src="{{asset('homepage/images/icon-service-light-2-70x62.png')}}" alt="" width="70" height="62"/>
                                    </figure>
                                    <p class="box-icon-header"><a class="link-underlined" href="services.html">SHAVES</a></p>
                                    <p class="box-icon-text">Our shaving services will make you look really handsome</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-xl bg-periglacial-blue text-center">
        <div class="shell">
            <div class="range range-sm-center range-75">
                <div class="cell-xs-12">
                    <h2>TESTIMONIALS</h2>
                    <div class="p text-width-medium">
                        <p class="big">These reviews that our clients have recently submitted are the best way to learn more about our barbershop???s level of service and customer support.</p>
                    </div>
                </div>
                <div class="cell-xs-12">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-modern owl-style-1" data-items="1" data-stage-padding="0" data-loop="true" data-margin="20" data-xs-margin="30" data-mouse-drag="false" data-nav="true" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut">
                        <div class="item">
                            <blockquote class="quote-centered">
                                <div class="quote-centered-avatar"><img src="{{asset('homepage/images/testimonials-1-100x100.jpg')}}" alt="" width="100" height="100"/>
                                </div>
                                <cite>Matt Parker</cite>
                                <p class="quote-centered-text">
                                    <q>I have taken my 3 yr old son for his first men???s haircut and now I???m glad he has such a fantastic look. I recommend any of the barbers at Barbershop for service and pride in their work. I believe my son would never be allowed to leave the chair without a really handsome cut.</q>
                                </p>
                                <ul class="inline-list inline-list-md">
                                    <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                </ul>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote-centered">
                                <div class="quote-centered-avatar"><img src="{{asset('homepage/images/testimonials-2-100x100.jpg')}}" alt="" width="100" height="100"/>
                                </div>
                                <cite>John Miller</cite>
                                <p class="quote-centered-text">
                                    <q>I wouldn't go anywhere else in San Francisco. I've been coming here for the last year and I've never felt better about paying good money for a haircut. The guys know what they are doing, give solid advice, and cut like pros. I wasn't used to this before but I???ll visit Barbershop again.</q>
                                </p>
                                <ul class="inline-list inline-list-md">
                                    <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                </ul>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote-centered">
                                <div class="quote-centered-avatar"><img src="{{asset('homepage/images/testimonials-3-100x100.jpg')}}" alt="" width="100" height="100"/>
                                </div>
                                <cite>Anthony Smith</cite>
                                <p class="quote-centered-text">
                                    <q>Polite, professional, charming and courteous team. The best haircut I have ever had! Simon was full of crack, was more than happy to suggest the best cut for me and he even offered a free beverage - what more could you want?! This barbershop is indeed my favorite one.</q>
                                </p>
                                <ul class="inline-list inline-list-md">
                                    <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                </ul>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-xl bg-gray-dark bg-image text-center" style="background-image: url({{asset('homepage/images/bg-image-1.jpg')}});">
        <div class="shell">
            <div class="range range-50">
                <div class="cell-xs-12">
                    <h2>OUR BARBERS</h2>
                    <div class="p text-width-medium">
                        <p class="big">We employ only highly qualified barbers who are not just professionals, but also enjoy maintaining the atmosphere of a classic barbershop.</p>
                    </div>
                </div>
                <div class="cell-xs-12">
                    <div class="range range-30">
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <div class="thumbnail-card"><img class="thumbnail-card-image" src="{{asset('homepage/images/barbers-1-370x310.jpg')}}" alt="" width="370" height="310"/>
                                <div class="thumbnail-card-body">
                                    <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">simon Wilson</p>
                                    <div class="thumbnail-card-text">
                                        <p>Mr. Wilson is the founder and owner of our barbershop.</p>
                                    </div>
                                    <ul class="inline-list inline-list-md">
                                        <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                        <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                        <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <div class="thumbnail-card"><img class="thumbnail-card-image" src="{{asset('homepage/images/barbers-2-370x310.jpg')}}" alt="" width="370" height="310"/>
                                <div class="thumbnail-card-body">
                                    <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">Harry Anderson</p>
                                    <div class="thumbnail-card-text">
                                        <p>Harry brings a detailed, meticulous approach to styling.</p>
                                    </div>
                                    <ul class="inline-list inline-list-md">
                                        <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                        <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                        <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 height-fill">
                            <div class="thumbnail-card"><img class="thumbnail-card-image" src="{{asset('homepage/images/barbers-3-370x310.jpg')}}" alt="" width="370" height="310"/>
                                <div class="thumbnail-card-body">
                                    <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">Matthew phillips</p>
                                    <div class="thumbnail-card-text">
                                        <p>Matthew has several years of experience in the barber industry.</p>
                                    </div>
                                    <ul class="inline-list inline-list-md">
                                        <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                        <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                        <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-12"><a class="btn btn-sm btn-style-1 btn-primary" href="barbers.html">VIEW all team</a></div>
            </div>
        </div>
    </section>

    <section class="section-lg bg-periglacial-blue text-center">
        <div class="shell">
            <div class="range range-sm-center range-75">
                <div class="cell-xs-12">
                    <h2>latest blog posts</h2>
                    <div class="p text-width-medium">
                        <p class="big">Barbershop is not only a place where you can get a first-class haircut. Our barbers also write interesting articles on everything concerning their sphere of interest.</p>
                    </div>
                </div>
                <div class="cell-xs-12">
                    <div class="slick-slider carousel-center-mode" data-arrows="false" data-loop="true" data-dots="true" data-swipe="true" data-autoplay="false" data-items="1" data-lg-items="3" data-center-mode="true" data-center-padding="0.0">
                        <div class="item">
                            <div class="slick-slide-inner">
                                <article class="post-classic"><img class="post-classic-image" src="{{asset('homepage/images/blog-1-770x330.jpg')}}" alt="" width="770" height="330"/>
                                    <div class="post-classic-body">
                                        <p class="post-classic-title"><a href="single-post.html">Visiting a Barber</a></p>
                                        <div class="post-classic-text">
                                            <p>A barber knows how to cut men???s hair. If you???re like most men these days, you???re probably going to some unisex chain salon. Most of the time, you???d walk out of these places with an average haircut. Sometimes...</p>
                                        </div>
                                        <div class="post-classic-footer">
                                            <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.html">READ MORE</a></div>
                                            <div class="post-classic-footer-right">
                                                <ul class="post-classic-meta">
                                                    <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                                                    <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                                                    <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                                        <time datetime="2017-08-26">26.08.2017</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-slide-inner">
                                <article class="post-classic"><img class="post-classic-image" src="{{asset('homepage/images/blog-2-770x330.jpg')}}" alt="" width="770" height="330"/>
                                    <div class="post-classic-body">
                                        <p class="post-classic-title"><a href="single-post.html">What Haircut Suits You</a></p>
                                        <div class="post-classic-text">
                                            <p>Different people have different face shapes. And not you, but your face shape decides will this haircut suit you or not. The Barbershop has prepared some advice for you, how to choose a proper haircut for...</p>
                                        </div>
                                        <div class="post-classic-footer">
                                            <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.html">READ MORE</a></div>
                                            <div class="post-classic-footer-right">
                                                <ul class="post-classic-meta">
                                                    <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                                                    <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                                                    <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                                        <time datetime="2017-08-26">26.08.2017</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-slide-inner">
                                <article class="post-classic"><img class="post-classic-image" src="{{asset('homepage/images/blog-3-770x330.jpg')}}" alt="" width="770" height="330"/>
                                    <div class="post-classic-body">
                                        <p class="post-classic-title"><a href="single-post.html">Top 7 Shaving Products</a></p>
                                        <div class="post-classic-text">
                                            <p>The right shaving cream can make the difference between a healthy skin and one plagued by ingrown hairs, razor burns, irritation, and a variety of other issues that arise from nicks and cuts. In the times of old, people used soap when shaving and although there are still plenty of...</p>
                                        </div>
                                        <div class="post-classic-footer">
                                            <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.html">READ MORE</a></div>
                                            <div class="post-classic-footer-right">
                                                <ul class="post-classic-meta">
                                                    <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                                                    <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                                                    <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                                        <time datetime="2017-08-26">26.08.2017</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-slide-inner">
                                <article class="post-classic"><img class="post-classic-image" src="{{asset('homepage/images/blog-2-770x330.jpg')}}" alt="" width="770" height="330"/>
                                    <div class="post-classic-body">
                                        <p class="post-classic-title"><a href="single-post.html">Visiting a Barber</a></p>
                                        <div class="post-classic-text">
                                            <p>A barber knows how to cut men???s hair. If you???re like most men these days, you???re probably going to some unisex chain salon. Most of the time, you???d walk out of these places with an average haircut. Sometimes...</p>
                                        </div>
                                        <div class="post-classic-footer">
                                            <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.html">READ MORE</a></div>
                                            <div class="post-classic-footer-right">
                                                <ul class="post-classic-meta">
                                                    <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                                                    <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                                                    <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                                        <time datetime="2017-08-26">26.08.2017</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                        <div class="box-contacts box-contacts-horizontal box-wrap-content-interactive block-right">
                            <div class="box-contacts-col">
                                <div class="box-contacts-block">
                                    <h3>Address</h3>
                                    <address>123 Street W, Seattle WA 99999 United States</address>
                                </div>
                                <div class="divider divider-nebula"></div>
                                <div class="box-contacts-block">
                                    <h3>Opening Hours</h3>
                                    <dl class="box-contacts-terms-list">
                                        <dt>Monday ??? Friday</dt>
                                        <dd>9am - 6pm</dd>
                                        <dt>Saturday and Sunday</dt>
                                        <dd>10am - 4pm</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="box-contacts-col box-contacts-right">
                                <div class="box-contacts-block">
                                    <h3>Get In Touch</h3>
                                    <p>Leave your name and phone number, and we???ll contact you.</p>
                                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                        <div class="form-group">
                                            <label class="form-label-outside" for="contact-full-name">Full Name</label>
                                            <input class="form-control" id="contact-full-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label-outside" for="contact-phone">Telephone</label>
                                            <input class="form-control" id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                        </div>
                                        <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">SEND REQUEST</button>
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
