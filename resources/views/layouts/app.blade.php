<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} </title>
    <base href="{{ asset('') }}">

    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
    <link rel="stylesheet" href="source/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    
    
</head>
<body>

   @include('layouts.header')
    <div class="rev-slider">
        @yield('content')
    </div>
    @include('layouts.footer')
       
    
    <!-- include js files -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/myscript.js') }}"></script>
    <!-- <script src="source/assets/dest/js/jquery.js"></script> -->
    <script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
    <script src="source/assets/dest/vendors/animo/Animo.js"></script>
    <script src="source/assets/dest/vendors/dug/dug.js"></script>
    <script src="source/assets/dest/js/scripts.min.js"></script>
   <!--  <script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
   <script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> -->
    <script src="source/assets/dest/js/waypoints.min.js"></script>
    <script src="source/assets/dest/js/wow.min.js"></script>

    <!--customjs-->
    <script src="source/assets/dest/js/custom2.js"></script>
    <script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
            $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
    </script>
    <script>
        $(function(){
            $("#example").dataTable();
        })
    </script>
    
   
    <script>
    $('#key').typeahead({
        source:  function (query, process) {
        return $.get ('{{ route('searchdata') }}',
                      { query: query }, function (data) {
                console.log(data);
                data = $.parseJSON(data);
                
                return process(data);
            });
        }
    });

    </script>
</body>
</html>
