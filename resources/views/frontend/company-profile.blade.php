@extends('frontend.layouts.app')
@section('title', 'Company Profile - ')
@section('content')
    <main>
        <!--page-title-area start-->
        <div class="page-title-area pt-100 pb-100 py-100 about-bg" data-background="{{ url('frontend/images/banner/about.jpg') }}">
            <img class="page-title-shape shape-one " src="frontend/assets/img/shape/line-14d.svg" alt="shape">
            <img class="page-title-shape shape-two" src="frontend/assets/img/shape/pattern-1a.svg" alt="shape">

            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="page-title-wrapper text-sm-start text-center">
                            <h2 class="page-title mb-10">Company Profile</h2>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active" aria-current="page">Company Profile</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title-area end-->

        <!-- about__area start -->
        <section class="about__area">
            <div class="about__section__wrapper2 pt-50  pt-lg-50  pb-md-20">
                <img class="about__shape__1" src="frontend/assets/img/shape/about-line-2a.svg" alt="About Shape">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-xl-5 col-lg-6 ">
                            <div class="about__img__wrapper mb-20">
                                <div class="">
                                    {{-- <img class="main__img__1b" src="{{ asset('frontend/assets/img/about/about.jpg') }}"
                                        alt="About"> --}}
                                    <img class="w-100 d-xl-block d-none profile-img-1400"
                                        src="{{ asset('frontend/assets/img/about/peng-2.png') }}" alt="About">
                                    <img class="w-100 d-xl-none d-block custom-h-500"
                                        src="{{ asset('frontend/assets/img/about/peng-3.png') }}" alt="About">

                                        <img class="w-100 d-none img-show-1400 "
                                        src="{{ asset('frontend/assets/img/about/peng-3.png') }}" alt="About">
                                </div>
                                <div class="experience__box com-pro">
                                    <img class="icon" src="{{ asset('frontend/images/icons/factory-100.png') }}" alt="Icon">
                                    <span>A+</span>
                                    <h3>35+ Years Of Experience</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 pt-lg-0 pt-3">
                            <div class="about__text__wrapper  mb-10 px-xl-0">
                                <div class="section__title mb-10">
                                    <h5 class="text-primary sub-title text-capitalize text-lg-start text-center">COMPANY
                                        PROFILE</h5>
                                    <h2 class="title text-lg-start text-center">Jade Globmach</h2>
                                    <p class="mb-1">Jade Globmach are leading Indian Agents-Brokers for RELOCATION of New,
                                        Industrial Plants, Machinery & Technology from different Countries worldwide.</p>

                                    <p class="mb-1">Jade Globmach provides its Indian & other Overseas Customers, one of the largest
                                        inventory of CURRENTLY available different kinds of  plants and equipment
                                        covering majority of Industries from CEMENT - IRON & STEEL - FORGING - FOUNDRY -
                                        PAPER  - OIL REFINERY - MATERIAL HANDLING - MACHINE TOOLS - FABRICATION -
                                        PRINTING - PETROCHEMICAL - PLASTIC/FILM/PACKAGING -  ALUMINIUM - COPPER AND BRASS -
                                        NON FERROUS - CERAMIC - CONSTRUCTION - OIL GAS AND REFINERIES - POWER & other
                                        industries, which are located in different country’s from EUROPE - AMERICA - <span
                                            class="d-xl-block d-lg-none d-block"> ASIA - AFRICA & are decommissioned due to
                                            overcapacity’s, Economic conditions, mergers, business reorganization or
                                            environmental regulations at their present location. This plants & machinery’s
                                            are available at a very low cost for relocation to any part of the world.
                                            Plants or Machinery come with complete documentation including detailed
                                            engineering, Layouts, foundation drawings. The facilities located abroad for
                                            plants available for SALE, can be inspected at customers convenience to
                                            investigate how they may compliment expansion plans or new investment
                                            projects.</span></p>

                                    <div class="d-lg-none d-block">
                                        <p class="mb-1">Jade Globmach does relocation of such  plants from more than 60
                                            countries worldwide & offers/sells to its Indian Industrialists & Entrepreneurs.
                                            We don’t boast to be a leader in these, but believe in providing the best
                                            services by offering complete plants-machinery’s & try negotiate a deal
                                            successfully on behalf or along with our clients at most competitive prices &
                                            quick implementation with faster delivery for different plants to be installed
                                            in India.</p>
                                        <p class="mb-1">Jade Globmach offers business of surplus  capitally machinery, asset
                                            management and rationalization, investment recovery and plant relocation
                                            services with a strong GLOBAL NETWORKING & contacts with
                                            LIQUIDATORS - AUCTIONEERS - DEALERS - FINANCIAL ORGANIZATIONS - AGENTS in the industries
                                            mentioned spread across different countries.</p>
                                        <p class="mb-1">Jade Globmach not only SOURCE - OFFER the  plants and equipment’s of
                                            customers need but also work closely to arrange third party for arranging
                                            invitation letters, organize inspections & also accompany our customers for
                                            appraisals, dismantling cost estimates, logistics of inland and ocean
                                            transportation along with re-engineering and re-erection services. We can also
                                            source technologies for client’s manufacturing processes if a client has a
                                            specific request.</p>
                                        <p class="mb-1">Our team of free-lance technical consultant’s experts and array of experienced
                                            professional service providers are ready to assist you at all times.</p>
                                        <p class="mb-1">For well over 25 years’ experience, Jade Globmach founder has been providing
                                            Indian clients in many industrial sectors with a full range of support, from
                                            selling Large Plants to small machinery & negotiate a better deal for them
                                            utilizing the ART of SOURCING - RELOCATING - EVALUATING & NEGOTIATING.</p>
                                        <p class="mb-1">In short, Jade Globmach, is a leading agent/broker, converting a simple INQUIRY
                                            into DEAL. We appreciate your time & invite all for co-operation in buying &
                                            selling of  Plant & Machinery. Looking forward working with worldwide
                                            dealers, buyers, clients to form a family where all work together to achieve
                                            their respective goals & the result which arises from it, becomes a WIN 2 WIN
                                            situation for all.</p>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="d-lg-block d-none pb-lg-4">
                        <p class="d-xl-none d-lg-block d-none mb-1"> ASIA - AFRICA & are decommissioned due to overcapacity’s,
                            Economic conditions, mergers, business reorganization or environmental regulations at their
                            present location. This plants & machinery’s are available at a very low cost for relocation to
                            any part of the world.  Plants or Machinery come with complete documentation including
                            detailed engineering, Layouts, foundation drawings. The facilities located abroad for plants
                            available for SALE, can be inspected at customers convenience to investigate how they may
                            compliment expansion plans or new investment projects.</p>
                        <p class="mb-1">Jade Globmach does relocation of such  plants from more than 60 countries worldwide &
                            offers/sells to its Indian Industrialists & Entrepreneurs. We don’t boast to be a leader in
                            these, but believe in providing the best services by offering complete plants-machinery’s & try
                            negotiate a deal successfully on behalf or along with our clients at most competitive prices &
                            quick implementation with faster delivery for different plants to be installed in India.</p>
                        <p class="mb-1">Jade Globmach offers business of surplus capitally machinery, asset management and
                            rationalization, investment recovery and plant relocation services with a strong GLOBAL
                            NETWORKING & contacts with LIQUIDATORS - AUCTIONEERS - DEALERS - FINANCIAL ORGANIZATIONS - AGENTS in the
                            industries mentioned spread across different countries.</p>
                        <p class="mb-1">Jade Globmach not only SOURCE - OFFER the  plants and equipment’s of customers need but
                            also work closely to arrange third party for arranging invitation letters, organize inspections
                            & also accompany our customers for appraisals, dismantling cost estimates, logistics of inland
                            and ocean transportation along with re-engineering and re-erection services. We can also source
                            technologies for client’s manufacturing processes if a client has a specific request.</p>
                        <p class="mb-1">Our team of free-lance technical consultant’s experts and array of experienced professional
                            service providers are ready to assist you at all times.</p>
                        <p class="mb-1">For well over 25 years’ experience, Jade Globmach founder has been providing Indian clients in
                            many industrial sectors with a full range of support, from selling Large Plants to small
                            machinery & negotiate a better deal for them utilizing the Art of SOURCING - RELOCATING - EVALUATING
                            & NEGOTIATING.</p>
                        <p class="mb-1">In short, Jade Globmach, is a leading agent/broker, converting a simple INQUIRY into DEAL. We
                            appreciate your time & invite all for co-operation in buying & selling of  Plant &
                            Machinery. Looking forward working with worldwide dealers, buyers, clients to form a family
                            where all work together to achieve their respective goals & the result which arises from it,
                            becomes a WIN 2 WIN situation for all.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- about__area end -->

        <!-- counter__area star -->
        <section class="counter__area pt-50 pb-40 pb-lg-20 pt-4 grey-bg">
            <div class="container">
                <div class="row pt-3 pt-lg-2">
                    <h5 class="text-primary sub-title text-capitalize text-center">ABOUT QUALITY</h5>
                    <h2 class="title text-center pt-lg-2">Lowest Rates & Best Quality Always</h2>

                    <div class="col-lg-4 col-md-6 col-sm-6 text-lg-start text-center pt-sm-4 pt-3">
                        <div class="counter__box ps-xl-5 mb-20">
                            <h3 class="counter__number"><span class="counter">900</span>+</h3>
                            <p class="px-0 text-center">Plants & Machinery<br> Sold</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6  text-center pt-sm-4">
                        <div class="counter__box ps-xl-5 mb-20">
                            <h3 class="counter__number"><span class="counter">7000</span>+</h3>
                            <p class="px-0 text-center">Worldwide<br>
                                Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-flex justify-content-lg-end text-center pt-sm-4">
                        <div class="counter__box mb-20">
                            <h3 class="counter__number"><span class="counter">33</span>+</h3>
                            <p class="px-0 text-center">World-Wide Exhibitions Participated</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <!-- counter__area end -->


        <section>

            @php
                $logos = [
                    [
                        'img-path' => 'frontend/images/logos/logokhosla.png',
                        'alt' => 'logokhosla',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logopolyspin.png',
                        'alt' => 'logopolyspin',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logoarvind.png',
                        'alt' => 'logoarvind',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logotechfab.png',
                        'alt' => 'logotechfab',
                    ],

                    [
                        'img-path' => 'frontend/images/logos/logogreenpro.png',
                        'alt' => 'logogreenpro',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logocentenary.png',
                        'alt' => 'logocentenary',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logocheviot.png',
                        'alt' => 'logocheviot',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logoflexi.png',
                        'alt' => 'flexituff',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logogeo.png',
                        'alt' => 'logogeo',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logogtf.png',
                        'alt' => 'gtf',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logoiff.png',
                        'alt' => 'logoiff',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logoimbb.png',
                        'alt' => 'logoimbb',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logojeevan.png',
                        'alt' => 'logojeevan',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logomanas-1.png',
                        'alt' => 'logomanas',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logomayur.png',
                        'alt' => 'logoMayur',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logomurugappa.png',
                        'alt' => 'logomuruguappa',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logoparrys.png',
                        'alt' => 'logoparrys',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logosafe.png',
                        'alt' => 'logosafelex',
                    ],

                    [
                        'img-path' => 'frontend/images/logos/logosrf.png',
                        'alt' => 'logosrf',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logotuflex.png',
                        'alt' => 'logotuflex',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logowinner.png',
                        'alt' => 'logowinnergroup',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logosanrhea.png',
                        'alt' => 'logosanrhea',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logozoom.png',
                        'alt' => 'logozoom',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logoshri.png',
                        'alt' => 'logoshri',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logoshri1.png',
                        'alt' => 'logoambika',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logodaman.png',
                        'alt' => 'logodaman',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logodcm.png',
                        'alt' => 'logoddcm',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logodfr.png',
                        'alt' => 'logoddfr',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logodiv.png',
                        'alt' => 'logoddiv',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logoinvermex.png',
                        'alt' => 'logoinvermex',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logojagdamba.png',
                        'alt' => 'logojagdamba',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logokanodia.png',
                        'alt' => 'logokanodia',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logomerit.png',
                        'alt' => 'logomerit',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logotara.png',
                        'alt' => 'logotara',
                    ],
                    [
                        'img-path' => 'frontend/images/logos/logotech.png',
                        'alt' => 'logotech',
                    ],
                ];
            @endphp
            <!-- TITLE START-->

            <div class="row align-items-center section-head style-1 text-center mb-0 mt-4">
                <div class=" aos-item">
                    <h5 class="text-primary sub-title text-capitalize">INDUSTRIAL CLIENTS</h5>
                    <h2 class="title">Technical Textile Clients</h2>
                </div>

            </div>
            <!-- TITLE END-->

            <!-- brand__area start -->
            <div class="brand__area pt-50 pb-70 pt-lg-20 pb-lg-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper brand__slider__one">
                                <div class="swiper-wrapper">
                                    @foreach ($logos as $logo)
                                        <div class="swiper-slide">
                                            <div class="brand__img">
                                                <a href="{{ $logo['img-path'] }}" target="_blank"><img
                                                        src="{{ $logo['img-path'] }}" alt="{{ $logo['alt'] }}"
                                                        class="w-100"></a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand__area end -->
        </section> --}}

    </main>

@endsection
