<header>
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <nav class="navbar navbar-expand-lg">
                 <div class="container-fluid">
                   <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset($basicInfo->logo) }}" alt="" style="width: 200px;">
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
                       <li class="nav-item">
                         <a class="nav-link" href="#">Login</a>
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
