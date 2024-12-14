<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta name="author" content="Wink Hosting (www.winkhosting.com)">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>MarkClass - Semanas</title>
    </head>
    <body>
        <div id="page" align="center">
            <div id="toppage" align="center">
                <div id="date">
                    <div class="smalltext" style="padding:13px;">
                        <strong>
                            <?php
                            session_start();
                            include 'function.php';
                            ola();
                            ?>
                        </strong>
                    </div>
                </div>
                <div id="topbar">
                    <div align="right" style="padding:12px;" class="smallwhitetext"><?php
                        $es = "<a href='login.php' title='Login'>Acesse o MarkClass</a> | ";
                        $pr = "<a href='valida_mc.php?sair' title='Sair'>Sair</a> | ";
                        priv($pr, $es);
                        ?><a href="sobre.php">Sobre</a> | <a href="contato.php">Contate-nos</a></div>
                </div>
            </div>
            <div id="header" align="center">
                <div class="titletext" id="logo">
                    <a href="index.php">
                        <div class="logotext" style="margin:12px;padding-top:15px;color: #556B2F;">Mark<span style="font: 0.7em Tahoma, sans-serif;font-size:36px;font-weight:bold;color:#EE0000;">Class</span>
                        </div> 
                    </a>
                </div>
                <div id="pagetitle">
                    <div id="title" class="titletext" align="right">Semanas</div>
                </div>
            </div>
            <div id="content" align="center">
                <div id="menu" align="right">
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_topshadow.gif" width="189" height="8" alt="mnutopshadow"></div>
                    <div id="linksmenu" align="center"><?php
                        $pro4 = "<a href='cadastro.php'>Deseja alterar sua senha?</a> ";
                        $est4 = "<a href='index.php'>Retornar</a>";
                        priv($pro4, $est4);
                        ?>
                        <a href="sobre.php" title="Sobre">Sobre</a>
                        <a href="contato.php" title="Contate-nos">Contate-nos</a>
                    </div>
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_bottomshadow.gif" width="189" height="8" alt="mnubottomshadow"></div>
                </div>
                <div id="contenttext">
                    <div class="bodytext" style="padding:12px;" align="justify">
                        <strong><?php
                            $pro6 = "Aqui você escolhe em qual semana gostaria de marcar uma falta ou procurar horários vagos.";
                            $est6 = "Aqui você confere como estão seus horários acadêmicos de acordo com as alterações feitas pelos professores em cada semana.";
                            priv($pro6, $est6);
                            ?>
                        </strong><br><br>

                    </div>
                    <div class="panel" align="justify"><div id="links_menu" align="justify"><br>
                            <a href="markclass.php?semana=1" title="De 27 até 31 de Março">De 27 até 31 de Março</a><br><br>
                            <a href="markclass.php?semana=2" title="De 3 até 7 de Abril">De 03 até 07 de Abril</a><br><br>
                            <a href="markclass.php?semana=3" title="De 10 até 14 de Abril">De 10 até 14 de Abril</a><br><br>
                            <a href="markclass.php?semana=4" title="De 17 até 21 de Abril">De 17 até 21 de Abril</a>
                        </div></div>
                </div>
                <div id="footer" class="smallgraytext" align="center">
                    <a href="login.php">Acesse o MarkClass</a> | <a href="sobre.php">Sobre</a> | <a href="contato.php">Contate-nos</a><br>
                    Daisy Inc. © 2017<br>
                    <a href="http://www.winkhosting.com/" title="Hosting Colombia">Hosting Colombia</a><br>
                </div>
            </div>
    </body>
</html>
