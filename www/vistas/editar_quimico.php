<?php
    include('../globals.php');
    session_start();
    $session = $_SESSION['usuario'];
    if (!isset($session)) {
        header("Location: login.php");
        exit();
    }
    $is_admin = $_SESSION['admin'];
    $hide_sidebar = TRUE;
?>

<?php include('parts/p_body_head.php'); ?>

    <?php include('editar_quimico_content.php'); ?>

<?php include('parts/p_body_tail.php'); ?>