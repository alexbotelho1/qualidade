<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
require('funcoes.php');
require('solicitacoes.php');
require('pareceres.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red"><?php echo $cha_nome ?></font> do <font color="red">Setor</font> <font color="red"><?php echo $est_nome ?></font> em <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=01&ano=<?php echo $ano?>"><?php if($mes=='01'){ ?><img src="imagem/01_s.jpg" border="0"><?php }else{ ?><img src="imagem/01.jpg" border="0" onmouseout="this.src='imagem/01.jpg';" onmouseover="this.src='imagem/01_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=02&ano=<?php echo $ano?>"><?php if($mes=='02'){ ?><img src="imagem/02_s.jpg" border="0"><?php }else{ ?><img src="imagem/02.jpg" border="0" onmouseout="this.src='imagem/02.jpg';" onmouseover="this.src='imagem/02_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=03&ano=<?php echo $ano?>"><?php if($mes=='03'){ ?><img src="imagem/03_s.jpg" border="0"><?php }else{ ?><img src="imagem/03.jpg" border="0" onmouseout="this.src='imagem/03.jpg';" onmouseover="this.src='imagem/03_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=04&ano=<?php echo $ano?>"><?php if($mes=='04'){ ?><img src="imagem/04_s.jpg" border="0"><?php }else{ ?><img src="imagem/04.jpg" border="0" onmouseout="this.src='imagem/04.jpg';" onmouseover="this.src='imagem/04_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=05&ano=<?php echo $ano?>"><?php if($mes=='05'){ ?><img src="imagem/05_s.jpg" border="0"><?php }else{ ?><img src="imagem/05.jpg" border="0" onmouseout="this.src='imagem/05.jpg';" onmouseover="this.src='imagem/05_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=06&ano=<?php echo $ano?>"><?php if($mes=='06'){ ?><img src="imagem/06_s.jpg" border="0"><?php }else{ ?><img src="imagem/06.jpg" border="0" onmouseout="this.src='imagem/06.jpg';" onmouseover="this.src='imagem/06_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=07&ano=<?php echo $ano?>"><?php if($mes=='07'){ ?><img src="imagem/07_s.jpg" border="0"><?php }else{ ?><img src="imagem/07.jpg" border="0" onmouseout="this.src='imagem/07.jpg';" onmouseover="this.src='imagem/07_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=08&ano=<?php echo $ano?>"><?php if($mes=='08'){ ?><img src="imagem/08_s.jpg" border="0"><?php }else{ ?><img src="imagem/08.jpg" border="0" onmouseout="this.src='imagem/08.jpg';" onmouseover="this.src='imagem/08_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=09&ano=<?php echo $ano?>"><?php if($mes=='09'){ ?><img src="imagem/09_s.jpg" border="0"><?php }else{ ?><img src="imagem/09.jpg" border="0" onmouseout="this.src='imagem/09.jpg';" onmouseover="this.src='imagem/09_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=10&ano=<?php echo $ano?>"><?php if($mes=='10'){ ?><img src="imagem/10_s.jpg" border="0"><?php }else{ ?><img src="imagem/10.jpg" border="0" onmouseout="this.src='imagem/10.jpg';" onmouseover="this.src='imagem/10_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=11&ano=<?php echo $ano?>"><?php if($mes=='11'){ ?><img src="imagem/11_s.jpg" border="0"><?php }else{ ?><img src="imagem/11.jpg" border="0" onmouseout="this.src='imagem/11.jpg';" onmouseover="this.src='imagem/11_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=12&ano=<?php echo $ano?>"><?php if($mes=='12'){ ?><img src="imagem/12_s.jpg" border="0"><?php }else{ ?><img src="imagem/12.jpg" border="0" onmouseout="this.src='imagem/12.jpg';" onmouseover="this.src='imagem/12_s.jpg';"><?php } ?></a>
<br>
    <a href="set_sol_par.php?est=par&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=uar&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="uar"){ ?><img src="imagem/uar_s.jpg" border="0"><?php }else{ ?><img src="imagem/uar.jpg" border="0" onmouseout="this.src='imagem/uar.jpg';" onmouseover="this.src='imagem/uar_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=des&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="des"){ ?><img src="imagem/desenvolvimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/desenvolvimento.jpg" border="0" onmouseout="this.src='imagem/desenvolvimento.jpg';" onmouseover="this.src='imagem/desenvolvimento_s.jpg';"><?php } ?></a>
    <a href="set_sol_cer.php?est=cer&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="cer"){ ?><img src="imagem/certificacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/certificacao.jpg" border="0" onmouseout="this.src='imagem/certificacao.jpg';" onmouseover="this.src='imagem/certificacao_s.jpg';"><?php } ?></a>
<br>
    <a href="set_ate_des.php?est=des&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=des&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/abc_sol_cer1-'.$mes.'-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Fluxo de Solicitações no Desenvolvimento em <?php echo $mes_nome?> de <?php echo $ano?>" src="graficos/set_sol_des1-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Pareceres de Solicitações no Desenvolvimento em <?php echo $mes_nome?> de <?php echo $ano?>" src="graficos/set_sol_des2-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Tipos de Solicitações no Desenvolvimento em <?php echo $mes_nome?> de <?php echo $ano?>" src="graficos/set_sol_des3-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL 01
    $sql1 = "SELECT parecer.dstt_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_des_ent,$par_des_sai) and solicitacao.stp_cod in ($solicitacoes) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod ORDER BY parecer.dstt_cod ASC;"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());
// GRÁFICO 01
    while ($dados1 = mysql_fetch_array($consulta1)) {
        switch ($dados1[0]) {
            case '8'  : $enc_cer = $dados1[1]; break;
            case '18' : $agu_ana = $dados1[1]; break;
            case '21' : $dev_uar = $dados1[1]; break;
            case '30' : $fin_des = $dados1[1]; break;
            case '34' : $dev_des = $dados1[1]; break;
            case '37' : $rep_des = $dados1[1]; break;
            case '51' : $agu_apr = $dados1[1]; break;
        }
    }
    $chart = new PieChart(500, 300);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Entrada", ($agu_ana + $dev_des + $agu_apr)));
    $dataSet->addPoint(new Point("Saída", ($enc_cer + $dev_uar + $fin_des + $rep_des)));
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.72);
    $chart->setTitle("Fluxo de Solicitações no Desenvolvimento em $mes_nome de $ano");
    $chart->render("graficos/set_sol_des1-$mes-$ano.png");

// SQL 02
    $sql2 = "SELECT parecer.dstt_cod, solicitacao.stp_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_des_ent,$par_des_sai) and solicitacao.stp_cod in ($solicitacoes) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod, solicitacao.stp_cod ORDER BY parecer.dstt_cod ASC, solicitacao.stp_cod ASC;";
    $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error());

// GRÁFICO 02
    $par_ok=0;$enc_cer=0;$tes_qua=0;$lib_imp=0;$dev_des=0;$tes_err=0;$fin_cer=0;
    $sol_err=0;$sol_mel=0;$sol_duv=0;$sol_con=0;$sol_fme=0;$sol_fer=0;$sol_bas=0;$sol_def=0;

    while ($dados2 = mysql_fetch_array($consulta2)) {
        switch ($dados2[0]) {
            case '8'  : $enc_cer = $enc_cer + $dados2[2]; break;
            case '18' : $agu_ana = $agu_ana + $dados2[2]; break;
            case '21' : $dev_uar = $dev_uar + $dados2[2]; break;
            case '30' : $fin_des = $fin_des + $dados2[2]; break;
            case '34' : $dev_des = $dev_des + $dados2[2]; break;
            case '37' : $rep_des = $rep_des + $dados2[2]; break;
            case '51' : $agu_apr = $agu_apr + $dados2[2]; break;
        }
        switch ($dados2[1]) {
            case '1'  : $sol_err = $sol_err + $dados2[2]; break;
            case '2'  : $sol_mel = $sol_mel + $dados2[2]; break;
            case '10' : $sol_duv = $sol_duv + $dados2[2]; break;
            case '19' : $sol_con = $sol_con + $dados2[2]; break;
            case '25' : $sol_fme = $sol_fme + $dados2[2]; break;
            case '27' : $sol_fer = $sol_fer + $dados2[2]; break;
            case '28' : $sol_bas = $sol_bas + $dados2[2]; break;
            case '32' : $sol_def = $sol_def + $dados2[2]; break;
        }
    }

    $chart = new VerticalBarChart(600, 400);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Encaminhado p/ Cert.",$enc_cer));
    $dataSet->addPoint(new Point("Aguar. Anál. Desenv.",$agu_ana));
    $dataSet->addPoint(new Point("Devolvido p/ UAR",    $dev_uar));
    $dataSet->addPoint(new Point("Final. pelo Desenv.", $fin_des));
    $dataSet->addPoint(new Point("Dev. p/ Desenv.",     $dev_des));
    $dataSet->addPoint(new Point("Rep. pelo Desenv.",   $rep_des));
    $dataSet->addPoint(new Point("Aguar. Aprov. Melh.", $agu_apr));
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(10, 20, 100, 40));
    $chart->setTitle("Pareceres de Solicitações na Certificação em $mes_nome de $ano");
    $chart->render("graficos/set_sol_des2-$mes-$ano.png");

    $chart = new VerticalBarChart(600, 400);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Erro",            $sol_err));
    $dataSet->addPoint(new Point("Melhoria",        $sol_mel));
    $dataSet->addPoint(new Point("Dúvida",          $sol_duv));
    $dataSet->addPoint(new Point("Conv. de Dados",  $sol_con));
    $dataSet->addPoint(new Point("Fiscal-Erro",     $sol_fme));
    $dataSet->addPoint(new Point("Fiscal-Melhoria", $sol_fer));
    $dataSet->addPoint(new Point("Base Corrompida", $sol_bas));
    $dataSet->addPoint(new Point("Deficiência",     $sol_def));
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(10, 20, 80, 40));
    $chart->setTitle("Tipos de Solicitações na Certificação em $mes_nome de $ano");
    $chart->render("graficos/set_sol_des3-$mes-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta); mysql_free_result($consulta2); mysql_close($con);?>