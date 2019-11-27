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
    Estatística de <font color="red">Curva ABC</font> de <font color="red"><?php echo $cha_nome ?></font> por <font color="red"><?php echo $est_nome ?></font> em <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=01&ano=<?php echo $ano?>"><?php if($mes=='01'){ ?><img src="imagem/01_s.jpg" border="0"><?php }else{ ?><img src="imagem/01.jpg" border="0" onmouseout="this.src='imagem/01.jpg';" onmouseover="this.src='imagem/01_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=02&ano=<?php echo $ano?>"><?php if($mes=='02'){ ?><img src="imagem/02_s.jpg" border="0"><?php }else{ ?><img src="imagem/02.jpg" border="0" onmouseout="this.src='imagem/02.jpg';" onmouseover="this.src='imagem/02_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=03&ano=<?php echo $ano?>"><?php if($mes=='03'){ ?><img src="imagem/03_s.jpg" border="0"><?php }else{ ?><img src="imagem/03.jpg" border="0" onmouseout="this.src='imagem/03.jpg';" onmouseover="this.src='imagem/03_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=04&ano=<?php echo $ano?>"><?php if($mes=='04'){ ?><img src="imagem/04_s.jpg" border="0"><?php }else{ ?><img src="imagem/04.jpg" border="0" onmouseout="this.src='imagem/04.jpg';" onmouseover="this.src='imagem/04_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=05&ano=<?php echo $ano?>"><?php if($mes=='05'){ ?><img src="imagem/05_s.jpg" border="0"><?php }else{ ?><img src="imagem/05.jpg" border="0" onmouseout="this.src='imagem/05.jpg';" onmouseover="this.src='imagem/05_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=06&ano=<?php echo $ano?>"><?php if($mes=='06'){ ?><img src="imagem/06_s.jpg" border="0"><?php }else{ ?><img src="imagem/06.jpg" border="0" onmouseout="this.src='imagem/06.jpg';" onmouseover="this.src='imagem/06_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=07&ano=<?php echo $ano?>"><?php if($mes=='07'){ ?><img src="imagem/07_s.jpg" border="0"><?php }else{ ?><img src="imagem/07.jpg" border="0" onmouseout="this.src='imagem/07.jpg';" onmouseover="this.src='imagem/07_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=08&ano=<?php echo $ano?>"><?php if($mes=='08'){ ?><img src="imagem/08_s.jpg" border="0"><?php }else{ ?><img src="imagem/08.jpg" border="0" onmouseout="this.src='imagem/08.jpg';" onmouseover="this.src='imagem/08_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=09&ano=<?php echo $ano?>"><?php if($mes=='09'){ ?><img src="imagem/09_s.jpg" border="0"><?php }else{ ?><img src="imagem/09.jpg" border="0" onmouseout="this.src='imagem/09.jpg';" onmouseover="this.src='imagem/09_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=10&ano=<?php echo $ano?>"><?php if($mes=='10'){ ?><img src="imagem/10_s.jpg" border="0"><?php }else{ ?><img src="imagem/10.jpg" border="0" onmouseout="this.src='imagem/10.jpg';" onmouseover="this.src='imagem/10_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=11&ano=<?php echo $ano?>"><?php if($mes=='11'){ ?><img src="imagem/11_s.jpg" border="0"><?php }else{ ?><img src="imagem/11.jpg" border="0" onmouseout="this.src='imagem/11.jpg';" onmouseover="this.src='imagem/11_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=12&ano=<?php echo $ano?>"><?php if($mes=='12'){ ?><img src="imagem/12_s.jpg" border="0"><?php }else{ ?><img src="imagem/12.jpg" border="0" onmouseout="this.src='imagem/12.jpg';" onmouseover="this.src='imagem/12_s.jpg';"><?php } ?></a>
<br>
    <a href="abc_sol_par.php?est=par&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="abc_sol_uar.php?est=uar&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="uar"){ ?><img src="imagem/uar_s.jpg" border="0"><?php }else{ ?><img src="imagem/uar.jpg" border="0" onmouseout="this.src='imagem/uar.jpg';" onmouseover="this.src='imagem/uar_s.jpg';"><?php } ?></a>
    <a href="abc_sol_des.php?est=des&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="des"){ ?><img src="imagem/desenvolvimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/desenvolvimento.jpg" border="0" onmouseout="this.src='imagem/desenvolvimento.jpg';" onmouseover="this.src='imagem/desenvolvimento_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=cer&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="cer"){ ?><img src="imagem/certificacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/certificacao.jpg" border="0" onmouseout="this.src='imagem/certificacao.jpg';" onmouseover="this.src='imagem/certificacao_s.jpg';"><?php } ?></a>
<br>
    <a href="abc_ate_cer.php?est=cer&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="abc_sol_cer.php?est=cer&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/abc_sol_cer1-'.$mes.'-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    $dias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano); $dias_uteis = getWorkingDays2("$ano-$mes-01 00:00:01" , "$ano-$mes-$dias 23:59:60"); $horas_uteis = $dias_uteis * 8;
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Curva ABC de Tempo do Certificador em <?php echo $mes_nome ?> de <?php echo $ano ?>. Horas Úteis: <?php echo $horas_uteis ?>" src="graficos/abc_sol_cer1-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
//SQL1
    $sql1 = "SELECT parecer.usr_cod, usuario.usr_nome FROM parecer inner join departamento_situacao on (departamento_situacao.dstt_cod = parecer.dstt_cod) inner join usuario on (usuario.usr_cod = parecer.usr_cod) inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod)
    WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes and solicitacao.slt_pai = 0 and parecer.dstt_cod in ($ana_cer_ini,$ana_cer_fim) and solicitacao.stp_cod in ($solicitacoes) /*and solicitacao.sft_cod != 30*/ and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6)
    GROUP BY parecer.usr_cod"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());

// SQL2
    $sql2 = "SELECT parecer.slt_cod, parecer.prc_cod, parecer.prc_data, parecer.usr_cod, usuario.usr_nome, parecer.dstt_cod, departamento_situacao.dstt_nome FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) inner join usuario on (usuario.usr_cod = parecer.usr_cod) inner join departamento_situacao on (departamento_situacao.dstt_cod = parecer.dstt_cod)
    WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes and solicitacao.slt_pai = 0 and parecer.dstt_cod in ($ana_cer_ini,$ana_cer_fim) and solicitacao.stp_cod in ($solicitacoes) /*and solicitacao.sft_cod != 30*/ and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6)
    GROUP BY parecer.usr_cod ASC, parecer.slt_cod ASC, parecer.prc_cod ASC"; $consulta2 = mysql_query($sql2, $con) OR DIE (mysql_error());
    $manha_inicio = strtotime($manha_inicio); $manha_fim = strtotime($manha_fim); $tarde_inicio = strtotime($tarde_inicio); $tarde_fim = strtotime($tarde_fim);

    // REFERêNCIAR PARECERES DE ENTRADA E SAÍDA
    while ($dados1 = mysql_fetch_array($consulta1)) {$data_inicio = 0; $data_fim = 0; $sab_dom = Array(6, 0);
        mysql_data_seek($consulta2, 0);
        while ($dados2 = mysql_fetch_array($consulta2)) {
            if ($dados1[0] == $dados2[3]) {
                if ((in_array($dados2[5],explode(",",$ana_cer_ini))) and $data_inicio == 0) {$solicitacao_inicio = $dados2[0]; $parecer_inicio = $dados2[1]; $data_inicio = $dados2[2]; $cod_analista_inicio = $dados2[3];} else {
                    if ($solicitacao_inicio != $dados2[0]) {if (in_array($dados2[5],explode(",",$ana_cer_ini))) {$solicitacao_inicio = $dados2[0]; $parecer_inicio = $dados2[1]; $data_inicio = $dados2[2]; $cod_analista_inicio = $dados2[3];} else {$data_inicio = 0;}} else {
                        if ($cod_analista_inicio == $dados2[3] and (in_array($dados2[5],explode(",",$ana_cer_fim)))) {$parecer_fim = $dados2[1]; $data_fim = $dados2[2]; $cod_analista_fim = $dados2[3]; $nome_analista_fim = $dados2[4];
                            if ($data_inicio != 0 and $data_fim != 0) {$data_inicio_partes = explode(' ', $data_inicio); $data_inicial = strtotime($data_inicio_partes[0]); $time_inicial = strtotime($data_inicio_partes[1]);
                                $data_fim_partes = explode(' ', $data_fim); $data_final = strtotime($data_fim_partes[0]); $time_final = strtotime($data_fim_partes[1]); $data_inicio = strtotime($data_inicio); $data_fim = strtotime($data_fim); $tempo_total = $data_fim - $data_inicio; $nr_work_days = getWorkingDays($data_inicio_partes[0], $data_fim_partes[0]); $nr_work_days2 = getWorkingDays2($data_inicio_partes[0], $data_fim_partes[0]); $diferenca = $data_final - $data_inicial; $descansoDD = (int)floor( $diferenca / (60 * 60 * 24));
                                if ($nr_work_days2 < 3){$descansoD = 0;} else {$descansoD = $nr_work_days2 - 2;} $finalsemana = ($data_final - $data_inicial) - (($nr_work_days - 1) * (24 * 60 * 60)); $feriado = ($nr_work_days - $nr_work_days2) * (24 * 60 * 60);
                                if ($descansoDD > 0) {$data_inicial_fds = 0; $fds_inicial = 0; $data_final_fds = 0; $fds_final = 0; $descansoS = $descansoD * ($cafe + $almoco + $janta);
                                    if ($time_inicial < $manha_inicio) {$desconto_inicio = ($manha_inicio - $time_inicial) + $almoco + $janta;} else {if ($time_inicial < ($manha_fim + 1)) {$desconto_inicio = $almoco + $janta;} else {if ($time_inicial < $tarde_inicio) {$desconto_inicio = ($tarde_inicio - $time_inicial) + $janta;} else {if ($time_inicial < ($tarde_fim + 1)) {$desconto_inicio = $janta;} else {$desconto_inicio = $janta - ($time_inicial - $tarde_fim);}}}}
                                    if ($time_final > $tarde_fim) {$desconto_fim = ($time_final - $tarde_fim) + $cafe + $almoco;} else {if ($time_final > ($tarde_inicio - 1)) {$desconto_fim = $cafe + $almoco;} else {if ($time_final > $manha_fim) {$desconto_fim = ($time_final - $manha_fim) + $cafe;} else {if ($time_final > ($manha_inicio - 1)) {$desconto_fim = $cafe;} else {$desconto_fim = $cafe - ($manha_inicio - $time_final);}}}}
                                    if ( in_array(date('w', $data_inicial), $sab_dom) ){ $data_inicial_fds = 1; $desconto_inicio = 0; $fds_inicial =  86400 - ($data_inicio - $data_inicial);}
                                    if ( in_array(date('w', $data_final), $sab_dom) ) {$data_final_fds = 1; $desconto_fim = 0; $fds_final = $data_fim - $data_final;}
                                    if ($data_inicial_fds == 1 or $data_final_fds == 1) {$finalsemana = $finalsemana - 86400;}
                                    if ($data_inicial_fds == 1 and $data_final_fds == 1){$tempo_real = 0;} else {$tempo_real = $tempo_total - ($desconto_inicio + $fds_inicial + $descansoS + $finalsemana + $feriado + $fds_final + $desconto_fim);}
                                } else {
                                    if ($time_inicial < $manha_inicio) {$desconto_inicio = ($manha_inicio - $time_inicial);} else {if ($time_inicial < ($manha_fim - 1)) {$desconto_inicio = 0;} else {if ($time_inicial < $tarde_inicio) {$desconto_inicio = ($tarde_inicio - $time_inicial);} else {if ($time_inicial < ($tarde_fim + 1)) {$desconto_inicio = 0;} else {$desconto_inicio = 0;}}}}
                                    if ($time_final > $tarde_fim) {$desconto_fim = ($time_final - $tarde_fim);} else {if ($time_final > ($tarde_inicio - 1)) {$desconto_fim = 0;} else {if ($time_final > $manha_fim) {$desconto_fim = ($time_final - $manha_fim);} else {if ($time_final > ($manha_inicio - 1)) {$desconto_fim = 0;} else {$desconto_fim = 0;}}}} $desconto_extra = 0;
                                    if ($time_inicial < ($manha_fim + 1) and $time_final > ($tarde_inicio - 1)) {$desconto_extra = $almoco;}
                                    if ( in_array(date('w', $data_inicial), $sab_dom) ){$data_inicial_fds = 1;}
                                    if ( in_array(date('w', $data_final), $sab_dom) ) {$data_final_fds = 1;}
                                    if (($time_inicial < $manha_inicio and $time_final < $manha_inicio) or ($time_inicial > $manha_fim and $time_final < $tarde_inicio) or ($time_inicial > $tarde_fim and $time_final > $tarde_fim)) {$tempo_real = 0;} else {$tempo_real = $tempo_total - ($desconto_inicio + $desconto_fim + $desconto_extra);}
                                } $tempos[] = array($cod_analista_fim, $tempo_real); $data_inicio = 0; $data_fim = 0; $solicitacao_inicio = 0;
                            }
                        }
                    }
                }
            }
        }
    }

    mysql_data_seek($consulta1, 0);
    while ($dados4 = mysql_fetch_array($consulta1)) {$somatorio = 0;
    for ($i=0; $i < count($tempos); $i++) {if ($dados4[0] == $tempos[$i][0]) {$somatorio = $somatorio + $tempos[$i][1];}}$tempos_somados[] = array($dados4[0], $dados4[1], $somatorio);}
    for ($i=0; $i < count($tempos_somados); $i++) {if ($tempos_somados[$i][2] == 0) {unset($tempos_somados[$i][0], $tempos_somados[$i][1], $tempos_somados[$i][2]);}} $tempos_somados = array_filter($tempos_somados); function ordenar($a, $b) {return $a[2] > $b[2];} usort($tempos_somados, 'ordenar');
    for ($i=0; $i < count($tempos_somados); $i++) {$total1 = $total1 + $tempos_somados[$i][2];} $acumulado1 = array();$parcial1 = $total1; array_push($acumulado1, $parcial1);
    for ($i=0; $i < count($tempos_somados); $i++) {$parcial1 = $parcial1 - $tempos_somados[$i][2]; array_push($acumulado1, $parcial1);}rsort($acumulado1);
    for ($i=0; $i < count($tempos_somados); $i++) {$total = $tempos_somados[$i][2]; $horas2 = floor($total / 3600); $minutos = floor(($total - ($horas2 * 3600)) / 60); $segundos = floor($total % 60); $tempo[] = array($horas2, "$minutos:$segundos");}

// GRÁFICO 01
    $chart = new HorizontalBarChartABC(800, (count($tempos_somados) * 30)); $dataSet = new XYDataSet();
    for ($i=0; $i < count($tempos_somados); $i++) {$dataSet->addPoint(new Point(utf8_encode($tempos_somados[$i][1])."  -  ".(count($tempos_somados)-$i)."  -  ".round((($tempos_somados[$i][2]) * 100) / $total1)."%  -  ".round((($acumulado1[$i]) * 100) / $total1)."%  -  ".$tempo[$i][1], $tempo[$i][0]));}
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(5, 40, 30, 310));
    $chart->setTitle("Curva ABC de Tempo em Horas do Certificador em $mes_nome de $ano. Horas úteis: $horas_uteis");
    $chart->render("graficos/abc_sol_cer1-$mes-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta); mysql_close($con);?>