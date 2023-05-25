<?php
    include('../globals.php');

    session_start();
    $session = $_SESSION['usuario'];
    // $user_id = $_SESSION['usuario'];

    if (!isset($session)) {
        header("Location: login.php");
        exit();
    }
    $is_admin = $_SESSION['admin'];
    $hide_sidebar = TRUE;

    // $conn = conectar();
    // $id=$_GET['id'];
    // $consultaClinicas="
    // SELECT
    //     *
    // FROM
    //     quimicos_perecederos
    // WHERE
    //     id = '$id'
    // ;
    // ";


    // $data = mysqli_query($conn, $consultaClinicas);
	// $row = mysqli_fetch_array($data);
?>


<?php include('parts/p_body_head.php'); ?>

    <?php include('editar_usuario_content.php'); ?>

<?php include('parts/p_body_tail.php'); ?>