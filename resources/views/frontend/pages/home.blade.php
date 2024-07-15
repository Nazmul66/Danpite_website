@extends('frontend.layout.master')


@push('meta-title')
    Danpite Tech
@endpush


@section('body-content')

 <!-- Banner section start -->
 <section class="banner-section">
    <div class="container">
      <div class="banner-poster">
        <div class="row">
          <div class="col-lg-6 col-xl-6" data-aos="fade-right" data-aos-duration="1500">
                <h1>Home Improvement made easy</h1>

                <div class="form-field">
                  <form action="">
                      <input type="text" class="searching-form" name="search" placeholder="I'm Looking for....">
                      <button class="btn-search">Search</button>
                  </form>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6" data-aos="fade-left" data-aos-duration="1500">
              <div class="img-container">
                 <img src="{{ asset('public/asset/images/banner-image.png') }}" alt="">
              </div>
           </div>
        </div>
      </div>
    </div>
</section>
<!-- Banner section end -->


<!-- About section start -->
<section class="about-section">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 col-xl-6 order-1 order-lg-0" data-aos="zoom-in-up" data-aos-duration="1500">
            <div class="about-image">
                <img src="{{ asset('public/asset/images/about-image.jpg') }}" alt="">
            </div>
        </div>

        <div class="col-lg-6 col-xl-6 order-0 order-lg-1"  data-aos="zoom-in-down" data-aos-duration="1500">
            <div class="about-info">
                <h1>Why Danpite ?</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores ullam ut facere inventore sequi esse, tempore rerum ipsam eligendi totam rem consectetur assumenda harum. Vero repellat facere laudantium saepe a! Itaque, voluptatem? Commodi voluptas harum vitae accusamus placeat pariatur praesentium corporis ipsam optio. Laboriosam animi, voluptate laborum quisquam ea adipisci.</p>

                <ul>
                <li>1000+ verified, trusted & reliable pros</li>
                <li>Find pros in 200+ home services</li>
                <li>Compare quotes easily</li>
                <li>Speak with a pro directly</li>
                <li>Book emergency services</li>
                </ul>

                <button class="btn-join">Join Us</button>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- About section start -->


<!-- Category section start -->
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
<!-- Category section end -->


<!-- service section start -->
<section class="service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-container">
                    <h1>See Our Services</h1>

                    <div class="service-list">
                        <div class="service-details" data-aos="fade-right" data-aos-duration="1500">
                            <img src="{{ asset('public/asset/images/services.jpg') }}" alt="">

                            <div class="service-content">
                                <h2>Experience the height of luxury with FavoriteColour's House ceiling</h2>
                                <div class="star-ratings">
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                </div>

                                <div class="action-service">
                                    <a href=""><span>Read More</span> <i class='bx bx-right-arrow-alt'></i></a>
                                    <button class="chat-btn">Chat Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="service-details" data-aos="fade-down" data-aos-duration="1500">
                        <img src="{{ asset('public/asset/images/services.jpg') }}" alt="">

                        <div class="service-content">
                            <h2>Experience the height of luxury with FavoriteColour's House ceiling</h2>
                            <div class="star-ratings">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </div>

                            <div class="action-service">
                                <a href=""><span>Read More</span> <i class='bx bx-right-arrow-alt'></i></a>
                                <button class="chat-btn">Chat Now</button>
                            </div>
                        </div>
                    </div>

                        <div class="service-details" data-aos="fade-left" data-aos-duration="1500">
                            <img src="{{ asset('public/asset/images/services.jpg') }}" alt="">

                            <div class="service-content">
                                <h2>Experience the height of luxury with FavoriteColour's House ceiling</h2>
                                <div class="star-ratings">
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                </div>

                                <div class="action-service">
                                    <a href=""><span>Read More</span> <i class='bx bx-right-arrow-alt'></i></a>
                                    <button class="chat-btn">Chat Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="service-details" data-aos="fade-right" data-aos-duration="1500">
                        <img src="{{ asset('public/asset/images/services.jpg') }}" alt="">

                        <div class="service-content">
                            <h2>Experience the height of luxury with FavoriteColour's House ceiling</h2>
                            <div class="star-ratings">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </div>

                            <div class="action-service">
                                <a href=""><span>Read More</span> <i class='bx bx-right-arrow-alt'></i></a>
                                <button class="chat-btn">Chat Now</button>
                            </div>
                        </div>
                        </div>

                        <div class="service-details" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ asset('public/asset/images/services.jpg') }}" alt="">

                        <div class="service-content">
                            <h2>Experience the height of luxury with FavoriteColour's House ceiling</h2>
                            <div class="star-ratings">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </div>

                            <div class="action-service">
                                <a href=""><span>Read More</span> <i class='bx bx-right-arrow-alt'></i></a>
                                <button class="chat-btn">Chat Now</button>
                            </div>
                        </div>
                        </div>

                        <div class="service-details" data-aos="fade-left" data-aos-duration="1500">
                        <img src="{{ asset('public/asset/images/services.jpg') }}" alt="">

                        <div class="service-content">
                            <h2>Experience the height of luxury with FavoriteColour's House ceiling</h2>
                            <div class="star-ratings">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </div>

                            <div class="action-service">
                                <a href=""><span>Read More</span> <i class='bx bx-right-arrow-alt'></i></a>
                                <button class="chat-btn">Chat Now</button>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->


<!-- pricelist section start -->
<section class="pricelist_section">
    <div class="container">
    <div class="row">
        <div class="price_head">
            <h1>Our Price List</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4" data-aos="zoom-out-right" data-aos-duration="1500">
            <div class="main-price-list">
                <div class="price-headlist" style="background-color: #FCCA13;">
                    <h3>Basic</h3>
                    <p>Nippon Matex White Entry Level</p>
                </div>

                <div class="price-list-menu">
                    <ul>
                    <li>$ 280 / rome</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                </ul>
                </div>

                <div class="text-center">
                    <a href="" class="price-btn yellow-color" >
                        <div class="whatsapp-icon">
                            <i class='bx bxl-whatsapp'></i>
                            <label class="chat-text">Let's Chat</label>
                        </div>
                        <span>get best price</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4" data-aos="zoom-out-up" data-aos-duration="1500">
            <div class="main-price-list">
            <div class="price-headlist" style="background-color: #4DBDBE;">
                <h3>Basic</h3>
                <p>Nippon Matex White Entry Level</p>
            </div>

            <div class="price-list-menu">
                <ul>
                    <li>$ 280 / rome</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                    <li>2Rm HDB - $599</li>
                </ul>
            </div>

            <div class="text-center">
                <a href="" class="price-btn sky-color" >
                    <div class="whatsapp-icon">
                        <i class='bx bxl-whatsapp'></i>
                        <label class="chat-text">Let's Chat</label>
                    </div>
                    <span>get best price</span>
                </a>
            </div>
            </div>
        </div>

        <div class="col-lg-4" data-aos="zoom-out-left" data-aos-duration="1500">
        <div class="main-price-list">
            <div class="price-headlist" style="background-color: #3DB7E8;">
                <h3>Basic</h3>
                <p>Nippon Matex White Entry Level</p>
            </div>

            <div class="price-list-menu">
                <ul>
                <li>$ 280 / rome</li>
                <li>2Rm HDB - $599</li>
                <li>2Rm HDB - $599</li>
                <li>2Rm HDB - $599</li>
                <li>2Rm HDB - $599</li>
                <li>2Rm HDB - $599</li>
                <li>2Rm HDB - $599</li>
                <li>2Rm HDB - $599</li>
            </ul>
            </div>

            <div class="text-center">
                <a href="" class="price-btn navy-color" >
                    <div class="whatsapp-icon">
                        <i class='bx bxl-whatsapp'></i>
                        <label class="chat-text">Let's Chat</label>
                    </div>
                    <span>get best price</span>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- pricelist section end -->


<!-- pro-service section start -->
<section class="pro-service-section">
  <div class="container">
      <div class="pro-service-container">
            <div class="service-images" data-aos="fade-down-right" data-aos-duration="1500">
                <img src="{{ asset('public/asset/images/paint-house.jpg') }}" alt="">
            </div>

            <div class="professional-service" data-aos="fade-down-left" data-aos-duration="1500">
                <h5>Dependable & Sincere Company</h5>
                <h1>Professional Reovation services & painting services in singapore</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, doloribus neque iure exercitationem nam temporibus tenetur necessitatibus ea perspiciatis eius repellendus atque id dignissimos soluta quos esse ipsum sit est error cupiditate veniam dolor consequuntur suscipit. Tempore id eos distinctio voluptates tempora iusto officiis, eaque ullam eveniet, necessitatibus reprehenderit adipisci ex enim exercitationem. Quo quidem ab suscipit eligendi eum soluta.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae quam fuga laboriosam delectus vitae, officiis ipsam sit animi iure iusto dolor minus a exercitationem aut corrupti aperiam consequuntur quod aliquam odit provident reprehenderit quaerat. Quod reprehenderit fuga eum obcaecati nemo vel suscipit excepturi praesentium. Soluta voluptas accusamus at quo?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius vel harum dolores molestiae rerum, dolorum repellat, quaerat laboriosam, at sequi soluta quibusdam ad nesciunt aliquid placeat similique facere pariatur fugit?</p>

                <button class="btn-watch">Watch Video</button>
            </div>
      </div>
  </div>
</section>
<!-- pro-service section end -->


<!-- Projects section start -->
<section class="project-section">
  <div class="container">
      <div class="row">
          <div class="project-headtitle">
             <h1>Awesome Project Could Inspire You</h1>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem atque nostrum quos. In, voluptatum maiores? In fugiat laboriosam odit qui harum molestiae possimus quod aut!</p>

             <div class="project-galary" data-aos="zoom-in" data-aos-duration="1500">
                <a href="#"><img src="{{ asset('public/asset/images/project1.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('public/asset/images/project2.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('public/asset/images/project3.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('public/asset/images/project4.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('public/asset/images/project5.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('public/asset/images/project6.jpg') }}" alt=""></a>
             </div>
          </div>
      </div>
  </div>
</section>
<!-- Projects section end -->


<!-- Safety section start -->
<section class="safty-section">
  <div class="container">
      <div class="row align-items-center">
          <div class="safety-headtitles">
              <h1>Because We care about your safety...</h1>
          </div>

          <div class="col-lg-5" data-aos="flip-left" data-aos-duration="1500">
             <div class="safety-service-container">
                  <div class="safety-service">
                      <img src="{{ asset('public/asset/images/mask.png') }}" alt="">
                      <h4>Ensuring Maskes</h4>
                  </div>

                  <div class="safety-service">
                      <img src="{{ asset('public/asset/images/phone.png') }}" alt="">
                      <h4>24/7 Support</h4>
                  </div>

                  <div class="safety-service">
                      <img src="{{ asset('public/asset/images/hand.png') }}" alt="">
                      <h4>Sanitising hands & Equipment</h4>
                  </div>

                  <div class="safety-service">
                      <img src="{{ asset('public/asset/images/open-hands.png') }}" alt="">
                      <h4>Ensuring Gloves</h4>
                  </div>
             </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500">
              <div class="youtube-video">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/3VJbltbRNP0?si=g4xqz9MCof8anWOi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                      <a href="tel:">Call +01852369148</a>
                  </div>
              </div>
          </div>
      </div>
   </section>
<!-- Emergency-call section end -->


<!-- Logo section start -->
  <section class="logo-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="logo-container" data-aos="zoom-in-left" data-aos-duration="1500">
                      <h1>We can supply and use any below brand of paints of client choice.</h1>

                      <div class="owl-carousel owl-theme" id="logo-slider">
                          <div class="logo-div">
                              <img src="{{ asset('public/asset/images/ahadian.png') }}" alt="">
                          </div>
                          <div class="logo-div">
                              <img src="{{ asset('public/asset/images/girlifix.jpg') }}" alt="">
                          </div>
                          <div class="logo-div">
                              <img src="{{ asset('public/asset/images/dailyBazaar.png') }}" alt="">
                          </div>
                          <div class="logo-div">
                              <img src="{{ asset('public/asset/images/arishaTetx.jpg') }}" alt="">
                          </div>
                          <div class="logo-div">
                              <img src="{{ asset('public/asset/images/KhatiPlus.png') }}" alt="">
                          </div>
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
                      <div class="review-content">
                          <div class="review-content-head">
                              <img src="{{ asset('public/asset/images/avatar2.png') }}" alt="">

                              <div class="review-ratings-deatils">
                                  <h4>Lim Vic Kie</h4>
                                  <div class="star-ratings">
                                      <i class="bx bxs-star"></i>
                                      <i class="bx bxs-star"></i>
                                      <i class="bx bxs-star"></i>
                                      <i class="bx bxs-star"></i>
                                      <i class="bx bxs-star"></i>
                                  </div>
                              </div>
                          </div>

                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nam eius voluptate quis ducimus enim dolorem odit nisi deserunt at animi soluta dolorum consectetur ullam aliquid officia?</p>
                      </div>
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
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
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
