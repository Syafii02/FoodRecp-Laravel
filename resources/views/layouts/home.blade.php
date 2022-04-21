<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>


    

    

    <title>FoodRecp</title>

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!--     Fonts and icons     -->

    @include('includes.home.style')
    
  </head>

  <body class="index-page bg-gray-200">

  @include('includes.home.navbar')


  @include('includes.home.header')


    <!-- content -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-8 mt-n6">

    @yield('content')
      
    </div>
    <!-- end content -->


    @include('includes.home.footer')


    @include('includes.home.script')
  </body>
</html>
