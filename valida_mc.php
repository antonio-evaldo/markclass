<?php

if (isset($_GET["sair"])) {
    session_start();
    $_SESSION["Login"] = FALSE;
    header("Location:login.php");
} elseif (isset($_POST["salvar"])) {
    if (!isset($_POST["vagar"]) && !isset($_POST["pegar"])) {
        echo "<script language='javascript' type='text/javascript'>alert('Nenhuma entrada recebida.');window.location.href = 'markclass.php';</script>";
        die();
    } else {
        session_start();
        include 'function.php';
        $link = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_select_db($link, "markclass");
        if (isset($_POST["pegar"])) {
            $pegos = $_POST["pegar"];
            pegar($pegos, $link);
        }
        if (isset($_POST["vagar"])) {
            $vagos = $_POST["vagar"];
            vagar($vagos, $link);
        }
        header("Location:markclass.php");
    }
}


