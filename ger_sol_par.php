<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
require('solicitacoes.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red">Gerenciais</font> de <font color="red"><?php echo $cha_nome ?></font> por <font color="red"><?php echo $est_nome ?></font> em <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=01&ano=<?php echo $ano?>"><?php if($mes=='01'){ ?><img src="imagem/01_s.jpg" border="0"><?php }else{ ?><img src="imagem/01.jpg" border="0" onmouseout="this.src='imagem/01.jpg';" onmouseover="this.src='imagem/01_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=02&ano=<?php echo $ano?>"><?php if($mes=='02'){ ?><img src="imagem/02_s.jpg" border="0"><?php }else{ ?><img src="imagem/02.jpg" border="0" onmouseout="this.src='imagem/02.jpg';" onmouseover="this.src='imagem/02_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=03&ano=<?php echo $ano?>"><?php if($mes=='03'){ ?><img src="imagem/03_s.jpg" border="0"><?php }else{ ?><img src="imagem/03.jpg" border="0" onmouseout="this.src='imagem/03.jpg';" onmouseover="this.src='imagem/03_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=04&ano=<?php echo $ano?>"><?php if($mes=='04'){ ?><img src="imagem/04_s.jpg" border="0"><?php }else{ ?><img src="imagem/04.jpg" border="0" onmouseout="this.src='imagem/04.jpg';" onmouseover="this.src='imagem/04_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=05&ano=<?php echo $ano?>"><?php if($mes=='05'){ ?><img src="imagem/05_s.jpg" border="0"><?php }else{ ?><img src="imagem/05.jpg" border="0" onmouseout="this.src='imagem/05.jpg';" onmouseover="this.src='imagem/05_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=06&ano=<?php echo $ano?>"><?php if($mes=='06'){ ?><img src="imagem/06_s.jpg" border="0"><?php }else{ ?><img src="imagem/06.jpg" border="0" onmouseout="this.src='imagem/06.jpg';" onmouseover="this.src='imagem/06_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=07&ano=<?php echo $ano?>"><?php if($mes=='07'){ ?><img src="imagem/07_s.jpg" border="0"><?php }else{ ?><img src="imagem/07.jpg" border="0" onmouseout="this.src='imagem/07.jpg';" onmouseover="this.src='imagem/07_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=08&ano=<?php echo $ano?>"><?php if($mes=='08'){ ?><img src="imagem/08_s.jpg" border="0"><?php }else{ ?><img src="imagem/08.jpg" border="0" onmouseout="this.src='imagem/08.jpg';" onmouseover="this.src='imagem/08_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=09&ano=<?php echo $ano?>"><?php if($mes=='09'){ ?><img src="imagem/09_s.jpg" border="0"><?php }else{ ?><img src="imagem/09.jpg" border="0" onmouseout="this.src='imagem/09.jpg';" onmouseover="this.src='imagem/09_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=10&ano=<?php echo $ano?>"><?php if($mes=='10'){ ?><img src="imagem/10_s.jpg" border="0"><?php }else{ ?><img src="imagem/10.jpg" border="0" onmouseout="this.src='imagem/10.jpg';" onmouseover="this.src='imagem/10_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=11&ano=<?php echo $ano?>"><?php if($mes=='11'){ ?><img src="imagem/11_s.jpg" border="0"><?php }else{ ?><img src="imagem/11.jpg" border="0" onmouseout="this.src='imagem/11.jpg';" onmouseover="this.src='imagem/11_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=12&ano=<?php echo $ano?>"><?php if($mes=='12'){ ?><img src="imagem/12_s.jpg" border="0"><?php }else{ ?><img src="imagem/12.jpg" border="0" onmouseout="this.src='imagem/12.jpg';" onmouseover="this.src='imagem/12_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_sol_vol.php?est=vol&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="vol"){ ?><img src="imagem/volume_s.jpg" border="0"><?php }else{ ?><img src="imagem/volume.jpg" border="0" onmouseout="this.src='imagem/volume.jpg';"  onmouseover="this.src='imagem/volume_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=par&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ans.php?est=ans&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ans"){ ?><img src="imagem/ans_s.jpg" border="0"><?php }else{ ?><img src="imagem/ans.jpg" border="0" onmouseout="this.src='imagem/ans.jpg';" onmouseover="this.src='imagem/ans_s.jpg';"><?php } ?></a>
    <a href="ger_sol_ano.php?est=ano&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ano"){ ?><img src="imagem/ano_s.jpg" border="0"><?php }else{ ?><img src="imagem/ano.jpg" border="0" onmouseout="this.src='imagem/ano.jpg';" onmouseover="this.src='imagem/ano_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_ate_par.php?est=par&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="ger_sol_par.php?est=par&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/ger_sol_par1-'.$mes.'-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Volume de Solicitações por Parceiro em <?php echo $mes_nome ?> de <?php echo $ano ?>" src="graficos/ger_sol_par1-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL 01
    $sql = "SELECT empresa.emp_fantasia, count(1) as qtd FROM solicitacao inner join empresa on (empresa.emp_cod = solicitacao.slt_representante)
    WHERE date_format(solicitacao.slt_data,'%Y') = $ano and date_format(solicitacao.slt_data,'%m') = $mes and solicitacao.stp_cod in ($solicitacoes) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6)
    GROUP BY empresa.emp_fantasia ORDER BY qtd ASC"; $consulta = mysql_query($sql, $con) OR DIE (mysql_error());
// GRÁFICO 01
    $contar=0; mysql_data_seek($consulta, 0); while ($dados1 = mysql_fetch_array($consulta)) {$contar++;} $altura = $contar * 30;

    $chart = new HorizontalBarChart(600, $altura); $dataSet = new XYDataSet();
    mysql_data_seek($consulta, 0); while ($dados1 = mysql_fetch_array($consulta)) {$dataSet->addPoint(new Point(utf8_encode($dados1[0]), $dados1[1]));}
    $chart->setDataSet($dataSet);
    $chart->setTitle("Volume de Solicitações por Parceiro em $mes_nome de $ano");
    $chart->render("graficos/ger_sol_par1-$mes-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta); mysql_close($con);?>