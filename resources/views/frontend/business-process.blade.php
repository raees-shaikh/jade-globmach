@extends('frontend.layouts.app')
@section('title', 'Business Process - ')
@section('content')
    <main>
        <!--page-title-area start-->
        <div class="page-title-area pt-100 pb-100 py-100 b-process-b-img"
            data-background="{{ url('frontend/images/banner/b-process-1.jpg') }}">
            <img class="page-title-shape shape-one " src="frontend/assets/img/shape/line-14d.svg" alt="shape">
            <img class="page-title-shape shape-two" src="frontend/assets/img/shape/pattern-1a.svg" alt="shape">

            <div class="container">
                <div class="row gx-4 gx-xxl-5 align-items-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="page-title-wrapper text-sm-start text-center">
                            <h2 class="page-title mb-10">Business Process</h2>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active" aria-current="page">Business Process</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title-area end-->
        <section class="offer-sec-height">
            <div class="row align-items-center section-head style-1 text-center mt-md-5 mt-4 mb-0 ">
                <div class=" aos-item">
                    <h5 class="text-primary sub-title text-capitalize">HOW WE WORK</h5>
                    <h2 class="title process-title">Process Flow
                        /
                        Methodology</h2>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row b-process-row">
                    <div class=" col-lg-4 col-6 mt-xl-3 mt-4 px-xl-2">
                        <a href="#inquiry" class="btn btn-primary w-100 custom-b-process-btn text-start"><img
                                src="{{ asset('frontend/images/icons/enq-1.png') }}" alt="" width="20px"> &nbsp;
                            Inquiry</a>
                    </div>

                    <div class=" col-lg-4 col-6 mt-xl-3 mt-4 px-xl-2">
                        <a href="#inquiry-2" class="btn btn-primary w-100 custom-b-process-btn text-start"><img
                                src="{{ asset('frontend/images/icons/en-2.png') }}" alt="" width="20px"> &nbsp;
                            Inward Inquiry</a>
                    </div>

                    <div class=" col-lg-4 col-6 mt-xl-3 mt-4 px-xl-2">
                        <a href="#suggest" class="btn btn-primary w-100 custom-b-process-btn text-start"><img
                                src="{{ asset('frontend/images/icons/suggest.png') }}" alt="" width="20px"> &nbsp;
                            <span class="d-sm-inline d-none">Guidance, Instructions & Suggestion</span> <span
                                class="d-sm-none d-inline">Guidance ...</span></a>
                    </div>

                    <div class=" col-lg-4 col-6 mt-xl-3 mt-4 px-xl-2">
                        <a href="#price" class="btn btn-primary w-100 custom-b-process-btn text-start"><img
                                src="{{ asset('frontend/images/icons/term.png') }}" alt="" width="20px"> &nbsp;
                            Price & Terms</a>
                    </div>


                    <div class=" col-lg-4 col-6 mt-xl-3 mt-4 px-xl-2">
                        <a href="#pre" class="btn btn-primary w-100 custom-b-process-btn text-start"><img
                                src="{{ asset('frontend/images/icons/pre.png') }}" alt="" width="20px"> &nbsp;
                            <span class="d-sm-inline d-none">Pre Finalization Process</span> <span
                                class=" d-sm-none d-inline">Pre Finalization ...</span></a>
                    </div>

                    <div class=" col-lg-4 col-6 mt-xl-3 mt-4 px-xl-2">

                        <a href="#post" class="btn btn-primary w-100 custom-b-process-btn text-start"><img
                                src="{{ asset('frontend/images/icons/post.png') }}" alt="" width="20px"> &nbsp;
                            Post Finalization</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5  bg-light-grey py-xl-3 py-4" id="inquiry">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="section-head style-1 text-white">
                            {{-- <h5 class="text-primary sub-title">COUNTER</h5> --}}
                            <h2 class="title my-xl-3 my-2 ">Inquiry</h2>
                            <p>All Inquiry’s Received By WhatsApp, Phone Calls, Website. Google Search, References By Our
                                Existing Clients, Via Participating Through Exhibitions In India & International,
                                Advertisements In News Paper, Magazines, Online Media, Sales Circulars Etc.</p>
                        </div>
                    </div>

                    <div class="col-xl-6 ">
                        <div class="media-full">
                            <img src="{{ asset('frontend/images/about/africa.jpg') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-sm-5 mt-4  bg-light-grey py-xl-3 py-4" id="inquiry-2">
            <div class="container">
                <div class="row  align-items-center">
                    <div class="col-xl-6">
                        <div class="section-head style-1 text-white">
                            {{-- <h5 class="text-primary sub-title">COUNTER</h5> --}}
                            <h2 class="title my-xl-3 my-2">Inward Inquiry</h2>
                            <p>All Inquiries Are Been Verified On The Authenticity Of Each Clients, Based On Their Actual
                                Inquiry Immediate Of Projects, Whether They Can Import With Having Valid GST-lec Codes,
                                Land, Building, Shed To Install Plant Or Machinery’s & Most Importantly Ready Banks Approved
                                Finances Or Internal Finances…</p>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="media-full">
                            <img src="{{ asset('frontend/images/about/arab.jpg') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-sm-5 mt-4 py-xl-3 py-4 bg-light-grey " id="suggest">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="section-head style-1 text-white">
                            {{-- <h5 class="text-primary sub-title">COUNTER</h5> --}}
                            <h2 class="title my-xl-3 my-2">
                                Guidance, Instructions & Suggestion</h2>
                            <p>Once Our Marketing & Sales Staff Gets Feedback From Our Research & Development Departments On
                                Each Client’s History, They Speak To Clients To Get To Real Specifications, Prices They Can
                                Afford To Import, Tech Parameters, Terms Of Payments For Imports, Inspection Plans, Visiting
                                Peoples Invitation Letters, Getting Them Apply For Visas & Guide Them To Visit Overseas
                                Where The Plant Or Machinery’s Are Of Their Interest To Finalize……Help Each Client Whether
                                Owners/Cmd/Directors Or Presidents To Gm Technical On Overseas Hotels, Locations,
                                Transportations, Managing With Our Counter Parts Who Sell These  Machinery’s…

                                In Short We Treat Our Clients Like Our Family For Ease Of Doing Business & Feel Comfortable.

                                We Do Suggest Our Clients Not Just One Proposals But With Many Options To Choose Of With
                                Their Matching Price/Specifications Requirements, As We Feel A Client Needs To Have A
                                Transparent International Broker With Not Just Intentions Of Sales But Also Services…</p>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="media-full">
                            <img src="{{ asset('frontend/images/about/sardarji.jpeg') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-sm-5 mt-4  bg-light-grey py-xl-3 py-4" id="price">
            <div class="container">
                <div class="row  align-items-center">
                    <div class="col-xl-6">
                        <div class="section-head style-1 text-white">
                            {{-- <h5 class="text-primary sub-title">COUNTER</h5> --}}
                            <h2 class="title my-xl-3 my-2">Price & Terms</h2>
                            <p>All Our Proposals/Offers Submitted To Clients After Discussions & Felt Being Genuine Buyer,
                                We Give Technical Specifications, Videos, Photos Of The Machinery’s Of Their Interest &
                                Lowest Rates Possible With Max Scope Of Supply & As Also Sometimes Spare Parts Included
                                Free, We Don’t See As Always Our Profits, Commissions/Fees/Consultations 1st But For Our
                                Company Policy Matters, Client/Customer/Buyer 1st & Then Profits.

                                Terms We Always Try To Submit Flexible Terms To Accommodate Clients Based On Their Financial
                                Availability, With Preferred Letter Of Credit Due To Overseas Imports & Risks Sometimes
                                Client Think Of, Or If They Prefer 100% Wire Transfer From Banks, We Do Workout The Same ..
                                Any Terms Which Gives Client Ease Of Doing Business We Assist Them..</p>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="media-full">
                            <img src="{{ asset('frontend/images/about/south-america.jpg') }}" class="w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-sm-5 mt-4  bg-light-grey py-xl-3 py-4" id="pre">
            <div class="container">
                <div class="row  align-items-center">
                    <div class="col-xl-6">
                        <div class="section-head style-1 text-white">
                            {{-- <h5 class="text-primary sub-title">COUNTER</h5> --}}
                            <h2 class="title my-xl-3 my-2">Pre Finalization Process</h2>
                            <p>
                                We After Speaking To Client, Owners & Their Technical Team, Submit A Final Price Based On
                                Terms Of Delivery, Payment & Port/Destinations They Need In Proforma Invoice Format Signed
                                By Oversees Seller & Countered By Buyer From India Or Our Overs Clients/Buyers Too…

                                For Financial Requirements From Banks, We Do Provide Imports Related Documents In Draft
                                Format, Like Chartered Engg Certificates, BL Drafts, Commercial Invoices, Serial Number
                                Photos If Available, Layouts, Dimensions Of Machinery’s/Plants, Power Requirements,
                                Production Parameters, Efficiency Of Overseas Machinery’s When In Production, Quality
                                Configuration, Etc, In Order That Our Clients Get Full Satisfaction To Proceed To Finalize
                                As Next Step…</p>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="media-full">
                            <img src="{{ asset('frontend/images/about/asian.png') }}" class="w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-sm-5 mt-4 py-xl-3 py-4 bg-light-grey mb-5 " id="post">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="section-head style-1 text-white">
                            {{-- <h5 class="text-primary sub-title">COUNTER</h5> --}}
                            <h2 class="title my-xl-3 my-2">Post Finalization</h2>
                            <p>Submitting All Draft Documentations Of Shipping, For Clients Import Departments To Approve,
                                As Well As Their Banks & Then Give Them Final Imports Documentations, From Copy Of BL,
                                Commercial Invoices, CEC, Packing List, Photos Of The Machinery’s Pre Loading In Containers
                                & Post With Container Numbers, Liners Indian Agents Contacts For Our Clients Imports
                                Clearness… Any Further Assistance/Help We Are Always There To Support Our Genuine Clients
                                All Over India & Overseas Countries.</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="media-full">
                            <img src="{{ asset('frontend/images/about/post-process.png') }}" class="w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
