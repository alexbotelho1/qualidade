<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
require('solicitacoes.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red">Retrabalhos</font> de <font color="red"><?php echo $cha_nome ?></font> até <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="ret_sol_pre.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="ret_sol_pre.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="ret_sol_pre.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="ret_sol_pre.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="ret_sol_pre.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="ret_sol_pre.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="ret_sol_pre.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/ret_sol_pre1-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) {
    echo "Estamos na ".date("W", mktime(0, 0, 0, date("m"), date("d"), date("Y")))."ª semana de $ano.";
?>
    <hr width="900"><img alt="Retrabalhos com Erros no Preenchimentos por Mês em <?php echo $ano ?>" src="graficos/ret_sol_pre1-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Retrabalhos com Erros no Preenchimentos por Semana em <?php echo $ano ?>" src="graficos/ret_sol_pre2-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL
    $sql1 = "select solicitacao.slt_cod, date_format(parecer.prc_data,'%Y') as ANO, date_format(parecer.prc_data,'%m') as MES, date_format(parecer.prc_data,'%d') as DIA, count(1) as contagem from solicitacao inner join parecer on (parecer.slt_cod = solicitacao.slt_cod)
    where date(parecer.prc_data) between '" . $ano_ant . "-01-01 00:00:00' AND '" . $ano_cor . "-" . $mes . "-31 00:00:00' and solicitacao.stp_cod in ($solicitacoes) AND sistema.parecer.dstt_cod=17 AND sistema.parecer.prc_descricao LIKE '%28/08/2015%'
    group by solicitacao.slt_cod order by ANO ASC, MES ASC, DIA ASC"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());
// GRÁFICO 01
    $jan_ano_ant = 0; $fev_ano_ant = 0; $mar_ano_ant = 0; $abr_ano_ant = 0; $mai_ano_ant = 0; $jun_ano_ant = 0; $jul_ano_ant = 0; $ago_ano_ant = 0; $set_ano_ant = 0; $out_ano_ant = 0; $nov_ano_ant = 0; $dez_ano_ant = 0;
    $jan_ano_cor = 0; $fev_ano_cor = 0; $mar_ano_cor = 0; $abr_ano_cor = 0; $mai_ano_cor = 0; $jun_ano_cor = 0; $jul_ano_cor = 0; $ago_ano_cor = 0; $set_ano_cor = 0; $out_ano_cor = 0; $nov_ano_cor = 0; $dez_ano_cor = 0;

    mysql_data_seek($consulta1, 0);
    while ($dados1 = mysql_fetch_array($consulta1)) {
        if ($dados1[1] == ($ano-1)) {
            switch ($dados1[2]) {
                case '01': $jan_ano_ant = $jan_ano_ant + $dados1[4]; break;
                case '02': $fev_ano_ant = $fev_ano_ant + $dados1[4]; break;
                case '03': $mar_ano_ant = $mar_ano_ant + $dados1[4]; break;
                case '04': $abr_ano_ant = $abr_ano_ant + $dados1[4]; break;
                case '05': $mai_ano_ant = $mai_ano_ant + $dados1[4]; break;
                case '06': $jun_ano_ant = $jun_ano_ant + $dados1[4]; break;
                case '07': $jul_ano_ant = $jul_ano_ant + $dados1[4]; break;
                case '08': $ago_ano_ant = $ago_ano_ant + $dados1[4]; break;
                case '09': $set_ano_ant = $set_ano_ant + $dados1[4]; break;
                case '10': $out_ano_ant = $out_ano_ant + $dados1[4]; break;
                case '11': $nov_ano_ant = $nov_ano_ant + $dados1[4]; break;
                case '12': $dez_ano_ant = $dez_ano_ant + $dados1[4]; break;
            }
        }
    }

    mysql_data_seek($consulta1, 0);
    while ($dados1 = mysql_fetch_array($consulta1)) {
        if ($dados1[1] == $ano) {
            switch ($dados1[2]) {
                case '01': $jan_ano_cor = $jan_ano_cor + $dados1[4]; break;
                case '02': $fev_ano_cor = $fev_ano_cor + $dados1[4]; break;
                case '03': $mar_ano_cor = $mar_ano_cor + $dados1[4]; break;
                case '04': $abr_ano_cor = $abr_ano_cor + $dados1[4]; break;
                case '05': $mai_ano_cor = $mai_ano_cor + $dados1[4]; break;
                case '06': $jun_ano_cor = $jun_ano_cor + $dados1[4]; break;
                case '07': $jul_ano_cor = $jul_ano_cor + $dados1[4]; break;
                case '08': $ago_ano_cor = $ago_ano_cor + $dados1[4]; break;
                case '09': $set_ano_cor = $set_ano_cor + $dados1[4]; break;
                case '10': $out_ano_cor = $out_ano_cor + $dados1[4]; break;
                case '11': $nov_ano_cor = $nov_ano_cor + $dados1[4]; break;
                case '12': $dez_ano_cor = $dez_ano_cor + $dados1[4]; break;
            }
        }
    }

    $chart = new VerticalBarChart();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("JAN", $jan_ano_ant));
    $serie1->addPoint(new Point("FEV", $fev_ano_ant));
    $serie1->addPoint(new Point("MAR", $mar_ano_ant));
    $serie1->addPoint(new Point("ABR", $abr_ano_ant));
    $serie1->addPoint(new Point("MAIO", $mai_ano_ant));
    $serie1->addPoint(new Point("JUN", $jun_ano_ant));
    $serie1->addPoint(new Point("JUL", $jul_ano_ant));
    $serie1->addPoint(new Point("AGO", $ago_ano_ant));
    $serie1->addPoint(new Point("SET", $set_ano_ant));
    $serie1->addPoint(new Point("OUT", $out_ano_ant));
    $serie1->addPoint(new Point("NOV", $nov_ano_ant));
    $serie1->addPoint(new Point("DEZ", $dez_ano_ant));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("JAN", $jan_ano_cor));
    $serie2->addPoint(new Point("FEV", $fev_ano_cor));
    $serie2->addPoint(new Point("MAR", $mar_ano_cor));
    $serie2->addPoint(new Point("ABR", $abr_ano_cor));
    $serie2->addPoint(new Point("MAIO", $mai_ano_cor));
    $serie2->addPoint(new Point("JUN", $jun_ano_cor));
    $serie2->addPoint(new Point("JUL", $jul_ano_cor));
    $serie2->addPoint(new Point("AGO", $ago_ano_cor));
    $serie2->addPoint(new Point("SET", $set_ano_cor));
    $serie2->addPoint(new Point("OUT", $out_ano_cor));
    $serie2->addPoint(new Point("NOV", $nov_ano_cor));
    $serie2->addPoint(new Point("DEZ", $dez_ano_cor));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie($ano_ant, $serie1);
    $dataSet->addSerie($ano_cor, $serie2);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.83);
    $chart->getPlot()->setGraphPadding(new Padding(10, 1, 40, 30));
    $chart->setTitle("Retrabalhos com Erros no Preenchimentos por Mês em $ano");
    $chart->render("graficos/ret_sol_pre1-$ano.png");

// GRÁFICO 02
    for ($i=1;$i<54;$i++) {$ns_ant[$i]=0;}
    for ($i=1;$i<54;$i++) {$ns_cor[$i]=0;}

    mysql_data_seek($consulta1, 0); $i=1;
    while ($dados1 = mysql_fetch_array($consulta1)) {
        if ($dados1[1] == $ano_ant) {
            switch (date("W", mktime(0, 0, 0, $dados1[2], $dados1[3], $dados1[1])))  {
                case '01': $ns_ant[1]++;  break; case '02': $ns_ant[2]++;  break;
                case '03': $ns_ant[3]++;  break; case '04': $ns_ant[4]++;  break;
                case '05': $ns_ant[5]++;  break; case '06': $ns_ant[6]++;  break;
                case '07': $ns_ant[7]++;  break; case '08': $ns_ant[8]++;  break;
                case '09': $ns_ant[9]++;  break; case '10': $ns_ant[10]++; break;
                case '11': $ns_ant[11]++; break; case '12': $ns_ant[12]++; break;
                case '13': $ns_ant[13]++; break; case '14': $ns_ant[14]++; break;
                case '15': $ns_ant[15]++; break; case '16': $ns_ant[16]++; break;
                case '17': $ns_ant[17]++; break; case '18': $ns_ant[18]++; break;
                case '19': $ns_ant[19]++; break; case '20': $ns_ant[20]++; break;
                case '21': $ns_ant[21]++; break; case '22': $ns_ant[22]++; break;
                case '23': $ns_ant[23]++; break; case '24': $ns_ant[24]++; break;
                case '25': $ns_ant[25]++; break; case '26': $ns_ant[26]++; break;
                case '27': $ns_ant[27]++; break; case '28': $ns_ant[28]++; break;
                case '29': $ns_ant[29]++; break; case '30': $ns_ant[30]++; break;
                case '31': $ns_ant[31]++; break; case '32': $ns_ant[32]++; break;
                case '33': $ns_ant[33]++; break; case '34': $ns_ant[34]++; break;
                case '35': $ns_ant[35]++; break; case '36': $ns_ant[36]++; break;
                case '37': $ns_ant[37]++; break; case '38': $ns_ant[38]++; break;
                case '39': $ns_ant[39]++; break; case '40': $ns_ant[40]++; break;
                case '41': $ns_ant[41]++; break; case '42': $ns_ant[42]++; break;
                case '43': $ns_ant[43]++; break; case '44': $ns_ant[44]++; break;
                case '45': $ns_ant[45]++; break; case '46': $ns_ant[46]++; break;
                case '47': $ns_ant[47]++; break; case '48': $ns_ant[48]++; break;
                case '49': $ns_ant[49]++; break; case '50': $ns_ant[50]++; break;
                case '51': $ns_ant[51]++; break; case '52': $ns_ant[52]++; break;
                case '53': $ns_ant[53]++; break;
            }
        } else {
            switch (date("W", mktime(0, 0, 0, $dados1[2], $dados1[3], $dados1[1])))  {
                case '01': $ns_cor[1]++;  break; case '02': $ns_cor[2]++;  break;
                case '03': $ns_cor[3]++;  break; case '04': $ns_cor[4]++;  break;
                case '05': $ns_cor[5]++;  break; case '06': $ns_cor[6]++;  break;
                case '07': $ns_cor[7]++;  break; case '08': $ns_cor[8]++;  break;
                case '09': $ns_cor[9]++;  break; case '10': $ns_cor[10]++; break;
                case '11': $ns_cor[11]++; break; case '12': $ns_cor[12]++; break;
                case '13': $ns_cor[13]++; break; case '14': $ns_cor[14]++; break;
                case '15': $ns_cor[15]++; break; case '16': $ns_cor[16]++; break;
                case '17': $ns_cor[17]++; break; case '18': $ns_cor[18]++; break;
                case '19': $ns_cor[19]++; break; case '20': $ns_cor[20]++; break;
                case '21': $ns_cor[21]++; break; case '22': $ns_cor[22]++; break;
                case '23': $ns_cor[23]++; break; case '24': $ns_cor[24]++; break;
                case '25': $ns_cor[25]++; break; case '26': $ns_cor[26]++; break;
                case '27': $ns_cor[27]++; break; case '28': $ns_cor[28]++; break;
                case '29': $ns_cor[29]++; break; case '30': $ns_cor[30]++; break;
                case '31': $ns_cor[31]++; break; case '32': $ns_cor[32]++; break;
                case '33': $ns_cor[33]++; break; case '34': $ns_cor[34]++; break;
                case '35': $ns_cor[35]++; break; case '36': $ns_cor[36]++; break;
                case '37': $ns_cor[37]++; break; case '38': $ns_cor[38]++; break;
                case '39': $ns_cor[39]++; break; case '40': $ns_cor[40]++; break;
                case '41': $ns_cor[41]++; break; case '42': $ns_cor[42]++; break;
                case '43': $ns_cor[43]++; break; case '44': $ns_cor[44]++; break;
                case '45': $ns_cor[45]++; break; case '46': $ns_cor[46]++; break;
                case '47': $ns_cor[47]++; break; case '48': $ns_cor[48]++; break;
                case '49': $ns_cor[49]++; break; case '50': $ns_cor[50]++; break;
                case '51': $ns_cor[51]++; break; case '52': $ns_cor[52]++; break;
                case '53': $ns_cor[53]++; break;
            }
        }
    }

    $chart = new VerticalBarChart(900, 400);

    $serie1 = new XYDataSet();
    for ($i=1;$i<54;$i++) {$serie1->addPoint(new Point($i, $ns_ant[$i]));}
    $serie2 = new XYDataSet();
    for ($i=1;$i<54;$i++) {$serie2->addPoint(new Point($i, $ns_cor[$i]));}

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie($ano_ant, $serie1);
    $dataSet->addSerie($ano_cor, $serie2);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.89);
    $chart->getPlot()->setGraphPadding(new Padding(10, 1, 40, 30));
    $chart->setTitle("Retrabalhos com Erros no Preenchimentos por Mês em $ano");
    $chart->render("graficos/ret_sol_pre2-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta); mysql_close($con);?>
