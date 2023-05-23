<?php
    include('../globals.php');
    session_start();
    $session = $_SESSION['usuario'];
    if (!isset($session)) {
        header("Location: login.php");
        exit();
    }
    $is_admin = $_SESSION['admin'];
?>

<?php include('parts/p_body_head.php'); ?>

    <?php include('quimicos.php'); ?>

<?php include('parts/p_body_tail.php'); ?>