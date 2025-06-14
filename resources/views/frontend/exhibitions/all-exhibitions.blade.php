@extends('frontend.layouts.app')
@section('title', 'Exhibitions - ')
@section('content')

    <main>
        <!--page-title-area start-->
        <div class="page-title-area pt-100 pb-100 py-100 exhibition_banner" data-background="{{ asset('frontend/images/banner/people-walking-1.jpg') }}">
            <img class="page-title-shape shape-one " src="{{ asset('frontend/assets/img/shape/line-14d.svg') }}"
                alt="shape">
            <img class="page-title-shape shape-two" src="{{ asset('frontend/assets/img/shape/pattern-1a.svg ') }}"
                alt="shape">

            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="page-title-wrapper text-sm-start text-center">
                            <h2 class="page-title mb-10">Exhibitions</h2>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                    {{-- <li><a href="#">Pages</a></li> --}}
                                    <li class="active" aria-current="page">Exhibitions</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title-area end-->

        <!-- blog__area start -->
        <section class="blog__area pt-50 pt-sm-35 pb-30">
            <div class="container">

                <div class="row align-items-center ">
                    @forelse($exhibitions as $exhibition)
                        <div class="col-xl-4 col-md-6">
                            <div class="blog__one mb-30">
                                <div class="blog__thumb">
                                    <a href="{{ route('show', $exhibition->slug) }}"><img
                                            src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" class="custom-height-exhi-img"></a>
                                </div>
                                <div class="blog__content__one">
                                    <div class="blog__meta mb-0">
                                        {{-- <a href="#">Metal Store ~ </a> --}}
                                        <img src="{{asset('frontend/images/icons/calendar-new.png')}}" alt="" width="17px">
                                        <span class="date-text">{{ dd_format($exhibition->start_date, 'd-m-Y') }} to
                                            {{ dd_format($exhibition->end_date, 'd-m-Y') }}</span>
                                    </div>
                                    <h3 class="blog__title__three my-1"><a
                                            href="{{ route('show', $exhibition->slug) }}" class="text-capitalize">{{ $exhibition->title }}</a></h3>

                                    <div class="more__btn__box mt-2">
                                        <a href="{{ route('show', $exhibition->slug) }}"
                                            class="ht_btn hover-bg text-capitalize ltr-space exhibition-btn-card"><span>Read
                                                More <img src="assets/img/icon/arrow1.svg" alt=""></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                            <p class="text-center">No Exhibitions Found</p>
                        </div>
                    @endforelse

                </div>
                <div class="more__btn__box text-center mt-20">

                    <div class="row pag-overflow">
                        <div class="col-lg-12 mt-2">
                            <div class="page-navigation">
                                <ul class="pagination justify-content-center">
                                    <li>

                                        {{ $exhibitions->onEachSide(1)->links('pagination::bootstrap-4') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- blog__area end -->
    @endsection
