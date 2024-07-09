<!DOCTYPE html>
<html lang="en">

<head>
     @include('frontend.include.head-titles')
</head>

<body>

   <!-- Navbar start -->
   @include('frontend.include.header')
    <!-- Navbar end -->

        <!-- Body container start -->

            @yield('body-content')

        <!-- Body container end -->

    <!-- Footer section start -->
         @include('frontend.include.footer')
    <!-- Footer section end -->


     @include('frontend.include.script')


</body>
</html>
