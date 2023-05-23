
<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$APP_NAME?></title>
        <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" /> -->
        <link rel="stylesheet" href="../assets/css/styles.min.css" />


        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/plug-ins/1.13.4/sorting/datetime-moment.js" charset="utf-8"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <style>
            .dataTables_scroll {
                padding-top: 2rem;
            }
        </style>
        <?php
            if (isset($hide_sidebar)) {
                ?>
                <style>
                    #main-wrapper .body-wrapper {
                        margin-left: 0!important;
                    }
                </style>
                <?php
            }
        ?>
    </head>

    <body>
        <!--  Body Wrapper -->
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
            data-sidebar-position="fixed" data-header-position="fixed">

            <?php
                if (!isset($hide_sidebar)) {
                    include('parts/p_sidebar.php');
                }
            ?>

            <!--  Main wrapper -->
            <div class="body-wrapper">

                <?php include('parts/p_header_bar.php'); ?>
