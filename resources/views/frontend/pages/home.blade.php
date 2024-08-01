
@extends('frontend.layout.master')


@push('meta-title')
    Danpite Tech
@endpush


@section('body-content')

 <!-- Banner section start [Done] -->
 <section class="banner-section">
    <div class="container">
      <div class="banner-poster">
        <div class="row align-items-center">
          <div class="col-lg-6 col-xl-6" data-aos="fade-right" data-aos-duration="1500">
                <h1>
                    @if ( !empty($banner->title) )
                       {{ $banner->title }}
                    @else
                        "Demo Title"
                    @endif
                </h1>

                <div class="form-field">
                  <form action="">
                      <input type="text" class="searching-form" name="search" placeholder="I'm Looking for....">
                      <button class="btn-search">Search</button>
                  </form>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6" data-aos="fade-left" data-aos-duration="1500">
              <div class="img-container">
                @if ( !empty($banner->banner_img) )
                   <img src="{{ asset($banner->banner_img) }}" alt="">
                @else
                   <img src="{{ asset('public/asset/images/banner-image.png') }}" alt="">
                @endif
              </div>
           </div>
        </div>
      </div>
    </div>
</section>
<!-- Banner section end -->


<!-- About section start [Done] -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6 order-1 order-lg-0" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="about-image">
                    @if ( !empty($about->image) )
                        <img src="{{ asset($about->image) }}" alt="">
                    @else
                        <img src="{{ asset('public/asset/images/about-image.jpg') }}" alt="">
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-xl-6 order-0 order-lg-1"  data-aos="zoom-in-down" data-aos-duration="1500">
                <div class="about-info">
                    <h1>
                        @if ( !empty($about->title) )
                            {{ $about->title }}
                        @else
                            "Demo Title"
                        @endif
                    </h1>


                    <div class="about-contents">
                        @if ( !empty($about->description) )
                            {!! $about->description !!}
                        @else
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, architecto earum ducimus animi cum assumenda minus autem vitae numquam distinctio adipisci ad ratione deserunt fugiat.
                        @endif

                    </div>

                    <a href="{{ !empty($about->url) && $about->url  }}">
                        <button class="btn-join">Join Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section start -->


{{-- <!-- Category section start [Done] -->
<section class="category-section">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="category-details">
                <h1>Service Category</h1>

                <div class="category-list" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                    <div class="category-wise">
                        <img src="{{ asset('public/asset/images/air.png') }}" alt="">
                        <h5>Aircon Services</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Category section end --> --}}


<!-- service section start [Done] -->
<section class="service-section" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-container">
                    <h1>See Our Services</h1>

                    <div class="service-list">
                        @foreach ($services as $service)
                            <div class="service-details" data-aos="fade-right" data-aos-duration="1500">
                                <img src="{{ asset( $service->service_img ) }}" alt="">

                                <div class="service-content">
                                    <h2>{{ $service->title }}</h2>
                                    <div class="star-ratings">
                                        @if ( $service->ratings == 2 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @elseif( $service->ratings == 3 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @elseif( $service->ratings == 4 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @elseif( $service->ratings == 5 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @endif
                                    </div>

                                    <div class="action-service">
                                        <a href="{{ route('service.details', $service->id) }}"><span>Read More</span>
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>

                                        <a href="tel:{{ $service->whatsapp }}">
                                            <button class="chat-btn">Chat Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->


<!-- pricelist section start [Done]  -->
<section class="pricelist_section" id="price">
    <div class="container">
        <div class="row">
            <div class="price_head">
                <h1>Our Price List</h1>
            </div>
        </div>

        <div class="row">
            @foreach ($pricePlans as $pricePlan)

               @if ( $pricePlans->count() === 1 )
                  <div class="col-lg-6 offset-lg-3" data-aos="zoom-out-right" data-aos-duration="1500">

               @elseif( $pricePlans->count() === 2 )
                  <div class="col-lg-6" data-aos="zoom-out-right" data-aos-duration="1500">

               @else
                  <div class="col-lg-4" data-aos="zoom-out-right" data-aos-duration="1500">
               @endif

                    <div class="main-price-list">
                        <div class="price-headlist" style="background-color: {{ $pricePlan->color_theme }};">
                            <h3>{{ $pricePlan->price_title }}</h3>
                            <p>{{ $pricePlan->price_package }}</p>
                        </div>

                        <div class="price-list-menu">
                            {!! $pricePlan->price_desc !!}
                        </div>

                        <div class="text-center">
                            <a href="tel:{{ $pricePlan->whatsapp }}" class="price-btn" style="background-color: {{ $pricePlan->color_theme }};">
                                <div class="whatsapp-icon">
                                    <i class='bx bxl-whatsapp'></i>
                                    <label class="chat-text">Let's Chat</label>
                                </div>
                                <span>get best price</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- pricelist section end -->


<!-- pro-service section start [Done] -->
<section class="pro-service-section">
  <div class="container">
      <div class="pro-service-container">
            <div class="service-images" data-aos="fade-down-right" data-aos-duration="1500">
                @if ( !empty($professional->image) )
                    <img src="{{ asset($professional->image) }}" alt="">
                @else
                    <img src="{{ asset('public/asset/images/paint-house.png') }}" alt="">
                @endif
            </div>

            <div class="professional-service" data-aos="fade-down-left" data-aos-duration="1500">
                <h5>
                    @if ( !empty($professional->small_title) )
                        {{ $professional->small_title }}
                    @else
                        "Demo Title"
                    @endif
                </h5>

                <h1>
                    @if ( !empty($professional->main_title) )
                        {{ $professional->main_title }}
                    @else
                        "Demo Title"
                    @endif
                </h1>

                <div class="professional-paragraph">
                    @if ( !empty($professional->description) )
                         {!! $professional->description !!}
                    @else
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae cupiditate, temporibus facilis nulla est maxime, dolorem dolor fuga pariatur unde, non dolore obcaecati illo delectus.
                    @endif
                </div>


                <a href="{{ !empty($professional->url) && $professional->url  }}">
                    <button class="btn-watch">Watch Video</button>
                </a>
            </div>
      </div>
  </div>
</section>
<!-- pro-service section end -->


<!-- Projects section start [Done] -->
<section class="project-section" id="project">
  <div class="container">
      <div class="row">
          <div class="project-headtitle">
             <h1>Awesome Project Could Inspire You</h1>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem atque nostrum quos. In, voluptatum maiores? In fugiat laboriosam odit qui harum molestiae possimus quod aut!</p>

             <div class="project-galary" data-aos="zoom-in" data-aos-duration="1500">
                @foreach ($projects as $project)
                    <a href="{{ $project->url }}"><img src="{{ asset($project->project_img) }}" alt="{{ $project->name }}"></a>
                @endforeach
             </div>
          </div>
      </div>
  </div>
</section>
<!-- Projects section end -->


<!-- Safety section start [Done] -->
<section class="safty-section">
  <div class="container">
      <div class="row align-items-center">
          <div class="safety-headtitles">
              <h1>Because We care about your safety...</h1>
          </div>

          <div class="col-lg-5" data-aos="flip-left" data-aos-duration="1500">
             <div class="safety-service-container">
                  <div class="safety-service">
                      @if ( !empty($safety->safty_img1) )
                         <img src="{{ asset($safety->safty_img1) }}" alt="">
                      @else
                        <img src="{{ asset('public/asset/images/mask.png') }}" alt="">
                      @endif


                      @if ( !empty($safety->safty_content1) )
                        <h4>{{ $safety->safty_content1 }}</h4>
                      @else
                        <h4>Ensuring Maskes</h4>
                      @endif
                  </div>

                  <div class="safety-service">
                    @if ( !empty($safety->safty_img2) )
                        <img src="{{ asset($safety->safty_img2) }}" alt="">
                    @else
                        <img src="{{ asset('public/asset/images/phone.png') }}" alt="">
                    @endif


                    @if ( !empty($safety->safty_content2) )
                       <h4>{{ $safety->safty_content2 }}</h4>
                    @else
                       <h4>24/7 Support</h4>
                    @endif
                  </div>

                  <div class="safety-service">
                    @if ( !empty($safety->safty_img3) )
                        <img src="{{ asset($safety->safty_img3) }}" alt="">
                    @else
                        <img src="{{ asset('public/asset/images/hand.png') }}" alt="">
                    @endif


                    @if ( !empty($safety->safty_content3) )
                        <h4>{{ $safety->safty_content3 }}</h4>
                    @else
                        <h4>Sanitising hands & Equipment</h4>
                    @endif
                  </div>

                  <div class="safety-service">
                    @if ( !empty($safety->safty_img4) )
                        <img src="{{ asset($safety->safty_img4) }}" alt="">
                    @else
                        <img src="{{ asset('public/asset/images/open-hands.png') }}" alt="">
                    @endif

                    @if ( !empty($safety->safty_content4) )
                        <h4>{{ $safety->safty_content4 }}</h4>
                    @else
                        <h4>Ensuring Gloves</h4>
                    @endif
                  </div>
             </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500">
              <div class="youtube-video">
                    @if ( !empty($safety->youtube_url) )
                       {!! $safety->youtube_url !!}
                    @else
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, ex. Deserunt sapiente officia iste nostrum reiciendis, ipsam, aliquid labore repudiandae voluptas voluptatum tempora, magni totam?
                    @endif

              </div>
          </div>
      </div>
  </div>
</section>
<!-- Safety section end -->


<!-- Emergency-call section start -->
   <section class="emergency-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="emergency-details">
                      <h1><i class='bx bx-phone-call'></i> Need Emergency Painting? Call us 24/7 For Expert Help</h1>
                      @if ( !empty($basicInfo->phone) )
                            <a href="tel:">Call +{{ $basicInfo->phone }}</a>
                        @else
                            <a href="tel:">Call +01772266995</a>
                        @endif
                  </div>
              </div>
          </div>
      </div>
   </section>
<!-- Emergency-call section end -->


<!-- Logo section start -->
  <section class="logo-section" id="galary">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="logo-container" data-aos="zoom-in-left" data-aos-duration="1500">
                      <h1>We can supply and use any below brand of paints of client choice.</h1>

                      <div class="owl-carousel owl-theme" id="logo-slider">
                        @foreach ($logos as $logo)
                            <div class="logo-div">
                                <a href="{{ $logo->url }}">
                                    <img src="{{ asset($logo->logo_img) }}" alt="">
                                </a>
                            </div>
                        @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- Logo section end -->


<!-- Review section start -->
  <section class="review-section">
      <div class="container">
          <div class="row">
              <div class="review-container" data-aos="zoom-in-right" data-aos-duration="2000">
                  <h1>Client's Review</h1>

                  <div class="owl-carousel owl-theme" id="review-slider">
                        @foreach ( $reviews as $review )
                            <div class="review-content">
                                <div class="review-content-head">
                                    <img src="{{ asset( $review->review_img ) }}" alt="">

                                    <div class="review-ratings-deatils">
                                        <h4>{{ $review->name }}</h4>
                                        <div class="star-ratings">
                                            @if ( $review->ratings == 2 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->ratings == 3 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->ratings == 4 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->ratings == 5 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <p>{{ $review->description }}</p>
                            </div>
                        @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- Review section end -->


<!-- Contact section start -->
 <section class="contact-section">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-duration="2000">
             <div class="contact-img">
                 <img src="{{ asset('public/asset/images/contact-image.png') }}" alt="">
             </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">
              <div class="contact-form">
                  <h6>Free Quote</h6>
                  <h1>Get A Free Quote</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, ex quod! In laudantium ipsa optio nulla quibusdam id enim molestiae magni accusantium veritatis. Praesentium animi repellendus expedita perferendis asperiores eveniet in quidem assumenda aperiam. Dolore, accusantium? Nulla iure soluta optio.</p>

                  <form id="createForm" method="POST">
                    @csrf

                      <div class="row">
                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <input class="form-control form-control-lg" type="text" name="name" id="" placeholder="Your Name">
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <input class="form-control form-control-lg" type="text" name="mobile" id="" placeholder="Your Mobile">
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="mb-3">
                            <input class="form-control form-control-lg" type="email" name="email" id="" placeholder="Your Email">
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="mb-3">
                              <select class="form-select form-select-lg mb-3" name="service">
                                  <option selected>Open this select menu</option>
                                  @foreach ($services as $service)
                                     <option value="{{ $service->id }}">{{ $service->title }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="note" style="height: 100px"></textarea>
                              <label for="floatingTextarea2">Special Notes</label>
                          </div>
                      </div>

                      <div class="d-flex justify-content-end">
                          <button class="contact-btn-submit">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
 </section>
<!-- Contact section end -->

@endsection



@push('script-tag')

<script>
    AOS.init();
</script>

<script>
    $('#logo-slider').owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        nav: true,
        dots: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                dots: false,
                items: 2
            },
            600:{
                dots: false,
                items: 3
            },
            1000:{
                dots: false,
                items: 5
            }
        }
    })


    $('#review-slider').owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        nav: true,
        dots: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                dots: true,
                items: 1
            },
            576:{
                dots: true,
                items: 1
            },
            993:{
                dots: true,
                items: 2
            },
           1200: {
               dots: true,
               items: 3
           }
        }
    })

            // Create Logo
            $('#createForm').submit(function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.contact.store') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    // console.log(res);
                    if (res.status === true) {
                        $('#createForm')[0].reset();

                        swal.fire({
                            title: "Success",
                            text: `${res.message}`,
                            icon: "success"
                        })
                    }
                },
                error: function (err) {
                    console.error('Error:', err);
                    swal.fire({
                        title: "Failed",
                        text: "Something Went Wrong !",
                        icon: "error"
                    })
                }
            });
        })
</script>

@endpush
