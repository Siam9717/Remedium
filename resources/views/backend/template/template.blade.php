<!DOCTYPE html>
<html lang="en">

<head>
    <!-- HEADER -->
    @include('backend.includes.header')
    <!-- CSS -->
    @include('backend.includes.css')
</head>

<body>

    <!-- LEFTBAR -->
    @include('backend.includes.leftbar')
    <!-- TOPBAR -->
    @include('backend.includes.topbar')
    <!-- RIGHTBAR -->
    @include('backend.includes.rightbar')


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        @yield('content')
        <!-- FOOTER -->
        @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- SCRIPTS -->
    @include('backend.includes.scripts')

</body>

</html>