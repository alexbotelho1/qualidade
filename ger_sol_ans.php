<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
require('solicitacoes.php');
require('ans.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red">Gerenciais</font> de <font color="red"><?php echo $cha_nome ?></font> por <font color="red"><?php echo $est_nome ?></font> em <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=01&ano=<?php echo $ano?>"><?php if($mes=='01'){ ?><img src="imagem/01_s.jpg" border="0"><?php }else{ ?><img src="imagem/01.jpg" border="0" onmouseout="this.src='imagem/01.jpg';" onmouseover="this.src='imagem/01_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=02&ano=<?php echo $ano?>"><?php if($mes=='02'){ ?><img src="imagem/02_s.jpg" border="0"><?php }else{ ?><img src="imagem/02.jpg" border="0" onmouseout="this.src='imagem/02.jpg';" onmouseover="this.src='imagem/02_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=03&ano=<?php echo $ano?>"><?php if($mes=='03'){ ?><img src="imagem/03_s.jpg" border="0"><?php }else{ ?><img src="imagem/03.jpg" border="0" onmouseout="this.src='imagem/03.jpg';" onmouseover="this.src='imagem/03_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=04&ano=<?php echo $ano?>"><?php if($mes=='04'){ ?><img src="imagem/04_s.jpg" border="0"><?php }else{ ?><img src="imagem/04.jpg" border="0" onmouseout="this.src='imagem/04.jpg';" onmouseover="this.src='imagem/04_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=05&ano=<?php echo $ano?>"><?php if($mes=='05'){ ?><img src="imagem/05_s.jpg" border="0"><?php }else{ ?><img src="imagem/05.jpg" border="0" onmouseout="this.src='imagem/05.jpg';" onmouseover="this.src='imagem/05_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=06&ano=<?php echo $ano?>"><?php if($mes=='06'){ ?><img src="imagem/06_s.jpg" border="0"><?php }else{ ?><img src="imagem/06.jpg" border="0" onmouseout="this.src='imagem/06.jpg';" onmouseover="this.src='imagem/06_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=07&ano=<?php echo $ano?>"><?php if($mes=='07'){ ?><img src="imagem/07_s.jpg" border="0"><?php }else{ ?><img src="imagem/07.jpg" border="0" onmouseout="this.src='imagem/07.jpg';" onmouseover="this.src='imagem/07_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=08&ano=<?php echo $ano?>"><?php if($mes=='08'){ ?><img src="imagem/08_s.jpg" border="0"><?php }else{ ?><img src="imagem/08.jpg" border="0" onmouseout="this.src='imagem/08.jpg';" onmouseover="this.src='imagem/08_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=09&ano=<?php echo $ano?>"><?php if($mes=='09'){ ?><img src="imagem/09_s.jpg" border="0"><?php }else{ ?><img src="imagem/09.jpg" border="0" onmouseout="this.src='imagem/09.jpg';" onmouseover="this.src='imagem/09_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=10&ano=<?php echo $ano?>"><?php if($mes=='10'){ ?><img src="imagem/10_s.jpg" border="0"><?php }else{ ?><img src="imagem/10.jpg" border="0" onmouseout="this.src='imagem/10.jpg';" onmouseover="this.src='imagem/10_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=11&ano=<?php echo $ano?>"><?php if($mes=='11'){ ?><img src="imagem/11_s.jpg" border="0"><?php }else{ ?><img src="imagem/11.jpg" border="0" onmouseout="this.src='imagem/11.jpg';" onmouseover="this.src='imagem/11_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=12&ano=<?php echo $ano?>"><?php if($mes=='12'){ ?><img src="imagem/12_s.jpg" border="0"><?php }else{ ?><img src="imagem/12.jpg" border="0" onmouseout="this.src='imagem/12.jpg';" onmouseover="this.src='imagem/12_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_sol_vol.php?est=vol&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="vol"){ ?><img src="imagem/volume_s.jpg" border="0"><?php }else{ ?><img src="imagem/volume.jpg" border="0" onmouseout="this.src='imagem/volume.jpg';"  onmouseover="this.src='imagem/volume_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=par&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=ans&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ans"){ ?><img src="imagem/ans_s.jpg" border="0"><?php }else{ ?><img src="imagem/ans.jpg" border="0" onmouseout="this.src='imagem/ans.jpg';" onmouseover="this.src='imagem/ans_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ano.php?est=ano&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ano"){ ?><img src="imagem/ano_s.jpg" border="0"><?php }else{ ?><img src="imagem/ano.jpg" border="0" onmouseout="this.src='imagem/ano.jpg';" onmouseover="this.src='imagem/ano_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_ate_ans.php?est=ans&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=ans&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/ger_sol_ans1-'.$mes.'-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Volume de Solicitações no Ano" src="graficos/ger_sol_ans1-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Média de Solicitações no Ano" src="graficos/ger_sol_ans2-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Volume de Solicitações por Mês" src="graficos/ger_sol_ans3-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Volume de Solicitações por Dia em <?php $mes_nome ?>" src="graficos/ger_sol_ans4-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL 01
    $sql = "SELECT date_format(solicitacao.slt_data,'%d'), date_format(solicitacao.slt_data,'%m'), date_format(solicitacao.slt_data,'%Y'), empresa.emp_fantasia, timestampdiff(second,solicitacao.slt_data,max(parecer.prc_data)), solicitacao.stp_cod, solicitacao.slt_prioridade, solicitacao.sprd_cod
    FROM solicitacao inner join empresa on (empresa.emp_cod = solicitacao.slt_representante) inner join parecer on (parecer.slt_cod = solicitacao.slt_cod)
    WHERE date(solicitacao.slt_data) BETWEEN '" . $ano_ant . "-01-01 00:00:00' AND '" . $ano_cor . "-" . $mes . "-31 00:00:00' and solicitacao.stp_cod in ($solicitacoes) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6)
    GROUP BY solicitacao.slt_cod"; $consulta = mysql_query($sql, $con) OR DIE (mysql_error());

    mysql_data_seek($consulta, 0);
    while ($dados1 = mysql_fetch_array($consulta)) {
        if ($dados1[2] == ($ano-1)) {
            switch ($dados1[5]) {
                case 1:
                    if ($dados1[6] != 0) {
                        switch ($dados1[5]) {
                            case 1: if ($dados1[4] < $erro_urgente) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 2: if ($dados1[4] < $erro_alta) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 3: if ($dados1[4] < $erro_geral) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 4: if ($dados1[4] < $erro_geral) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;};  break;
                            case 5: if ($dados1[4] < $erro_imediata) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                        }
                    } else {
                        switch ($dados1[7]) {
                            case 1: if ($dados1[4] < $erro_urgente) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 2: if ($dados1[4] < $erro_geral) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 3: if ($dados1[4] < $erro_geral) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 4: if ($dados1[4] < $erro_alta) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 5: if ($dados1[4] < $erro_imediata) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                        }
                    } break;
                case 2: if ($dados1[4] < $melhoria) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 10: if ($dados1[4] < $duvida) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 19: if ($dados1[4] < $conv_dados) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 25: if ($dados1[4] < $fiscal) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 28: if ($dados1[4] < $fiscal) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 27: if ($dados1[4] < $base_antromp) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 32: if ($dados1[4] < $deficiencia) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
            }
        }
    }

    mysql_data_seek($consulta, 0);
    while ($dados1 = mysql_fetch_array($consulta)) {
        if ($dados1[2] == $ano) {
            switch ($dados1[5]) {
                case 1:
                    if ($dados1[6] != 0) {
                        switch ($dados1[5]) {
                            case 1: if ($dados1[4] < $erro_urgente) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 2: if ($dados1[4] < $erro_alta) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 3: if ($dados1[4] < $erro_geral) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 4: if ($dados1[4] < $erro_geral) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;};  break;
                            case 5: if ($dados1[4] < $erro_imediata) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                        }
                    } else {
                        switch ($dados1[7]) {
                            case 1: if ($dados1[4] < $erro_urgente) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 2: if ($dados1[4] < $erro_geral) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 3: if ($dados1[4] < $erro_geral) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 4: if ($dados1[4] < $erro_alta) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 5: if ($dados1[4] < $erro_imediata) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                        }
                    } break;
                case 2: if ($dados1[4] < $melhoria) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 10: if ($dados1[4] < $duvida) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 19: if ($dados1[4] < $conv_dados) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 25: if ($dados1[4] < $fiscal) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 28: if ($dados1[4] < $fiscal) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 27: if ($dados1[4] < $base_antromp) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 32: if ($dados1[4] < $deficiencia) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
            }
        }
    }

// GRÁFICO 01
    $chart = new LineChartL1C2();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("!OK", $ans));
    $serie1->addPoint(new Point("OK", $ans));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("!OK", round(($nao_sol_ano_ant * 100) / ($nao_sol_ano_ant+$sim_sol_ano_ant))));
    $serie2->addPoint(new Point("OK", round(($sim_sol_ano_ant * 100) / ($nao_sol_ano_ant+$sim_sol_ano_ant))));

    $serie3 = new XYDataSet();
    $serie3->addPoint(new Point("!OK", round(($nao_sol_ano_cor * 100) / ($nao_sol_ano_cor+$sim_sol_ano_cor))));
    $serie3->addPoint(new Point("OK", round(($sim_sol_ano_cor * 100) / ($nao_sol_ano_cor+$sim_sol_ano_cor))));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("ANS", $serie1);
    $dataSet->addSerie(($ano-1), $serie2);
    $dataSet->addSerie($ano, $serie3);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.65);
    $chart->setTitle("ANS de Solicitações até $mes_nome de $ano");
    $chart->render("graficos/ger_sol_ans1-$mes-$ano.png");

// GRÁFICO 02
    $chart = new VerticalBarChart();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("!OK", $nao_sol_ano_ant));
    $serie1->addPoint(new Point("OK", $sim_sol_ano_ant));
    $serie1->addPoint(new Point("Total", ($nao_sol_ano_ant+$sim_sol_ano_ant)));
    $serie1->addPoint(new Point("ANS", round(($nao_sol_ano_ant+$sim_sol_ano_ant) * 0.8)));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("!OK", $nao_sol_ano_cor));
    $serie2->addPoint(new Point("OK", $sim_sol_ano_cor));
    $serie2->addPoint(new Point("Total", ($nao_sol_ano_cor+$sim_sol_ano_cor)));
    $serie2->addPoint(new Point("ANS", round(($nao_sol_ano_cor+$sim_sol_ano_cor) * 0.8)));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("$ano_ant", $serie1);
    $dataSet->addSerie("$ano_cor", $serie2);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.65);
    $chart->setTitle("ANS de Solicitações até $mes_nome de $ano");
    $chart->render("graficos/ger_sol_ans2-$mes-$ano.png");

// GRÁFICO 03
// Linha 1
    mysql_data_seek($consulta, 0);
    while ($dados1 = mysql_fetch_array($consulta)) {
        $sim = 0; $nao = 0;
        if ($dados1[2] == ($ano-1)) {
            switch ($dados1[5]) {
                case 1:
                    if ($dados1[6] != 0) {
                        switch ($dados1[5]) {
                            case 1: if ($dados1[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                            case 2: if ($dados1[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                            case 3: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 4: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;};  break;
                            case 5: if ($dados1[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                        }
                    } else {
                        switch ($dados1[7]) {
                            case 1: if ($dados1[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                            case 2: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 3: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 4: if ($dados1[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                            case 5: if ($dados1[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                        }
                    } break;
                case 2: if ($dados1[4] < $melhoria) {$sim++;} else {$nao++;}; break;
                case 10: if ($dados1[4] < $duvida) {$sim++;} else {$nao++;}; break;
                case 19: if ($dados1[4] < $conv_dados) {$sim++;} else {$nao++;}; break;
                case 25: if ($dados1[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                case 28: if ($dados1[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                case 27: if ($dados1[4] < $base_antromp) {$sim++;} else {$nao++;}; break;
                case 32: if ($dados1[4] < $deficiencia) {$sim++;} else {$nao++;}; break;
            }
            switch ($dados1[1]) {
                case '01': $jan_sim = $jan_sim + $sim; $jan_nao = $jan_nao + $nao; break;
                case '02': $fev_sim = $fev_sim + $sim; $fev_nao = $fev_nao + $nao; break;
                case '03': $mar_sim = $mar_sim + $sim; $mar_nao = $mar_nao + $nao; break;
                case '04': $abr_sim = $abr_sim + $sim; $abr_nao = $abr_nao + $nao; break;
                case '05': $mai_sim = $mai_sim + $sim; $mai_nao = $mai_nao + $nao; break;
                case '06': $jun_sim = $jun_sim + $sim; $jun_nao = $jun_nao + $nao; break;
                case '07': $jul_sim = $jul_sim + $sim; $jul_nao = $jul_nao + $nao; break;
                case '08': $ago_sim = $ago_sim + $sim; $ago_nao = $ago_nao + $nao; break;
                case '09': $set_sim = $set_sim + $sim; $set_nao = $set_nao + $nao; break;
                case '10': $out_sim = $out_sim + $sim; $out_nao = $out_nao + $nao; break;
                case '11': $nov_sim = $nov_sim + $sim; $nov_nao = $nov_nao + $nao; break;
                case '12': $dez_sim = $dez_sim + $sim; $dez_nao = $dez_nao + $nao; break;
            }
        }
    }

    $jan_ano_ant = round((($jan_sim * 100) / ($jan_nao+$jan_sim))); $jan_sim = 0; $jan_nao = 0;
    $fev_ano_ant = round((($fev_sim * 100) / ($fev_nao+$fev_sim))); $fev_sim = 0; $fev_nao = 0;
    $mar_ano_ant = round((($mar_sim * 100) / ($mar_nao+$mar_sim))); $mar_sim = 0; $mar_nao = 0;
    $abr_ano_ant = round((($abr_sim * 100) / ($abr_nao+$abr_sim))); $abr_sim = 0; $abr_nao = 0;
    $mai_ano_ant = round((($mai_sim * 100) / ($mai_nao+$mai_sim))); $mai_sim = 0; $mai_nao = 0;
    $jun_ano_ant = round((($jun_sim * 100) / ($jun_nao+$jun_sim))); $jun_sim = 0; $jun_nao = 0;
    $jul_ano_ant = round((($jul_sim * 100) / ($jul_nao+$jul_sim))); $jul_sim = 0; $jul_nao = 0;
    $ago_ano_ant = round((($ago_sim * 100) / ($ago_nao+$ago_sim))); $ago_sim = 0; $ago_nao = 0;
    $set_ano_ant = round((($set_sim * 100) / ($set_nao+$set_sim))); $set_sim = 0; $set_nao = 0;
    $out_ano_ant = round((($out_sim * 100) / ($out_nao+$out_sim))); $out_sim = 0; $out_nao = 0;
    $nov_ano_ant = round((($nov_sim * 100) / ($nov_nao+$nov_sim))); $nov_sim = 0; $nov_nao = 0;
    $dez_ano_ant = round((($dez_sim * 100) / ($dez_nao+$dez_sim))); $dez_sim = 0; $dez_nao = 0;

// Linha 2
    mysql_data_seek($consulta, 0);
    while ($dados1 = mysql_fetch_array($consulta)) {
        $sim = 0; $nao = 0;
        if ($dados1[2] == $ano) {
            switch ($dados1[5]) {
                case 1:
                    if ($dados1[6] != 0) {
                        switch ($dados1[5]) {
                            case 1: if ($dados1[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                            case 2: if ($dados1[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                            case 3: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 4: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;};  break;
                            case 5: if ($dados1[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                        }
                    } else {
                        switch ($dados1[7]) {
                            case 1: if ($dados1[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                            case 2: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 3: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 4: if ($dados1[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                            case 5: if ($dados1[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                        }
                    } break;
                case 2: if ($dados1[4] < $melhoria) {$sim++;} else {$nao++;}; break;
                case 10: if ($dados1[4] < $duvida) {$sim++;} else {$nao++;}; break;
                case 19: if ($dados1[4] < $conv_dados) {$sim++;} else {$nao++;}; break;
                case 25: if ($dados1[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                case 28: if ($dados1[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                case 27: if ($dados1[4] < $base_antromp) {$sim++;} else {$nao++;}; break;
                case 32: if ($dados1[4] < $deficiencia) {$sim++;} else {$nao++;}; break;
            }
            switch ($dados1[1]) {
                case '01': $jan_sim = $jan_sim + $sim; $jan_nao = $jan_nao + $nao; break;
                case '02': $fev_sim = $fev_sim + $sim; $fev_nao = $fev_nao + $nao; break;
                case '03': $mar_sim = $mar_sim + $sim; $mar_nao = $mar_nao + $nao; break;
                case '04': $abr_sim = $abr_sim + $sim; $abr_nao = $abr_nao + $nao; break;
                case '05': $mai_sim = $mai_sim + $sim; $mai_nao = $mai_nao + $nao; break;
                case '06': $jun_sim = $jun_sim + $sim; $jun_nao = $jun_nao + $nao; break;
                case '07': $jul_sim = $jul_sim + $sim; $jul_nao = $jul_nao + $nao; break;
                case '08': $ago_sim = $ago_sim + $sim; $ago_nao = $ago_nao + $nao; break;
                case '09': $set_sim = $set_sim + $sim; $set_nao = $set_nao + $nao; break;
                case '10': $out_sim = $out_sim + $sim; $out_nao = $out_nao + $nao; break;
                case '11': $nov_sim = $nov_sim + $sim; $nov_nao = $nov_nao + $nao; break;
                case '12': $dez_sim = $dez_sim + $sim; $dez_nao = $dez_nao + $nao; break;
            }
        }
    }

    $jan_ano_cor = round((($jan_sim * 100) / ($jan_nao+$jan_sim)));
    $fev_ano_cor = round((($fev_sim * 100) / ($fev_nao+$fev_sim)));
    $mar_ano_cor = round((($mar_sim * 100) / ($mar_nao+$mar_sim)));
    $abr_ano_cor = round((($abr_sim * 100) / ($abr_nao+$abr_sim)));
    $mai_ano_cor = round((($mai_sim * 100) / ($mai_nao+$mai_sim)));
    $jun_ano_cor = round((($jun_sim * 100) / ($jun_nao+$jun_sim)));
    $jul_ano_cor = round((($jul_sim * 100) / ($jul_nao+$jul_sim)));
    $ago_ano_cor = round((($ago_sim * 100) / ($ago_nao+$ago_sim)));
    $set_ano_cor = round((($set_sim * 100) / ($set_nao+$set_sim)));
    $out_ano_cor = round((($out_sim * 100) / ($out_nao+$out_sim)));
    $nov_ano_cor = round((($nov_sim * 100) / ($nov_nao+$nov_sim)));
    $dez_ano_cor = round((($dez_sim * 100) / ($dez_nao+$dez_sim)));

    $ans_ano_cor = $jan_ano_cor+$fev_ano_cor+$mar_ano_cor+$abr_ano_cor+$mai_ano_cor+$jun_ano_cor+$jul_ano_cor+$ago_ano_cor+$set_ano_cor+$out_ano_cor+$nov_ano_cor+$dez_ano_cor;

    $chart = new LineChart900();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("JAN", $ans));
    $serie1->addPoint(new Point("FEV", $ans));
    $serie1->addPoint(new Point("MAR", $ans));
    $serie1->addPoint(new Point("ABR", $ans));
    $serie1->addPoint(new Point("MAIO", $ans));
    $serie1->addPoint(new Point("JUN", $ans));
    $serie1->addPoint(new Point("JUL", $ans));
    $serie1->addPoint(new Point("AGO", $ans));
    $serie1->addPoint(new Point("SET", $ans));
    $serie1->addPoint(new Point("OUT", $ans));
    $serie1->addPoint(new Point("NOV", $ans));
    $serie1->addPoint(new Point("DEZ", $ans));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("JAN", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("FEV", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("MAR", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("ABR", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("MAIO", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("JUN", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("JUL", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("AGO", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("SET", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("OUT", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("NOV", $ans_ano_cor / $mes));
    $serie2->addPoint(new Point("DEZ", $ans_ano_cor / $mes));

    $serie3 = new XYDataSet();
    $serie3->addPoint(new Point("JAN", $jan_ano_ant));
    $serie3->addPoint(new Point("FEV", $fev_ano_ant));
    $serie3->addPoint(new Point("MAR", $mar_ano_ant));
    $serie3->addPoint(new Point("ABR", $abr_ano_ant));
    $serie3->addPoint(new Point("MAIO", $mai_ano_ant));
    $serie3->addPoint(new Point("JUN", $jun_ano_ant));
    $serie3->addPoint(new Point("JUL", $jul_ano_ant));
    $serie3->addPoint(new Point("AGO", $ago_ano_ant));
    $serie3->addPoint(new Point("SET", $set_ano_ant));
    $serie3->addPoint(new Point("OUT", $out_ano_ant));
    $serie3->addPoint(new Point("NOV", $nov_ano_ant));
    $serie3->addPoint(new Point("DEZ", $dez_ano_ant));

    $serie4 = new XYDataSet();
    $serie4->addPoint(new Point("JAN", $jan_ano_cor));
    $serie4->addPoint(new Point("FEV", $fev_ano_cor));
    $serie4->addPoint(new Point("MAR", $mar_ano_cor));
    $serie4->addPoint(new Point("ABR", $abr_ano_cor));
    $serie4->addPoint(new Point("MAIO", $mai_ano_cor));
    $serie4->addPoint(new Point("JUN", $jun_ano_cor));
    $serie4->addPoint(new Point("JUL", $jul_ano_cor));
    $serie4->addPoint(new Point("AGO", $ago_ano_cor));
    $serie4->addPoint(new Point("SET", $set_ano_cor));
    $serie4->addPoint(new Point("OUT", $out_ano_cor));
    $serie4->addPoint(new Point("NOV", $nov_ano_cor));
    $serie4->addPoint(new Point("DEZ", $dez_ano_cor));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("ANS", $serie1);
    $dataSet->addSerie("Média $ano_cor", $serie2);
    $dataSet->addSerie($ano_ant, $serie3);
    $dataSet->addSerie($ano_cor, $serie4);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.78);
    $chart->setTitle("ANS de Solicitações por Mês em $ano");
    $chart->render("graficos/ger_sol_ans3-$mes-$ano.png");

// GRÁFICO 04
    $sql1 = "SELECT empresa.emp_fantasia FROM solicitacao inner join empresa on (empresa.emp_cod = solicitacao.slt_representante)
    WHERE date(solicitacao.slt_data) BETWEEN '" . $ano_ant . "-01-01 00:00:00' AND '" . $ano_cor . "-" . $mes . "-31 00:00:00' and solicitacao.stp_cod in ($solicitacoes) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6)
    GROUP BY empresa.emp_fantasia ORDER BY empresa.emp_fantasia DESC"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());
    $contar=0; while ($dados3 = mysql_fetch_array($consulta1)) {$contar++;} $altura = $contar * 25;

    $chart = new HorizontalBarChart(600, $altura); $dataSet = new XYDataSet(); mysql_data_seek($consulta1, 0); $i = 0;
    while ($dados3 = mysql_fetch_array($consulta1)) {
        mysql_data_seek($consulta, 0); $sim = 0; $nao = 0;
        while ($dados1 = mysql_fetch_array($consulta)) {
            if ($dados1[1] == $mes and $dados1[2] == $ano and $dados1[3] == $dados3[0]) {
                switch ($dados1[5]) {
                    case 1:
                        if ($dados1[6] != 0) {
                            switch ($dados1[5]) {
                                case 1: if ($dados1[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                                case 2: if ($dados1[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                                case 3: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                                case 4: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;};  break;
                                case 5: if ($dados1[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                            }
                        } else {
                            switch ($dados1[7]) {
                                case 1: if ($dados1[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                                case 2: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                                case 3: if ($dados1[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                                case 4: if ($dados1[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                                case 5: if ($dados1[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                            }
                        } break;
                    case 2: if ($dados1[4] < $melhoria) {$sim++;} else {$nao++;}; break;
                    case 10: if ($dados1[4] < $duvida) {$sim++;} else {$nao++;}; break;
                    case 19: if ($dados1[4] < $conv_dados) {$sim++;} else {$nao++;}; break;
                    case 25: if ($dados1[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                    case 28: if ($dados1[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                    case 27: if ($dados1[4] < $base_corromp) {$sim++;} else {$nao++;}; break;
                    case 32: if ($dados1[4] < $deficiencia) {$sim++;} else {$nao++;}; break;
                }
            }
        }
        $ans_parceiro[$i] = round((($sim * 100) / ($sim+$nao))); $dataSet->addPoint(new Point(utf8_encode($dados3[0]), $ans_parceiro[$i])); $i++;
    }
    $chart->setDataSet($dataSet);
    $chart->setTitle("ANS de Solicitações por Parceiro em $mes_nome de $ano");
    $chart->render("graficos/ger_sol_ans4-$mes-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta); mysql_free_result($consulta1); mysql_close($con);?>