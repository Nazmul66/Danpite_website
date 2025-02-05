<header>
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <nav class="navbar navbar-expand-lg">
                 <div class="container-fluid">
                   <a class="navbar-brand" href="{{ url('/') }}">

                        @if ( !empty($basicInfo->logo) )
                            <img src="{{ asset($basicInfo->logo) }}" alt="" style="width: 200px;">
                        @else
                            <img src="{{ asset('public/asset/images/logo.png') }}" alt="" style="width: 200px;">
                        @endif
                   </a>

                   <!-- Mobile button toggle -->
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                   </button>


                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="#service">Services</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="#price">Price</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="#project">Projects</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="#galary">Galary</a>
                        </li>

                          @if ( !Auth::check() )
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                          @else
                            <li class="nav-item">
                              <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <a class="nav-link" onclick="event.preventDefault();
                                    this.closest('form').submit();" style="cursor: pointer;">Log Out</a>
                                </form>
                              @endif
                          </li>
                     </ul>

                      <div class="searching-products">
                          <button>Search Project</button>
                      </div>
                   </div>
                 </div>
               </nav>
          </div>
       </div>
    </div>
</header>
