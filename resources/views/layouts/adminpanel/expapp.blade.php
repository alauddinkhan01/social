<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Irfan Ahmad">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Software Development Services across the world">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>CodendCoffee</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('backend/assets/css/libs/fontawesome-icons.css?ver=2.7.0')}}">

    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('backend/assets/css/theme.css?ver=2.2.0')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/editors/tinymce.css?ver=2.7.0')}}">
    @stack('adminhead')
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('layouts.admin.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('layouts.admin.topnav')
                <!-- main header @e -->
                <!-- content @s -->
                @yield('admincontent')
                <!-- content @e -->
                <!-- footer @s -->
                @include('layouts.admin.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('backend/assets/js/bundle.js?ver=2.2.0')}}"></script>
    <script src="{{asset('backend/assets/js/scripts.js?ver=2.2.0')}}"></script>
    <script src="https://cdn.tiny.cloud/1/ik2dijdsq8hwr2psz9tgzsu1eqc2rt3bakqf37w2479gkupy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>        
    <script>
        tinymce.init({
            selector: '#mytextarea',
            height : "300",
            plugins: [
            'advlist autolink link lists'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | ',
        });
    </script>
    @stack('adminscripts')

</body>

</html>