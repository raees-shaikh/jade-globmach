  <!--footer-area start-->
  <footer class="footer-area">
      <div class="footer-bg-two pt-60 pt-lg-50 pb-20"
          data-background="{{ asset('frontend/images/background/indust.jpg') }}">
          {{-- frontend/assets/img/footer/footer-bg-1a.jpg --}}
          <img class="shapes__1 d-none" src="frontend/assets/img/shape/star-3a.svg" alt="">
          <img class="shapes__2 d-none" src="frontend/assets/img/shape/line-7a.svg" alt="">
          <div class="blur__shape d-none"></div>
          <div class="container  pt-lg-10">
              <div class="row mb-15">
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                      <div class="footer__widget mb-30 px-xxl-3">
                          <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo.jpeg') }}"
                                  alt="Logo" width="150px"></a>
                          <p class="footer__description mt-md-15 mt-20 ">Jade Globmach are leading Indian Agents-Brokers
                              for
                              RELOCATION of New, Industrial Plants, Machinery & Technology from different
                              Countries worldwide.</p>
                      </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                      <h3 class="text-primary">Useful Links</h3>
                      <div class="footer__widget mb-30">
                          <ul class="fot-list">
                              <li>
                                  <a href="{{ url('/') }}">Home</a>
                              </li>
                              <li>
                                  <a href="{{ url('/company-profile') }}">Company Profile</a>
                              </li>
                              <li>
                                  <a href="{{ url('/latest-offers') }}">Latest Offers</a>
                              </li>
                              <li>
                                  <a href="{{ url('/business-process') }}">Business Process</a>
                              </li>
                              <li>
                                  <a href="{{ url('/exhibitions') }}">Exhibitions</a>
                              </li>
                              <li>
                                  <a href="{{ url('/contact-us') }}">Contact Us</a>
                              </li>

                              <li>
                                  <a href="{{ url('/sitemap') }}">Sitemap</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6 px-lg-0">
                      <h3 class="text-primary">Contact Us</h3>
                      <div class="footer__widget ">
                          <div class="footer__contact">

                              {{-- <p class="mb-0"><img src="{{ url('frontend/assets/img/icon/phone.svg') }}" alt="Phone"
                                      width="25px"> <a href="tel:00919500271679">&nbsp;
                                      00919500271679</a></p> --}}

                              <p class="mt-2 mb-0"> <img src="{{ url('frontend/assets/img/icon/download.png') }}"
                                      alt="" width="25px">&nbsp; <a
                                      href="mailto:machinery@jadeglobmach.com">machinery[at]jadeglobmach[dot]com</a></p>

                              <p class="  mb-15 mt-city"><img src="{{ url('frontend/assets/img/icon/location.svg') }}"
                                      alt="location" width="25px">&nbsp; Mumbai | Coimbatore | Ahmedabad</p>
                              <div class="social_media text-sm-start text-center">
                                  <a href="#" class="facebook mx-0">
                                      <i class="fab fa-facebook-f "></i>
                                  </a>
                                  {{-- <a href="#">
											<i class="fab fa-twitter"></i>
										</a> --}}
                                  <a href="#" class="linkdin mx-3">
                                      <i class="fab fa-linkedin-in "></i>
                                  </a>
                                  <a href="#" class=" youtube mx-0">
                                      <i class="fab fa-youtube "></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
          <div class="container copyright__border">
              <div class="copyright__area  pt-20">
                  <div class="row align-items-center">
                      <div class="col text-center ">
                          <div class="copyright__text ">
                              <p class="mb-0 font-custom-size">
                                  <span class="copyright-text"> Copyright &copy; {{ date('Y') }} All Rights
                                      Reserved Jade Globmach | Designed &
                                      Developed By
                                      <a href="https://www.acetrot.com/" target="_blank"
                                          class="ace-text text-primary">Acetrot.</a></span>
                              </p>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--footer-area end-->
  </div>

  <!-- JS here -->

  <script src="{{ asset('frontend/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.easypiechart.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
  <!--Custom JS here -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

  <script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
  <script>
      @if (Session::get('alert-type') == 'success')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#1abc9c'
              });
          @endif
      @elseif (Session::get('alert-type') == 'info')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#2196f3'
              });
          @endif
      @elseif (Session::get('alert-type') == 'error')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#e7515a'
              });
          @endif
      @else
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#3b3f5c'
              });
          @endif
      @endif
  </script>
