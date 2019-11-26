<!DOCTYPE html>
<html>



    <head>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>   @yield('title') </title>
        <link href="{{asset("public/frontEnd/")}}/css/animate.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/bootstrap.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/datatables.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/font-awesome.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/magnific-popup.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/owl.carousel.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/owl.theme.default.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/slicknav.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/style.css" rel="stylesheet"/>
        <link href="{{asset("public/frontEnd/")}}/css/t_responsive.css" rel="stylesheet"/>



        <link href="{{asset("public/frontEnd/")}}/alloy-editor/assets/alloy-editor-ocean-min.css" rel="stylesheet"/>

        <link href="{{asset("public/frontEnd/")}}/css/silkcity.css" rel="stylesheet" />


    </head>
    <body>

        <div class="container-body">
            <div class="wrapper">
                <!-- Header Area Start -->
                @include('frontEnd.includes.header')
                <!-- Header Area End -->
                
                
                
                <!-- Mainmenu Start -->
                @include('frontEnd.includes.menu')
                <!-- Mainmenu End -->
                
                
                <!-- Marquee Start -->
                @include('frontEnd.includes.header_marquee')
                <!-- Marquee End -->
                
                
                
                
                <!-- Main Content Start -->
                 @yield('mainContent')
                
              
                <!-- Main Content End -->

        

                <!-- Fooetr Area Start -->
                @include('frontEnd.includes.footer')
                <!-- Fooetr Area End -->
            </div>
            </div>




            <script src="{{asset("public/frontEnd/")}}/js/jquery-3.0.0.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/bootstrap.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/datatables.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/jquery.magnific-popup.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/jquery.marquee.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/jquery.pause.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/jquery.slicknav.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/main.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/owl.carousel.js"></script>
            <script src="{{asset("public/frontEnd/")}}/js/popper.js"></script>


            <script src="{{asset("public/frontEnd/")}}/alloy-editor/index.html"></script>


            <script>
var alloyEditor = AlloyEditor.editable('editContent');
            </script>




    </body>

</html>
