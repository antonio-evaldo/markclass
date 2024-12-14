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
                            session_start();
                            include 'function.php';
                            ola ();
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
                    <div id="title" class="titletext" align="right">Contate-nos!</div>
                </div>
            </div>
            <div id="content" align="center">
                <div id="menu" align="right">
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_topshadow.gif" width="189" height="8" alt="mnutopshadow"></div>
                    <div id="linksmenu" align="center">
                        <a href="login.php" title="Login">Acesse o MarkClass</a>
                        <a href="sobre.php" title="Sobre">Sobre</a>
                        <a href="contato.php" title="Contate-nos">Contate-nos</a>
                    </div>
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_bottomshadow.gif" width="189" height="8" alt="mnubottomshadow"></div>
                </div>
                <div id="contenttext">
                    <div class="bodytext" style="padding:12px;" align="justify">
                        <strong>Gostaria de reportar qualquer problema? Quer nos conhecer melhor? Alguma dúvida a respeito do site? Não hesite em no contatar através dos seguintes meios:</strong><br><br>

                    </div>
                    <div class="panel" align="justify">
                        <span style="font: 0.7em Tahoma, sans-serif; font-size:18px; font-weight:bold; color:#EE0000;">
                            Gmail:</span><span style="font: 0.7em Tahoma, sans-serif; font-size: 15px; color: #666666;">
                            <br>antonio.evaldo349@gmail.com<br>ghpjjj@gmail.com<br><br></span>
                        <span style="font: 0.7em Tahoma, sans-serif; font-size:18px; font-weight:bold; color:#EE0000;">
                            Hotmail:</span><span style="font: 0.7em Tahoma, sans-serif; font-size: 15px; color: #666666;">
                            <br>antonio_evaldo1@hotmail.com<br>ghpjjj@hotmail.com<br></span>
                    </div>
                </div>
                <div id="footer" class="smallgraytext" align="center">
                    <a href="login.php">Acesse o MarkClass</a> | <a href="sobre.php">Sobre</a> | <a href="contato.php">Contate-nos</a><br>
                    Daisy Inc. © 2017<br>
                    <a href="http://www.winkhosting.com/" title="Hosting Colombia">Hosting Colombia</a><br>
                </div>
            </div>
    </body>
</html>
