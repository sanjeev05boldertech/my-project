<head>
    <meta charset="UTF-8">
    <title> Admin - @yield('htmlheader_title', 'Quiz App Admin Pannel') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="{{ asset('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  
  <!--<link rel="stylesheet" href="{{ asset("/admin/bower_components/font-awesome/css/font-awesome.min.css")}}">--->
 
  <link rel="stylesheet" href="{{ asset('/admin/bower_components/Ionicons/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{ asset('/admin/dist/css/AdminLTE.css')}}">
 
  <link rel="stylesheet" href="{{ asset('/admin/dist/css/skins/_all-skins.min.css')}}">
  
  <link rel="stylesheet" href="{{ asset('/admin/bower_components/morris.js/morris.css')}}">
 
  <link rel="stylesheet" href="{{ asset('/admin/bower_components/jvectormap/jquery-jvectormap.css')}}">

<link rel="stylesheet" href="{{ asset('/admin/plugins/ui-datetimepicker/jquery-ui-timepicker-addon.css')}}">
   

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">-->



  <link rel="stylesheet" href="{{ asset('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="{{ asset('/admin/notification/pnotify.css')}}" rel="stylesheet">
<link href="{{ asset('/admin/notification/pnotify.buttons.css')}}" rel="stylesheet">
<link href="{{ asset('/admin/notification/pnotify.nonblock.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('/admin/notification/jquery.toast.css')}}">

<link href="{{ asset('/css/parsley.css')}}" rel="stylesheet">


    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('/admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/admin/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('/admin/js/common.js') }}"></script>
  
    <script>
        var app_url =  '{{ url('') }}';
    </script>

<script src="{{ asset('/admin/ckeditor/ckeditor.js') }}" ></script>	

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>


	<style>table.center-all td,th{
                        text-align :center;
                    }</style>
                    



<script src="https://use.fontawesome.com/26f908b79d.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('/admin/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script> 
<!-- FastClick --> 
<script src="{{ asset('/admin/plugins/fastclick/fastclick.min.js') }}"></script> 
<!-- Admin App --> 
<script src="{{ asset('/admin/js/app.min.js') }}" type="text/javascript"></script> 

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/admin/css/dataTables.bootstrap.css') }}">
<script src="{{ asset('/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/admin/js/dataTables.bootstrap.min.js') }}"></script> 
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>

<!--------------------------PNOTIFY scripts---------------------------->

<script src="{{ asset('/admin/notification/pnotify.js')}}"></script>
<script src="{{ asset('/admin/notification/pnotify.buttons.js')}}"></script>
<script src="{{ asset('/admin/notification/pnotify.nonblock.js')}}"></script>
<script src="{{ asset('/admin/notification/jquery.toast.js')}}"></script>
<!----------------------------------------------------------------------------->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEW_A69KqceRF9fW0eW64y2JegADPFuA&libraries=places"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
</head>
