<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  @stack('js_file')
  <meta charset="UTF-8">
  <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


 <!--- CSS-------------------------------------------- -->
  <!-- Bootstrap 3.3.2 -->
  <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css ") }}" rel="stylesheet" type="text/css"/>
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <!-- Ionicons -->
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css ")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css ")}}" rel="stylesheet" type="text/css"/>
 <!-- laradrop imagemanager -->
  <link href="/vendor/jasekz/laradrop/css/styles.css" rel="stylesheet" type="text/css">
  
   @stack('ccs_file')
 
  <!--JS--------------------------------------------  -->
  <!-- jQuery 2.1.3
  <script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js ") }}"></script>
   -->
  <!-- Bootstrap 3.3.2 JS 
  <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js ") }}" type="text/javascript"></script>
  -->
  
  <!-- AdminLTE App
  <script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js ") }}" type="text/javascript"></script>
   -->
  <!-- laradrop imagemanager -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js" ></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--#head-->

@stack('js_file')
  <script>
   
jQuery(document).ready(function(){

   @stack('docready')
    // Simplest:
        /** Keep track of which modal button was clicked. **/
    	var currentModalBtn;
    	jQuery('.modal-btn').click(function(){
    		currentModalBtn = jQuery(this);
    	});
    	//#js_docready**
       
    });
     
  </script>
  <script>
   
     window.Laravel = {!! json_encode([
      'laradrop-csrf-token' => csrf_token(),
    ])!!};
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
    ])!!};
  </script>
  <script>
    @stack('js')
  </script>
</head>

<body class="skin-blue">
  <div class="wrapper">
  <!-- laradrop imagemanager -->   

    <!-- Header -->
    @include('tmpl::part.header')

    <!-- Sidebar -->
    @include('tmpl::part.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ $page_title or "Page Title" }}
          <small>{{ $page_description or null }}</small>
        </h1>
        <!-- You can dynamically generate breadcrumbs here -->
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

      
        <!-- Your Page Content Here -->
        @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('tmpl::part.footer')

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->


  <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
</body>

</html>