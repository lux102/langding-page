<x-layout>
    <div>
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Dịch vụ xây dựng bản vẽ và thi
                                            công
                                            công trinh cho mọi nhà</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction</h2>
                                        <h2>Construction</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="/dich-vu">Khám phá dịch vụ của chúng tôi</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Dịch vụ xây dựng bản vẽ và thi
                                            công
                                            công trinh cho mọi nhà</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction</h2>
                                        <h2>Construction</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="/dich-vu">Khám phá dịch vụ của chúng tôi</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="support-company-area fix section-padding">
            <x-introduce></x-introduce>
        </section>

        <section class="contact-with-area" data-background="assets/img/gallery/section-bg2.webp">
            <x-vision></x-vision>
        </section>

        <div class="services-area1 section-padding30">
            <x-service></x-service>
        </div>

        <section class="project-area  section-padding30">
            <x-projects :projects="$projects" :categories="$categories"></x-projects>
        </section>

        <div class="testimonial-area t-bg testimonial-padding">
            <x-feedback></x-feedback>
        </div>

        <div class="count-area">
            <x-statistic></x-statistic>
        </div>


        <div class="team-area section-padding30">
            <x-team></x-team>
        </div>

        {{-- <div class="latest-news-area section-padding30">
            <x-news></x-news>
        </div> --}}
    </div>
</x-layout>
