<?php

session_start();

$materia = $_SESSION['materia'];

$senha = $_POST['senha'];
$senha1 = $_POST['nsenha1'];
$senha2 = $_POST['nsenha2'];
if ($senha1 == $senha2) {
    if (strlen($senha1) >= 5) {
        $con = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_select_db($con, "markclass");
        $v = mysqli_query($con, "SELECT * FROM materia WHERE nome = '$materia' AND senha = '$senha'") or die("erro ao selecionar");

        if (mysqli_num_rows($v) == 0) {
            echo"<script language='javascript' type='text/javascript'>alert('Senha incorreta.');window.location.href='cadastro.php';</script>";
            die();
        } else {
            $rs = "UPDATE materia SET senha='$senha1' WHERE nome = '$materia'";
            mysqli_query($con, $rs);
            echo"<script language='javascript' type='text/javascript'>alert('Senha alterada com sucesso!');window.location.href='markclass.php';</script>";
        }
    } else {
        echo"<script language='javascript' type='text/javascript'>alert('A nova senha deve ter no mínimo 5 caracteres.');window.location.href='cadastro.php';</script>";
    }
} else {
    echo"<script language='javascript' type='text/javascript'>alert('As senhas não correspondem.');window.location.href='cadastro.php';</script>";
}