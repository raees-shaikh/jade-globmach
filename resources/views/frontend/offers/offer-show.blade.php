@extends('frontend.layouts.app')
@section('title', ucfirst($offer->title . ' - ' . $category->title . ' - Latest Offers - '))
@section('content')

<main>
    <!--page-title-area start-->
    <div class="page-title-area pt-100 pb-100 py-100 offer-show-img-posi"
        data-background="{{ asset('frontend/images/banner/offer-show.jpg') }}">
        <img class="page-title-shape shape-one " src="{{ asset('frontend/assets/img/shape/line-14d.svg') }}"
            alt="shape">
        <img class="page-title-shape shape-two" src="{{ asset('frontend/assets/img/shape/pattern-1a.svg') }} "
            alt="shape">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-8">
                    <div class="page-title-wrapper text-sm-start text-center">
                        <h2 class="page-title mb-10 text-capitalize">{{ $offer->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                <li><a href="{{ route('latest-offers') }}">latest Offers</a></li>
                                <li><a href="{{ route('offer-index', $category->slug) }}"
                                        class="remove-slash">{{ $category->title }}</a>
                                </li>
                                {{-- <li class="active text-capitalize" aria-current="page">{{$offer->title}}</li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->


    <!-- services__area start -->
    <section class="services__details__area pt-50 pb-20 pt-after-lg-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="services__details__wrapper">
                        <h2 class="section__title__one mb-20 text-capitalize">{{ $offer->title }}</h2>
                        @if($offer->image)
                        <img class="img-fluid mb-20 w-100" src="{{ asset('storage/images/offers/' . $offer->image) }}"
                            alt="Service">
                        @endif

                        <div class="grey-bg widget widget-categories mb-40 custom-padding-desc mt-3">
                            <h3 class="mb-0">Description:</h3>
                            <p class="mb-2">{!! $offer->body !!}</p>
                        </div>

                        <div class="row progressbar-wrapper mb-1">

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="widget-right-section ps-xl-4 ms-xl-3 mb-40">

                        <ul class="list-none service-widget grey-bg">
                            <h3 class=" mb-custom-cat">Related Offers</h3>
                            @forelse ($relatedOffers as $ro)
                            <li><a
                                    href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $ro->slug]) }}">{{ $ro->title }}<span
                                        class="float-end"><i class="bi bi-arrow-right-short"></i></span></a></li>

                            @empty
                            <li class="text-lg-start text-center list-unstyled-li">No Related Offers Found</li>
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
