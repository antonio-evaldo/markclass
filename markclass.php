<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta name="author" content="Wink Hosting (www.winkhosting.com)">
        <link rel="shortcut icon" href="favicon.ico" >
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
                            if (isset($_GET["semana"])) {
                                $sem = $_GET['semana'];
                                $_SESSION["semana"] = $sem;
                            } else {
                                header("Location:semanas.php");
                            }
                            if (!isset($_SESSION['Login'])) {
                                $_SESSION['Login'] = FALSE;
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
                        <div class="logotext" style="margin:12px;padding-top:15px;">Mark<span style="font: 0.7em Tahoma, sans-serif;font-size:36px;font-weight:bold;color:#EE0000;">Class</span>
                        </div> 
                    </a>
                </div>
                <div id="pagetitle">
                    <div id="title" class="titletext" align="right"><?php
                        semana($sem);
                        ?></div>
                </div>
            </div>
            <div id="content" align="center">
                <div id="menu" align="right">
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_topshadow.gif" width="189" height="8" alt="mnutopshadow"></div>
                    <div id="linksmenu" align="center">
                        <?php
                        $pro4 = "<a href='cadastro.php'>Deseja alterar sua senha?</a>";
                        $est4 = "<a href='semanas.php'>Escolher outra semana</a>";
                        priv($pro4, $est4);
                        ?>
                        <a href="sobre.php" title="Sobre">Sobre</a>
                        <a href="contato.php" title="Contate-nos">Contate-nos</a>
                    </div>
                    <div align="right" style="width:189px; height:8px;"><img src="mnu_bottomshadow.gif" width="189" height="8" alt="mnubottomshadow"></div>
                </div>
                <div id="contenttext">
                    <div class="bodytext" style="padding:12px;" align="justify">
                        <strong>
                            Bem-vindo,  
                            <?php
                            if (isset($_SESSION['value'])) {
                                $est = "Estudante. Aqui você confere como está seu horário acadêmico de acordo com as mudanças feitas pelos professores.";
                                $pro = $_SESSION['value'] . ". Aqui você seleciona os horários vagos que deseja ocupar, seja repondo, seja adiantando aulas, ou selecione seus próprios horários para marcar uma ausência.";
                                priv($pro, $est);
                            } else {
                                $est = "Estudante. Aqui você confere como está seu horário acadêmico de acordo com as mudanças feitas pelos professores.";
                                $pro = "aqui você seleciona os horários vagos que deseja ocupar, seja repondo, seja adiantando aulas, ou selecione seus próprios horários para marcar uma ausência.";
                                priv($pro, $est);
                            }
                            ?>
                        </strong><br><br>
                    </div>
                    <div class="panel" align="justify" style='height:310px;'>
                        <table class=" table table--hover" height='50%' width='90%' border='1' cellspacing='0' cellpadding='1' align='center'>
                            <?php
                            $pro1 = "<form action='valida_mc.php' method='post' style='padding: 0px;margin: 0px;'>";
                            $est1 = "<br><br>";
                            priv($pro1, $est1);
                            ?>
                            <tbody><tr>
                                    <td width="22%" bgcolor="#CCCCCC"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">HORÁRIO</font></strong></div></td>
                                    <td width="90" bgcolor="#CCCCCC"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">2ª-FEIRA</font></strong></div></td>
                                    <td width="90" bgcolor="#CCCCCC"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">3ª-FEIRA</font></strong></div></td>
                                    <td width="90" bgcolor="#CCCCCC"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">4ª-FEIRA</font></strong></div></td>
                                    <td width="90" bgcolor="#CCCCCC"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">5ª-FEIRA</font></strong></div></td>
                                    <td width="90" bgcolor="#CCCCCC"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">6ª-FEIRA</font></strong></div></td>
                                </tr>
                                <tr>
                                    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>07:00~07:49</strong></font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="BIOLOGIA III - 60HRS"><?php
                                                check("BIOLOGIA", "1.1");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="FISICA 3 - 60HRS"><?php
                                                check("FISICA", "2.1");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="GEOGRAFIA 3 - 60HRS"><?php
                                                check("GEOGRAFIA", "3.1");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="INGLÊS III - 60HRS"><?php
                                                check("INGLES", "4.1");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="VAGO"><?php
                                                check("VAGO", "5.1");
                                                ?></div><br>
                                            </font></div></td>
                                </tr>
                                <tr>
                                    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>07:50~08:39</strong></font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="BIOLOGIA III - 60HRS"><?php
                                                check("BIOLOGIA", "1.2");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="FISICA 3 - 60HRS"><?php
                                                check("FISICA", "2.2");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="GEOGRAFIA 3 - 60HRS"><?php
                                                check("GEOGRAFIA", "3.2");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="INGLÊS III - 60HRS"><?php
                                                check("INGLES", "4.2");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="MATEMÁTICA III - 90HRS"><?php
                                                check("MATEMATICA", "5.2");
                                                ?></div><br>
                                            </font></div></td>
                                </tr>
                                <tr>
                                    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>08:40~09:29</strong></font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="MATEMÁTICA III - 90HRS"><?php
                                                check("MATEMATICA", "1.3");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="ENGENHARIA DE SOFTWARE - 60HRS"><?php
                                                check("EDS¹", "2.3");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="PROGRAMAÇÃO COMERCIAL 90H"><?php
                                                check("PC³", "3.3");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="SOCIOLOGIA III 30 HRS"><?php
                                                check("SOCIOLOGIA", "4.3");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="SISTEMAS OPERACIONAIS - 60HRS"><?php
                                                check("SO⁴", "5.3");
                                                ?></div><br>
                                            </font></div></td>
                                </tr>
                                <tr>
                                    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>09:40~10:29</strong></font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="MATEMÁTICA III - 90HRS"><?php
                                                check("MATEMATICA", "1.4");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="ENGENHARIA DE SOFTWARE - 60HRS"><?php
                                                check("EDS¹", "2.4");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="PROGRAMAÇÃO COMERCIAL 90H"><?php
                                                check("PC³", "3.4");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="PORTUGUÊS III - 90HRS"><?php
                                                check("PORTUGUES", "4.4");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="SISTEMAS OPERACIONAIS - 60HRS"><?php
                                                check("SO⁴", "5.4");
                                                ?></div><br>
                                            </font></div></td>
                                </tr>
                                <tr>
                                    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>10:30~11:19</strong></font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="HISTORIA 3 - 60HRS"><?php
                                                check("HISTORIA", "1.5");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="PROJETO DE BANCO DE DADOS - 60HRS"><?php
                                                check("PBD²", "2.5");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="PROGRAMAÇÃO COMERCIAL 90H"><?php
                                                check("PC³", "3.5");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="PORTUGUÊS III - 90HRS"><?php
                                                check("PORTUGUES", "4.5");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="QUÍMICA III - 60HRS"><?php
                                                check("QUIMICA", "5.5");
                                                ?></div><br>
                                            </font></div></td>
                                </tr>
                                <tr>
                                    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>11:20~12:10</strong></font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="HISTORIA 3 - 60HRS"><?php
                                                check("HISTORIA", "1.6");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="PROJETO DE BANCO DE DADOS - 60HRS"><?php
                                                check("PBD²", "2.6");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="PORTUGUÊS III - 90HRS"><?php
                                                check("PORTUGUES", "3.6");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="FILOSOFIA III 30HRS"><?php
                                                check("FILOSOFIA", "4.6");
                                                ?></div><br>
                                            </font></div></td>
                                    <td width="90"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                            <div title="QUÍMICA III - 60HRS"><?php
                                                check("QUIMICA", "5.6");
                                                ?></div><br>
                                            </font></div></td>
                                </tr>
                            </tbody></table>
                        <span class="bodytext" align="justify" style="padding-bottom: 30px";>
                            ¹Engenharia de Software<br>
                            ²Projeto de Banco de Dados<br>
                            ³Programação Comercial<br>
                            ⁴Sistemas Operacionais<br></span>
                    </div>
                        <?php
                        $pro2 = "<input type='submit' value='Salvar Alterações' id='salvar' name='salvar' style='margin-left: 320px;margin-bottom:10px'></form>";
                        $est2 = "";
                        priv($pro2, $est2);
                        ?>
                </div>
                <div id="footer" class="smallgraytext" align="center"><a href='semanas.php'>Escolher outra semana</a> | <a href="sobre.php">Sobre</a> | <a href="contato.php">Contate-nos</a><br>
                    Daisy Inc. © 2017<br>
                    <a href="http://www.winkhosting.com/" title="Hosting Colombia">Hosting Colombia</a><br>
                </div>
            </div>
    </body>
</html>