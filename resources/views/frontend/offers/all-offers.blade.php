@extends('frontend.layouts.app')
@section('title', 'Latest Offers - ')
@section('content')
    <main>
        <!--page-title-area start-->
        <div class="page-title-area pt-100 pb-100 py-100" data-background="{{ asset('frontend/images/banner/offers.jpg') }}">
            <img class="page-title-shape shape-one " src="{{asset('frontend/assets/img/shape/line-14d.svg')}}" alt="shape">
            <img class="page-title-shape shape-two" src="{{asset('frontend/assets/img/shape/pattern-1a.svg ')}}" alt="shape">

            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="page-title-wrapper text-sm-start text-center">
                            <h2 class="page-title mb-10">Latest Offers</h2>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active" aria-current="page">Latest Offers</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title-area end-->


        <!-- services__area start -->
        <section class="services__area2 pt-50 pt-lg-30 pb-170 pb-lg-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-0">
                            <h5 class="text-primary sub-title text-capitalize">INDUSTRIAL SERVICES</h5>
                            <h2 class="title">Latest Offers</h2>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    @forelse ($categories as $cat)
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="single__services__box mb-35 d-block h-100">
                                {{-- <div class="services__thumb">
                                    <img class="w-100" src="{{ asset('frontend/assets/img/offers/cotton-ring-spin.png') }}"
                                        alt="Service">
                                </div> --}}
                                <div class="services__content">
                                    {{-- <div class="services__icon">
                                        <img src="{{asset('frontend/images/icons/yarn.png')}}" alt="Icon">
                                    </div> --}}
                                    <h4 class="single__service__title"><a
                                            href="{{ route('offer-index', $cat->slug) }}">{{ $cat->title }}</a>
                                    </h4>
                                    <a href="{{ route('offer-index', $cat->slug) }}"><img
                                            src="frontend/assets/img/icon/long-arrow.svg" alt="Arrow" class="arrow-card"></a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>

            </div>

            <div class="row pag-overflow">
                <div class="col-lg-12 mt-15 mb-3">
                    <div class="page-navigation">
                        <ul class="pagination justify-content-center">
                            {{ $categories->onEachSide(1)->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- services__area end -->

    </main>


@endsection
