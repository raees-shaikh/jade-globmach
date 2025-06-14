@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
@section('content')
    <main>
        <!--page-title-area start-->
        <div class="page-title-area pt-100 pb-100 py-100 contact-bg"
            data-background="{{ url('frontend/images/banner/contact.jpg') }}">
            <img class="page-title-shape shape-one " src="frontend/assets/img/shape/line-14d.svg" alt="shape">
            <img class="page-title-shape shape-two" src="frontend/assets/img/shape/pattern-1a.svg " alt="shape">

            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="page-title-wrapper text-sm-start text-center">
                            <h2 class="page-title mb-10">Contact Us</h2>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title-area end-->

        <!--contact__section start-->
        <div class="contact__section pt-50 pb-30 pt-lg-30 pb-lg-10">
            <div class="container">
                <div class="mb-4">
                    <h5 class="text-primary sub-title text-capitalize  text-center">CONTACT US</h5>
                    <h2 class="title  text-center">Send Us Message</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 order-lg-1 order-2 mt-lg-0 mt-5 contact-detail-mt">
                        <h3 class="section__title__one mb-30 d-lg-none text-center">Contact Details</h3>
                        <div class="contact__info__wrapper me-xxl-4 pe-xxl-5 mb-45">
                            <div class="single__info__box">
                                <div class="icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <span class="contactcities"><a
                                        href="mailto:machinery@jadeglobmach.com">machinery[at]jadeglobmach[dot]com</a></span>
                            </div>
                            <div class="single__info__box">
                                <div class="icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <span class="contactcities">Mumbai | Coimbatore | Ahmedabad</span>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-2 order-1">
                        <div class="contact-form-one">
                            <form class="widget-form" action="{{ route('frontend.contact.submit') }}" method="post">
                                @csrf
                                <input type="hidden" class="form-control" name="page_name" value="Contact">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="label">Full Name</label>
                                        <input type="text" name="name" placeholder="Full Name" minlength="3"
                                            maxlength="30" value="{{ old('name') }}" required>
                                        @if ($errors->has('name'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label">Email</label>
                                        <input type="email" name="email" placeholder="Email" maxlength="40"
                                            minlength="5" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label">Phone No</label>
                                        <input type="text" name="phone" placeholder="Phone No" minlength="10"
                                            maxlength="10" value="{{ old('phone') }}" required>
                                        @if ($errors->has('phone'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label">Subject</label>
                                        <input type="text" name="subject" placeholder="Subject" minlength="3"
                                            maxlength="100" value="{{ old('subject') }}" required>
                                        @if ($errors->has('subject'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('subject') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12 mb-25">
                                        <label class="label">Message</label>
                                        <textarea name="message" placeholder="Write Your Message" minlength="5" maxlength="250" required>{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-12 text-lg-start text-center">
                                        <button class="ht_btn hover-bg border-0 text-capitalize">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact__section end-->


    </main>

@endsection
