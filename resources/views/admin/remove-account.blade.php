<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="img/logo/cbe_logo.PNG" rel="icon">
  <title>Data Centre Gate Management System - CBE</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo/cbe_logo.PNG">
        </div>
        <div class="sidebar-brand-text mx-3">DCGMS</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-user"></i>
          <span>Add New User</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Choose user type</h6>
            <a class="collapse-item" href="{{route('unit-manager-account')}}">IS Unit Manager</a>
            <a class="collapse-item" href="{{route('dc-manager-account')}}">Data Centre Manager</a>
            <a class="collapse-item" href="{{route('inf-manager-account')}}">Infratructure Manager</a>
            <a class="collapse-item" href="{{route('dc-admin-account')}}">Data Center Admin</a>
            <a class="collapse-item" href="{{route('dc-reception-account')}}">Data Center Reception</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Manage User Accounts</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage accounts</h6>
            <a class="collapse-item" href="{{route('reset-password')}}">Reset Passwords</a>
            <a class="collapse-item" href="#">Remove Accounts</a>
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
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
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
            <h1 class="h3 mb-0 text-gray-800">Remove Account</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold" style="color: #460d46">All Accounts</h6>
                  </div>
                  <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                      <thead class="thead-light">
                        <tr>
                          <th>Email</th>
                          <th>Full Name</th>
                          <th>Unit</th>
                          <th>Account Status</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($unitsm as $um)
                        <tr>
                          <td>{{$um->email}}</td>
                          <td>{{$um->name}}</td>
                          <td>
                            <?php
                              switch ($um->unit) {
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
                              }
                            ?>
                          </td>
                          <td>
                            @if($um->is_active == 1)
                              Active
                            @else
                              Inactive
                            @endif
                          </td>
                          <td>
                            @if($um->is_active == 1)
                              <form action="{{route('admin.suspend-account')}}" method="post">
                                  {{csrf_field()}}
                                <input type="text" value="unit" name="unit" style="display: none;">
                                <input type="text" value="{{$um->email}}" name="suspend_u" style="display: none;">
                                <button type="submit" class="btn btn-outline-warning btn-sm">Suspend</button>
                              </form>
                              <!-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalCenter"
                                  id="#modalCenter">Suspend</button> -->
                            @else
                              <form action="{{route('admin.restore-account')}}" method="post">
                                  {{csrf_field()}}
                                <input type="text" value="unit" name="unit" style="display: none;">
                                <input type="text" value="{{$um->email}}" name="restore_u" style="display: none;">
                                <button type="submit" class="btn btn-outline-info btn-sm">Restore</button>
                              </form>
                            @endif
                          </td>
                          <td>
                            <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                            data-target="#exampleModalScrollable" id="#modalScroll">Remove</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tbody>
                        @foreach($dcm as $dc)
                        <tr>
                          <td>{{$dc->email}}</td>
                          <td>{{$dc->name}}</td>
                          <td>Data Center Manager</td>
                          <td>
                            @if($dc->is_active == 1)
                              Active
                            @else
                              Inactive
                            @endif
                          </td>
                          <td>
                            @if($dc->is_active == 1)
                              <form action="{{route('admin.suspend-account')}}" method="post">
                                  {{csrf_field()}}
                                <input type="text" value="dc" name="unit" style="display: none;">
                                <input type="text" value="{{$dc->email}}" name="suspend_dc" style="display: none;">
                                <button type="submit" class="btn btn-outline-warning btn-sm">Suspend</button>
                              </form>
                              <!-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalCenter"
                                  id="#modalCenter">Suspend</button> -->
                            @else
                              <form action="{{route('admin.restore-account')}}" method="post">
                                  {{csrf_field()}}
                                <input type="text" value="dc" name="unit" style="display: none;">
                                <input type="text" value="{{$dc->email}}" name="restore_dc" style="display: none;">
                                <button type="submit" class="btn btn-outline-info btn-sm">Restore</button>
                              </form>
                            @endif
                          </td>
                          <td>
                            <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                            data-target="#exampleModalScrollable" id="#modalScroll">Remove</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tbody>
                        @foreach($infm as $inf)
                        <tr>
                          <td>{{$inf->email}}</td>
                          <td>{{$inf->name}}</td>
                          <td>Infrastructure Manager</td>
                          <td>
                            @if($inf->is_active == 1)
                              Active
                            @else
                              Inactive
                            @endif
                          </td>
                          <td>
                            @if($inf->is_active == 1)
                              <form action="{{route('admin.suspend-account')}}" method="post">
                                  {{csrf_field()}}
                                <input type="text" value="inf" name="unit" style="display: none;">                                
                                <input type="text" value="{{$inf->email}}" name="suspend_inf" style="display: none;">
                                <button type="submit" class="btn btn-outline-warning btn-sm">Suspend</button>
                              </form>
                              <!-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalCenter"
                                  id="#modalCenter">Suspend</button> -->
                            @else
                              <form action="{{route('admin.restore-account')}}" method="post">
                                  {{csrf_field()}}
                                <input type="text" value="inf" name="unit" style="display: none;">
                                <input type="text" value="{{$inf->email}}" name="restore_inf" style="display: none;">
                                <button type="submit" class="btn btn-outline-info btn-sm">Restore</button>
                              </form>
                            @endif
                          </td>
                          <td>
                            <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                            data-target="#exampleModalScrollable" id="#modalScroll">Remove</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tbody>
                        @foreach($dcas as $dca)
                        <tr>
                          <td>{{$dca->email}}</td>
                          <td>{{$dca->name}}</td>
                          <td>Data Center Admin</td>
                          <td>
                            @if($dca->is_active == 1)
                              Active
                            @else
                              Inactive
                            @endif
                          </td>
                          <td>
                            @if($dca->is_active == 1)
                              <form action="{{route('admin.suspend-account')}}" method="post">
                                  {{csrf_field()}}
                                <input type="text" value="dca" name="unit" style="display: none;">
                                <input type="text" value="{{$dca->email}}" name="suspend_dca" style="display: none;">
                                <button type="submit" class="btn btn-outline-warning btn-sm">Suspend</button>
                              </form>
                              <!-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalCenter"
                                  id="#modalCenter">Suspend</button> -->
                            @else
                              <form action="{{route('admin.restore-account')}}" method="post">
                                  {{csrf_field()}}
                                <input type="text" value="dca" name="unit" style="display: none;">
                                <input type="text" value="{{$dca->email}}" name="restore_dca" style="display: none;">
                                <button type="submit" class="btn btn-outline-info btn-sm">Restore</button>
                              </form>
                            @endif
                          </td>
                          <td>
                            <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                            data-target="#exampleModalScrollable" id="#modalScroll">Remove</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>

                  
                  
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Suspend Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                Are you sure you want to suspend?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">No</button>
                                <button type="button" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>

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

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>