<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Member</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        /* Ensure the sidebar container has a white background */
        .navbar-nav.sidebar {
            background-color: #ffffff; /* Set background color to white */
            border-radius: 0 28px 28px 0;
            overflow: hidden;    /* Ensures content doesn't overflow the rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for a more polished look */
            border: 3px solid rgba(106, 103, 103, 0.2);
        }
    
        /* Override the gradient class to ensure the background is white */
        .navbar-nav.bg-gradient-danger.sidebar {
            background: transparent; /* Remove the gradient background */
        }
    
        /* Sidebar brand */
        .sidebar-brand {
            display: flex;
            flex-direction: column; /* Menyusun elemen secara vertikal */
            align-items: center;
            text-align: center;
        }
        .sidebar-brand-icon {
            margin-bottom: 0.5rem; /* Jarak antara gambar dan teks */
        }

        .sidebar-brand-text {
            font-size: 0.75rem; /* Ukuran teks yang lebih kecil */
            color: #000; /* Warna teks */
        }    

        /* Sidebar links */
        .nav-item {
            margin-bottom: 0.1rem;
        }

        .nav-link {
            color: #000 !important; /* Text color for nav links */
            padding: 0.75rem 1.25rem; /* Adjust padding for better spacing */
            border-radius: 0.375rem; /* Rounded corners for links */
            display: flex;
            align-items: center;
            transition: background-color 0.3s, color 0.3s; /* Smooth transition */
        }
        .nav-link:hover {
            background-color: #add8e6; /* Soft blue background on hover */
            color: #000 !important;
            text-align: center; /* Center the text */
            padding: 5px; /* Optional: Add padding for better appearance */
        }
        .nav-link.active {
            background-color: #e9ecef; /* Background for active link */
            color: #000 !important;
        }
    
        /* Sidebar headings */
        .sidebar-heading {
            font-size: 0.75rem;
            text-transform: uppercase;
            color: #000 !important; /* Ensures heading color */
        }
    
        /* Collapse menu */
        .collapse-inner .collapse-header,
        .collapse-item {
            color: #000 !important; /* Text color for collapse items */
        }
        
        /* Divider */
        .sidebar-divider {
            border-top: 1px solid #dee2e6;
            margin: 1rem 0;
        }
    
        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .navbar-nav.sidebar {
                border-radius: 0; /* Remove border radius on small screens */
            }
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex flex-column align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon mb-2">
                    <!-- Logo gambar -->
                    <img src="{{ asset('img/kanitra2.png') }}" alt="Logo" class="logo" style="width: 175px; height: auto;">
                </div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Garis horizontal yang lebih jelas -->
            <hr style="border: 2px solid rgba(0, 0, 139, 0.5); width: 100%; margin: 0.5rem auto; ">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/" style="color: rgba(0, 0, 139, 0.7); font-weight: bold;">
                    <img src="{{ asset('img/dasbor.png') }}" alt="Dashboard Icon" style="height: 20px; width: 20px; margin-right: 8px;">
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Nav Item - Components -->
            <li class="nav-item">
                <a class="nav-link" href="transaksi" style="color: rgba(0, 0, 139, 0.7); font-weight: bold;">
                    <img src="{{ asset('img/transaksi.png') }}" alt="Transaksi Icon" style="height: 20px; width: 20px; margin-right: 8px;">
                    <span>Transaksi</span>
                </a>
            </li>

            <!-- Nav Item - Utilities -->
            <li class="nav-item">
                <a class="nav-link" href="utilities.html" style="color: rgba(0, 0, 139, 0.7); font-weight: bold;">
                    <img src="{{ asset('img/simpanan.png') }}" alt="Simpanan Icon" style="height: 20px; width: 20px; margin-right: 8px;">
                    <span>Simpanan</span>
                </a>
            </li>

            <!-- Nav Item - Pages -->
            <li class="nav-item">
                <a class="nav-link" href="pages.html" style="color: rgba(0, 0, 139, 0.7); font-weight: bold;">
                    <img src="{{ asset('img/pinjaman.png') }}" alt="Pinjaman Icon" style="height: 20px; width: 20px; margin-right: 8px;">
                    <span>Pinjaman</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html" style="color: rgba(0, 0, 139, 0.7); font-weight: bold;">
                    <img src="{{ asset('img/tabungan.png') }}" alt="Tabungan Qurban Icon" style="height: 20px; width: 20px; margin-right: 8px;">
                    <span>Tabungan Qurban</span>
                </a>
            </li>
                
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        
            <!-- Additional sections can be added here -->
        </ul>
        

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            @include('components.navbar')
            {{$slot}}

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>