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
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=<?php echo $est?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="ger_cha_vol.php?est=vol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="vol"){ ?><img src="imagem/volume_s.jpg" border="0"><?php }else{ ?><img src="imagem/volume.jpg" border="0" onmouseout="this.src='imagem/volume.jpg';" onmouseover="this.src='imagem/volume_s.jpg';"><?php } ?></a>
    <a href="ger_cha_par.php?est=par&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ans.php?est=ans&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ans"){ ?><img src="imagem/ans_s.jpg" border="0"><?php }else{ ?><img src="imagem/ans.jpg" border="0" onmouseout="this.src='imagem/ans.jpg';" onmouseover="this.src='imagem/ans_s.jpg';"><?php } ?></a>
    <a href="ger_cha_ano.php?est=ano&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="ano"){ ?><img src="imagem/ano_s.jpg" border="0"><?php }else{ ?><img src="imagem/ano.jpg" border="0" onmouseout="this.src='imagem/ano.jpg';" onmouseover="this.src='imagem/ano_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/ger_cha_par1-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Volume de Chamados por Parceiro em <?php echo $ano ?>" src="graficos/ger_cha_par1-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
} else {
    $sql = "
    SELECT empresa.emp_fantasia, count(1) as qtd
    FROM solicitacao inner join empresa on (empresa.emp_cod = solicitacao.slt_representante)
    WHERE date_format(solicitacao.slt_data,'%Y') = $ano and solicitacao.sft_cod != 30 and solicitacao.stp_cod in ($solicitacoes) and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6)
    GROUP BY empresa.emp_fantasia
UNION
    SELECT empresa.emp_fantasia, count(1) as qtd
    FROM atendimento_uar inner join empresa on (empresa.emp_cod = atendimento_uar.atduar_representante)
    WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY empresa.emp_fantasia";

    $consulta = mysql_query($sql, $con) OR DIE (mysql_error());

// GRÁFICO 01
    mysql_data_seek($consulta, 0); while ($dados = mysql_fetch_array($consulta)) {$duplicado[] = $dados[0];} $vazio  = array_unique($duplicado); $limpo = array_values($vazio); $final = array();
    for ($i=0; $i < count($limpo); $i++) {$total = 0; mysql_data_seek($consulta, 0);
        while ($dados = mysql_fetch_array($consulta)) {if ($dados[0] == $limpo[$i]) {$total = $total + $dados[1];}} array_push($final, array($limpo[$i], $total));
    }

    function ordenar($a, $b) {return $a[1] > $b[1];} usort($final, 'ordenar'); $contar=0; reset($limpo);
    for ($i=0; $i < count($limpo);$i++) {$contar++;} $altura = $contar * 30;

    $chart = new HorizontalBarChart(600, $altura);
    $dataSet = new XYDataSet(); reset($final);
    for ($i=0; $i < count($limpo); $i++)  {$dataSet->addPoint(new Point(utf8_encode($final[$i][0]), $final[$i][1]));}
    $chart->setDataSet($dataSet);
    $chart->setTitle("Volume de Chamados por Parceiro em $ano");
    $chart->render("graficos/ger_cha_par1-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta); mysql_close($con);?>