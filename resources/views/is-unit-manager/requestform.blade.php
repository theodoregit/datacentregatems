<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="../img/logo/cbe_logo.PNG" rel="icon">
  <title>Data Centre Gate Management System - CBE</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->
  <link href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
  <!-- Bootstrap Touchspin -->
  <link href="../vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" >
  <!-- ClockPicker -->
  <link href="../vendor/clock-picker/clockpicker.css" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="../img/logo/cbe_logo.PNG">
        </div>
        <div class="sidebar-brand-text mx-3">
          <small style="font-size: 10px">Data Centre Gate Management System</small>
        </div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Access Request Form</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Access Request</h6>
            <a class="collapse-item" href="#">Fill Request Form</a>
            <a class="collapse-item" href="{{route('all-requests')}}">View All Requests</a>
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
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #9106bb;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
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
                <img class="img-profile rounded-circle" src="../img/boy.png" style="max-width: 60px">
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
            <h1 class="h3 mb-0 text-gray-800">Fill New Access Request Form</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Access Request Form</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold" style="color: #460d46">Access Request Form</h6>
                </div>
                <div class="card-body">
                  <form action="{{route('request-form-is.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row form-group">
                        <div class="col-lg-4">
                          <div class="row">
                            <div class="col-sm-6">
                              <label for="exampleInputFullname"><i style="color: black;">Full Name</i></label>
                              <input class="form-control" type="text" placeholder="" name="fullname" value="{{Auth::user()->name}}" readonly>
                            </div>
                            <div class="col-sm-6">
                              <label for="unit"><i style="color: black;">Unit</i></label>
                              <input class="form-control" type="text" placeholder="" name="unit" value="<?php
                                    $u = Auth::user()->unit;
                                    switch ($u) {
                                      case '01':
                                        echo 'Business Analysis and IS PMO';
                                        break;
                                      case '02':
                                        echo 'Information Management';
                                        break;
                                      case '03':
                                        echo 'Infratructure Management';
                                        break;
                                      case '04':
                                        echo 'IS Application Management and Customization';
                                        break;
                                      case '05':
                                        echo 'IS Operations and BC/DR Management';
                                        break;
                                      case '06':
                                        echo 'IS Security';
                                        break;
                                      
                                      default:
                                        //
                                        break;
                                    }?>" readonly>
                            </div>
                          </div>
                            <label for="exampleInputEmail1"><i style="color: black;">ID Number</i></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby=""
                                placeholder="" name="idnumber">
                            <label for="exampleInputPhone"><i style="color: black;">Phone Number</i></label>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #460d46" id="basic-addon1">+251</span>
                              </div>
                              <input type="number" class="form-control" placeholder="" aria-label=""
                                    aria-describedby="basic-addon1" name="phonenumber">
                            </div>
                            <hr>
                            <div class="form-group" id="simple-date4">
                              <label for="dateRangePicker"><i style="color: black;">Select Dates</i></label>
                              <div class="input-daterange input-group">
                                <input type="text" class="input-sm form-control" name="startdate" placeholder="start"/>
                                <div class="input-group-prepend">
                                  <span class="input-group-text" style="background-color: #460d46">to</span>
                                </div>
                                <input type="text" class="input-sm form-control" name="enddate" placeholder="end"/>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                          <label for="dateRangePicker"><i style="color: black;">Access Required to</i></label>
                          <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="accessrequiredto" class="custom-control-input" value="Addis Ababa Branch Data Centre">
                                <label class="custom-control-label" for="customRadio3">Addis Ababa Branch Data Centre</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio4" name="accessrequiredto" class="custom-control-input" value="Kera/ GofaSefer Branch Data Centre">
                                <label class="custom-control-label" for="customRadio4">Kera/ GofaSefer Branch Data Centre</label>
                            </div>
                          </div>
                          <label for="dateRangePicker"><i style="color: black;" onClick="toggle(this)">Access Time</i></label>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="accesstime[]" value="At All Times">
                                    <label class="custom-control-label" for="customCheck6">At All Times</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck3" name="accesstime[]" value="During normal business hours">
                                  <label class="custom-control-label" for="customCheck3">During normal business hours</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck4" name="accesstime[]" value="Non business hours">
                                  <label class="custom-control-label" for="customCheck4">Non business hours</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="accesstime[]" value="Weekends">
                                    <label class="custom-control-label" for="customCheck5">Weekends</label>
                                </div>
                                <hr>
                                <div class="">
                                  <label for="exampleInputFullname"><i style="color: black;">Location</i></label>
                                  <input class="form-control" type="text" placeholder="" name="location">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                          <label for="dateRangePicker"><i style="color: black;">Areas To be Accessed</i></label>
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck7" name="areastobeaccessed[]" value="Computer Room">
                              <label class="custom-control-label" for="customCheck7">Computer Room</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck8" name="areastobeaccessed[]" value="Telecom Room">
                              <label class="custom-control-label" for="customCheck8">Telecom Room</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck9" name="areastobeaccessed[]" value="Power Room">
                              <label class="custom-control-label" for="customCheck9">Power Room</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck10" name="areastobeaccessed[]" value="NOC Room">
                              <label class="custom-control-label" for="customCheck10">NOC Room</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck11" name="areastobeaccessed[]" value="Meeting Room">
                              <label class="custom-control-label" for="customCheck11">Meeting Room</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck12" name="areastobeaccessed[]" value="Warehouse">
                              <label class="custom-control-label" for="customCheck12">Warehouse</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck13" name="areastobeaccessed[]" value="Security Room">
                              <label class="custom-control-label" for="customCheck13">Security Room</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck14" name="areastobeaccessed[]" value="All Rooms">
                              <label class="custom-control-label" for="customCheck14">All Rooms</label>
                            </div>
                            <hr>
                            <label for="exampleInputEmail1"><i style="color: black;">Scanned Letter(if any)</i></label>
                            <div class="custom-file">
                              <input type="file" class="form-control custom-file-input" id="customFile"  name="letter">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                    </div><hr>
                    <div class="row form-group">
                        <div class="col-lg-2">
                            <label for="exampleInputFullname"><i style="color: black;" name="personnel1">1st Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel1">
                            <label for="exampleInputFullname"><i style="color: black;">2nd Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel2">
                        </div>
                        <div class="col-lg-2">                          
                            <label for="exampleInputFullname"><i style="color: black;">3rd Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel3">
                            <label for="exampleInputFullname"><i style="color: black;">4th Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel4">                          
                        </div>
                        <div class="col-lg-2">                          
                            <label for="exampleInputFullname"><i style="color: black;">5th Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel5">
                            <label for="exampleInputFullname"><i style="color: black;">6th Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel6">                          
                        </div>
                        <div class="col-lg-2">                          
                            <label for="exampleInputFullname"><i style="color: black;">7th Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel7">
                            <label for="exampleInputFullname"><i style="color: black;">8th Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel8">                          
                        </div>
                        <div class="col-lg-2">                          
                            <label for="exampleInputFullname"><i style="color: black;">9th Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel9">
                            <label for="exampleInputFullname"><i style="color: black;">10th Personnel</i></label>
                            <input class="form-control" type="text" placeholder="" name="personnel10">                          
                        </div>
                        <div class="col-lg-2">
                          <label for="exampleInputEmail1"><i style="color: black;">Escorting Team</i></label>
                          <select class="form-control" name="escortingteam">
                            <option>Operation Team</option>
                            <option>Operation Team</option>
                            <option>Operation Team</option>
                            <option>Operation Team</option>
                          </select>
                          <label for="exampleInputEmail1"><i style="color: black;">List Escorts<small>(separate with comma)</small></i></label>
                          <textarea name="escorts" class="form-control" id="" cols="30" rows="4.5"
                            style="margin-top: 0px; margin-bottom: 0px; height: 43px;"></textarea> 
                        </div>
                    </div><hr>
                    <div class="row form-group">
                        <div class="col-lg-4">
                          <label for="exampleInputEmail1"><i style="color: black;">Impact</i></label>
                          <textarea name="impact" class="form-control" id="" cols="30" rows="4.5"
                            style=""></textarea>                          
                        </div>
                        <div class="col-lg-8">
                          <label for="exampleInputEmail1"><i style="color: black;">Purpose</i></label>
                          <textarea name="purpose" class="form-control" id="" cols="30" rows="4"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
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

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/ruang-admin.min.js"></script>
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../vendor/select2/dist/js/select2.min.js"></script>
  <!-- Bootstrap Datepicker -->
  <script src="../vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap Touchspin -->
  <script src="../vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
  <!-- ClockPicker -->
  <script src="../vendor/clock-picker/clockpicker.js"></script>
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
  <script language="JavaScript">
    function selects(){  
      var ele=document.getElementsByName('time');  
      for(var i=0; i<ele.length; i++){  
        if(ele[i].type=='checkbox')  
          ele[i].checked=true;  
        }  
      }  
    }
</script>
</body>

</html>