<!DOCTYPE html>
<html lang="en">
  @include('layouts.admin.htmlheader')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
          @include('layouts.admin.sidebar')

          @include('layouts.admin.navbar')

            <!-- page content -->
            @yield('maincontent')
            

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            {{ config('app.name', 'Laravel') }} <a href="#">Universitas Wahid Hasyim Semarang</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    @include('layouts.admin.jsfooter')
  </body>
</html>