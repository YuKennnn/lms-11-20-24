<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

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
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            /* Wider layout */
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .table {
            background-color: white;
            color: #343a40;
            margin-top: 20px;
        }

        .table thead {
            background-color: #28a745;
            color: white;
        }

        .badge {
            background-color: #28a745;
            color: white;
        }

        .badge.bg-secondary {
            background-color: #6c757d;
        }

    </style>


</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{ route('adminDashboard') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('adminDashboard') }}" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Manage Lockers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route ('addLockers') }}" class="dropdown-item">Add Lockers</a>
                            <a href="" class="dropdown-item">View Lockers</a>
                            <a href="" class="dropdown-item">Assign Lockers</a>
                        </div>
                    </div>
                    <a href="{{ route ('overdues') }}" class="nav-item nav-link active"><i
                            class="fa fa-th me-2"></i>Overdues</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Payment</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Transaction</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>New Feature</a>

                </div>
        </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="{{ route('adminDashboard') }}" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-dark border-0" type="search" placeholder="Search">
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
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
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
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">John Doe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <style>
            body {
                background-color: #f8f9fa;
            }

            .container {
                max-width: 800px;
                /* Wider layout */
                margin-top: 50px;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            .table {
                background-color: white;
                color: #343a40;
                margin-top: 20px;
            }

            .table thead {
                background-color: #28a745;
                color: white;
            }

            .badge {
                background-color: #28a745;
                color: white;
            }

            .badge.bg-secondary {
                background-color: #6c757d;
            }

        </style>

        <div class="container">
            <h2 class="text-center" style="color: #28a745; font-weight: bold;">Overdue Lockers</h2>

            <!-- Overdues Table -->
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">Student Name</th>
                        <th scope="col">Locker ID</th>
                        <th scope="col">Overdue Amount</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>LK-101</td>
                        <td>$25.00</td>
                        <td><span class="badge">Unpaid</span></td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>LK-102</td>
                        <td>$10.00</td>
                        <td><span class="badge bg-secondary">Paid</span></td>
                    </tr>
                    <tr>
                        <td>Alex Johnson</td>
                        <td>LK-103</td>
                        <td>$15.00</td>
                        <td><span class="badge">Unpaid</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        <table class="table table-bordered text-dark fw-bold">
    <thead>
        <tr>
            <th>Locker ID</th>
            <th>Locker Number</th>
            <th>Status</th>
            <th>Student Last Name</th>
            <th>Student First Name</th>
            <th>Student Middle Name</th>
            <th>Student ID</th>
            <th>Course</th>
            <th>Year</th>
            <th>Set</th>
            <th>Email Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody id="lockerTableBody">
        <!-- Locker rows will be added here dynamically -->
    </tbody>
</table>
</div>

<script>
    let lockers = [];
    let lockerId = 100;
    let editingLockerId = null; // To track the locker being edited

    document.getElementById('lockerForm').addEventListener('submit', function (event) {
        event.preventDefault();
        const lockerNumber = document.getElementById('lockerNumber').value;
        const lockerStatus = document.getElementById('lockerStatus').value;
        const studentLastName = document.getElementById('studentLastName').value;
        const studentFirstName = document.getElementById('studentFirstName').value;
        const studentMiddleName = document.getElementById('studentMiddleName').value;
        const studentId = document.getElementById('studentId').value;
        const course = document.getElementById('course').value;
        const year = document.getElementById('year').value;
        const set = document.getElementById('set').value;
        const email = document.getElementById('email').value;

        // Check for duplicate locker number
        if (lockers.some(locker => locker.number === lockerNumber && locker.id !== editingLockerId)) {
            showError("Locker number must be unique. Please select a different number.");
            return;
        } else {
            hideError();
        }

        if (editingLockerId) {
            updateLocker(editingLockerId, lockerNumber, lockerStatus, studentLastName, studentFirstName,
                studentMiddleName, studentId, course, year, set, email);
        } else {
            addLocker(lockerNumber, lockerStatus, studentLastName, studentFirstName, studentMiddleName,
                studentId, course, year, set, email);
        }

        this.reset();
        editingLockerId = null; // Reset after submission
    });

    function addLocker(number, status, studentLastName, studentFirstName, studentMiddleName, studentId, course,
        year, set, email) {
        lockers.push({
            id: lockerId++,
            number,
            status,
            studentLastName,
            studentFirstName,
            studentMiddleName,
            studentId,
            course,
            year,
            set,
            email
        });
        renderLockers();
    }

    function renderLockers() {
        const tbody = document.getElementById('lockerTableBody');
        tbody.innerHTML = '';
        lockers.forEach(locker => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                            <td>${locker.id}</td>
                            <td>${locker.number}</td>
                            <td>${locker.status}</td>
                            <td>${locker.studentLastName}</td>
                            <td>${locker.studentFirstName}</td>
                            <td>${locker.studentMiddleName}</td>
                            <td>${locker.studentId}</td>
                            <td>${locker.course}</td>
                            <td>${locker.year}</td>
                            <td>${locker.set}</td>
                            <td>${locker.email}</td>
                            <td class="table-actions">
                                <button class="btn btn-info btn-sm" onclick="editLocker(${locker.id})">Edit</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteLocker(${locker.id})">Delete</button>
                            </td>`;
            tbody.appendChild(tr);
        });
    }

    function editLocker(id) {
        const locker = lockers.find(l => l.id === id);
        if (locker) {
            document.getElementById('lockerNumber').value = locker.number;
            document.getElementById('lockerStatus').value = locker.status;
            document.getElementById('studentLastName').value = locker.studentLastName;
            document.getElementById('studentFirstName').value = locker.studentFirstName;
            document.getElementById('studentMiddleName').value = locker.studentMiddleName;
            document.getElementById('studentId').value = locker.studentId;
            document.getElementById('course').value = locker.course;
            document.getElementById('year').value = locker.year;
            document.getElementById('set').value = locker.set;
            document.getElementById('email').value = locker.email;
            editingLockerId = id; // Set the ID of the locker being edited
        }
    }

    function updateLocker(id, number, status, studentLastName, studentFirstName, studentMiddleName, studentId,
        course, year, set, email) {
        const locker = lockers.find(l => l.id === id);
        if (locker) {
            locker.number = number;
            locker.status = status;
            locker.studentLastName = studentLastName;
            locker.studentFirstName = studentFirstName;
            locker.studentMiddleName = studentMiddleName;
            locker.studentId = studentId;
            locker.course = course;
            locker.year = year;
            locker.set = set;
            locker.email = email;
            renderLockers();
        }
    }

    function deleteLocker(id) {
        lockers = lockers.filter(l => l.id !== id);
        renderLockers();
    }

    function showError(message) {
        const errorAlert = document.getElementById('errorAlert');
        errorAlert.textContent = message;
        errorAlert.style.display = 'block'; // Show the alert
    }

    function hideError() {
        const errorAlert = document.getElementById('errorAlert');
        errorAlert.style.display = 'none'; // Hide the alert
    }

</script>





        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>