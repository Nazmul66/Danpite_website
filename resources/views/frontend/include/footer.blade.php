<footer>
    <div class="container">
        <div class="main-footer">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget-1">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            @if ( !empty($basicInfo->logo) )
                              <img src="{{ asset($basicInfo->logo) }}" alt="" style="width: 200px;">
                            @else
                              <img src="{{ asset('public/asset/images/logo.png') }}" alt="" style="width: 200px;">
                            @endif
                        </a>
                        <p>
                            @if ( !empty($basicInfo->address_optional) )
                                {{ $basicInfo->address_optional }}
                            @else
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil quos omnis libero tenetur praesentium aperiam!
                            @endif
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="widget-2">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>Painting & Decoration</span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>Wallpaper Hanging</span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>Commercial Decoration</span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>Interior Decoration</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="widget-2">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>Painting & Decoration</span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>Wallpaper Hanging</span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>Commercial Decoration</span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>Interior Decoration</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="widget-2">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><span>Address: </span> @if( !empty($basicInfo->address) ) {{ $basicInfo->address }} @else Lorem ipsum dolor sit amet. @endif  </li>
                            <li><span>Email: </span> @if( !empty($basicInfo->email) ) {{ $basicInfo->email }} @else admin@gmail.com @endif </li>
                            <li><span>Phone: </span> 01868512081 @if( !empty($basicInfo->phone) ) {{ $basicInfo->phone }} @else @endif  </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
