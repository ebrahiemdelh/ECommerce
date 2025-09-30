<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'ShopGrids - Bootstrap 5 eCommerce HTML Template.')</title>
    @include('front.layout.partials.css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        @include('front.layout.partials.header')
        @if($errors->any())
            <div class="alert alert-danger m-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>
    @include('front.layout.partials.footer')
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>
    </div>
    @include('front.layout.partials.js')
</body>

</html>
