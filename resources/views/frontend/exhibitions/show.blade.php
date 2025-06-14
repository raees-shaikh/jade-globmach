@extends('frontend.layouts.app')
@section('title', ucfirst($exhibition->title . ' - Exhibitions -'))

@section('content')
    <main>
        <!--page-title-area start-->
        <div class="page-title-area pt-100 pb-100 py-100" data-background="{{ asset('frontend/images/banner/exhi-show.png') }}">
            <img class="page-title-shape shape-one " src="{{asset('frontend/assets/img/shape/line-14d.svg')}}" alt="shape">
            <img class="page-title-shape shape-two" src="{{asset('frontend/assets/img/shape/pattern-1a.svg ')}}" alt="shape">

            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="page-title-wrapper text-sm-start text-center">
                            <h2 class="page-title mb-10 text-capitalize">{{ $exhibition->title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                    <li><a href="{{ route('exhibitions') }}" class="remove-slash">Exhibitions</a></li>
                                    <!-- <li class="active text-capitalize" aria-current="page">{{ $exhibition->title }}</li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title-area end-->

        <!-- blog__details__area start -->
        <section class="blog__details__area  pt-after-lg-30 pt-50 pb-lg-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog__details__wrapper">

                            <h2 class="blog__title__big  text-capitalize my-0">{{ $exhibition->title }}</h2>
                            <div class="blog__meta mb-15 ">
                                <img src="{{asset('frontend/images/icons/calendar-new.png')}}" alt="" width="17px">
                                <span class="date-text text-body text-primary "
                                    href="#">{{ dd_format($exhibition->start_date, 'd-m-Y') }} to
                                    {{ dd_format($exhibition->end_date, 'd-m-Y') }}</span>

                            </div>
                            <img class="w-100 mb-30" src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}"
                                alt="Blog">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="widget-right-section ps-xl-4 ms-xl-3 ">

                            <div class="grey-bg widget widget-categories mb-30 custom-padding-desc">
                                <h3 class="mb-0">Description:</h3>
                                <p class="mb-10">{!! $exhibition->descriptions !!}</p>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog__details__area end -->

        @if ($medias->count())
            <div class="row align-items-center section-head style-1 text-center   mb-0">
                <div class=" aos-item">
                    <!-- <h5 class="text-primary sub-title text-capitalize">INDUSTRIAL EXHIBITIONS</h5> -->
                    <h2 class="title">Gallery</h2>
                </div>
            </div>
            <!-- subheader close -->
            <div class="container bg-white py-4">
                <div class="row gallery pw-gallery pw-collage ">

                    @forelse ($medias as $media)
                        <div class=" col-lg-4 col-md-6 mt-xl-0 ">
                            <figure>

                                <a data-src="{{ asset('storage/images/exhibition/' . $media->filename) }}"
                                    class="open-galley w-100"
                                    data-width="{{ getimagesize(asset('storage/images/exhibition/' . $media->filename))[0] }}"
                                    data-height="{{ getimagesize(asset('storage/images/exhibition/' . $media->filename))[1] }}">
                                    <img src="{{ asset('storage/images/exhibition/' . $media->filename) }}" alt=""
                                        class="w-100 custom-gallery-img">
                                </a>
                            </figure>
                        </div>
                    @empty
                        <div class="text-center pb-4">
                            No Gallery Found
                        </div>
                    @endforelse





                </div>

                {{-- <div class="row">
                    <div class="col-lg-12 mt-2">
                        <div class="page-navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="bi bi-arrow-left-short"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="bi bi-arrow-right-short"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        @endif
        <div class="clearfix"></div>
        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <!-- Background of PhotoSwipe.                                                      It's a separate element as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>
            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">
                <!-- Container that holds slides.
                                                             PhotoSwipe keeps only 3 of them in the DOM to save memory.
                                                            Don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <!--  Controls are self-explanatory. Order can be changed. -->
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center text-center"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection



@section('js')


    <script>
        (function($) {
            // Init empty gallery array
            let galleryArray = [];
            // Loop over gallery items and push it to the array
            $('.gallery').find('figure').each(function() {
                var $link = $(this).find('a'),
                    item = {
                        src: $link.attr('data-src'),
                        w: $link.data('width'),
                        h: $link.data('height'),
                        title: $link.attr('title')
                    };
                console.log(item.src);
                galleryArray.push(item);
            });

            // Define click event on gallery item
            $('.open-galley').click(function(event) {
                // Prevent location change

                event.preventDefault();
                // Define object and gallery options
                var $pswp = $('.pswp')[0],
                    options = {
                        index: $(this).parent('figure').index(),
                        bgOpacity: 0.85,
                        showHideOpacity: true
                    };
                // Initialize PhotoSwipe
                var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, galleryArray, options);
                gallery.init();
            });
        }(jQuery));
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>

@endsection
