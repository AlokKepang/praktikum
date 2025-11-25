<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom CSS for Fast Interaction -->
    <style>
        /* Smooth and Fast Transitions */
        * {
            transition: all 0.15s ease-in-out !important;
        }

        /* Faster Sidebar Transitions */
        .sidebar .nav-link {
            transition: all 0.1s ease !important;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateX(3px);
        }

        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            border-left: 4px solid #fff;
        }

        /* Fast Button Hover Effects */
        .btn {
            transition: all 0.15s ease !important;
            transform: translateY(0);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .btn:active {
            transform: translateY(0);
        }

        /* Card Hover Effects */
        .card {
            transition: all 0.2s ease !important;
        }

        .card:hover {
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15) !important;
            transform: translateY(-3px);
        }

        /* Fast Table Row Hover */
        .table tbody tr {
            transition: all 0.1s ease !important;
        }

        .table tbody tr:hover {
            background-color: #f8f9fc;
            transform: scale(1.005);
        }

        /* Dropdown Fast Animation */
        .dropdown-menu {
            animation: slideDown 0.15s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Fast Modal Appearance */
        .modal.fade .modal-dialog {
            transition: transform 0.2s ease-out !important;
        }

        /* Sidebar Brand Hover */
        .sidebar-brand {
            transition: all 0.2s ease !important;
        }

        .sidebar-brand:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }

        /* Fast Topbar Animation */
        .topbar {
            transition: box-shadow 0.2s ease !important;
        }

        .topbar:hover {
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1) !important;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Loading State for Links */
        a.nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #fff;
            transition: width 0.2s ease;
        }

        a.nav-link:hover::after {
            width: 100%;
        }

        /* Fast Badge Animation */
        .badge {
            transition: all 0.15s ease !important;
        }

        .badge:hover {
            transform: scale(1.1);
        }

        /* Icon Rotation on Hover */
        .sidebar .nav-link:hover i {
            transform: scale(1.1) rotate(5deg);
        }

        /* Preload Prevention - Remove after page load */
        .preload-transitions * {
            transition: none !important;
        }
    </style>
</head>

<body id="page-top" class="preload-transitions">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.partials.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.partials.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/js/sb-admin-2.min.js"></script>

    <!-- Custom Script for Fast Interaction -->
    <script>
        $(document).ready(function() {
            // Remove preload class after page loads
            setTimeout(function() {
                $('body').removeClass('preload-transitions');
            }, 100);

            // Fast page transition effect
            $('.nav-link').on('click', function(e) {
                if ($(this).attr('href').indexOf('http') === -1 && $(this).attr('href') !== '#') {
                    e.preventDefault();
                    var target = $(this).attr('href');
                    
                    // Add loading effect
                    $(this).find('i').addClass('fa-spin');
                    
                    // Fast fade out
                    $('#content').fadeOut(150, function() {
                        window.location.href = target;
                    });
                }
            });

            // Instant feedback on button clicks
            $('.btn').on('mousedown', function() {
                $(this).css('transform', 'scale(0.95)');
            }).on('mouseup mouseleave', function() {
                $(this).css('transform', 'scale(1)');
            });

            // Fast card interaction
            $('.card').hover(
                function() {
                    $(this).css('cursor', 'pointer');
                },
                function() {
                    $(this).css('cursor', 'default');
                }
            );

            // Smooth sidebar toggle
            $('#sidebarToggle, #sidebarToggleTop').on('click', function() {
                $('.sidebar').toggleClass('toggled');
            });

            // Add ripple effect to buttons
            $('.btn').on('click', function(e) {
                var ripple = $('<span class="ripple"></span>');
                $(this).append(ripple);
                
                var x = e.pageX - $(this).offset().left;
                var y = e.pageY - $(this).offset().top;
                
                ripple.css({
                    left: x + 'px',
                    top: y + 'px'
                }).addClass('animate');
                
                setTimeout(function() {
                    ripple.remove();
                }, 600);
            });
        });
    </script>

    <style>
        /* Ripple Effect */
        .btn {
            position: relative;
            overflow: hidden;
        }

        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            width: 10px;
            height: 10px;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        .ripple.animate {
            animation: ripple-animation 0.6s ease-out;
        }

        @keyframes ripple-animation {
            to {
                transform: translate(-50%, -50%) scale(20);
                opacity: 0;
            }
        }
    </style>

    @yield('scripts')
</body>
</html>