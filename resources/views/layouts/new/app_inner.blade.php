<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('layouts.new.partials.htmlheader')
@show

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    @include('layouts.new.partials.mainheader')

    @include('layouts.new.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('layouts.new.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
            
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    

    @include('layouts.new.partials.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('layouts.new.partials.scripts')
@show

</body>
</html>
