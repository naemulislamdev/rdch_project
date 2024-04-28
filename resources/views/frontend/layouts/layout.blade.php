<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('frontend.layouts.head')

    <title>RDCH</title>
</head>

<body>
    {{-- Start header top section --}}
    <section class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-12 py-2">
                    <div class="header-top-info-box">
                        <span><i class="fa fa-envelope"></i> <a href="">principal.rdc.bd@gmail.com</a></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="header-top-img-box">
                        <img src="{{ asset('public/assets/img/header_top_logo.png') }}" alt="">
                    </div>
                </div>
            </div>
            @include('frontend.layouts.header')
        </div>
    </section>
    {{-- End header top section --}}
    {{-- Start main content section --}}
    @yield('content')
    {{-- Start footer section --}}
    @include('frontend.layouts.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('frontend.layouts.foot')
    @include('frontend.layouts.script')
</body>
</html>
