
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
   @include('layout.css')
    @yield('Css')

  
</head>
<body>
    <div id="wrapper">
       
        @include('layout.header')

        <!-- /. NAV SIDE  -->

       @include('layout.sidebar')
        <!-- /. NAV TOP  -->

        @yield('content')
        
                       

    </div>
    <!-- /. WRAPPER  -->

   @include('layout.footer')
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
    @include('layout.script')
    @yield('Script')


</body>
</html>
