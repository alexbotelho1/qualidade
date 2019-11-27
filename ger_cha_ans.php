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
    Estatística de <font color="red">Chamados</font> por <font color="red"><?php echo $est_nome ?></font> até <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="ger_cha_ans.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_cha_vol.php?est=vol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="vol"){ ?><img src="imagem/volume_s.jpg" border="0"><?php }else{ ?><img src="imagem/volume.jpg" border="0" onmouseout="this.src='imagem/volume.jpg';" onmouseover="this.src='imagem/volume_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=par&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=ans&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ans"){ ?><img src="imagem/ans_s.jpg" border="0"><?php }else{ ?><img src="imagem/ans.jpg" border="0" onmouseout="this.src='imagem/ans.jpg';" onmouseover="this.src='imagem/ans_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ano.php?est=ano&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ano"){ ?><img src="imagem/ano_s.jpg" border="0"><?php }else{ ?><img src="imagem/ano.jpg" border="0" onmouseout="this.src='imagem/ano.jpg';" onmouseover="this.src='imagem/ano_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/ger_cha_ans1-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Volume de Chamados em <?php echo $ano ?>" src="graficos/ger_cha_ans1-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Volume de Chamados por Mês em <?php echo $ano ?>" src="graficos/ger_cha_ans2-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL
    $sql1 = "SELECT date_format(atendimento_uar.atduar_dtainicio,'%d'), date_format(atendimento_uar.atduar_dtainicio,'%m'), date_format(atendimento_uar.atduar_dtainicio,'%Y'), empresa.emp_fantasia, timestampdiff(second,atendimento_uar.atduar_dtainicio,atendimento_uar.atduar_dtafim)
    FROM atendimento_uar inner join empresa on (empresa.emp_cod = atendimento_uar.atduar_representante) WHERE date(atendimento_uar.atduar_dtainicio) BETWEEN '" . $ano_ant . "-01-01 00:00:00' AND '" . $ano_cor . "-12-31 00:00:00' and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY atendimento_uar.atduar_cod"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());

    $sql2 = "SELECT date_format(solicitacao.slt_data,'%d'), date_format(solicitacao.slt_data,'%m'), date_format(solicitacao.slt_data,'%Y'), empresa.emp_fantasia, timestampdiff(second,solicitacao.slt_data,max(parecer.prc_data)), solicitacao.stp_cod, solicitacao.slt_prioridade, solicitacao.sprd_cod
    FROM solicitacao inner join empresa on (empresa.emp_cod = solicitacao.slt_representante) inner join parecer on (parecer.slt_cod = solicitacao.slt_cod) WHERE date(solicitacao.slt_data) BETWEEN '" . $ano_ant . "-01-01 00:00:00' AND '" . $ano_cor . "-12-31 00:00:00' and solicitacao.stp_cod in ($solicitacoes) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6)
    GROUP BY solicitacao.slt_cod"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error());

    $sql3 = "SELECT max(date_format(solicitacao.slt_data,'%m')) FROM solicitacao WHERE date_format(solicitacao.slt_data,'%Y') = $ano"; $consulta3 = mysql_query($sql3, $con) OR DIE (mysql_error()); $dados3 = mysql_fetch_array($consulta3);

    $sql4 = "SELECT max(date_format(atendimento_uar.atduar_dtainicio,'%m')) FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano"; $consulta4 = mysql_query($sql4, $con) OR DIE (mysql_error()); $dados4 = mysql_fetch_array($consulta4);

    if ($dados4[0] > $dados3[0]){$mes = $dados4[0];}else{$mes = $dados3[0];}
    mysql_data_seek($consulta1, 0); while ($dados1 = mysql_fetch_array($consulta1)){if ($dados1[2] == ($ano-1)){if ($dados1[4] > $atendimento){$nao_ate_ano_ant++;} else {$sim_ate_ano_ant++;}}}
    mysql_data_seek($consulta1, 0); while ($dados1 = mysql_fetch_array($consulta1)) {if ($dados1[2] == $ano){if ($dados1[4] > $atendimento){$nao_ate_ano_cor++;} else {$sim_ate_ano_cor++;}}}

    mysql_data_seek($consulta2, 0);
    while ($dados2 = mysql_fetch_array($consulta2)) {
        if ($dados2[2] == ($ano-1)) {
            switch ($dados2[5]) {
                case 1:
                    if ($dados2[6] != 0) {
                        switch ($dados2[5]) {
                            case 1: if ($dados2[4] < $erro_urgente) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 2: if ($dados2[4] < $erro_alta) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 3: if ($dados2[4] < $erro_geral) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 4: if ($dados2[4] < $erro_geral) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;};  break;
                            case 5: if ($dados2[4] < $erro_imediata) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                        }
                    } else {
                        switch ($dados2[7]) {
                            case 1: if ($dados2[4] < $erro_urgente) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 2: if ($dados2[4] < $erro_geral) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 3: if ($dados2[4] < $erro_geral) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 4: if ($dados2[4] < $erro_alta) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                            case 5: if ($dados2[4] < $erro_imediata) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                        }
                    } break;
                case 2: if ($dados2[4] < $melhoria) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 10: if ($dados2[4] < $duvida) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 19: if ($dados2[4] < $conv_dados) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 25: if ($dados2[4] < $fiscal) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 28: if ($dados2[4] < $fiscal) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 27: if ($dados2[4] < $base_antromp) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
                case 32: if ($dados2[4] < $deficiencia) {$sim_sol_ano_ant++;} else {$nao_sol_ano_ant++;}; break;
            }
        }
    }

    mysql_data_seek($consulta2, 0);
    while ($dados2 = mysql_fetch_array($consulta2)) {
        if ($dados2[2] == $ano) {
            switch ($dados2[5]) {
                case 1:
                    if ($dados2[6] != 0) {
                        switch ($dados2[5]) {
                            case 1: if ($dados2[4] < $erro_urgente) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 2: if ($dados2[4] < $erro_alta) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 3: if ($dados2[4] < $erro_geral) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 4: if ($dados2[4] < $erro_geral) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;};  break;
                            case 5: if ($dados2[4] < $erro_imediata) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                        }
                    } else {
                        switch ($dados2[7]) {
                            case 1: if ($dados2[4] < $erro_urgente) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 2: if ($dados2[4] < $erro_geral) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 3: if ($dados2[4] < $erro_geral) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 4: if ($dados2[4] < $erro_alta) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                            case 5: if ($dados2[4] < $erro_imediata) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                        }
                    } break;
                case 2: if ($dados2[4] < $melhoria) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 10: if ($dados2[4] < $duvida) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 19: if ($dados2[4] < $conv_dados) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 25: if ($dados2[4] < $fiscal) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 28: if ($dados2[4] < $fiscal) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 27: if ($dados2[4] < $base_antromp) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
                case 32: if ($dados2[4] < $deficiencia) {$sim_sol_ano_cor++;} else {$nao_sol_ano_cor++;}; break;
            }
        }
    }
// GRÁFICO 01
    $chart = new LineChartL1C2();

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("!OK", $ans));
    $serie1->addPoint(new Point("OK", $ans));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("!OK", round((($nao_ate_ano_ant+$nao_sol_ano_ant) * 100) / (($nao_ate_ano_ant+$sim_ate_ano_ant)+($nao_sol_ano_ant+$sim_sol_ano_ant)))));
    $serie2->addPoint(new Point("OK", round((($sim_ate_ano_ant+$sim_sol_ano_ant) * 100) / (($nao_ate_ano_ant+$sim_ate_ano_ant)+($nao_sol_ano_ant+$sim_sol_ano_ant)))));

    $serie3 = new XYDataSet();
    $serie3->addPoint(new Point("!OK", round((($nao_ate_ano_cor+$nao_sol_ano_cor) * 100) / (($nao_ate_ano_cor+$sim_ate_ano_cor)+($nao_sol_ano_cor+$sim_sol_ano_cor)))));
    $serie3->addPoint(new Point("OK", round((($sim_ate_ano_cor+$sim_sol_ano_cor) * 100) / (($nao_ate_ano_cor+$sim_ate_ano_cor)+($nao_sol_ano_cor+$sim_sol_ano_cor)))));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("ANS", $serie1);
    $dataSet->addSerie(($ano-1), $serie2);
    $dataSet->addSerie($ano, $serie3);
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.65);
    $chart->setTitle("ANS de Chamados em $ano");
    $chart->render("graficos/ger_cha_ans1-$ano.png");

// GRÁFICO 02
// Linha 1
    mysql_data_seek($consulta1, 0);
    while ($dados1 = mysql_fetch_array($consulta1)){
        if ($dados1[2] == ($ano-1)) {
            switch ($dados1[1]) {
                case '01': if ($dados1[4] > $atendimento){$jan_nao++;}else{$jan_sim++;}; break;
                case '02': if ($dados1[4] > $atendimento){$fev_nao++;}else{$fev_sim++;}; break;
                case '03': if ($dados1[4] > $atendimento){$mar_nao++;}else{$mar_sim++;}; break;
                case '04': if ($dados1[4] > $atendimento){$abr_nao++;}else{$abr_sim++;}; break;
                case '05': if ($dados1[4] > $atendimento){$mai_nao++;}else{$mai_sim++;}; break;
                case '06': if ($dados1[4] > $atendimento){$jun_nao++;}else{$jun_sim++;}; break;
                case '07': if ($dados1[4] > $atendimento){$jul_nao++;}else{$jul_sim++;}; break;
                case '08': if ($dados1[4] > $atendimento){$ago_nao++;}else{$ago_sim++;}; break;
                case '09': if ($dados1[4] > $atendimento){$set_nao++;}else{$set_sim++;}; break;
                case '10': if ($dados1[4] > $atendimento){$out_nao++;}else{$out_sim++;}; break;
                case '11': if ($dados1[4] > $atendimento){$nov_nao++;}else{$nov_sim++;}; break;
                case '12': if ($dados1[4] > $atendimento){$dez_nao++;}else{$dez_sim++;}; break;
            }
        }
    }

    mysql_data_seek($consulta2, 0);
    while ($dados2 = mysql_fetch_array($consulta2)) {
        $sim = 0; $nao = 0;
        if ($dados2[2] == ($ano-1)) {
            switch ($dados2[5]) {
                case 1:
                    if ($dados2[6] != 0) {
                        switch ($dados2[5]) {
                            case 1: if ($dados2[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                            case 2: if ($dados2[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                            case 3: if ($dados2[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 4: if ($dados2[4] < $erro_geral) {$sim++;} else {$nao++;};  break;
                            case 5: if ($dados2[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                        }
                    } else {
                        switch ($dados2[7]) {
                            case 1: if ($dados2[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                            case 2: if ($dados2[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 3: if ($dados2[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 4: if ($dados2[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                            case 5: if ($dados2[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                        }
                    } break;
                case 2: if ($dados2[4] < $melhoria) {$sim++;} else {$nao++;}; break;
                case 10: if ($dados2[4] < $duvida) {$sim++;} else {$nao++;}; break;
                case 19: if ($dados2[4] < $conv_dados) {$sim++;} else {$nao++;}; break;
                case 25: if ($dados2[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                case 28: if ($dados2[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                case 27: if ($dados2[4] < $base_antromp) {$sim++;} else {$nao++;}; break;
                case 32: if ($dados2[4] < $deficiencia) {$sim++;} else {$nao++;}; break;
            }
            switch ($dados2[1]) {
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
    mysql_data_seek($consulta1, 0);
    while ($dados1 = mysql_fetch_array($consulta1)){
        if ($dados1[2] == $ano) {
            switch ($dados1[1]) {
                case '01': if ($dados1[4] > $atendimento){$jan_nao++;}else{$jan_sim++;}; break;
                case '02': if ($dados1[4] > $atendimento){$fev_nao++;}else{$fev_sim++;}; break;
                case '03': if ($dados1[4] > $atendimento){$mar_nao++;}else{$mar_sim++;}; break;
                case '04': if ($dados1[4] > $atendimento){$abr_nao++;}else{$abr_sim++;}; break;
                case '05': if ($dados1[4] > $atendimento){$mai_nao++;}else{$mai_sim++;}; break;
                case '06': if ($dados1[4] > $atendimento){$jun_nao++;}else{$jun_sim++;}; break;
                case '07': if ($dados1[4] > $atendimento){$jul_nao++;}else{$jul_sim++;}; break;
                case '08': if ($dados1[4] > $atendimento){$ago_nao++;}else{$ago_sim++;}; break;
                case '09': if ($dados1[4] > $atendimento){$set_nao++;}else{$set_sim++;}; break;
                case '10': if ($dados1[4] > $atendimento){$out_nao++;}else{$out_sim++;}; break;
                case '11': if ($dados1[4] > $atendimento){$nov_nao++;}else{$nov_sim++;}; break;
                case '12': if ($dados1[4] > $atendimento){$dez_nao++;}else{$dez_sim++;}; break;
            }
        }
    }
    mysql_data_seek($consulta2, 0);
    while ($dados2 = mysql_fetch_array($consulta2)) {
        $sim = 0; $nao = 0;
        if ($dados2[2] == $ano) {
            switch ($dados2[5]) {
                case 1:
                    if ($dados2[6] != 0) {
                        switch ($dados2[5]) {
                            case 1: if ($dados2[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                            case 2: if ($dados2[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                            case 3: if ($dados2[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 4: if ($dados2[4] < $erro_geral) {$sim++;} else {$nao++;};  break;
                            case 5: if ($dados2[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                        }
                    } else {
                        switch ($dados2[7]) {
                            case 1: if ($dados2[4] < $erro_urgente) {$sim++;} else {$nao++;}; break;
                            case 2: if ($dados2[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 3: if ($dados2[4] < $erro_geral) {$sim++;} else {$nao++;}; break;
                            case 4: if ($dados2[4] < $erro_alta) {$sim++;} else {$nao++;}; break;
                            case 5: if ($dados2[4] < $erro_imediata) {$sim++;} else {$nao++;}; break;
                        }
                    } break;
                case 2: if ($dados2[4] < $melhoria) {$sim++;} else {$nao++;}; break;
                case 10: if ($dados2[4] < $duvida) {$sim++;} else {$nao++;}; break;
                case 19: if ($dados2[4] < $conv_dados) {$sim++;} else {$nao++;}; break;
                case 25: if ($dados2[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                case 28: if ($dados2[4] < $fiscal) {$sim++;} else {$nao++;}; break;
                case 27: if ($dados2[4] < $base_antromp) {$sim++;} else {$nao++;}; break;
                case 32: if ($dados2[4] < $deficiencia) {$sim++;} else {$nao++;}; break;
            }
            switch ($dados2[1]) {
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
    $chart->setTitle("ANS de Chamados por Mês em $ano");
    $chart->render("graficos/ger_cha_ans2-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta1); mysql_free_result($consulta2); mysql_free_result($consulta3); mysql_free_result($consulta4); mysql_close($con);?>