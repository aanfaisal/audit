<!DOCTYPE html>
<html lang="en">
  @include('layouts.admin.htmlheader')

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
          @include('layouts.admin.sidebar')

          @include('layouts.admin.navbar')

            <!-- page content -->
            @yield('maincontent')
            <div class="right_col" role="main">
              <div class="">
                <div class="page-title">
                  <div class="title_left">
                    <h3>Fixed Footer <small> Just add class <strong>footer_fixed</strong></small></h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- /page content -->

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