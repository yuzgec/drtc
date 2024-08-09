<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5S3LCT6L');</script>
    <!-- End Google Tag Manager -->
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
    @include('frontend.layout.css')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S3LCT6L"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="body">
        @include('frontend.layout.header')
        <div role="main" class="main">
            @yield('content')
            <a href="https://api.whatsapp.com/send?phone={{config('settings.whatsapp')}}&text=Merhaba bilgi almak istiyorum." class="float" target="_blank" title="Whatsapp Bilgi Hattı">
                <i class="fab fa-whatsapp my-float"></i>
            </a>
        </div>
        @include('frontend.layout.footer')
        @include('frontend.layout.js')
        @yield('customJS')
    </div>
</body>
</html>
