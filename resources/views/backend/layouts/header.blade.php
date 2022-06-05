<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">

  <link rel="stylesheet" href="{{ asset('css/snackbar.css')}}" />
</head>

@yield('pushcss')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>



    </ul>
  </nav>
  <!-- /.navbar -->

    @include('backend.layouts.slider')

    <div class="content-wrapper">
        @yield('content')
    </div>

   <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
@yield('pushjs')
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->

{{-- <script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('backend/dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script> --}}

<script src="{{ asset('js/materialize.min.js')}}" charset="utf-8"></script>
<script src="{{ asset('js/snackbar.js')}}" charset="utf-8"></script>

<script>


    function buttonLoading(processType, ele){
        if(processType == 'loading'){
            ele.html(ele.attr('data-loading-text'));
            ele.attr('disabled', true);
        }else{
            ele.html(ele.attr('data-rest-text'));
            ele.attr('disabled', false);
        }
    }

      function successMsg(heading,message, html = ""){

          Snackbar.show({
            text: message,
            backgroundColor: '#232323',
            width: '475px',
            pos: 'bottom-center'
          });

      }

      function errorMsg(heading,message){
          Snackbar.show({
              text: message,
              backgroundColor: '#232323',
              width: '475px',
              pos: 'bottom-center'
          });
      }


      function locationReload(){
            location.reload();
        }

      $(document).on('submit','form',function(){

        var formID = $(this).attr('id');
        var formbehaviour = $(this).attr('data-behaviour');

            if(formbehaviour==1){
                $('#'+formID).submit();
            }



        var $this = $('#'+formID+' #submitButton');
        buttonLoading('loading', $this);
        $('.is-invalid').removeClass('is-invalid state-invalid');
        $('.invalid-feedback').remove();
        $.ajax({
            url: $('#'+formID).attr('action'),
            type: "POST",
            processData: false,  // Important!
            contentType: false,
            cache: false,
            data: new FormData($('#'+formID)[0]),
            success: function(data) {


                $('#'+formID+" #errors_msg").empty();

                if(data.status){
                    successMsg('', data.msg);
                    $("#add_user").modal('hide');
                    setTimeout(locationReload,1000);
                }else{

                    $.each(data.errors, function(fieldName, field){
                            $.each(field, function(index, msg){
                                $('#'+fieldName).addClass('is-invalid state-invalid');
                                errorDiv = $('#'+fieldName).parent('div');
                                errorDiv.append('<div class="invalid-feedback">'+msg+'</div>');
                            });
                    });
                    errorMsg('', data.msg);
                }

                buttonLoading('reset', $this);

            },
            error: function(data) {

                    buttonLoading('reset', $this);
                    errorMsg('', data.responseJSON.message);

                    if(data.responseJSON.errors){

                        $.each(data.responseJSON.errors, function(fieldName, field){
                            $.each(field, function(index, msg){
                                $('#'+fieldName).addClass('is-invalid state-invalid');
                                errorDiv = $('#'+fieldName).parent('div');
                                errorDiv.append('<div class="invalid-feedback">'+msg+'</div>');
                            });
                        });

                }




            }

        });

        return false;

        });


        $(document).on('click','.deleteButton', function(){
            $(".deleteSubmit").attr('data-url',$(this).attr('data-url'))
        });

        $(document).on('click','.checkAllClass',function(){
            var id = $(this).attr('data-id');
            if( $(this).is(":checked") ){
                $("#BulkActions").append(`<input type="hidden" name="action_id[]" data-id="${id}" class="action_class removeClass${id}" value="${$(this).val()}" /> `);
            }else{
                $('.removeClass'+id).remove();
            }
        });

        $(document).on('click','.restoreButton', function(){
                $(".restoreSubmit").attr('data-url',$(this).attr('data-url'))
        });



        $(document).on('click','.add-btn',function(){

            var url = $(this).attr('data-url');

            $(".restoreSubmit").attr('data-url',$(this).attr('data-url'))

            // if(url!=""){

            //     $.ajax({
            //         url: url,
            //         type: 'GET',
            //         success: function(data){

            //             $("#add_user .modal-body").html(data);

            //             $(".select").select2({dropdownParent: $('#add_user')});

            //         }
            //     });

            // }

        });


        $(document).on('click','.status',function(){
            var con  = confirm('Are you sure want to perform action !! ');
                if(con){

                        var url = $(this).attr('data-url');

                        $.ajax({
                            url: url,
                            type: 'GET',
                            success: function(data){
                                errorMsg('', data.msg);
                                setTimeout(locationReload,1000);
                            }
                        });
                }

        });


        $(document).on('click','.editbtn',function(){
          var url = $(this).attr('data-url');
          $.ajax({
                url: url,
                type: 'GET',
                success: function(data){

                    $("#edit_user .modal-body").html(data);

                    $(".select").select2({dropdownParent: $('#edit_user')});
                }
            });
        });



        $(document).on('click','.deleteSubmit',function(){

          url = $(this).attr('data-url');
          var $this = $(this);
          buttonLoading('loading', $this);
          $.ajax({
              url: url,
              type: 'POST',
              data:{_token:'{{csrf_token()}}'},
              success: function(data){
                  errorMsg('', data.msg);
                  $("#delete_user").modal('hide');
                  buttonLoading('reset', $this);

                  setTimeout(locationReload,1000);

              }
          });

        });


</script>
</body>
</html>
