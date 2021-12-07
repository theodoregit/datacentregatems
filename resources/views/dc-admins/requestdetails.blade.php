<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="../../img/logo/cbe_logo.PNG" rel="icon">
  <title>Data Centre Gate Management System - CBE</title>
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->  
  <link href="../../vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
  <!-- Bootstrap Touchspin -->
  <link href="../../vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" >
  <!-- ClockPicker -->
  <link href="../../vendor/clock-picker/clockpicker.css" rel="stylesheet">
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../css/ruang-admin.min.css" rel="stylesheet">
  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="../../img/logo/cbe_logo.PNG">
        </div>
        <div class="sidebar-brand-text mx-3">DCGMS</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Requests</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Access Request</h6>
            <a class="collapse-item" href="{{route('approved-requests')}}">View All Requests</a>
            <a class="collapse-item" href="{{route('request-form-dc-admin')}}">Fill Request Form</a>
          </div>
        </div>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">            
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notifications
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="../../img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{Auth::user()->name}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  data-toggle="modal"
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Approved Access Requests</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item"><a href="./">Access Requests</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$approved_requests->requestno}}</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold" style="color: #460d46">All Approved Access Requests</h6>
                  </div>
                  <div class="table-responsive p-3">
                    <table class="table table-bordered align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Full Name</th>
                                <th>ID Number</th>
                                <th>Phone Number</th>
                            </tr>
                        </thead>
                        <tbody style="color: black; font-weight: bold; font-size: larger">
                            <tr>
                                <td>{{$approved_requests->fullname}}</td>
                                <td>{{$approved_requests->id_number}}</td>
                                <td>{{$approved_requests->phone_number}}</td>
                            </tr>
                        </tbody>
                        <thead class="thead-dark">
                            <tr>
                                <th>Personnels</th>
                                <th>Impact</th>
                                <th>Purpose</th>
                            </tr>
                        </thead>                
                        <tbody style="color: black; font-weight: bold; font-size: larger">
                            <tr>
                                <td>
                                    <?php
                                        echo $approved_requests->personnel1 . '</br>' . $approved_requests->personnel2 . '</br>' . $approved_requests->personnel3 . '</br>' . $approved_requests->personnel4 . '</br>';
                                    ?>
                                </td>
                                <td>{{$approved_requests->impact}}</td>
                                <td>{{$approved_requests->purpose}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Access Required to</th>
                                <th>Access Time</th>
                                <th>Areas to be Accessed</th>
                                <th>Locations</th>
                            </tr>
                        </thead>
                        <tbody style="color: black; font-weight: bold; font-size: larger">
                            <tr>
                                <td>{{$approved_requests->access_req_location}}</td>
                                <td>{{$approved_requests->access_time}}</td>
                                <td>{{$approved_requests->areas_tobe_accessed}}</td>
                                <td>{{$approved_requests->location}}</td>
                            </tr>
                        </tbody>
                        <thead class="thead-dark">
                            <tr>
                                <th>Access is to begin on</th>
                                <th>Access is to end at</th>
                                <th>Duration in days</th>
                                <th>Remaining days</th>
                            </tr>
                        </thead>
                        <tbody style="color: black; font-weight: bold; font-size: larger">
                            <tr>
                                <td>{{$approved_requests->starting_date}}</td>
                                <td>{{$approved_requests->end_date}}</td>
                                <td>
                                    <?php
                                        echo $approved_requests->end_date - $approved_requests->starting_date;
                                    ?>
                                </td>
                                <td>{{$approved_requests->remaining_days}}</td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>      
          
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="#" target="">cbe-sdc team</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../js/ruang-admin.min.js"></script>
  <script src="../../vendor/chart.js/Chart.min.js"></script>
  <script src="../../js/demo/chart-area-demo.js"></script>
  <script src="../../vendor/select2/dist/js/select2.min.js"></script>
  <!-- Bootstrap Datepicker -->
  <script src="../../vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap Touchspin -->
  <script src="../../vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
  <!-- ClockPicker -->
  <script src="../../vendor/clock-picker/clockpicker.js"></script>
  <!-- datatables -->
  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function () {


      $('.select2-single').select2();

      // Select2 Single  with Placeholder
      $('.select2-single-placeholder').select2({
        placeholder: "Select a Province",
        allowClear: true
      });      

      // Select2 Multiple
      $('.select2-multiple').select2();

      // Bootstrap Date Picker
      $('#simple-date1 .input-group.date').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,        
      });

      $('#simple-date2 .input-group.date').datepicker({
        startView: 1,
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#simple-date3 .input-group.date').datepicker({
        startView: 2,
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#simple-date4 .input-daterange').datepicker({        
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });    

      // TouchSpin

      $('#touchSpin1').TouchSpin({
        min: 0,
        max: 100,                
        boostat: 5,
        maxboostedstep: 10,        
        initval: 0
      });

      $('#touchSpin2').TouchSpin({
        min:0,
        max: 100,
        decimals: 2,
        step: 0.1,
        postfix: '%',
        initval: 0,
        boostat: 5,
        maxboostedstep: 10
      });

      $('#touchSpin3').TouchSpin({
        min: 0,
        max: 100,
        initval: 0,
        boostat: 5,
        maxboostedstep: 10,
        verticalbuttons: true,
      });

      $('#clockPicker1').clockpicker({
        donetext: 'Done'
      });

      $('#clockPicker2').clockpicker({
        autoclose: true
      });

      let input = $('#clockPicker3').clockpicker({
        autoclose: true,
        'default': 'now',
        placement: 'top',
        align: 'left',
      });

      $('#check-minutes').click(function(e){        
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
      });

    });
  </script>
</body>

</html>