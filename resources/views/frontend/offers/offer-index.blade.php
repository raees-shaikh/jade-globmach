@extends('frontend.layouts.app')
@section('title', ucfirst($category->title . ' - Latest Offers -'))
@section('content')

    <main>
        <!--page-title-area start-->
        <div class="page-title-area pt-100 pb-100 py-100" data-background="{{ asset('frontend/images/banner/offer.jpg') }}">
            <img class="page-title-shape shape-one " src="{{asset('frontend/assets/img/shape/line-14d.svg')}}" alt="shape">
            <img class="page-title-shape shape-two" src="{{asset('frontend/assets/img/shape/pattern-1a.svg')}} " alt="shape">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-8 ">
                        <div class="page-title-wrapper text-sm-start text-center">
                            <h2 class="page-title mb-10">{{ $category->title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                    <li><a href="{{ route('latest-offers') }}">Latest Offers</a></li>
                                    <li class="active" aria-current="page">{{$category->title}}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title-area end-->

        <!-- services__area start -->
        <section class="services__details__area pt-30 pt-md-30 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            @forelse($offers as $offer)
                                <div class="col-md-6 mt-md-0 mt-3 pt-sm-3 pt-2">
                                    <div class="grey-bg widget-form my-0 mb-3">
                                        <h3 class="widget__title__three mb-15"><a
                                                href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}" class="text-capitalize">{{ $offer->title }}</a>
                                        </h3>

                                        <a href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}"
                                            class="widget-btn mt-20 d-block text-center">Read
                                            More</a>
                                    </div>
                                </div>
                            @empty
                                <li class="list-unstyled-li text-center pt-3 text-lg-start">No Offers Found</li>
                            @endforelse
                        </div>

                        <div class="row pag-overflow">
                            <div class="col-lg-12 mt-15">
                                <div class="page-navigation">
                                    <ul class="pagination justify-content-center">
                                        <li>
                                            {{ $offers->onEachSide(1)->links('pagination::bootstrap-4') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 pt-3">
                        <div class="widget-right-section ps-xl-4 ms-xl-3 pb-xl-4 pb-3">
                            <ul class="list-none service-widget grey-bg">
                                <h3 class=" mb-custom-cat">Other Categories</h3>
                                @forelse ($relatedCategories as $rCategory)
                                    <li><a href="{{ route('offer-index', $rCategory->slug) }}">{{ $rCategory->title }} <span class="float-end"><i
                                                    class="bi bi-arrow-right-short "></i></span></a></li>
                                @empty
                                    <li class="text-center text-lg-start">No Category Found</li>
                                @endforelse
                            </ul>

                        </div>
                    </div>
                </div>


            </div>


        </section>
        <!-- services__area end -->

    </main>
@endsection
