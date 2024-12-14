<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta name="author" content="Wink Hosting (www.winkhosting.com)">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>MarkClass - A plataforma dinâmica que irá revolucionar o modo que seus horários escolares são gerenciados.</title>
    </head>
    <body>
        <div id="page" align="center">
            <div id="toppage" align="center">
                <div id="date">
                    <div class="smalltext" style="padding:13px;">
                        <strong>
                            <?php
                            include 'function.php';
                            session_start();
                            ola();
                            if (isset($_SESSION["Login"])) {
                                if ($_SESSION["Login"] == TRUE) {
                                    header("Location:semanas.php");
                                }
                            }
                            ?>
                        </strong>
                    </div>
                </div>
                <div id="topbar">
                    <div align="right" style="padding:12px;" class="smallwhitetext"><a href="index.php">Início</a> | <a href="sobre.php">Sobre</a> | <a href="contato.php">Contate-nos</a></div>
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
                    <div id="title" class="titletext" align="right">Acesse o MarkClass:</div>
                </div>
            </div>
            <div id="content" align="center">
                <div id="menu" align="right">
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_topshadow.gif" width="189" height="8" alt="mnutopshadow"></div>
                    <div id="linksmenu" align="center">
                        <a href="semanas.php" title="Inicio">Sou Aluno</a>
                        <a href="sobre.php" title="Sobre">Sobre</a>
                        <a href="contato.php" title="Contate-nos">Contate-nos</a>
                    </div>
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_bottomshadow.gif" width="189" height="8" alt="mnubottomshadow"></div>
                </div>
                <div id="contenttext">
                    <div class="bodytext" style="padding:12px;" align="justify">
                        <strong>Aqui você irá logar-se para ter acesso ao MarkClass e fazer alterações em seus horários.</strong><br><br>

                    </div>
                    <div class="panel" align="justify">
                        <form name="login" method="POST" action="valida_login.php">
                            <label><span style="font: 0.7em Tahoma, sans-serif; font-size:18px; font-weight:bold; color:#EE0000;">
                                    Matrícula Parcial:</span></label><br><span class="bodytext">(Os três números iniciais de sua matrícula de professor, exceto se você for o Profº Elton Valério. Se você for o Profº Elton Valério, entre com os 4 dígitos iniciais.)<span><br>
                                    <input pattern="[0-9]+$" type="text" name="login" placeholder="Ex: 000" required=""><br><br>
                                    <label><span style="font: 0.7em Tahoma, sans-serif; font-size:18px; font-weight:bold; color:#EE0000;">
                                            Senha:</span></span></label><br><span class="bodytext">(A senha padrão, se você não tiver a alterado, é "12345", sem as aspas.)<span><br>
                                        <input type="password" name="senha" placeholder="••••••••" required="required"><br><br>
                                        <input type="submit" value="Entrar" id="entrar" name="entrar"><br>
                                        </form>
                                        </div>
                                        </div>
                                        <div id="footer" class="smallgraytext" align="center">
                                            <a href="index.php">Início</a> | <a href="sobre.php">Sobre</a> | <a href="contato.php">Contate-nos</a><br>
                                            Daisy Inc. © 2017<br>
                                            <a href="http://www.winkhosting.com/" title="Hosting Colombia">Hosting Colombia</a><br>
                                        </div>
                                        </div>
                                        </body>
                                        </html>
