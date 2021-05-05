<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CryptoSystem - Sign in to your account</title>
    <link
        rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>₿</text></svg>"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <link media="all" rel="stylesheet" href="{{ asset('css/vendor.css') }}"/>
    <link media="all" rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <style>
        .invalid-feedback {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 12px;
            font-weight: 300;
            color: #fa5661;
            margin: -4px 0 18px 0;
        }
    </style>
    @stack('style')
</head>

<body>
<div class="cs--preloader" data-preloader></div>

@yield('content')

<script src="{{ asset('js/vendor.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
@stack('script')
</body>
</html>
