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
                            ola ();
                            if ($_SESSION["Login"] == FALSE) {
                                header("Location:login.php");
                            }
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
                    <div id="title" class="titletext" align="right">Mude sua senha:</div>
                </div>
            </div>
            <div id="content" align="center">
                <div id="menu" align="right">
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_topshadow.gif" width="189" height="8" alt="mnutopshadow"></div>
                    <div id="linksmenu" align="center">
                        <a href="login.php" title="Login">Retornar</a>
                        <a href="sobre.php" title="Sobre">Sobre</a>
                        <a href="contato.php" title="Contate-nos">Contate-nos</a>
                    </div>
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_bottomshadow.gif" width="189" height="8" alt="mnubottomshadow"></div>
                </div>
                <div id="contenttext">
                    <div class="bodytext" style="padding:12px;" align="justify">
                        <strong>Aqui você irá registrar uma senha própria, substituindo a senha padrão, para incrementar a segurança de seu login. Esse processo também mudará sua senha própria, caso já tenha cadastrado uma.</strong><br>

                    </div>
                    <div class="panel" align="justify">
                        <form name="login" method="POST" action="valida_senha.php">
                            <label><span style="font: 0.7em Tahoma, sans-serif; font-size:16px; font-weight:bold; color:#EE0000;">
                                    Senha Atual:</span></label><br>
                                    <input type="password" name="senha" placeholder="••••••••" required="required"><br><br>
                            <label><span style="font: 0.7em Tahoma, sans-serif; font-size:16px; font-weight:bold; color:#EE0000;">
                                    Nova Senha:</span></label><br>
                                    <input type="password" name="nsenha1" placeholder="••••••••" required="required"><br><br>
                            <label><span style="font: 0.7em Tahoma, sans-serif; font-size:16px; font-weight:bold; color:#EE0000;">
                                    Redigitar a senha:</span></label><br>
                                    <input type="password" name="nsenha2" placeholder="••••••••" required="required"><br><br>
                            <input type="submit" value="Login" id="entrar" name="entrar"><br>
                        </form>
                    </div>
                </div>
                <div id="footer" class="smallgraytext" align="center">
                    <a href="login.php">Retornar</a> | <a href="sobre.php">Sobre</a> | <a href="contato.php">Contate-nos</a><br>
                    Daisy Inc. © 2017<br>
                    <a href="http://www.winkhosting.com/" title="Hosting Colombia">Hosting Colombia</a><br>
                </div>
            </div>
    </body>
</html>
