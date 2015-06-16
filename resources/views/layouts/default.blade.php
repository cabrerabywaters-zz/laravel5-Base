
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')



    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
        <!--/ CSS//-->

    
    <link href="/css/allVendor.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
   


    <!--/ JS//-->


    <script src="/js/allVendor.js"></script>

    <script src="/js/app.js"></script>

  

</head>
<body id="page-top">

@if(Auth::check())
@else
<!--Barra de navegación-->
@include('layouts/partials/navbarHome')
<!-- #############/Barra de navegación##############-->

@endif


@yield('content')




</body>
</html>



