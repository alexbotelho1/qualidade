<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
require('carteiras.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red">Curva ABC</font> de <font color="red"><?php echo $cha_nome ?></font> por <font color="red"><?php echo $est_nome ?></font> em <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=01&ano=<?php echo $ano?>"><?php if($mes=='01'){ ?><img src="imagem/01_s.jpg" border="0"><?php }else{ ?><img src="imagem/01.jpg" border="0" onmouseout="this.src='imagem/01.jpg';" onmouseover="this.src='imagem/01_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=02&ano=<?php echo $ano?>"><?php if($mes=='02'){ ?><img src="imagem/02_s.jpg" border="0"><?php }else{ ?><img src="imagem/02.jpg" border="0" onmouseout="this.src='imagem/02.jpg';" onmouseover="this.src='imagem/02_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=03&ano=<?php echo $ano?>"><?php if($mes=='03'){ ?><img src="imagem/03_s.jpg" border="0"><?php }else{ ?><img src="imagem/03.jpg" border="0" onmouseout="this.src='imagem/03.jpg';" onmouseover="this.src='imagem/03_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=04&ano=<?php echo $ano?>"><?php if($mes=='04'){ ?><img src="imagem/04_s.jpg" border="0"><?php }else{ ?><img src="imagem/04.jpg" border="0" onmouseout="this.src='imagem/04.jpg';" onmouseover="this.src='imagem/04_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=05&ano=<?php echo $ano?>"><?php if($mes=='05'){ ?><img src="imagem/05_s.jpg" border="0"><?php }else{ ?><img src="imagem/05.jpg" border="0" onmouseout="this.src='imagem/05.jpg';" onmouseover="this.src='imagem/05_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=06&ano=<?php echo $ano?>"><?php if($mes=='06'){ ?><img src="imagem/06_s.jpg" border="0"><?php }else{ ?><img src="imagem/06.jpg" border="0" onmouseout="this.src='imagem/06.jpg';" onmouseover="this.src='imagem/06_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=07&ano=<?php echo $ano?>"><?php if($mes=='07'){ ?><img src="imagem/07_s.jpg" border="0"><?php }else{ ?><img src="imagem/07.jpg" border="0" onmouseout="this.src='imagem/07.jpg';" onmouseover="this.src='imagem/07_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=08&ano=<?php echo $ano?>"><?php if($mes=='08'){ ?><img src="imagem/08_s.jpg" border="0"><?php }else{ ?><img src="imagem/08.jpg" border="0" onmouseout="this.src='imagem/08.jpg';" onmouseover="this.src='imagem/08_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=09&ano=<?php echo $ano?>"><?php if($mes=='09'){ ?><img src="imagem/09_s.jpg" border="0"><?php }else{ ?><img src="imagem/09.jpg" border="0" onmouseout="this.src='imagem/09.jpg';" onmouseover="this.src='imagem/09_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=10&ano=<?php echo $ano?>"><?php if($mes=='10'){ ?><img src="imagem/10_s.jpg" border="0"><?php }else{ ?><img src="imagem/10.jpg" border="0" onmouseout="this.src='imagem/10.jpg';" onmouseover="this.src='imagem/10_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=11&ano=<?php echo $ano?>"><?php if($mes=='11'){ ?><img src="imagem/11_s.jpg" border="0"><?php }else{ ?><img src="imagem/11.jpg" border="0" onmouseout="this.src='imagem/11.jpg';" onmouseover="this.src='imagem/11_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=12&ano=<?php echo $ano?>"><?php if($mes=='12'){ ?><img src="imagem/12_s.jpg" border="0"><?php }else{ ?><img src="imagem/12.jpg" border="0" onmouseout="this.src='imagem/12.jpg';" onmouseover="this.src='imagem/12_s.jpg';"><?php } ?></a>
<br>
    <a href="abc_ate_par.php?est=par&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="abc_ate_uar.php?est=uar&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="uar"){ ?><img src="imagem/uar_s.jpg" border="0"><?php }else{ ?><img src="imagem/uar.jpg" border="0" onmouseout="this.src='imagem/uar.jpg';" onmouseover="this.src='imagem/uar_s.jpg';"><?php } ?></a>
    <a href="abc_ate_des.php?est=des&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="des"){ ?><img src="imagem/desenvolvimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/desenvolvimento.jpg" border="0" onmouseout="this.src='imagem/desenvolvimento.jpg';" onmouseover="this.src='imagem/desenvolvimento_s.jpg';"><?php } ?></a>
    <a href="abc_ate_cer.php?est=cer&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="cer"){ ?><img src="imagem/certificacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/certificacao.jpg" border="0" onmouseout="this.src='imagem/certificacao.jpg';" onmouseover="this.src='imagem/certificacao_s.jpg';"><?php } ?></a>
<br>
    <a href="abc_ate_uar.php?est=uar&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="abc_sol_uar.php?est=uar&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/abc_ate_uar1-'.$mes.'-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Curva ABC de Atendimentos por Analista em <?php echo $mes_nome ?> de <?php echo $ano ?>" src="graficos/abc_ate_uar1-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;">
    <hr width="900"><img alt="Curva ABC de Atendimentos por Carteira em <?php echo $mes_nome ?> de <?php echo $ano ?>" src="graficos/abc_ate_uar2-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;">
    <hr width="900"><img alt="Curva ABC de Atendimentos por Tipo em <?php echo $mes_nome ?> de <?php echo $ano ?>" src="graficos/abc_ate_uar3-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;">
    <hr width="900"><img alt="Curva ABC de Atendimentos por Programa em <?php echo $mes_nome ?> de <?php echo $ano ?>" src="graficos/abc_ate_uar4-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;">
<?php
    } else {
// SQL1
    $sql1 = "SELECT usuario.usr_nome, count(1) as QTD FROM atendimento_uar inner join usuario on (usuario.usr_cod = atendimento_uar.usr_cod)
    WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($fiscal_ate,$compra_ate,$venda_ate,$admin_ate,$easy_ate,$encar_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY atendimento_uar.usr_cod ORDER BY QTD ASC"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());
// GRÁFICO 01
    $contar1 = 1; while ($dados1 = mysql_fetch_array($consulta1)) {$total1 = $total1 + $dados1[1]; $nome1[] = $dados1[0]; $valor1[] = $dados1[1]; $ordem1[] = $contar1; $contar1++;}
    rsort($ordem1); $acumulado1 = array(); $parcial1 = $total1; array_push($acumulado1, $parcial1); $altura1 = $contar1 * 30;
    for ($i=0; $i < $ordem1[0]; $i++) {$parcial1 = $parcial1 - $valor1[$i]; array_push($acumulado1, $parcial1);} rsort($acumulado1);

    $chart = new HorizontalBarChartABC(800, $altura1); $dataSet = new XYDataSet();
    for ($i=0; $i < $ordem1[0]; $i++) {$dataSet->addPoint(new Point(utf8_encode($nome1[$i])."  -  ".$ordem1[$i]."  -  ".round((($valor1[$i]) * 100) / $total1)."%  -  ".round((($acumulado1[$i]) * 100) / $total1)."%" , $valor1[$i]));}
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(5, 40, 30, 290));
    $chart->setTitle("Curva ABC de Atendimentos por Analista em $mes_nome de $ano");
    $chart->render("graficos/abc_ate_uar1-$mes-$ano.png");

// SQL2
    $sql2 = "SELECT count(atendimento_uar.usr_cod) FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes
    and atendimento_uar.usr_cod in ($fiscal_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error()); while ($dados2 = mysql_fetch_array($consulta2)) {$fiscal2 = $dados2[0];}

    $sql2 = "SELECT count(atendimento_uar.usr_cod) FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes
    and atendimento_uar.usr_cod in ($compra_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error()); while ($dados2 = mysql_fetch_array($consulta2)) {$compra2 = $dados2[0];}

    $sql2 = "SELECT count(atendimento_uar.usr_cod) FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes
    and atendimento_uar.usr_cod in ($venda_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error()); while ($dados2 = mysql_fetch_array($consulta2)) {$venda2 = $dados2[0];}

    $sql2 = "SELECT count(atendimento_uar.usr_cod) FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes
    and atendimento_uar.usr_cod in ($admin_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error()); while ($dados2 = mysql_fetch_array($consulta2)) {$admin2 = $dados2[0];}

    $sql2 = "SELECT count(atendimento_uar.usr_cod) FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes
    and atendimento_uar.usr_cod in ($easy_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error()); while ($dados2 = mysql_fetch_array($consulta2)) {$easy2 = $dados2[0];}

    $sql2 = "SELECT count(atendimento_uar.usr_cod) FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes
    and atendimento_uar.usr_cod in ($encar_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error()); while ($dados2 = mysql_fetch_array($consulta2)) {$encar2 = $dados2[0];}
// GRÁFICO 02
    $total2 = $fiscal2 + $compra2 + $venda2 + $admin2 + $easy2 + $encar2; $nome2 = array("Fiscal","Compra","Venda","Admim/Finan","Easy","Encarregados");
    $valor2 = array($fiscal2,$compra2,$venda2,$admin2,$easy2,$encar2); array_multisort($valor2,$nome2); $ordem2 = array(1,2,3,4,5,6);
    rsort($ordem2); $acumulado2 = array(); $parcial2 = $total2; array_push($acumulado2, $parcial2); $altura2 = 8 * 30;
    for ($i=0; $i < $ordem2[0]; $i++) {$parcial2 = $parcial2 - $valor2[$i]; array_push($acumulado2, $parcial2);} rsort($acumulado2);

    $chart = new HorizontalBarChartABC(800, $altura2); $dataSet = new XYDataSet();
    for ($i=0; $i < $ordem2[0]; $i++) {$dataSet->addPoint(new Point(utf8_encode($nome2[$i])."  -  ".$ordem2[$i]."  -  ".round((($valor2[$i]) * 100) / $total2)."%  -  ".round((($acumulado2[$i]) * 100) / $total2)."%" ,$valor2[$i]));}
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(5, 40, 30, 290));
    $chart->setTitle("Curva ABC de Atendimentos por Carteira em $mes_nome de $ano");
    $chart->render("graficos/abc_ate_uar2-$mes-$ano.png");

// SQL3
    $sql3 = "SELECT atendimento_uar.atduar_motivo, count(1) as QTD FROM atendimento_uar
    WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($fiscal_ate,$compra_ate,$venda_ate,$admin_ate,$easy_ate,$encar_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY atendimento_uar.atduar_motivo ORDER BY QTD ASC"; $consulta3 = mysql_query($sql3, $con) OR DIE (mysql_error());
// GRÁFICO 03
    $contar3 = 1; while ($dados3 = mysql_fetch_array($consulta3)) {$total3 = $total3 + $dados3[1]; $nome3[] = $dados3[0]; $valor3[] = $dados3[1]; $ordem3[] = $contar3; $contar3++;}
    rsort($ordem3); $acumulado3 = array(); $parcial3 = $total3; array_push($acumulado3, $parcial3); $altura3 = $contar3 * 30;
    for ($i=0; $i < $ordem3[0]; $i++) {$parcial3 = $parcial3 - $valor3[$i]; array_push($acumulado3, $parcial3);} rsort($acumulado3);

    $chart = new HorizontalBarChartABC(800, $altura3); $dataSet = new XYDataSet();
    for ($i=0; $i < $ordem3[0]; $i++) {$dataSet->addPoint(new Point(utf8_encode($nome3[$i])."  -  ".$ordem3[$i]."  -  ".round((($valor3[$i]) * 100) / $total3)."%  -  ".round((($acumulado3[$i]) * 100) / $total3)."%" , $valor3[$i]));}
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(5, 40, 30, 290));
    $chart->setTitle("Curva ABC de Atendimentos por Tipo em $mes_nome de $ano");
    $chart->render("graficos/abc_ate_uar3-$mes-$ano.png");

// SQL4
    $data1 = "2016-02-28 00:00:00"; $data2 = $ano."-".$mes."-01 00:00:00";

    if ($data1 < $data2) {
        $sql4 = "SELECT software_programa.sprg_nome, count(1) as QTD FROM atendimento_uar left join software_programa on (software_programa.sprg_cod = atendimento_uar.sprg_cod)
        WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($fiscal_ate,$compra_ate,$venda_ate,$admin_ate,$easy_ate,$encar_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
        GROUP BY software_programa.sprg_nome ORDER BY QTD ASC";
    } else {
        $sql4 = "SELECT software_programa.sprg_nome, count(1) as QTD FROM atendimento_uar left join software_programa on (software_programa.sprg_cod = atendimento_uar.atduar_programa)
        WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($fiscal_ate,$compra_ate,$venda_ate,$admin_ate,$easy_ate,$encar_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
        GROUP BY software_programa.sprg_nome ORDER BY QTD ASC";}
    $consulta4 = mysql_query($sql4, $con) OR DIE (mysql_error());
// GRÁFICO 04
    $contar4 = 1; while ($dados4 = mysql_fetch_array($consulta4)) {$total4 = $total4 + $dados4[1]; $nome4[] = $dados4[0]; $valor4[] = $dados4[1]; $ordem4[] = $contar4; $contar4++;}
    rsort($ordem4); $acumulado4 = array(); $parcial4 = $total4; array_push($acumulado4, $parcial4); $altura4 = $contar4 * 30;
    for ($i=0; $i < $ordem4[0]; $i++) {$parcial4 = $parcial4 - $valor4[$i]; array_push($acumulado4, $parcial4);}  rsort($acumulado4);

    $chart = new HorizontalBarChartABC(800, $altura4); $dataSet = new XYDataSet();
    for ($i=0; $i < $ordem4[0]; $i++) {$dataSet->addPoint(new Point(utf8_encode($nome4[$i])."  -  ".$ordem4[$i]."  -  ".round((($valor4[$i]) * 100) / $total4)."%  -  ".round((($acumulado4[$i]) * 100) / $total4)."%" , $valor4[$i]));}
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(5, 40, 30, 290));
    $chart->setTitle("Curva ABC de Atendimentos por Programa em $mes_nome de $ano");
    $chart->render("graficos/abc_ate_uar4-$mes-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta1); mysql_free_result($consulta2); mysql_free_result($consulta3); mysql_free_result($consulta4); mysql_close($con);?>