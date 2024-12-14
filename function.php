<?php

function ola() {
    if (isset($_SESSION['value'])) {
        $fn = explode(" ", $_SESSION['value']);
        $pro5 = "Olá, $fn[0]";
    } else {
        $pro5 = "Olá, Professor";
    }
    $est5 = "Olá, Visitante";
    priv($pro5, $est5);
}

function vagar($vagos, $link) {
    $n = count($vagos);
    switch ($n) {
        case 0:
            break;
        case 1:
            list($x) = $vagos;
            $rx = explode(" ", $x);
            $horario = array($rx[1]);
            $mate = array($rx[0]);
            break;
        case 2:
            list($x, $y) = $vagos;
            $rx = explode(" ", $x);
            $ry = explode(" ", $y);
            $horario = array($rx[1], $ry[1]);
            $mate = array($rx[0], $ry[0]);
            break;
        case 3:
            list($x, $y, $z) = $vagos;
            $rx = explode(" ", $x);
            $ry = explode(" ", $y);
            $rz = explode(" ", $z);
            $horario = array($rx[1], $ry[1], $rz[1]);
            $mate = array($rx[0], $ry[0], $rz[0]);
            break;
    }
    $m = $n - 1;
    $semana = $_SESSION["semana"];
    if (!empty($vagos)) {
        while ($m >= 0) {
            mysqli_query($link, "INSERT INTO alterados(materia,semana,horario,tipo) VALUES('$mate[$m]','$semana','$horario[$m]','v')");
            $m--;
        }
    }
}

function pegar($pegos, $link) {
    $p = count($pegos);
    $q = $p - 1;
    $semana = $_SESSION["semana"];
    $materia = $_SESSION["materia"];
    if (!empty($pegos)) {
        while ($q >= 0) {
            mysqli_query($link, "INSERT INTO alterados(materia,semana,horario,tipo) VALUES('$materia','$semana','$pegos[$q]','p')");
            $q--;
        }
    }
}

function check_a($mater, $horario) {
    $semana = $_SESSION["semana"];
    $link = mysqli_connect("localhost", "root", "") or die(mysql_error());
    mysqli_select_db($link, "markclass");

    $vago = mysqli_query($link, "SELECT * FROM alterados WHERE materia = '$mater' AND horario = '$horario' AND semana = '$semana' AND tipo = 'v'") or die(mysqli_error($link));
    $pego = mysqli_query($link, "SELECT * FROM alterados WHERE semana = '$semana' AND horario = '$horario' AND tipo = 'p'") or die(mysqli_error($link));

    $materia = $_SESSION['materia'];
    if (mysqli_num_rows($vago) != 0 || $mater == "VAGO") {
        if (mysqli_num_rows($pego) == 0) {
            echo "<input type='checkbox' name='pegar[]' value='$horario'>VAGO";
        } else {
            pego_a($pego, $materia, $horario);
        }
    } elseif ($mater != $materia) {
        if ($mater == "VAGO") {
            echo "<input type='checkbox' name='pegar[]' value='$horario'>VAGO";
        } else{
        echo $mater;
        }
    } elseif ($mater == $materia) {
        echo "<input type='checkbox' name='vagar[]' value='$materia $horario'>$materia";
    }
}

function pego_a($pego, $materia, $horario) {
    while ($row = mysqli_fetch_array($pego)) {
        if ($row['materia'] != $materia) {
            echo $row['materia'];
        } else {
            echo "<input type='checkbox' name='vagar[]' value='$materia $horario'>" . $row['materia'];
        }
    }
}

function check_b($mater, $horario) {
    $semana = $_SESSION["semana"];
    $link = mysqli_connect("localhost", "root", "") or die(mysql_error());
    mysqli_select_db($link, "markclass");

    $pego = mysqli_query($link, "SELECT * FROM alterados WHERE semana = '$semana' AND horario = '$horario' AND tipo = 'p'") or die(mysqli_error($link));

    $vago = mysqli_query($link, "SELECT * FROM alterados WHERE materia = '$mater' AND horario = '$horario' AND semana = '$semana' AND tipo = 'v'") or die(mysqli_error($link));

    if (mysqli_num_rows($vago) != 0) {
        if (mysqli_num_rows($pego) == 0) {
            echo "VAGO";
        } else {
            pego_b($pego);
        }
    } else {
        echo $mater;
    }
}

function pego_b($pego) {
    while ($row = mysqli_fetch_array($pego)) {
        echo $row['materia'];
    }
}

function check($mater, $horario) {
    if (isset($_SESSION["Login"])) {
        if ($_SESSION["Login"] == FALSE) {
            check_b($mater, $horario);
        } else {
            check_a($mater, $horario);
        }
    }
}

function priv($pro, $est) {
    if (isset($_SESSION["Login"])) {
        if ($_SESSION["Login"] == FALSE) {
            echo "$est";
        } else {
            echo "$pro";
        }
    }
}

function semana($sem) {
    switch ($sem) {
        case 1:
            $sema = "De 27 até 31 de Março";
            break;
        case 2:
            $sema = "De 03 até 07 de Abril";
            break;
        case 3:
            $sema = "De 10 até 14 de Abril";
            break;
        case 4:
            $sema = "De 17 até 21 de Abril";
            break;
    }
    echo "$sema";
}
