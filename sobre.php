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
                    <div id="title" class="titletext" align="right">O início de tudo:</div>
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
                        <strong>Você acreditaria que algo tão inovador quanto o MarkClass foi idealizado e desenvolvido por estudantes do Ensino Médio?</strong><br>
                        <br>
                        Pois é exatamente isso que você leu! O MarkClass surgiu como uma ideia do grupo LaPeSI(Laboratório de Pesquisa de Sistemas de Informação) de um app de gerenciamento de horários escolares. Tendo como <i>Alma mater</i> o Instituto Federal de Ciência, Educação e Tecnologia do Piaui, os integrantes do LaPeSI sempre se deparavam com professores faltantes e aulas vagas durante o período escolar, por outro lado também havia professores que gostariam de repor ou adiantar aulas que poderiam reaproveitar esses horários vagos. Nada mais dinâmico pra conciliar esses fatores que um app android, a plataforma mais abrangente no momento que esse site foi desenvolvido.
                    </div>
                    <div class="panel" align="justify">
                        <span class="orangetitle">E como isso se tornou um site?</span>
                        <span class="bodytext"><br><br>
                            Antes mesmo de poder ser implementado, chegou o final do ano letivo, e consigo uma temida responsabilidade: o Projeto Final que valia nota em três matérias, sendo em uma delas era a nota semestral. Os integrantes do LaPeSI não poderiam mais focar no desenvolvimento mobile do MarkClass e de outras <i>startups</i>. Eles se focaram no desenvolvimento de uma aplicação web escrita na linguagem PHP com integração a um banco de dados MySQL englobando ainda os conceitos de engenharia de software, que valeria as notas bimestrais das disciplinas de Projeto de Banco de Dados e Engenharia de Software, e a nota semestral da disciplina Programação Comercial. A aplicação deveria ter uma função especifica e ser inovadora. Um dos integrantes do LaPeSI resolveu utilizar a ideia do MarkClass para isso, em parceria com um aluno de fora do laboratório, o site foi desenvolvido inicialmente limitado a funcionar somente na turma dos Alunos envolvidos, tendo como meta sua extensão para outras turmas da instituiçao.
                        </span>
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