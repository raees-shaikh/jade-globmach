@extends('frontend.layouts.app')
@section('title', '')
@section('content')
    <main>
        <!-- theme__main__banner start -->
        <section class="main__slider__section">
            <div class="swiper hero__slider__two">
                <div class="swiper-wrapper custom-h-swiper">
                    <div class="swiper-slide">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230 first"
                            data-background="{{ url('frontend/images/banner/group.jpg') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15 ">It Is Largest International Brokers Of</h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants & Machinerys From Overseas</p>

                                            <a href="{{ url('/company-profile') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/banner/forge.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Industrial Solution

                                            </h2>

                                            <p class="mb-25 h4 text-white">For Local Business</p>

                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/banner/third-new.png') }}"
                            style="background-size: cover;background-repeat:no-repeat;background-position:center">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">
                            {{-- <div class="circular__box">
                                <img class="circular__text" src="frontend/assets/img/hero/circular-text-2b.png"
                                    alt="Circular">
                                <img class="circular__img" src="{{  asset('frontend/assets/img/Jade-1.jpg') }}" alt="Circular "
                                    width="80px">
                            </div> --}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">We Work With</h2>
                                            <p class="mb-25 h4 text-white">You For Solution</p>
                                            <a href="{{ url('/contact-us') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/forging.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Forging

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/foundry.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Foundry

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/iron-steel.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Iron And Steel

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/almu.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Aluminium

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/copper-brass.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Copper And Brass

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/non-f.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Non Ferrous

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/fabrication.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Fabrication

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/ceramics.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Ceramic

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/construction.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Construction

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/power.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Power

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/plastic.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Plastics

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/packging.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Packaging

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/paper.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Paper

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/mdf.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">MDF & Particle Board

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/heavy-injection.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Heavy Injections Molding, Rotomolding &
                                                Thermoforming

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/heavy-engineering.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Heavy Engineering Machine Tool & Fabrication

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/solar.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Solar, Wind, Thermal, Plants

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide ">
                        <div class="hero__slider__wrapper pt-200 pt-md-150 pb-230"
                            data-background="{{ url('frontend/images/industrial/waste.png') }}">
                            <img class="shapes__1" src="frontend/assets/img/shape/line-11b.svg" alt="Shape">

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="hero__content text-xl-start text-center mb-5 mb-lg-0">
                                            <h2 class="main__title mb-15">Heavy Recycling Plants Of All Kinds Of Industrial
                                                Wastes

                                            </h2>
                                            <p class="mb-25 h4 text-white">Industrial Plants</p>


                                            <a href="{{ url('/latest-offers') }}"
                                                class="ht_btn custom-banner-btn text-capitalize hover-bg hover-btn">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- pagination -->
                <div class="swiper-pagination"></div>
                <!-- pagination -->
                <div class="swiper-button-prev"><img src="frontend/assets/img/icon/chevron-arrow-left.svg"
                        alt="Arrow">
                </div>
                <div class="swiper-button-next"><img src="frontend/assets/img/icon/chevron-arrow-right.svg"
                        alt="Arrow">
                </div>
            </div>
            <div class="thumbs__gallery">
                <div class="swiper hero__thumbs__slider">
                    <div class="swiper-wrapper">
                        {{-- <div class="swiper-slide">
                        <div class="hero__thumb">
                            <img src="frontend/assets/img/hero/thumb-1b.jpg" alt="Thumb">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__thumb">
                            <img src="frontend/assets/img/hero/thumb-2b.jpg" alt="Thumb">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__thumb">
                            <img src="frontend/assets/img/hero/thumb-3b.jpg" alt="Thumb">
                        </div>
                    </div> --}}
                        {{-- <div class="swiper-slide">
                        <div class="hero__thumb">
                            <img src="frontend/assets/img/hero/thumb-1b.jpg" alt="Thumb">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__thumb">
                            <img src="frontend/assets/img/hero/thumb-2b.jpg" alt="Thumb">
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- theme__maina__banner end -->


        <!-- about__area start -->
        <section class="about__area">
            <div class="about__section__wrapper2 pt-50 custom-about-pt pb-20  pb-lg-1 pb-xl-3 pb-0">
                {{-- <div data-text="About" class="big-style-text">Profile</div> --}}
                <img class="about__shape__1" src="frontend/assets/img/shape/about-line-2a.svg" alt="About Shape">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 ">
                            <div class="about__img__wrapper mb-20 index-profile-section">
                                <div class="">
                                    {{-- <img class="main__img__1b" src="{{ asset('frontend/assets/img/about/about.jpg') }}"
                                        alt="About"> --}}
                                    <img class="w-100 index-pen"
                                        src="{{ asset('frontend/assets/img/about/penguin.png') }}" alt="About">

                                </div>
                                <div class="experience__box index-box">
                                    <img class="icon" src="{{ asset('frontend/images/icons/factory-100.png') }}"
                                        alt="Icon" width="60px">
                                    <span>A+</span>
                                    <h3 class="index-experience">35+ Years Of Experience</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-xl-0">
                            <div class="about__text__wrapper ps-xl-3 mb-30 mt-lg-0 mt-2">
                                <h5 class="text-primary sub-title text-capitalize text-lg-start text-center">COMPANY
                                    PROFILE
                                </h5>
                                <h2 class="title text-lg-start text-center">Jade Globmach</h2>
                                <div class="section__title mb-20 px-xl-0 ">
                                    {{-- <p> We Serve The World With 25 Years Of Expertise On New, Unused, Secondhand, Used Complete Range Of
                                        Industrial Plants & Machinerys From Europe, Baltic Countries, Russia, Ukraine,
                                        America, Asia, Africa, China, South & North American Countries . . </p> --}}
                                        <p>Leading Sellers of Imported NEW BRAND | Latest & Old Techncologies based Complete Plant & Machinerys Since 1989
                                            Industrys covering to name few - INFRASTRUCTRE | STEEL | FORGING | PLASTICS & POLYMER | RECYCLING | ENGINEERING | MDF, PAPER & CARTON BOARD | PACKAGING | DEFENCE & AEROSPCAE | GEOTECHNICAL | SHIPPING.....</p>
                                    {{-- <p class="mb-1">Jade Globmach are leading Indian Agents-Brokers for RELOCATION of Used-Secondhand Industrial Plants, Machinery & Technology from different Countries worldwide.</p>

                                    <p>Jade Globmach provides its Indian & other Overseas Customers, one of the largest inventory of CURRENTLY available different kinds of Used plants and equipment covering majority of Industries from CEMENT - IRON & STEEL - FORGING - FOUNDRY - PAPER - TEXTILES - OIL REFINERY - MATERIAL HANDLING - MACHINE TOOLS - FABRICATION - PRINTING - PETROCHEMICAL - PLASTIC/FILM/PACKAGING -  ALUMINIUM - COPPER AND BRASS - NON FERROUS - CERAMIC - CONSTRUCTION - OIL GAS AND REFINERIES - POWER  & other industries, which are located in different country’s from EUROPE - AMERICAS - ASIA - AFRICA & are decommissioned due to overcapacity’s, Economic conditions, mergers, business reorganization or environmental regulations at their present location.</p> --}}
                                    <div class="text-lg-start text-center mt-xl-0  pt-xl-2">
                                        <a href="{{ url('company-profile') }}"
                                            class="ht_btn custom-banner-btn hover-bg text-capitalize new-btn-ui">Read More
                                        </a>
                                    </div>
                                </div>
                                {{-- <div class="quote__text mb-20">
                                “Complete implement cross platform human capital after compelling materials.”
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about__area end -->
        <!-- services__area start -->
        <section class="services__area2  pb-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-10">
                            <h5 class="text-primary sub-title text-capitalize">INDUSTRIAL SERVICES</h5>
                            <h2 class="title">Latest Offers</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm start justify-content-center">
                    @forelse ($categories as $cat)
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="single__services__box mb-35">


                                <div class="services__content">

                                    <h4 class="single__service__title"><a
                                            href="{{ route('offer-index', $cat->slug) }}">{{ $cat->title }}</a>
                                    </h4>
                                    <a href="{{ route('offer-index', $cat->slug) }}"><img
                                            src="frontend/assets/img/icon/long-arrow.svg" alt="Arrow"
                                            class="arrow-card"></a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse


                </div>
                <div class="row mt-40">
                    <div class="col-12 text-center">
                        <a href="{{ url('/latest-offers') }}"
                            class="ht_btn custom-banner-btn hover-bg text-capitalize new-btn-ui">View All</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- services__area end -->

        <section class="my-3 ">
            @php

                $MANUFACTURERS = [
                    [
                        'name' => 'SMS WAGNER',
                        'link' => 'https://www.sms-group.com/company/our-brands/heritage-brands/wagner',
                    ],
                    [
                        'name' => 'BANNING',
                        'link' => 'https://www.banning-forging.com/',
                    ],
                    [
                        'name' => 'MITSUBISHI',
                        'link' => 'https://www.mitsubishi.com/en/',
                    ],
                    [
                        'name' => 'DORTMOUND',
                        'link' =>
                            'https://www.wmwag.com/en/machines.html/070/Straightening+Press+-+Horizontal/0/0700904/WAGNER+DORTMUND/VWG',
                    ],
                    [
                        'name' => 'WAGNER',
                        'link' => 'https://www.wagner-group.com/en/',
                    ],
                    [
                        'name' => 'LASCO',
                        'link' => 'https://www.lasco.com/en/',
                    ],
                    [
                        'name' => 'FICCIP',
                        'link' => 'https://beta.ficci.in/',
                    ],
                    [
                        'name' => 'ERFURT',
                        'link' => 'https://dabrox.com/hot-forging-press-erfurt-pkxw-2500-1-2500-ton-3/',
                    ],
                    [
                        'name' => 'VORENZH',
                        'link' => 'https://dabrox.com/hot-forging-press-tmp-voronezh-k8542-1600-ton/',
                    ],
                    [
                        'name' => 'SMERAL',
                        'link' => 'https://www.smeral.cz/en/',
                    ],
                    [
                        'name' => 'NATIONAL',
                        'link' => 'https://www.nationalmachinery.com/',
                    ],
                    [
                        'name' => 'AJAX',
                        'link' => 'https://ajaxerie.com/forging/',
                    ],
                    [
                        'name' => 'ERIE',
                        'link' => 'https://www.whemco.com/who-we-are/erie-forge-steel/',
                    ],
                    [
                        'name' => 'KOBELCO',
                        'link' => 'https://www.kobelco-in.com/',
                    ],
                    [
                        'name' => 'HUTA',
                        'link' => 'http://www.hutagroup.com/english/index.php',
                    ],
                    [
                        'name' => 'MPM',
                        'link' => 'https://dabrox.com/forging-hammer-huta-zygmunt-mpm-3000-3-5-ton/',
                    ],
                    [
                        'name' => 'MASSEY',
                        'link' => 'http://www.masseyforging.com/home.htm',
                    ],
                    [
                        'name' => 'ZAMET',
                        'link' => 'https://zametsa.com/en/offer/material-holding/metallurgy/foundries/',
                    ],
                    [
                        'name' => 'HBE',
                        'link' =>
                            'https://www.nbmachinery.in/listings/2348446-used-press-forging-open-die-hydraulic-hbe',
                    ],
                    [
                        'name' => 'DANGO & DEINTHEL',
                        'link' => 'https://www.dds-in.com/',
                    ],
                    [
                        'name' => 'GLAMA',
                        'link' => 'https://www.glama.de/de/index.php',
                    ],
                    [
                        'name' => 'KUNCKNER WAGNER',
                        'link' => 'https://www.kuenkel-wagner.com/',
                    ],
                    [
                        'name' => 'OSBORN',

                        'link' => 'https://www.osborn.com/en',
                    ],
                    [
                        'name' => 'ZIMMERMEN ',

                        'link' => 'https://www.erielandmark.com/',
                    ],
                ];

                $MANUFACTURERSTWO = [
                    [
                        'name' => 'SMS SIEMAG ',

                        'link' =>
                            'https://www.cecof.org/members/product-and-company-directory-industrial-furnaces-and-heating-eq/sms-siemag-ag.html',
                    ],
                    [
                        'name' => 'SMS MEER ',

                        'link' => 'https://www.demagcranes.com/en/company/case-studies/sms-meer',
                    ],
                    [
                        'name' => 'CONCAST ',

                        'link' => 'https://www.concastindia.com/',
                    ],
                    [
                        'name' => ' MORGAN',

                        'link' => 'https://www.morgansteel.com/',
                    ],
                    [
                        'name' => 'TOSHIBA ',

                        'link' =>
                            'https://www.lankanames.lk/google.com/searchrlz=/toshiba-steel-aluminum-supplier-in-kengalla/',
                    ],
                    [
                        'name' => 'MITSUBISHI ',

                        'link' => 'https://www.mitsubishi.com/en/company/detail/170000000.html',
                    ],
                    [
                        'name' => 'DANIELI ',

                        'link' => 'https://www.danieli.com/en/',
                    ],
                    [
                        'name' => ' CVS MAKINA',

                        'link' => 'http://www.cvs.com.tr/',
                    ],
                    [
                        'name' => 'CENTRO MASKINA ',

                        'link' => 'https://www.danieli.com/en/worlwide/business-units/danieli-centro-maskin.htm',
                    ],
                    [
                        'name' => 'SKET ',

                        'link' => 'https://sketvmb.de/eng/steel-wire-rope-technology/',
                    ],

                    [
                        'name' => 'SMS GERMANY',
                        'link' => 'https://www.sms-group.com/',
                    ],
                    [
                        'name' => ' VOEST ALPINE',
                        'link' => 'https://www.voestalpine.com/group/en/',
                    ],
                    [
                        'name' => 'SCHIESS',
                        'link' => 'https://www.schiessgmbh.de/en/index.htm',
                    ],
                    [
                        'name' => 'SEDIN',
                        'link' => 'http://www.k-zts.ru/en/',
                    ],
                    [
                        'name' => 'DOERRIES',
                        'link' => 'https://dskinc.tradekorea.com/company.do',
                    ],
                    [
                        'name' => 'RAFAMET',
                        'link' => 'https://www.rafamet.com/en/',
                    ],
                    [
                        'name' => 'CKD-BLANSKO',
                        'link' => 'https://www.ckdblansko.cz/en/',
                    ],
                    [
                        'name' => 'TITAN',
                        'link' => 'http://www.titan-tmg.com/',
                    ],

                    [
                        'name' => 'ROMANIA',
                        'link' => 'https://utilaje-romania.business.site/',
                    ],
                    [
                        'name' => 'CRAVEN',
                        'link' =>
                            'https://www.prestigeequipment.com/Lathes-Flat-Bed-Manual-&-CNC/Craven-Heavy-Duty/28376/i',
                    ],
                    [
                        'name' => 'STANKOIMPORT',
                        'link' => 'https://maszyneria.com/en/product/stankoimport-5822m-thread-grinding-machine/',
                    ],
                    [
                        'name' => 'KOLOMNA',
                        'link' => 'https://pmkolomna.ru/en/',
                    ],
                    [
                        'name' => 'TOS',
                        'link' => 'https://www.tosvarnsdorf.cz/en/history',
                    ],
                    [
                        'name' => 'BERTHIEZ',
                        'link' => 'https://www.starrag.com/en-us/product-range/4',
                    ],
                ];

                $MANUFACTURERSTHREE = [
                    [
                        'name' => 'DOERRIES SCHARMANN',
                        'link' => 'https://www.bloomberg.com/profile/company/1051Q:GR',
                    ],
                    [
                        'name' => 'KRAMATORSK',
                        'link' => 'http://www.kzts.com/en/uslugi.html',
                    ],
                    [
                        'name' => 'POREBA',
                        'link' => 'https://fum-poreba.com/en/',
                    ],
                    [
                        'name' => 'SCHNEIDER',
                        'link' => 'https://www.se.com/in/en/work/solutions/machine-control/material-working/',
                    ],
                    [
                        'name' => 'WAGNER DORTMUND',
                        'link' =>
                            'https://www.wmwag.com/en/machines.html/070/Straightening+Press+-+Horizontal/0/0700904/WAGNER+DORTMUND/VWG',
                    ],
                    [
                        'name' => 'WOHLENBERG',
                        'link' => 'https://www.welbound.com/product/32',
                    ],
                    [
                        'name' => 'HEINEMANN',
                        'link' => 'http://www.lathes.co.uk/heinemann/',
                    ],
                    [
                        'name' => 'MESSER GRIESHEIM',
                        'link' => 'https://in.messer-cutting.com/',
                    ],
                    [
                        'name' => 'ZINSER',
                        'link' => 'https://zinser.de/en/',
                    ],
                    [
                        'name' => 'GLEASON',
                        'link' => 'https://www.gleason.com/en',
                    ],
                    [
                        'name' => 'LIEBHERR',
                        'link' =>
                            'https://www.liebherr.com/en/ind/about-liebherr/liebherr-worldwide/india/liebherr-in-india.html',
                    ],
                    [
                        'name' => 'PFAUTER',
                        'link' =>
                            'https://www.gleason.com/en/operations/gleason-pfauter-maschinenfabrik-gmbh-ludwigsburg-germany',
                    ],
                    [
                        'name' => 'WMW',
                        'link' => 'https://wmwmachinery.com/',
                    ],
                    [
                        'name' => 'STANKO',
                        'link' => 'https://www.exapro.com/stanko-5000mm-p230425006/',
                    ],
                    [
                        'name' => 'LORENZ',
                        'link' => 'https://www.bloomberg.com/profile/company/0050657D:US',
                    ],
                    [
                        'name' => 'REISHAUER',
                        'link' => 'https://www.reishauer.com/en/machines',
                    ],
                    [
                        'name' => 'WMW-NILES',
                        'link' => 'https://planetmachine.in/product/heavy-duty-horizontal-lathe-make-wmw-niles/',
                    ],
                    [
                        'name' => 'MAAG',
                        'link' => 'https://maag.com/',
                    ],
                    [
                        'name' => 'HOEFLER',
                        'link' => 'http://hoefler.in/',
                    ],
                    [
                        'name' => 'HURTH',
                        'link' => 'https://akcpl.com/?product=hurth-2',
                    ],
                    [
                        'name' => 'MKZ',
                        'link' =>
                            'https://www.diymobileaudio.com/threads/2012-lincoln-mkz-hybrid-door-panel-removal.111769/',
                    ],
                    [
                        'name' => 'SCHAEFER',
                        'link' => 'https://schaffermfg.com/',
                    ],
                    [
                        'name' => 'BOLDRINI',
                        'link' => 'https://www.boldrini.com/',
                    ],
                    [
                        'name' => 'BEYELER',
                        'link' => 'https://mach4metal.com/en/beyeler',
                    ],
                ];
                $MANUFACTURERSFOUR = [
                    [
                        'name' => 'MENGELE',
                        'link' => 'https://www.bloomberg.com/profile/company/6332283Z:GR',
                    ],
                    [
                        'name' => 'LINDEMANN',
                        'link' => 'https://lindemann-metalrecycling.com/en/',
                    ],
                    [
                        'name' => 'SCHMITZ-PSM',
                        'link' => 'https://caeonline.com/buy/machine-tools/schmitz-psm/9067016',
                    ],

                    [
                        'name' => 'LINDUAR DORNIER ',
                        'link' => 'https://www.lindauerdornier.com/en/',
                    ],
                    [
                        'name' => ' BRUCKNER',
                        'link' => 'https://www.brueckner.com/en',
                    ],
                    [
                        'name' => 'MITSUBISHI ',
                        'link' => 'https://www.m-petfilm.de/en/',
                    ],
                    [
                        'name' => 'VOITH',
                        'link' => 'https://voith.com/corp-en/index.html',
                    ],
                    [
                        'name' => 'METSO',
                        'link' => 'https://www.metso.com/',
                    ],
                    [
                        'name' => 'VALMET',
                        'link' => 'https://www.valmet.com/',
                    ],
                    [
                        'name' => ' BELOIT',
                        'link' =>
                            'https://www.valmet.com/media/news/news-archive-1999-2013/pulp-and-paper-news/valmet-completes-acquisition-of-beloits-paper-machine-service-assets/',
                    ],
                    [
                        'name' => 'JAGENBERG',
                        'link' => 'https://www.jagenberg.com/',
                    ],
                    [
                        'name' => 'ALLIMIND',
                        'link' => 'https://www.allmind.com/',
                    ],
                    [
                        'name' => 'SULZER',
                        'link' => 'https://www.sulzer.com/en/',
                    ],
                    [
                        'name' => ' F L SCHMIDT',
                        'link' => 'https://www.flsmidth.com/',
                    ],
                    [
                        'name' => 'KHD',
                        'link' => 'https://www.khd.com/',
                    ],
                    [
                        'name' => 'THYSSEN KRUPP',
                        'link' => 'https://www.thyssenkrupp.com/en/home',
                    ],
                    [
                        'name' => 'POLYSIUS',
                        'link' => 'https://www.thyssenkrupp-polysius.com/',
                    ],
                    [
                        'name' => 'METSO',
                        'link' => 'https://www.metso.com/aggregates/',
                    ],
                    [
                        'name' => 'LIBEHER',
                        'link' =>
                            'https://www.liebherr.com/en/ind/products/construction-machines/special-construction-machines/special-construction-machines.html',
                    ],
                    [
                        'name' => 'DEMAG',
                        'link' => 'https://www.demagcranes.com/en-in/industries/construction',
                    ],
                    [
                        'name' => 'TEREX',
                        'link' => 'https://www.terex.com/',
                    ],
                    [
                        'name' => 'KOBELCO',
                        'link' => 'https://www.kobelcocm-global.com/',
                    ],
                    [
                        'name' => 'ZOOMLION',
                        'link' => 'https://www.zoomlionindia.org/',
                    ],
                    [
                        'name' => 'SANY',
                        'link' => 'https://www.sanyglobal.com/',
                    ],
                ];
                $MANUFACTURERSFIVE = [
                    [
                        'name' => 'HEDELBERG',
                        'link' =>
                            'https://www.heidelberg.com/global/en/products/offset_printing/sheetfed_offset_overview.jsp?gad_source=1&gclid=CjwKCAiA5L2tBhBTEiwAdSxJXy43ayYWtPQEEzZeptBN7PUzyBAsbxEpPYLgYQK8CAQa7phYOjMCOxoCsSAQAvD_BwE',
                    ],

                    [
                        'name' => 'AKIYAMA',
                        'link' => 'https://www.akiyama.com/',
                    ],
                    [
                        'name' => 'KOMORI',
                        'link' => 'https://www.komori.com/en/global/',
                    ],
                    [
                        'name' => 'MITSUBISHI',
                        'link' => 'https://www.mhi.com/products/industry/printing_press_list.html',
                    ],
                    [
                        'name' => 'SIEMENS',
                        'link' => 'https://www.siemens.com/in/en.html',
                    ],
                    [
                        'name' => 'GE',
                        'link' => 'https://www.ge.com/',
                    ],
                    [
                        'name' => 'ABB',
                        'link' => 'https://global.abb/group/en',
                    ],
                    [
                        'name' => 'ANSALDO',
                        'link' => 'https://www.ansaldoenergia.com/',
                    ],
                    [
                        'name' => 'ROLLS ROYCE',
                        'link' =>
                            'https://www.rolls-royce.com/country-sites/india/products-and-services/power-systems.aspx',
                    ],
                    [
                        'name' => 'SOLAR CENTAUR',
                        'link' =>
                            'https://www.solarturbines.com/en_US/products/power-generation-packages/centaur-40.html',
                    ],
                    [
                        'name' => 'MITSUBISHI',
                        'link' => 'https://power.mhi.com/',
                    ],
                    [
                        'name' => 'HYUANDI',
                        'link' => 'https://hyundaipower.ca/',
                    ],
                    [
                        'name' => 'SEMT PIELSTICK',
                        'link' => 'https://www.mshs.com/products/engines/s-e-m-t-pielstick/',
                    ],
                    [
                        'name' => 'MIERLESS',
                        'link' => 'https://www.meireles.pt/en/',
                    ],
                    [
                        'name' => 'SULZER ZGODA',
                        'link' => 'http://www.zgodanc.pl/index.php/about-our-company',
                    ],
                    [
                        'name' => 'WARTSILA',
                        'link' => 'https://www.wartsila.com/',
                    ],
                    [
                        'name' => 'MANBW ',
                        'link' => 'https://www.man-es.com/marine/products/two-stroke-engines/me-gi',
                    ],
                    [
                        'name' => 'VESTA',
                        'link' => 'https://www.vestas.in/en-in',
                    ],
                    [
                        'name' => 'SIEMPELKAMP',
                        'link' => 'https://www.siempelkamp.com/en/',
                    ],
                    [
                        'name' => 'DIEFFENBACHER',
                        'link' => 'https://dieffenbacher.com/de/',
                    ],
                    [
                        'name' => 'PALLMANN',
                        'link' => 'https://www.pallmann.eu/en/',
                    ],
                ];
            @endphp
            <div class="container ">
                <div class="row align-items-center section-head style-1 text-center mb-1">
                    <div class=" aos-item">
                        <h5 class="text-primary sub-title text-capitalize">INDUSTRIAL PLANTS </h5>
                        <h2 class="title text-capitalize">Best Manufacturers OEM</h2>
                    </div>

                </div>
                <p class="text-center mx-auto  mb-0">Best European, Japanese Manufacturer's Quality  Machineries &
                    Low
                    Costs From Who's Who In Techncial Industry OEM</p>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        {{-- <div class="carousel-item active">
                            <div class="row pb-3 px-1">
                                @foreach ($MANUFACTURERS as $item)
                                    <div class="col-lg-3  col-6 mt-4 pt-md-1 text-center ">
                                        <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                                            href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                                            class="ht_btn w-100 oem-btn cust-oem-py">{{ $item['name'] }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row pb-3 px-1">
                                @foreach ($MANUFACTURERSTWO as $item)
                                    <div class="col-lg-3  col-6 mt-4 pt-md-1 text-center ">
                                        <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                                            href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                                            class="ht_btn w-100 oem-btn cust-oem-py">{{ $item['name'] }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row pb-3 px-1">
                                @foreach ($MANUFACTURERSTHREE as $item)
                                    <div class="col-lg-3  col-6 mt-4 pt-md-1 text-center ">
                                        <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                                            href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                                            class="ht_btn w-100 oem-btn cust-oem-py">{{ $item['name'] }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row pb-3 px-1">
                                @foreach ($MANUFACTURERSFOUR as $item)
                                    <div class="col-lg-3  col-6 mt-4 pt-md-1 text-center ">
                                        <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                                            href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                                            class="ht_btn w-100 oem-btn cust-oem-py">{{ $item['name'] }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row pb-3 px-1">
                                @foreach ($MANUFACTURERSFIVE as $item)
                                    <div class="col-lg-3  col-6 mt-4 pt-md-1 text-center ">
                                        <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                                            href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                                            class="ht_btn w-100 oem-btn cust-oem-py">{{ $item['name'] }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div> --}}
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
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
            @if ($data)
                <div class="container ">
                    <div class="section-title text-center">
                        <h2 class="title text-center pt-lg-2">Technical Data </h2>
                    </div>
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-4 mx-auto text-center my-2">
                            <a href="{{ asset('storage/data/' . $data->filename) }}"
                                class="ht_btn custom-banner-btn hover-bg text-capitalize new-btn-ui" target="_blank">
                                <img src="{{ asset('frontend/images/pdf.png') }}" alt="" class="mr-1"> Open
                                PDF</a>
                        </div>
                    </div>
                </div>
            @endif
        </section>
    </main>

@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>

    <script>
        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');





        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');

        // initialize and load the PDF
        async function showPDF(pdf_url) {
            document.querySelector("#pdf-loader").style.display = 'block';

            // get handle of pdf document
            try {
                _PDF_DOC = await pdfjsLib.getDocument({
                    url: pdf_url
                });
            } catch (error) {
                alert(error.message);
            }

            // total pages in pdf
            _TOTAL_PAGES = _PDF_DOC.numPages;

            // Hide the pdf loader and show pdf container
            document.querySelector("#pdf-loader").style.display = 'none';
            document.querySelector("#pdf-contents").style.display = 'block';
            document.querySelector("#pdf-total-pages").innerHTML = _TOTAL_PAGES;

            // show the first page
            showPage(1);
        }

        // load and render specific page of the PDF
        async function showPage(page_no) {
            _PAGE_RENDERING_IN_PROGRESS = 1;
            _CURRENT_PAGE = page_no;

            // disable Previous & Next buttons while page is being loaded
            document.querySelector("#pdf-next").disabled = true;
            document.querySelector("#pdf-prev").disabled = true;

            // while page is being rendered hide the canvas and show a loading message
            document.querySelector("#pdf-canvas").style.display = 'none';
            document.querySelector("#page-loader").style.display = 'block';

            // update current page
            document.querySelector("#pdf-current-page").innerHTML = page_no;

            // get handle of page
            try {
                var page = await _PDF_DOC.getPage(page_no);
            } catch (error) {
                alert(error.message);
            }

            // original width of the pdf page at scale 1
            var pdf_original_width = page.getViewport(1).width;

            // as the canvas is of a fixed width we need to adjust the scale of the viewport where page is rendered
            var scale_required = _CANVAS.width / pdf_original_width;

            // get viewport to render the page at required scale
            var viewport = page.getViewport(scale_required);

            // set canvas height same as viewport height
            _CANVAS.height = viewport.height;

            // setting page loader height for smooth experience
            document.querySelector("#page-loader").style.height = _CANVAS.height + 'px';
            document.querySelector("#page-loader").style.lineHeight = _CANVAS.height + 'px';

            var render_context = {
                canvasContext: _CANVAS.getContext('2d'),
                viewport: viewport
            };

            // render the page contents in the canvas
            try {
                await page.render(render_context);
            } catch (error) {
                alert(error.message);
            }

            _PAGE_RENDERING_IN_PROGRESS = 0;

            // re-enable Previous & Next buttons
            document.querySelector("#pdf-next").disabled = false;
            document.querySelector("#pdf-prev").disabled = false;

            // show the canvas and hide the page loader
            document.querySelector("#pdf-canvas").style.display = 'block';
            document.querySelector("#page-loader").style.display = 'none';
        }

        // click on "Show PDF" buuton
        document.querySelector("#show-pdf-button").addEventListener('click', function() {
            this.style.display = 'block';
            showPDF('pdf/Saturn-Technical-Data.pdf');
        });

        // click on the "Previous" page button
        document.querySelector("#pdf-prev").addEventListener('click', function() {
            if (_CURRENT_PAGE != 1)
                showPage(--_CURRENT_PAGE);
        });

        // click on the "Next" page button
        document.querySelector("#pdf-next").addEventListener('click', function() {
            if (_CURRENT_PAGE != _TOTAL_PAGES)
                showPage(++_CURRENT_PAGE);
        });
    </script>

@endsection
