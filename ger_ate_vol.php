<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red">Gerenciais</font> de <font color="red"><?php echo $cha_nome ?></font> por <font color="red"><?php echo $est_nome ?></font> em <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=01&ano=<?php echo $ano?>"><?php if($mes=='01'){ ?><img src="imagem/01_s.jpg" border="0"><?php }else{ ?><img src="imagem/01.jpg" border="0" onmouseout="this.src='imagem/01.jpg';" onmouseover="this.src='imagem/01_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=02&ano=<?php echo $ano?>"><?php if($mes=='02'){ ?><img src="imagem/02_s.jpg" border="0"><?php }else{ ?><img src="imagem/02.jpg" border="0" onmouseout="this.src='imagem/02.jpg';" onmouseover="this.src='imagem/02_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=03&ano=<?php echo $ano?>"><?php if($mes=='03'){ ?><img src="imagem/03_s.jpg" border="0"><?php }else{ ?><img src="imagem/03.jpg" border="0" onmouseout="this.src='imagem/03.jpg';" onmouseover="this.src='imagem/03_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=04&ano=<?php echo $ano?>"><?php if($mes=='04'){ ?><img src="imagem/04_s.jpg" border="0"><?php }else{ ?><img src="imagem/04.jpg" border="0" onmouseout="this.src='imagem/04.jpg';" onmouseover="this.src='imagem/04_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=05&ano=<?php echo $ano?>"><?php if($mes=='05'){ ?><img src="imagem/05_s.jpg" border="0"><?php }else{ ?><img src="imagem/05.jpg" border="0" onmouseout="this.src='imagem/05.jpg';" onmouseover="this.src='imagem/05_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=06&ano=<?php echo $ano?>"><?php if($mes=='06'){ ?><img src="imagem/06_s.jpg" border="0"><?php }else{ ?><img src="imagem/06.jpg" border="0" onmouseout="this.src='imagem/06.jpg';" onmouseover="this.src='imagem/06_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=07&ano=<?php echo $ano?>"><?php if($mes=='07'){ ?><img src="imagem/07_s.jpg" border="0"><?php }else{ ?><img src="imagem/07.jpg" border="0" onmouseout="this.src='imagem/07.jpg';" onmouseover="this.src='imagem/07_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=08&ano=<?php echo $ano?>"><?php if($mes=='08'){ ?><img src="imagem/08_s.jpg" border="0"><?php }else{ ?><img src="imagem/08.jpg" border="0" onmouseout="this.src='imagem/08.jpg';" onmouseover="this.src='imagem/08_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=09&ano=<?php echo $ano?>"><?php if($mes=='09'){ ?><img src="imagem/09_s.jpg" border="0"><?php }else{ ?><img src="imagem/09.jpg" border="0" onmouseout="this.src='imagem/09.jpg';" onmouseover="this.src='imagem/09_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=10&ano=<?php echo $ano?>"><?php if($mes=='10'){ ?><img src="imagem/10_s.jpg" border="0"><?php }else{ ?><img src="imagem/10.jpg" border="0" onmouseout="this.src='imagem/10.jpg';" onmouseover="this.src='imagem/10_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=11&ano=<?php echo $ano?>"><?php if($mes=='11'){ ?><img src="imagem/11_s.jpg" border="0"><?php }else{ ?><img src="imagem/11.jpg" border="0" onmouseout="this.src='imagem/11.jpg';" onmouseover="this.src='imagem/11_s.jpg';"><?php } ?></a>
    <a href="ger_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=12&ano=<?php echo $ano?>"><?php if($mes=='12'){ ?><img src="imagem/12_s.jpg" border="0"><?php }else{ ?><img src="imagem/12.jpg" border="0" onmouseout="this.src='imagem/12.jpg';" onmouseover="this.src='imagem/12_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_ate_vol.php?est=vol&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="vol"){ ?><img src="imagem/volume_s.jpg" border="0"><?php }else{ ?><img src="imagem/volume.jpg" border="0" onmouseout="this.src='imagem/volume.jpg';"  onmouseover="this.src='imagem/volume_s.jpg';"><?php } ?></a>
    <a href="ger_ate_par.php?est=par&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="ger_ate_ans.php?est=ans&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ans"){ ?><img src="imagem/ans_s.jpg" border="0"><?php }else{ ?><img src="imagem/ans.jpg" border="0" onmouseout="this.src='imagem/ans.jpg';" onmouseover="this.src='imagem/ans_s.jpg';"><?php } ?></a>
    <a href="ger_ate_ano.php?est=ano&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ano"){ ?><img src="imagem/ano_s.jpg" border="0"><?php }else{ ?><img src="imagem/ano.jpg" border="0" onmouseout="this.src='imagem/ano.jpg';" onmouseover="this.src='imagem/ano_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_ate_vol.php?est=vol&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="ger_sol_vol.php?est=vol&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/ger_ate_vol1-'.$mes.'-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Volume de Atendimentos no Ano" src="graficos/ger_ate_vol1-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Média de Atendimentos no Ano" src="graficos/ger_ate_vol2-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Volume de Atendimentos por Mês" src="graficos/ger_ate_vol3-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Volume de Atendimentos por Dia em <?php $mes_nome ?>" src="graficos/ger_ate_vol4-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL 01
    $sql = "SELECT date_format(atendimento_uar.atduar_dtainicio,'%d'), date_format(atendimento_uar.atduar_dtainicio,'%m'), date_format(atendimento_uar.atduar_dtainicio,'%Y'), atendimento_uar.stt_cod FROM atendimento_uar
    WHERE date(atendimento_uar.atduar_dtainicio) BETWEEN '" . $ano_ant . "-01-01 00:00:00' AND '" . $ano_cor . "-" . $mes . "-31 00:00:00' and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY atendimento_uar.atduar_cod"; $consulta = mysql_query($sql, $con) OR DIE (mysql_error());

    $ati_ate_ano_ant = 0; while ($dados1 = mysql_fetch_array($consulta)) {if ($dados1[2] == ($ano-1) and $dados1[3] == 1){$ati_ate_ano_ant++;}}
    mysql_data_seek($consulta, 0); $fin_ate_ano_ant = 0; while ($dados1 = mysql_fetch_array($consulta)) {if ($dados1[2] == ($ano-1) and $dados1[3] == 6){$fin_ate_ano_ant++;}}
    mysql_data_seek($consulta, 0); $ati_ate_ano_cor = 0; while ($dados1 = mysql_fetch_array($consulta)) {if ($dados1[2] == $ano and $dados1[3] == 1){$ati_ate_ano_cor++;}}
    mysql_data_seek($consulta, 0); $fin_ate_ano_cor = 0; while ($dados1 = mysql_fetch_array($consulta)) {if ($dados1[2] == $ano and $dados1[3] == 6){$fin_ate_ano_cor++;}}

// GRÁFICO 01
    $chart = new VerticalBarChart();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("Abertos", $ati_ate_ano_ant));
    $serie1->addPoint(new Point("Fechados", $fin_ate_ano_ant));
    $serie1->addPoint(new Point("Total", ($ati_ate_ano_ant+$fin_ate_ano_ant)));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("Abertos", $ati_ate_ano_cor));
    $serie2->addPoint(new Point("Fechados", $fin_ate_ano_cor));
    $serie2->addPoint(new Point("Total", ($ati_ate_ano_cor+$fin_ate_ano_cor)));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("$ano_ant", $serie1);
    $dataSet->addSerie("$ano_cor", $serie2);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.65);
    $chart->setTitle("Volume de Atendimentos até $mes_nome de $ano");
    $chart->render("graficos/ger_ate_vol1-$mes-$ano.png");

// GRÁFICO 02

    $chart = new VerticalBarChart();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("Diária", round((($ati_ate_ano_ant+$fin_ate_ano_ant) / 365),0)));
    $serie1->addPoint(new Point("Mensal", round((($ati_ate_ano_ant+$fin_ate_ano_ant) / 12),0)));
    $serie1->addPoint(new Point("Anual", ($ati_ate_ano_ant+$fin_ate_ano_ant)));
    $serie1->addPoint(new Point("Projeção", (($ati_ate_ano_ant+$fin_ate_ano_ant) / 12) * 12));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("Diária", round((($ati_ate_ano_cor+$fin_ate_ano_cor) / ($mes * 30.41)),0)));
    $serie2->addPoint(new Point("Mensal", round((($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes),0)));
    $serie2->addPoint(new Point("Anual", ($ati_ate_ano_cor+$fin_ate_ano_cor)));
    $serie2->addPoint(new Point("Projeção", (($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes) * 12));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("$ano_ant", $serie1);
    $dataSet->addSerie("$ano_cor", $serie2);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.65);
    $chart->setTitle("Médias de Atendimentos até $mes_nome de $ano");
    $chart->render("graficos/ger_ate_vol2-$mes-$ano.png");

// GRÁFICO 03
// Linha 1
    mysql_data_seek($consulta, 0);
    while ($dados2 = mysql_fetch_array($consulta)) {
        if ($dados2[2] == ($ano-1)) {
            switch ($dados2[1]) {
                case '01': $jan_ano_ant++; break;
                case '02': $fev_ano_ant++; break;
                case '03': $mar_ano_ant++; break;
                case '04': $abr_ano_ant++; break;
                case '05': $mai_ano_ant++; break;
                case '06': $jun_ano_ant++; break;
                case '07': $jul_ano_ant++; break;
                case '08': $ago_ano_ant++; break;
                case '09': $set_ano_ant++; break;
                case '10': $out_ano_ant++; break;
                case '11': $nov_ano_ant++; break;
                case '12': $dez_ano_ant++; break;
            }
        }
    }
// Linha 2
    $jan_ano_cor = 0; $fev_ano_cor = 0; $mar_ano_cor = 0; $abr_ano_cor = 0; $mai_ano_cor = 0; $jun_ano_cor = 0; $jul_ano_cor = 0; $ago_ano_cor = 0; $set_ano_cor = 0; $out_ano_cor = 0; $nov_ano_cor = 0; $dez_ano_cor = 0;

    mysql_data_seek($consulta, 0);
    while ($dados2 = mysql_fetch_array($consulta)) {
        if ($dados2[2] == $ano) {
            switch ($dados2[1]) {
                case '01': $jan_ano_cor++; break;
                case '02': $fev_ano_cor++; break;
                case '03': $mar_ano_cor++; break;
                case '04': $abr_ano_cor++; break;
                case '05': $mai_ano_cor++; break;
                case '06': $jun_ano_cor++; break;
                case '07': $jul_ano_cor++; break;
                case '08': $ago_ano_cor++; break;
                case '09': $set_ano_cor++; break;
                case '10': $out_ano_cor++; break;
                case '11': $nov_ano_cor++; break;
                case '12': $dez_ano_cor++; break;
            }
        }
    }

    $chart = new LineChartL2C2();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("JAN", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("FEV", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("MAR", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("ABR", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("MAIO", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("JUN", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("JUL", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("AGO", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("SET", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("OUT", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("NOV", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));
    $serie1->addPoint(new Point("DEZ", ($ati_ate_ano_ant+$fin_ate_ano_ant) / 12));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("JAN", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("FEV", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("MAR", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("ABR", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("MAIO", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("JUN", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("JUL", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("AGO", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("SET", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("OUT", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("NOV", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));
    $serie2->addPoint(new Point("DEZ", ($ati_ate_ano_cor+$fin_ate_ano_cor) / $mes));

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
    $dataSet->addSerie("Média $ano_ant", $serie1);
    $dataSet->addSerie("Média $ano_cor", $serie2);
    $dataSet->addSerie($ano_ant, $serie3);
    $dataSet->addSerie($ano_cor, $serie4);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.78);
    $chart->setTitle("Volume de Atendimentos por Mês em $ano");
    $chart->render("graficos/ger_ate_vol3-$mes-$ano.png");

// GRÁFICO 04
// Linha 1
    mysql_data_seek($consulta, 0); $ano_ant_mes = 0; while ($dados4 = mysql_fetch_array($consulta)) {if ($dados4[2] == ($ano-1) and $dados4[1] == $mes and ($dados4[3] == 1 or $dados4[3] == 6)){$ano_ant_mes++;}}

    //$ano_cor_[todos os dias]
    $div_ano_ant = 0;
    for ($i = 1; $i < 32; $i++) { mysql_data_seek($consulta, 0); $ano_ant_[$i] = 0;
        while ($dados3 = mysql_fetch_array($consulta)) {if ($dados3[2] == ($ano-1) and $dados3[1] == $mes and $dados3[0] == $i and ($dados3[3] == 1 or $dados3[3] == 6)){$ano_ant_[$i] = $ano_ant_[$i] + 1;}}
        if ($ano_ant_[$i] != 0) {$div_ano_ant++;}
    }

// Linha 2
    mysql_data_seek($consulta, 0); $ano_cor_mes = 0; while ($dados3 = mysql_fetch_array($consulta)) {if ($dados3[2] == $ano and $dados3[1] == $mes and ($dados3[3] == 1 or $dados3[3] == 6)) {$ano_cor_mes++;}}

//$ano_cor_[todos os dias]
    $div_ano_cor = 0;
    for ($i = 1; $i < 32; $i++) { mysql_data_seek($consulta, 0); $ano_cor_[$i] = 0;
        while ($dados3 = mysql_fetch_array($consulta)) {if ($dados3[2] == $ano and $dados3[1] == $mes and $dados3[0] == $i and ($dados3[3] == 1 or $dados3[3] == 6)) {$ano_cor_[$i] = $ano_cor_[$i] + 1;}}
        if ($ano_cor_[$i] != 0) {$div_ano_cor++;}
    }

    $chart = new LineChartL2C2();

    $serie1 = new XYDataSet(); for ($i = 1; $i < 32; $i++) {$serie1->addPoint(new Point($i, $ano_ant_mes/$div_ano_ant));}
    $serie2 = new XYDataSet(); for ($i = 1; $i < 32; $i++) {$serie2->addPoint(new Point($i, $ano_cor_mes/$div_ano_cor));}
    $serie3 = new XYDataSet(); for ($i = 1; $i < 32; $i++) {$serie3->addPoint(new Point($i, $ano_ant_[$i]));}
    $serie4 = new XYDataSet(); for ($i = 1; $i < 32; $i++) {$serie4->addPoint(new Point($i, $ano_cor_[$i]));}

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("Média $ano_ant", $serie1);
    $dataSet->addSerie("Média $ano_cor", $serie2);
    $dataSet->addSerie($ano_ant, $serie3);
    $dataSet->addSerie($ano_cor, $serie4);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.78);
    $chart->setTitle("Volume de Atendimentos por Dia em $mes_nome de $ano");
    $chart->render("graficos/ger_ate_vol4-$mes-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta); mysql_close($con);?>