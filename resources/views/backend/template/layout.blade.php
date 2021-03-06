
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.header')
    @include('backend.includes.css')  
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('backend.includes.menu')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend.includes.topbar')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('backend.includes.message')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
      @yield('dashboard-content')

    <div class="br-mainpanel">  
      @include('backend.includes.footer') 
    </div><!-- br-mainpanel -->   

    <!-- ########## END: MAIN PANEL ########## -->
    
  </body>
  @include('backend.includes.script')
</html>
