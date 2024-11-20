<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ZakkSpace LMS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Base Styles */
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        .container-fluid {
            padding-top: 20px;
        }

        /* Section Cards */
        .bg-secondary {
            background-color: #f8f9fa !important; /* Secondary background for the cards */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .rounded {
            border-radius: 10px; /* Rounded corners for the cards */
        }

        .text-black {
            color: black;
        }

        .text-success {
            color: #28a745 !important; /* Green color for success */
        }

        .text-warning {
            color: #ffc107 !important; /* Yellow for warning */
        }

        .text-danger {
            color: #dc3545 !important; /* Red for danger */
        }

        .p-4 {
            padding: 20px !important;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        /* Icon Styling */
        .fa-3x {
            font-size: 2rem;
        }

        /* Adjustments for the stat cards */
        .stat-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .ms-3 {
            margin-left: 1rem;
        }

        .stat-text {
            text-align: left;
        }
    </style>



</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar custom-black navbar-dark">
                <a href="{{ route('adminDashboard') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-success"><i class="fa fa-user-shield me-2"></i>ZakkSpace</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/ZakkSpaceLogo.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-dark">ZakkSpace LMS</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('adminDashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-lock me-2"></i>Manage Lockers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route ('addLockers') }}" class="dropdown-item">Add Lockers</a>
                            <a href="viewlocker.html" class="dropdown-item">View Lockers</a>
                            <a href="assignlocker.html" class="dropdown-item">Assign Lockers</a>
                        </div>
                    </div>
                    <a href="{{ route ('overdues') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Overdues</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Payment</a>
                    <a href="{{ route ('transactions') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Transaction</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>New Feature</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand custom-white navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-success mb-0"><i class="fa fa-user-shield"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler bg-white flex-shrink-0">
                    <i class="fa fa-bars" style="color: var(--black);"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-white border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/ZakkSpaceLogo.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/ZakkSpaceLogo.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/ZakkSpaceLogo.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">ZakkSpace</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route ('welcome') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


        
    <!-- Dashboard Section -->
    <div class="container-fluid pt-4 px-4 text-black">
        <div class="row g-4">
            <!-- Students Card -->
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-users fa-3x text-success"></i>
                    <div class="ms-3">
                        <p class="mb-2 stat-text">Students</p>
                        <h6 class="mb-0 text-black">34</h6>
                    </div>
                </div>
            </div>

            <!-- Lockers Card -->
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-lock fa-3x text-success"></i>
                    <div class="ms-3">
                        <p class="mb-2 stat-text">Lockers</p>
                        <h6 class="mb-0 text-black">76</h6>
                    </div>
                </div>
            </div>

            <!-- Income Card -->
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-coins fa-3x text-warning"></i>
                    <div class="ms-3">
                        <p class="mb-2 stat-text ">Income</p>
                        <h6 class="mb-0 text-black">69</h6>
                    </div>
                </div>
            </div>

            <!-- Overdues Card -->
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-credit-card fa-3x text-danger"></i>
                    <div class="ms-3">
                        <p class="mb-2 stat-text">Overdues</p>
                        <h6 class="mb-0 text-black">P1234</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
          
            <!-- Sales Chart End -->


            <!-- Transaction History Start -->
          

  <style>
    /* Base styles */
    body {
      background-color: #f8f9fa; /* Light background color for the body */
    }

    .container {
      max-width: 1200px; /* Wider layout */
      margin-top: 50px;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #28a745; /* Green color */
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }

    /* Table Styles */
    .table {
      background-color: white;
      color: #343a40;
      margin-top: 20px;
    }

    .table thead {
      background-color: #28a745; /* Green background for table header */
      color: white;
    }

    .badge {
      background-color: #28a745;
      color: white;
    }

    .badge.bg-secondary {
      background-color: #6c757d; /* Grey for secondary badge */
    }

    .badge.bg-danger {
      background-color: #dc3545; /* Red for 'Unpaid' status */
    }

    /* Table footer inside the table */
    .footer-row {
      background-color: white; /* Gray background for footer row */
      color: black;
    }

    .footer-row td {
      text-align: center;
      font-size: 14px;
    }
  </style>


<!-- Locker Management Section -->
<div class="container">
<div class="d-flex justify-content-center align-items-center mb-4 position-relative">
    <h2 class="mb-0">Transaction History</h2>
    <a href="{{ route('transactions') }}" class="btn btn-link position-absolute" style="color: var(--green); right: 0; top: 50%; transform: translateY(-50%);">Show All</a>
</div>


  <!-- Locker Overview Table -->
  <table class="table text-start align-middle table-bordered table-hover mb-0">
    <thead>
      <tr class="text-white">
        <th scope="col">Locker ID</th>
        <th scope="col">Locker Number</th>
        <th scope="col">Status</th>
        <th scope="col">Last Name</th>
        <th scope="col">First Name</th>
        <th scope="col">Program</th>
        <th scope="col">Year</th>
        <th scope="col">Set</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>LK-001</td>
        <td>101</td>
        <td><span class="badge bg-danger">Occupied</span></td>
        <td>Doe</td>
        <td>John</td>
        <td>Computer Science</td>
        <td>3rd Year</td>
        <td>Set A</td>
        <td>john.doe@example.com</td>
      </tr>
      <tr>
        <td>LK-002</td>
        <td>102</td>
        <td><span class="badge bg-success">Available</span></td>
        <td>Smith</td>
        <td>Jane</td>
        <td>Engineering</td>
        <td>2nd Year</td>
        <td>Set B</td>
        <td>jane.smith@example.com</td>
      </tr>
      <tr>
        <td>LK-003</td>
        <td>103</td>
        <td><span class="badge bg-danger">Occupied</span></td>
        <td>Johnson</td>
        <td>Mark</td>
        <td>Business</td>
        <td>4th Year</td>
        <td>Set C</td>
        <td>mark.johnson@example.com</td>
      </tr>
      <tr>
        <td>LK-004</td>
        <td>104</td>
        <td><span class="badge bg-success">Available</span></td>
        <td>Lee</td>
        <td>Chris</td>
        <td>Information Technology</td>
        <td>1st Year</td>
        <td>Set A</td>
        <td>chris.lee@example.com</td>
      </tr>
      <tr>
        <td>LK-005</td>
        <td>105</td>
        <td><span class="badge bg-danger">Occupied</span></td>
        <td>Brown</td>
        <td>Emily</td>
        <td>Mathematics</td>
        <td>3rd Year</td>
        <td>Set B</td>
        <td>emily.brown@example.com</td>
      </tr>

      <!-- Footer Row inside the table -->
      <tr class="footer-row">
        <td colspan="9">
          &copy; <a href="#" style="color: #28a745;">ZakkSpace</a>, All Rights Reserved. <br>
          Designed by <a href="#" style="color: #28a745;">Zakk</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
              
            <!-- Recent Sales End -->

            <!-- Footer Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#"style="color: var(--green);">ZakkSpace</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="#" style="color: var(--green);">Zakk</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Footer End -->
        <!-- </div> -->
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>