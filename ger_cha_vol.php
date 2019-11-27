<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
require('solicitacoes.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red">Chamados</font> por <font color="red"><?php echo $est_nome ?></font> até <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="ger_cha_vol.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="ger_cha_vol.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="ger_cha_vol.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="ger_cha_vol.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="ger_cha_vol.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="ger_cha_vol.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="ger_cha_vol.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_cha_vol.php?est=vol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="vol"){ ?><img src="imagem/volume_s.jpg" border="0"><?php }else{ ?><img src="imagem/volume.jpg" border="0" onmouseout="this.src='imagem/volume.jpg';" onmouseover="this.src='imagem/volume_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=par&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=ans&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ans"){ ?><img src="imagem/ans_s.jpg" border="0"><?php }else{ ?><img src="imagem/ans.jpg" border="0" onmouseout="this.src='imagem/ans.jpg';" onmouseover="this.src='imagem/ans_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ano.php?est=ano&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ano"){ ?><img src="imagem/ano_s.jpg" border="0"><?php }else{ ?><img src="imagem/ano.jpg" border="0" onmouseout="this.src='imagem/ano.jpg';" onmouseover="this.src='imagem/ano_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/ger_cha_vol1-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'>
        <input type='submit' name='atualizar' value='Atualizar Agora'>
    </form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Volume de Chamados em <?php echo $ano ?>" src="graficos/ger_cha_vol1-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Média de Chamados em <?php echo $ano ?>" src="graficos/ger_cha_vol2-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Volume de Chamados em <?php echo $ano ?>" src="graficos/ger_cha_vol3-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/><img alt="Volume de Chamados em <?php echo $ano ?>" src="graficos/ger_cha_vol4-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Volume de Chamados por Mês em <?php echo $ano ?>" src="graficos/ger_cha_vol5-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
    $sql1 = "SELECT date_format(solicitacao.slt_data,'%d'), date_format(solicitacao.slt_data,'%m'), date_format(solicitacao.slt_data,'%Y'), solicitacao.stt_cod FROM solicitacao inner join empresa on (empresa.emp_cod = solicitacao.slt_representante) inner join parecer on (parecer.slt_cod = solicitacao.slt_cod)
    WHERE date(solicitacao.slt_data) BETWEEN '" . $ano_ant . "-01-01 00:00:00' AND '" . $ano_cor . "-12-31 00:00:00' and solicitacao.stp_cod in ($solicitacoes) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6)
    GROUP BY solicitacao.slt_cod"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());

    $tot_sol_ano_ant = 0; while ($dados1 = mysql_fetch_array($consulta1)) {if ($dados1[2] == ($ano-1)){$tot_sol_ano_ant++;}} mysql_data_seek($consulta1, 0); $tot_sol_ano_cor = 0; while ($dados1 = mysql_fetch_array($consulta1)) {if ($dados1[2] == $ano){$tot_sol_ano_cor++;}}

    $sql2 = "SELECT date_format(atendimento_uar.atduar_dtainicio,'%d'), date_format(atendimento_uar.atduar_dtainicio,'%m'), date_format(atendimento_uar.atduar_dtainicio,'%Y'), atendimento_uar.stt_cod FROM atendimento_uar
    WHERE date(atendimento_uar.atduar_dtainicio) BETWEEN '" . $ano_ant . "-01-01 00:00:00' AND '" . $ano_cor . "-12-31 00:00:00' and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY atendimento_uar.atduar_cod"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error());

    $sql3 = "SELECT max(date_format(solicitacao.slt_data,'%m')) FROM solicitacao WHERE date_format(solicitacao.slt_data,'%Y') = $ano"; $consulta3 = mysql_query($sql3, $con) OR DIE (mysql_error()); $dados3 = mysql_fetch_array($consulta3);

    $sql4 = "SELECT max(date_format(atendimento_uar.atduar_dtainicio,'%m')) FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano"; $consulta4 = mysql_query($sql4, $con) OR DIE (mysql_error()); $dados4 = mysql_fetch_array($consulta4);

    if ($dados4[0] > $dados3[0]){$mes = $dados4[0];}else{$mes = $dados3[0];}

    mysql_data_seek($consulta2, 0); $tot_ate_ano_ant = 0; while ($dados2 = mysql_fetch_array($consulta2)) {if ($dados2[2] == ($ano-1)){$tot_ate_ano_ant++;}}
    mysql_data_seek($consulta2, 0); $tot_ate_ano_cor = 0; while ($dados2 = mysql_fetch_array($consulta2)) {if ($dados2[2] == $ano){$tot_ate_ano_cor++;}}

// GRÁFICO 01
    $chart = new VerticalBarChart();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("Atendimentos", $tot_ate_ano_ant));
    $serie1->addPoint(new Point("Solicitações", $tot_sol_ano_ant));
    $serie1->addPoint(new Point("Total", ($tot_sol_ano_ant+$tot_ate_ano_ant)));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("Atendimentos", $tot_ate_ano_cor));
    $serie2->addPoint(new Point("Solicitações", $tot_sol_ano_cor));
    $serie2->addPoint(new Point("Total", ($tot_sol_ano_cor+$tot_ate_ano_cor)));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("$ano_ant", $serie1);
    $dataSet->addSerie("$ano_cor", $serie2);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.65);
    $chart->setTitle("Volume de Chamados em $ano");
    $chart->render("graficos/ger_cha_vol1-$ano.png");

// GRÁFICO 02
    $chart = new VerticalBarChart();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("Diária", round((($tot_sol_ano_ant+$tot_ate_ano_ant) / 365),0)));
    $serie1->addPoint(new Point("Mensal", round((($tot_sol_ano_ant+$tot_ate_ano_ant) / 12),0)));
    $serie1->addPoint(new Point("Anual", ($tot_sol_ano_ant+$tot_ate_ano_ant)));
    $serie1->addPoint(new Point("Projeção", (($tot_sol_ano_ant+$tot_ate_ano_ant) / 12) * 12));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("Diária", round((($tot_sol_ano_cor+$tot_ate_ano_cor) / ($mes * 30.41)),0)));
    $serie2->addPoint(new Point("Mensal", round((($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes),0)));
    $serie2->addPoint(new Point("Anual", ($tot_sol_ano_cor+$tot_ate_ano_cor)));
    $serie2->addPoint(new Point("Projeção", (($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes) * 12));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("$ano_ant", $serie1);
    $dataSet->addSerie("$ano_cor", $serie2);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.65);
    $chart->setTitle("Médias de Chamados em $ano");
    $chart->render("graficos/ger_cha_vol2-$ano.png");

// GRÁFICO 03
    $chart = new PieChart(400, 300);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Atendimentos", ($tot_ate_ano_ant*100)/($tot_ate_ano_ant+$tot_sol_ano_ant)));
    $dataSet->addPoint(new Point("Solicitações", ($tot_sol_ano_ant*100)/($tot_ate_ano_ant+$tot_sol_ano_ant)));
    $chart->setDataSet($dataSet);
    $chart->setTitle("Volume de Chamados em ".($ano-1)."");
    $chart->render("graficos/ger_cha_vol3-$ano.png");

// GRÁFICO 04
    $chart = new PieChart(400, 300);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Atendimentos", ($tot_ate_ano_cor*100)/($tot_ate_ano_cor+$tot_sol_ano_cor)));
    $dataSet->addPoint(new Point("Solicitações", ($tot_sol_ano_cor*100)/($tot_ate_ano_cor+$tot_sol_ano_cor)));
    $chart->setDataSet($dataSet);
    $chart->setTitle("Volume de Chamados em $ano");
    $chart->render("graficos/ger_cha_vol4-$ano.png");

// GRÁFICO 05
// Linha 1
    mysql_data_seek($consulta1, 0);
    while ($dados1 = mysql_fetch_array($consulta1)) {
        if ($dados1[2] == ($ano-1)) {
            switch ($dados1[1]) {
                case '01': $jan_sol_ano_ant++; break;
                case '02': $fev_sol_ano_ant++; break;
                case '03': $mar_sol_ano_ant++; break;
                case '04': $abr_sol_ano_ant++; break;
                case '05': $mai_sol_ano_ant++; break;
                case '06': $jun_sol_ano_ant++; break;
                case '07': $jul_sol_ano_ant++; break;
                case '08': $ago_sol_ano_ant++; break;
                case '09': $set_sol_ano_ant++; break;
                case '10': $out_sol_ano_ant++; break;
                case '11': $nov_sol_ano_ant++; break;
                case '12': $dez_sol_ano_ant++; break;
            }
        }
    }
    mysql_data_seek($consulta2, 0);
    while ($dados2 = mysql_fetch_array($consulta2)) {
        if ($dados2[2] == ($ano-1)) {
            switch ($dados2[1]) {
                case '01': $jan_ate_ano_ant++; break;
                case '02': $fev_ate_ano_ant++; break;
                case '03': $mar_ate_ano_ant++; break;
                case '04': $abr_ate_ano_ant++; break;
                case '05': $mai_ate_ano_ant++; break;
                case '06': $jun_ate_ano_ant++; break;
                case '07': $jul_ate_ano_ant++; break;
                case '08': $ago_ate_ano_ant++; break;
                case '09': $set_ate_ano_ant++; break;
                case '10': $out_ate_ano_ant++; break;
                case '11': $nov_ate_ano_ant++; break;
                case '12': $dez_ate_ano_ant++; break;
            }
        }
    }
// Linha 2
    mysql_data_seek($consulta1, 0);
    while ($dados1 = mysql_fetch_array($consulta1)) {
        if ($dados1[2] == $ano and ($dados1[3] == 1 or $dados1[3] == 6)) {
            switch ($dados1[1]) {
                case '01': $jan_sol_ano_cor++; break;
                case '02': $fev_sol_ano_cor++; break;
                case '03': $mar_sol_ano_cor++; break;
                case '04': $abr_sol_ano_cor++; break;
                case '05': $mai_sol_ano_cor++; break;
                case '06': $jun_sol_ano_cor++; break;
                case '07': $jul_sol_ano_cor++; break;
                case '08': $ago_sol_ano_cor++; break;
                case '09': $set_sol_ano_cor++; break;
                case '10': $out_sol_ano_cor++; break;
                case '11': $nov_sol_ano_cor++; break;
                case '12': $dez_sol_ano_cor++; break;
            }
        }
    }
    mysql_data_seek($consulta2, 0);
    while ($dados2 = mysql_fetch_array($consulta2)) {
        if ($dados2[2] == $ano and ($dados2[3] == 1 or $dados2[3] == 6)) {
            switch ($dados2[1]) {
                case '01': $jan_ate_ano_cor++; break;
                case '02': $fev_ate_ano_cor++; break;
                case '03': $mar_ate_ano_cor++; break;
                case '04': $abr_ate_ano_cor++; break;
                case '05': $mai_ate_ano_cor++; break;
                case '06': $jun_ate_ano_cor++; break;
                case '07': $jul_ate_ano_cor++; break;
                case '08': $ago_ate_ano_cor++; break;
                case '09': $set_ate_ano_cor++; break;
                case '10': $out_ate_ano_cor++; break;
                case '11': $nov_ate_ano_cor++; break;
                case '12': $dez_ate_ano_cor++; break;
            }
        }
    }

    $chart = new LineChartL2C2();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("JAN", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("FEV", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("MAR", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("ABR", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("MAIO", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("JUN", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("JUL", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("AGO", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("SET", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("OUT", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("NOV", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("DEZ", ($tot_sol_ano_ant+$tot_ate_ano_ant) / 12));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("JAN", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("FEV", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("MAR", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("ABR", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("MAIO", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("JUN", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("JUL", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("AGO", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("SET", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("OUT", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("NOV", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("DEZ", ($tot_sol_ano_cor+$tot_ate_ano_cor) / $mes));

    $serie3 = new XYDataSet();
    $serie3->addPoint(new Point("JAN", $jan_sol_ano_ant+$jan_ate_ano_ant));
    $serie3->addPoint(new Point("FEV", $fev_sol_ano_ant+$fev_ate_ano_ant));
    $serie3->addPoint(new Point("MAR", $mar_sol_ano_ant+$mar_ate_ano_ant));
    $serie3->addPoint(new Point("ABR", $abr_sol_ano_ant+$abr_ate_ano_ant));
    $serie3->addPoint(new Point("MAIO", $mai_sol_ano_ant+$mai_ate_ano_ant));
    $serie3->addPoint(new Point("JUN", $jun_sol_ano_ant+$jun_ate_ano_ant));
    $serie3->addPoint(new Point("JUL", $jul_sol_ano_ant+$jul_ate_ano_ant));
    $serie3->addPoint(new Point("AGO", $ago_sol_ano_ant+$ago_ate_ano_ant));
    $serie3->addPoint(new Point("SET", $set_sol_ano_ant+$set_ate_ano_ant));
    $serie3->addPoint(new Point("OUT", $out_sol_ano_ant+$out_ate_ano_ant));
    $serie3->addPoint(new Point("NOV", $nov_sol_ano_ant+$nov_ate_ano_ant));
    $serie3->addPoint(new Point("DEZ", $dez_sol_ano_ant+$dez_ate_ano_ant));

    $serie4 = new XYDataSet();
    $serie4->addPoint(new Point("JAN", $jan_sol_ano_cor+$jan_ate_ano_cor));
    $serie4->addPoint(new Point("FEV", $fev_sol_ano_cor+$fev_ate_ano_cor));
    $serie4->addPoint(new Point("MAR", $mar_sol_ano_cor+$mar_ate_ano_cor));
    $serie4->addPoint(new Point("ABR", $abr_sol_ano_cor+$abr_ate_ano_cor));
    $serie4->addPoint(new Point("MAIO", $mai_sol_ano_cor+$mai_ate_ano_cor));
    $serie4->addPoint(new Point("JUN", $jun_sol_ano_cor+$jun_ate_ano_cor));
    $serie4->addPoint(new Point("JUL", $jul_sol_ano_cor+$jul_ate_ano_cor));
    $serie4->addPoint(new Point("AGO", $ago_sol_ano_cor+$ago_ate_ano_cor));
    $serie4->addPoint(new Point("SET", $set_sol_ano_cor+$set_ate_ano_cor));
    $serie4->addPoint(new Point("OUT", $out_sol_ano_cor+$out_ate_ano_cor));
    $serie4->addPoint(new Point("NOV", $nov_sol_ano_cor+$nov_ate_ano_cor));
    $serie4->addPoint(new Point("DEZ", $dez_sol_ano_cor+$dez_ate_ano_cor));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("Média $ano_ant", $serie1);
    $dataSet->addSerie("Média $ano_cor", $serie2);
    $dataSet->addSerie($ano_ant, $serie3);
    $dataSet->addSerie($ano_cor, $serie4);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.78);
    $chart->setTitle("Volume de Chamados por Mês em $ano");
    $chart->render("graficos/ger_cha_vol5-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&mes=<?php echo $mes?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta1);  mysql_free_result($consulta2); mysql_free_result($consulta3); mysql_free_result($consulta4);mysql_close($con);?>