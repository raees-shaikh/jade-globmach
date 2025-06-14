@extends('frontend.layouts.app')
@section('title', 'Sitemap - ')
@section('content')
    <main>
        <!--page-title-area start-->
        <div class="page-title-area pt-100 pb-100 py-100"
            data-background="{{ url('frontend/images/banner/sitemap-new.jpg') }}">
            <img class="page-title-shape shape-one " src="frontend/assets/img/shape/line-14d.svg" alt="shape">
            <img class="page-title-shape shape-two" src="frontend/assets/img/shape/pattern-1a.svg " alt="shape">

            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="page-title-wrapper text-sm-start text-center">
                            <h2 class="page-title mb-10">Sitemap</h2>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active" aria-current="page">Sitemap</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title-area end-->

        <section class="content-inner pt-md-5 pt-3 offer-sec-height pb-5">
            <div class="container">
                <div class="row align-items-center section-head style-1  text-center mb-0 mt-md-0 mt-4">
                    <div class=" aos-item">
                        <h5 class="text-primary sub-title text-capitalize">INDUSTRIAL SITEMAP</h5>
                        <h2 class="title">Sitemap</h2>
                    </div>

                </div>
                <div class="row sitemap-row">
                    <div class="col-lg-3 sitemap-mt col-6 mt-4">
                        <div>
                            <a href="{{ url('/') }}" class="ht_btn sitemap-btn hover-bg text-capitalize w-100">Home
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 sitemap-mt col-6 mt-4">
                        <div>
                            <a href="{{ url('company-profile') }}"
                                class="ht_btn sitemap-btn hover-bg text-capitalize w-100">Company Profile</a>
                        </div>
                    </div>
                    <div class="col-lg-3 sitemap-mt col-6 mt-4">
                        <div>
                            <a href="{{ url('/latest-offers') }}"
                                class="ht_btn sitemap-btn hover-bg text-capitalize w-100">Latest Offers </a>
                        </div>
                    </div>
                    <div class="col-lg-3 sitemap-mt col-6 mt-4">
                        <div>
                            <a href="{{ url('/business-process') }}"
                                class="ht_btn sitemap-btn hover-bg text-capitalize w-100">Business Process</a>
                        </div>
                    </div>
                    <div class="col-lg-3 sitemap-mt col-6 mt-4">
                        <div>
                            <a href="{{ url('/exhibitions') }}"
                                class="ht_btn sitemap-btn hover-bg text-capitalize w-100">Exhibitions</a>
                        </div>
                    </div>
                    <div class="col-lg-3 sitemap-mt col-6 mt-4">
                        <div>
                            <a href="{{ url('/contact-us') }}"
                                class="ht_btn sitemap-btn hover-bg text-capitalize w-100">Contact Us </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-3 ">
            <div class="container ">
                <div class="row align-items-center section-head style-1 text-center mb-1">
                    <div class=" aos-item">
                        <h5 class="text-primary sub-title text-capitalize">INDUSTRIAL SERVICES</h5>
                        <h2 class="title text-capitalize">Latest Offers</h2>
                    </div>
                </div>
                <div class="row pb-4 px-1">
                    @foreach ($offers as $offer)
                        <div class="col-xl-3 col-lg-4  col-6 mt-4 pt-md-1 text-center ">
                            <a {{ route('offer-show', ['category' => $offer->categories->slug, 'offer' => $offer->slug]) }}
                                href="{{ route('offer-show', ['category' => $offer->categories->slug, 'offer' => $offer->slug]) }}"
                                class="ht_btn w-100 oem-btn offer-cust-btn">{{ $offer->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        </div>
    @endsection
