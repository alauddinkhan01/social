<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('adminpanel/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Default Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('adminpanel/assets/css/dashlite.css?ver=2.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('adminpanel/assets/css/theme.css?ver=2.2.0') }}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('layouts.vendorpanel.sidebar');
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('layouts.vendorpanel.navebar');
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('adminpanel/assets/js/bundle.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('adminpanel/assets/js/scripts.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('adminpanel/assets/js/charts/chart-ecommerce.js?ver=2.2.adminpanel') }}"></script>
    <script src="{{ asset('adminpanel/assets/js/charts/chart-sales.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('adminpanel/assets/js/charts/chart-analytics.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('adminpanel/assets/js/libs/jqvmap.js?ver=2.2.0') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    @yield('scripts')
</body>

</html>