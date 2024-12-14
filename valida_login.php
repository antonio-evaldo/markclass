<?php

session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];

$link = mysqli_connect("localhost", "root", "") or die(mysql_error());
mysqli_select_db($link, "markclass");
$query = "SELECT * FROM materia WHERE hpm = '$login' AND senha = '$senha'";

$k = mysqli_query($link, $query) or die("erro ao selecionar");
if (mysqli_num_rows($k) == 0) {
    echo"<script language='javascript' type='text/javascript'>alert('Matrícula Parcial e/ou Senha incorretos');window.location.href='login.php';</script>";
    die();
} else {
    while ($row = mysqli_fetch_array($k)) {
        $value = $row['prof'];
        $materia = $row['nome'];
    }
    $_SESSION['value'] = $value;
    $_SESSION['materia'] = $materia;
    $_SESSION['Login'] = TRUE;
    header("Location:semanas.php");
}
mysqli_close($link);
