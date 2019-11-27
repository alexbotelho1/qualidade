<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red">Evolução</font> do <font color="red">Volume</font> de <font color="red"><?php echo $cha_nome ?></font> até <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="evo_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="evo_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="evo_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="evo_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="evo_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="evo_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="evo_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="evo_ate_vol.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="evo_ate_vol.php?est=vol&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="evo_sol_vol.php?est=vol&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/evo_ate_vol1-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Evolução do Volume de Atendimentos em 4 anos" src="graficos/evo_ate_vol1-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Evolução do ANS de Atendimentos em 4 anos" src="graficos/evo_ate_vol2-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL 01
    $sql1 = "SELECT date_format(atendimento_uar.atduar_dtainicio,'%Y') as Ano, date_format(atendimento_uar.atduar_dtainicio,'%m') as Mes, count(1) as qtd FROM atendimento_uar
    WHERE date(atendimento_uar.atduar_dtainicio) BETWEEN '".($ano-4)."-".$mes."-01 00:00:00' and '".$ano."-".$mes."-31 00:00:00' and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
     GROUP BY Mes, Ano ORDER BY Ano ASC, Mes ASC"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());
// GRÁFICO 01
    $chart = new LineChartYEAR(900, 400);
    $dataSet = new XYDataSet();
    while ($dados1 = mysql_fetch_array($consulta1)) {$dataSet->addPoint(new Point($dados1[0]." ".$dados1[1], $dados1[2]));}
    $chart->setDataSet($dataSet);
    $chart->setTitle("Evolução do Volume de Atendimentos em 4 anos");
    $chart->render("graficos/evo_ate_vol1-$ano.png");

// SQL 02
    $sql2 = "SELECT date_format(atendimento_uar.atduar_dtainicio,'%Y') as Ano, date_format(atendimento_uar.atduar_dtainicio,'%m') as Mes, timestampdiff(second,atendimento_uar.atduar_dtainicio,atendimento_uar.atduar_dtafim) FROM atendimento_uar
    WHERE date(atendimento_uar.atduar_dtainicio) BETWEEN '".($ano-4)."-".$mes."-01 00:00:00' AND '".$ano."-".$mes."-31 00:00:00' and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY atendimento_uar.atduar_cod ORDER BY Ano DESC, Mes ASC"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error());
// GRÁFICO 02
    for ($i=0;$i<5;$i++) {
        $anos = $ano - $i;
        mysql_data_seek($consulta2, 0);
        while ($dados2 = mysql_fetch_array($consulta2)){
            $sim = 0; $nao = 0;
            if ($dados2[0] == $anos) {
                switch ($dados2[1]) {
                    case '01': if ($dados2[2] < $atendimento){$jan_sim++;}else{$jan_nao++;}; break;
                    case '02': if ($dados2[2] < $atendimento){$fev_sim++;}else{$fev_nao++;}; break;
                    case '03': if ($dados2[2] < $atendimento){$mar_sim++;}else{$mar_nao++;}; break;
                    case '04': if ($dados2[2] < $atendimento){$abr_sim++;}else{$abr_nao++;}; break;
                    case '05': if ($dados2[2] < $atendimento){$mai_sim++;}else{$mai_nao++;}; break;
                    case '06': if ($dados2[2] < $atendimento){$jun_sim++;}else{$jun_nao++;}; break;
                    case '07': if ($dados2[2] < $atendimento){$jul_sim++;}else{$jul_nao++;}; break;
                    case '08': if ($dados2[2] < $atendimento){$ago_sim++;}else{$ago_nao++;}; break;
                    case '09': if ($dados2[2] < $atendimento){$set_sim++;}else{$set_nao++;}; break;
                    case '10': if ($dados2[2] < $atendimento){$out_sim++;}else{$out_nao++;}; break;
                    case '11': if ($dados2[2] < $atendimento){$nov_sim++;}else{$nov_nao++;}; break;
                    case '12': if ($dados2[2] < $atendimento){$dez_sim++;}else{$dez_nao++;}; break;
                }
            }
        }

        $jan_ano = round((($jan_sim * 100) / ($jan_nao+$jan_sim))); $fev_ano = round((($fev_sim * 100) / ($fev_nao+$fev_sim)));
        $mar_ano = round((($mar_sim * 100) / ($mar_nao+$mar_sim))); $abr_ano = round((($abr_sim * 100) / ($abr_nao+$abr_sim)));
        $mai_ano = round((($mai_sim * 100) / ($mai_nao+$mai_sim))); $jun_ano = round((($jun_sim * 100) / ($jun_nao+$jun_sim)));
        $jul_ano = round((($jul_sim * 100) / ($jul_nao+$jul_sim))); $ago_ano = round((($ago_sim * 100) / ($ago_nao+$ago_sim)));
        $set_ano = round((($set_sim * 100) / ($set_nao+$set_sim))); $out_ano = round((($out_sim * 100) / ($out_nao+$out_sim)));
        $nov_ano = round((($nov_sim * 100) / ($nov_nao+$nov_sim))); $dez_ano = round((($dez_sim * 100) / ($dez_nao+$dez_sim)));

        if ($jan_ano != 0) {$ans_meses[] = array($anos." 01", $jan_ano);} $jan_sim = 0; $jan_nao = 0;
        if ($fev_ano != 0) {$ans_meses[] = array($anos." 02", $fev_ano);} $fev_sim = 0; $fev_nao = 0;
        if ($mar_ano != 0) {$ans_meses[] = array($anos." 03", $mar_ano);} $mar_sim = 0; $mar_nao = 0;
        if ($abr_ano != 0) {$ans_meses[] = array($anos." 04", $abr_ano);} $abr_sim = 0; $abr_nao = 0;
        if ($mai_ano != 0) {$ans_meses[] = array($anos." 05", $mai_ano);} $mai_sim = 0; $mai_nao = 0;
        if ($jun_ano != 0) {$ans_meses[] = array($anos." 06", $jun_ano);} $jun_sim = 0; $jun_nao = 0;
        if ($jul_ano != 0) {$ans_meses[] = array($anos." 07", $jul_ano);} $jul_sim = 0; $jul_nao = 0;
        if ($ago_ano != 0) {$ans_meses[] = array($anos." 08", $ago_ano);} $ago_sim = 0; $ago_nao = 0;
        if ($set_ano != 0) {$ans_meses[] = array($anos." 09", $set_ano);} $set_sim = 0; $set_nao = 0;
        if ($out_ano != 0) {$ans_meses[] = array($anos." 10", $out_ano);} $out_sim = 0; $out_nao = 0;
        if ($nov_ano != 0) {$ans_meses[] = array($anos." 11", $nov_ano);} $nov_sim = 0; $nov_nao = 0;
        if ($dez_ano != 0) {$ans_meses[] = array($anos." 12", $dez_ano);} $dez_sim = 0; $dez_nao = 0;
    } sort($ans_meses);

    $chart = new LineChartYEAR(900, 400);
    $dataSet = new XYDataSet();
    for ($i=0;$i<count($ans_meses);$i++) {$dataSet->addPoint(new Point($ans_meses[$i][0], $ans_meses[$i][1]));}
    $chart->setDataSet($dataSet);
    $chart->setTitle("Evolução do Volume de Atendimentos em 4 anos");
    $chart->render("graficos/evo_ate_vol2-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta1);  mysql_free_result($consulta2); mysql_close($con);?>