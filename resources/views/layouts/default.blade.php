<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('asset/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom styles for this page -->
    <link href="{{ url('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .form-check {
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5em;
    margin-bottom: 0.125rem;
  }
  .form-check .form-check-input {
    float: left;
    margin-left: -1.5em;
  }
  
  .form-check-input {
    width: 1em;
    height: 1em;
    margin-top: 0.25em;
    vertical-align: top;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 1px solid rgba(0, 0, 0, 0.25);
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    -webkit-print-color-adjust: exact;
            color-adjust: exact;
  }
  .form-check-input[type=checkbox] {
    border-radius: 0.25em;
  }
  .form-check-input[type=radio] {
    border-radius: 50%;
  }
  .form-check-input:active {
    filter: brightness(90%);
  }
  .form-check-input:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
  }
  .form-check-input:checked {
    background-color: #57c8f2;
    border-color: #57c8f2;
  }
  .form-check-input:checked[type=checkbox] {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
  }
  .form-check-input:checked[type=radio] {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
  }
  .form-check-input[type=checkbox]:indeterminate {
    background-color: #0d6efd;
    border-color: #0d6efd;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
  }
  .form-check-input:disabled {
    pointer-events: none;
    filter: none;
    opacity: 0.5;
  }
  .form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
    opacity: 0.5;
  }
  
  .form-switch {
    padding-left: 2.5em;
  }
  .form-switch .form-check-input {
    width: 2em;
    margin-left: -2.5em;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
    background-position: left center;
    border-radius: 2em;
    transition: background-position 0.15s ease-in-out;
  }
  @media (prefers-reduced-motion: reduce) {
    .form-switch .form-check-input {
      transition: none;
    }
  }
  .form-switch .form-check-input:focus {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e");
  }
  .form-switch .form-check-input:checked {
    background-position: right center;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
  }
  
  .form-check-inline {
    display: inline-block;
    margin-right: 1rem;
  }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
   < @include('layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                 @include('layouts.header')
    
                 @yield('content')
            </div>
            
        </div>
    </div>
    
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 
    <!-- Bootstrap core JavaScript-->
  <script src="{{ url('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('asset/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
    <script src="{{ url('asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
            <!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>window.jQuery || document.write('<script src="{{ asset('asset/assets/js/vendor/jquery-1.12.0.min.js') }}"><\/script>')</script>
            <!-- Bootstarp js -->
            <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
            <!-- Google Map -->
            <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg"></script>
            <script src="{{ asset('asset/js/gmap.script.js') }}"></script>
            <!-- Progressbar Js -->
            <script src="{{ asset('asset/js/circle.progress.js') }}"></script>
            <!-- Count Down -->
            <script src="{{ asset('asset/js/TimeCircles.js') }}"></script>
            <!-- Custom ScrollBar  -->
            <script src="{{ asset('asset/js/enscroll-0.6.2.min.js') }}"></script>
            <!-- LightCase  -->
            <script src="{{ asset('asset/js/lightcase.js') }}"></script>
            <!-- Isotop -->
            <script src="{{ asset('asset/js/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('asset/js/custom.isotop.js') }}"></script>
            <!-- Masonry -->
            <script src="{{ asset('asset/js/masonry.js') }}"></script>
            <!-- Swipper -->
            <script src="{{ asset('asset/js/swiper.min.js') }}"></script>
            <!-- Flex Slider -->
            <script src="{{ asset('asset/js/jquery.flexslider.js') }}"></script>
            <!-- NST slider -->
            <script src="{{ asset('asset/js/jquery.nstSlider.min.js') }}"></script>
            <!-- Main Js -->
            <script src="{{ asset('asset/js/functions.js') }}"></script>

            <script>
                var url = "{{ url('/') }}";
                $(document).ready(function(){
                    
                    if($.cookie("city_selected") == undefined)
                        $("#citymodal").modal('show');
                        
                    $.cookie("city_selected", "Mumbai");
                    // $.removeCookie('city_selected', { path: '/' });
                });
            </script>

            @stack('custom_script')


    <!-- @stack('custom_script') -->

    <script>
      $('#cause_type_dataTable').DataTable( {
        "ajax": {
            "url": "{{ route('fetch_cause_type') }}",
            "type": "POST",
            'data': function (d) {
                    d._token = $("input[name=_token]").val();

                },
            "dataSrc": ""
        },
        "columns": [
            { "data": "sl" },
            { "data": "name" },
            { "data": "image" },
            { "data": "description" },
            { "data": "status" },
            { "data": "buttons" }
        ]
      });

    $('#cause_type_modal').on('show.bs.modal', function(e) {
		  var id = $(e.relatedTarget).data('id');
        var name = $(e.relatedTarget).data('name');
        var description = $(e.relatedTarget).data('description');
	    $(e.currentTarget).find('input[name="cause_type_id"]').val(id);
        $(e.currentTarget).find('input[name="cause_type"]').val(name);
        $(e.currentTarget).find('textarea[name="description"]').val(description);
	  });

    $('#cause_type_form').submit(function(e) {
        e.preventDefault();
        var data = new FormData(this); 
        $.ajax({
            url: "{{ route('manage_cause_type') }}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data) {
               var obj = $.parseJSON(data);
               if(obj.success == 200) {
                $('#cause_type_modal').modal('toggle');
                $('#cause_type_form').trigger("reset");
                $('#cause_type_dataTable').DataTable().ajax.reload();
                toastr.success(obj.msg);
               } else {  
                toastr.error(obj.msg);
               }
            }
        });
    });

  $(document).on('change', '.chkbx', function() {
      var id = $(this).attr("id"); 
      var status = $(this).attr("value");
      $.post("{{ route('manage_cause_status') }}",
      {
        id: id,
        status: status,
        _token: '{{ csrf_token() }}',
        _method: 'POST'
      },
      function(data){
         var obj = JSON.parse(data);
         if(obj.success == 200) {
           $('.chkbx').val(obj.status);
           toastr.success('Success!', 'Status Changed', 'success');
         } else {
            toastr.error('Error', 'Unable to change the status', 'error');
         }
      });
  });
  $('#areas_dataTable').DataTable( {
        "ajax": {
            "url": "{{ route('fetch_areas') }}",
            "type": "POST",
            'data': function (d) {
                    d._token = $("input[name=_token]").val();

                },
            "dataSrc": ""
        },
        "columns": [
            { "data": "sl" },
            { "data": "name" },
            { "data": "state" },
            { "data": "status" },
            { "data": "buttons" }
        ]
  });
  $('#areas_modal').on('show.bs.modal', function(e) { //#areas_modal model id which will be open onclick add button ,this is in blade file 
		  var id = $(e.relatedTarget).data('id');
      var name = $(e.relatedTarget).data('name');
      var state = $(e.relatedTarget).data('state');//it is coming from controller's fetch_area ()
	    $(e.currentTarget).find('input[name="areas_id"]').val(id);
      $(e.currentTarget).find('input[name="area_name"]').val(name);//name of input which are on blade file
      $(e.currentTarget).find('select[name="state_id"]').val(state);//name of input which are on blade file
    });

  $('#areas_form').submit(function(e) {
        e.preventDefault();
        var data = new FormData(this); 
        $.ajax({
            url: "{{ route('manage_areas') }}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data) {
               var obj = $.parseJSON(data);
               if(obj.success == 200) {
                $('#areas_modal').modal('toggle');
                $('#areas_form').trigger("reset");//#areas_form id which form  idneeds to be reset(reset form)
                $('#areas_dataTable').DataTable().ajax.reload();//areas_dataTable table name which is on view blade
                toastr.success(obj.msg);
               } else {  
                toastr.error(obj.msg);
               }
            }
        });
  });
  
  $(document).on('change', '.areacls', function() {
      var id = $(this).attr("id"); 
      var status = $(this).attr("value");
      $.post("{{ route('manage_areas_status') }}",
      {
        id: id,
        status: status,
        _token: '{{ csrf_token() }}',
        _method: 'POST'
      },
      function(data){
         var obj = JSON.parse(data);
         if(obj.success == 200) {
           $('.areacls').val(obj.status);
           toastr.success('Success!', 'Status Changed', 'success');
         } else {
            toastr.error('Error', 'Unable to change the status', 'error');
         }
      });
  });
  $('#ngo_dataTable').DataTable( {
        "ajax": {
            "url": "{{ route('fetch_ngo') }}",
            "type": "POST",
            'data': function (d) {
                    d._token = $("input[name=_token]").val();

                },
            "dataSrc": ""
        },
        "columns": [
            { "data": "sl" },
            { "data": "type" },
            { "data": "name" },
            { "data": "address" },
            { "data": "status" },
            { "data": "buttons" }
        ]
  });
  $('#states_dataTable').DataTable( {
        "ajax": {
            "url": "{{ route('fetch_states') }}",
            "type": "POST",
            'data': function (d) {
                    d._token = $("input[name=_token]").val();

                },
            "dataSrc": ""
        },
        "columns": [
            { "data": "sl" },
            { "data": "name" },
            { "data": "status" },
            { "data": "buttons" }
        ]
  });
  $('#states_modal').on('show.bs.modal', function(e) { //#states_modal model id which will be open onclick add button ,this is in blade file 
		var id = $(e.relatedTarget).data('id');
        var name = $(e.relatedTarget).data('name');
	    $(e.currentTarget).find('input[name="states_id"]').val(id);
        $(e.currentTarget).find('input[name="state_name"]').val(name);//name of input which are on blade file
	});
  $('#states_form').submit(function(e) {
        e.preventDefault();
        var data = new FormData(this); 
        $.ajax({
            url: "{{ route('manage_states') }}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data) {
               var obj = $.parseJSON(data);
               if(obj.success == 200) {
                $('#states_modal').modal('toggle');
                $('#states_form').trigger("reset");//#states_form id which form  idneeds to be reset(reset form)
                $('#states_dataTable').DataTable().ajax.reload();//states_dataTable table name which is on view blade
                toastr.success(obj.msg);
               } else {  
                toastr.error(obj.msg);
               }
            }
        });
  });
  $(document).on('change', '.statescls', function() {
      var id = $(this).attr("id"); 
      var status = $(this).attr("value");
      $.post("{{ route('manage_states_status') }}",
      {
        id: id,
        status: status,
        _token: '{{ csrf_token() }}',
        _method: 'POST'
      },
      function(data){
         var obj = JSON.parse(data);
         if(obj.success == 200) {
           $('.statescls').val(obj.status);
           toastr.success('Success!', 'Status Changed', 'success');
         } else {
            toastr.error('Error', 'Unable to change the status', 'error');
         }
      });
  });
</script>

</body>

</html>