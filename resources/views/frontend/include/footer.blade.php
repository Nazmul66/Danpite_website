<footer>
    <div class="container">
        <div class="main-footer">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget-1">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset($basicInfo->logo) }}" alt="" style="width: 200px;">
                        </a>
                        <p>{{ $basicInfo->address_optional }}</p>
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
                            <li><span>Address: </span>{{ $basicInfo->address }}</li>
                            <li><span>Email: </span>{{ $basicInfo->email }}</li>
                            <li><span>Phone: </span> {{ $basicInfo->phone }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
