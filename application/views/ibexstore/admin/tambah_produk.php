<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/admin/img/apple-icon.png');?>">
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title><?= $title ?></title>

        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="<?php echo base_url('assets/admin/css/material-dashboard.css');?>" rel="stylesheet" />

        <!-- Custom styles for this page -->
        <link href="<?php echo base_url('assets/admin/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
    </head>

    <body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="white" data-image="<?php echo base_url('assets/admin/img/sidebar-1.jpg');?>">
        
        <div class="logo"><a href="<?php echo base_url(); ?>admin/dashboard" class="simple-text logo-normal">
            <img src="<?php echo base_url('assets/img/logo.png');?>" width="250px">
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url(); ?>admin/kategori">
                    <i class="material-icons">content_paste</i>
                    <p>Kategori Baju</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>admin/produk">
                    <i class="material-icons">content_paste</i>
                    <p>Produk</p>
                    </a>
                </li>
            </ul>
        </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="<?php echo base_url(); ?>admin/kategori">Kategori Baju</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo base_url(); ?>admin/logout" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i> Logout
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                <h1 class="h3 mb-2 text-gray-800"><i class="fa fa-plus"></i> Tambah Kategori</h1><br>

                    <?php form_open('admin/insert_produk'); ?>
                    <div class="card shadow mb-4 col-md-7" align="center">

                        <?php if (validation_errors()):?> 
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                        <?php endif ?>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-primary">
                            <h4 class="card-title">Produk Ibex Store</h4>
                            <p class="card-category">Lengkapi data produk</p>
                            </div>
                            <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordeless" width="70%" cellspacing="0" style="color: black">
                                        <tbody>
                                        <tr>
                                        <th>Gambar </th>
                                        <td>:</td>
                                        <td><input type="file" class="form-control" name="gambar" id="gambar"></td>
                                        </tr>
                                        <tr>
                                        <th>Nama </th>
                                        <td>:</td>
                                        <td><input type="text" class="form-control" name="nama" id="nama"></td>
                                        </tr>
                                        <tr>
                                        <th>Kategori JK </th>
                                        <td>:</td>
                                        <td>
                                        <select class="form-control" id="kategori_jk" name="kategori_jk">
                                            <?php foreach($kategori_jk as $key): ?>
                                            <option value="<?= $key['id_kategori'] ?>"selected><?= $key['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th>Kategori Baju </th>
                                        <td>:</td>
                                        <td>
                                        <select class="form-control" id="kategori_baju" name="kategori_baju">
                                            <?php foreach($kategori_baju as $key): ?>
                                            <option value="<?= $key['id_kategori'] ?>"selected><?= $key['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th>Harga </th>
                                        <td>:</td>
                                        <td><input type="text" class="form-control" name="harga" id="harga"></td>
                                        </tr>
                                        <tr>
                                        <th>Ukuran </th>
                                        <td>:</td>
                                        <td><input type="text" class="form-control" name="ukuran" id="ukuran"></td>
                                        </tr>
                                        <tr>
                                        <th>Keterangan </th>
                                        <td>:</td>
                                        <td>
                                            <textarea class="form-control" name="keterangan" id="keterangan"></textarea></td>
                                        </tr>

                                        <tr>
                                            <td colspan="3"><button type="submit" name="submit" class="btn btn-primary pull-right">Tambahkan</button></td>
                                        </tr>
                                        </div>
                                        <div class="clearfix"></div>
                                    </table>
                            </form>
                            </div>
                        </div>
                        </div>
                        </div>
                        <?php form_close(); ?>
                    </div>
                </div>
                <p text-danger><a href="<?php echo base_url(); ?>admin/produk"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a></p>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
            <div class="copyright float-right">
                &copy;
                <script>
                document.write(new Date().getFullYear())
                </script> <a href="<?php echo base_url(); ?>admin/dashboard"> Ibex Indonesia</a>
            </div>
            </div>
        </footer>
        </div>
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/admin/js/core/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/core/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/core/bootstrap-material-design.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/perfect-scrollbar.jquery.min.js');?>"></script>
    <!-- Plugin for the momentJs  -->
    <script src="<?php echo base_url('assets/admin/js/plugins/moment.min.js');?>"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="<?php echo base_url('assets/admin/js/plugins/sweetalert2.js');?>"></script>
    <!-- Forms Validations Plugin -->
    <script src="<?php echo base_url('assets/admin/js/plugins/jquery.validate.min.js');?>"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="<?php echo base_url('assets/admin/js/plugins/jquery.bootstrap-wizard.js');?>"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-selectpicker.js');?>"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-datetimepicker.min.js');?>"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="<?php echo base_url('assets/admin/js/plugins/jquery.dataTables.min.js');?>"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-tagsinput.js');?>"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="<?php echo base_url('assets/admin/js/plugins/jasny-bootstrap.min.js');?>"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="<?php echo base_url('assets/admin/js/plugins/fullcalendar.min.js');?>"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="<?php echo base_url('assets/admin/js/plugins/jquery-jvectormap.js');?>"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url('assets/admin/js/plugins/nouislider.min.js');?>"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../assets/js/plugins/arrive.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/admin/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/datatables/dataTables.bootstrap4.min.js');?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url('assets/admin/js/material-dashboard.js?v=2.1.2');?>" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                $('.fixed-plugin .dropdown').addClass('open');
            }

            }

            $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                event.stopPropagation();
                } else if (window.event) {
                window.event.cancelBubble = true;
                }
            }
            });

            $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
            }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-background-color', new_color);
            }
            });

            $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
                });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
                });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
            });

            $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
                }

                if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
                }

                background_image = true;
            } else {
                if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
                }

                if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
                }

                background_image = false;
            }
            });

            $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                md.misc.sidebar_mini_active = false;

                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
                }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
                clearInterval(simulateWindowResize);
            }, 1000);

            });
        });
        });
    </script>
    <script>
        $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

        });
    </script>
    </body>
</html>
