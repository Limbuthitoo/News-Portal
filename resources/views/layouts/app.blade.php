<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Nepal News</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
   <!-- endinject -->
   <!-- Plugin css for this page -->
   <link rel="stylesheet" href="/assets/vendors/jvectormap/jquery-jvectormap.css">
   <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
   <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.carousel.min.css">
   <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <!-- endinject -->
   <!-- Layout styles -->
   <link rel="stylesheet" href="/assets/css/style.css">
   <!-- End layout styles -->
   <link rel="shortcut icon" href="/assets/images/favicon.png" />

   <!-- select2 -->
   <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
   <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">


   <!-- ckeditor -->
   <style>
       .ck-editor__editable_inline {
           min-height: 200px;
           color: black;
       }

   </style>
</head>
<body>
    <nav class="navbar-expand-lg navbar-dark align-center bg-dark py-4">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Nepal_News') }}
                    </a>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ">
                            <!-- Authentication Links -->
                           <div class="d-flex px-3">
                            @guest
                            @if (Route::has('login'))
                               <span> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></span> &nbsp;&nbsp;
                            @endif
                            @if (Route::has('register'))
                            <span> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></span>


                            @endif
                            @endguest
                           </div>

                        </ul>
                </div>
            </div>


    </nav>



        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
