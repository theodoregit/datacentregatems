<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="img/logo/cbe_logo.PNG" rel="icon">
        <title>Data Centre Gate Management System - CBE</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/ruang-admin.min.css" rel="stylesheet">

        <style>
            .rotate {
                animation: rotation 5s infinite linear;
            }

            @keyframes rotation {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(359deg);
                }
            }
        </style>
    </head>
    <body id="page-top">
    <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <!-- <img src="img/logo/cbe_logo.PNG"> -->
          <img src="img/logo/cbe_logo.png" class="rotate img-fluid rounded mx-auto d-block" alt="cbe logo">
        </div>
        <div class="sidebar-brand-text mx-3">DCGMS</div>
      </a>
      <hr class="sidebar-divider my-0">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li> -->
      <!-- <hr class="sidebar-divider"> -->
      <!-- <div class="sidebar-heading">
        Features
      </div> -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-link"></i>
          <span>Important Links</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Links</h6>
            <a class="collapse-item" href="#">IBM Control Desk <br> Service Portal</a>
            <a class="collapse-item" href="#">EDRMS Case Manager</a>
            <a class="collapse-item" href="#">Oracle Self Service</a>
            <a class="collapse-item" href="#">CBE Mail</a>
            <a class="collapse-item" href="#">CBE Public Website</a>
            <a class="collapse-item" href="#">T-24 | Sign in</a>
            <a class="collapse-item" href="#">Gieom| Sign in</a>
            <a class="collapse-item" href="#">Hyperion planning</a>
            <a class="collapse-item" href="#">EDRMS USER ACCESS</a>
            <a class="collapse-item" href="#">EDRMS Account <br> Opening Scanning</a>
            <a class="collapse-item" href="#">EDRMS Trade <br> Service Scanningg</a>
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
              <a class="btn btn-outline-secondary dropdown-toggle" style="color: #FFD700;" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                
                <strong>Login</strong>
                <!-- <span class="badge badge-danger badge-counter">3+</span> -->
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Login as ... 
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="{{route('login')}}">
                  <div class="mr-3">
                    Super Admin                   
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="{{route('unit-manager.login')}}">
                  <div class="mr-3">
                    IS Unit Manager
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="{{route('dc-manager.login')}}">
                  <div class="mr-3">
                    Data Centre Manager
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="{{route('inf-manager.login')}}">
                  <div class="mr-3">
                    Infrastructure Manager
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="{{route('dc-admin.login')}}">
                  <div class="mr-3">
                    Data Center Staff
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="{{route('dc-reception.login')}}">
                  <div class="mr-3">
                    Data Center Reception
                  </div>
                </a>
              </div>
            </li>
            
            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->            
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          </div>
            <!-- <marquee  behavior="scroll" direction="left">        
              <img src="img/logo/cbe_logo.png" class="rotate img-fluid rounded mx-auto d-block" alt="cbe logo">
            </marquee>   -->
        
            <!-- The image has scrolling behavior to the upper direction. -->
            <!-- <marquee  behavior="scroll" direction="up">         
              <img src="img/logo/cbe_logo.png" class="rotate img-fluid rounded mx-auto d-block" alt="cbe logo">
            </marquee> -->
          <div class="row">
            <div class="col-lg-4">
                <img src="img/dc.png" style="margin-top: 15%;" class="img-fluid rounded mx-auto d-block" alt="dc">
            </div>
            <div class="col-lg-1"></div><div class="topbar-divider d-none d-sm-block"></div>
            <div class="col-lg-5">
                <p class="text-center" style="margin-top: 25%;">
                                    <h5 class="text-center"><u>Data Centre Gate Management System</u></h5>
                                    <p class="text-center">
                                        This system automates the most traditional and cumbersome way of requesting
                                        physical access to CBE's data centres.
                                    </p>
                                    <p class="text-center">
                                        Unit Managers, Data Centre Manager, Infratructure Dirctor and Data Centre Staffs
                                        can use this system in their respective role.
                                    </p>
                                    
                </p>
            </div>

            <div class="col-lg-2"></div>
          </div>
          
          
             

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
        <!-- <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                        <button id="sidebarToggleTop" class="btn btn-link rounded-circle">
                            <img src="img/logo/cbe_logo.png" class="rotate img-fluid rounded mx-auto d-block" alt="cbe logo">
                        </button>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <strong> Login</strong><i class="fas fa-user fa-fw"></i>
                                </a>
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                    Login as ...
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>                                            
                                        </div>
                                        <div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"> IS Unit Manager</i>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"> Data Center Manager</i>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"> Infrastructure Manager</i>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"> Data Center Admin</i>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#"></a>
                            </div>
                            </li>      
                        </ul>
                    </nav>            
                    <div class="container-fluid" id="container-wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/dc.png" style="margin-top: 15%;" class="img-fluid rounded mx-auto d-block" alt="dc">
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5">
                                <p class="text-justify" style="margin-top: 25%;">
                                    Ambitioni dedisse scripsisse iudicaretur. 
                                    Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. 
                                    Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. 
                                    Petierunt uti sibi concilium totius Galliae in diem certam indicere. 
                                    Cras mattis iudicium purus sit amet fermentum.
                                </p>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
                                <b><a href="#" target="">cbe-sdc team</a></b>
                            </span>
                        </div>
                    </div>
                </footer>
            </div>
        </div> -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/ruang-admin.min.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="js/demo/chart-area-demo.js"></script>
    </body>
</html>
