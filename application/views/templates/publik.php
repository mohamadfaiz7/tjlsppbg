<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= $title; ?> | APLIKASI TJLSP PURBALINGGA</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="assets/css/tjl.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/css/fonts.min.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Datepicker -->
<link href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

<!-- DataTables -->
<link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/vendor/datatables/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/vendor/datatables/responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/vendor/gijgo/css/gijgo.min.css" rel="stylesheet">
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

<style>
    #accordionSidebar,
    .topbar {
        z-index: 1;
    }
</style>
        
<!--



-->
    </head>
    
    <body>

        <main>

            


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <?= $contents; ?>

                </div>
                <!-- /.container-fluid -->


        </main>

        <footer class="site-footer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/js/click-scroll.js"></script>
        <script src="assets/js/animated-headline.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/custom.js"></script>

    </body>
</html>