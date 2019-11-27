<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
require('funcoes.php');
require('solicitacoes.php');
require('pareceres.php');
require('carteiras.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red"><?php echo $cha_nome ?></font> do <font color="red">Setor</font> <font color="red"><?php echo $est_nome ?></font> em <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=01&ano=<?php echo $ano?>"><?php if($mes=='01'){ ?><img src="imagem/01_s.jpg" border="0"><?php }else{ ?><img src="imagem/01.jpg" border="0" onmouseout="this.src='imagem/01.jpg';" onmouseover="this.src='imagem/01_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=02&ano=<?php echo $ano?>"><?php if($mes=='02'){ ?><img src="imagem/02_s.jpg" border="0"><?php }else{ ?><img src="imagem/02.jpg" border="0" onmouseout="this.src='imagem/02.jpg';" onmouseover="this.src='imagem/02_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=03&ano=<?php echo $ano?>"><?php if($mes=='03'){ ?><img src="imagem/03_s.jpg" border="0"><?php }else{ ?><img src="imagem/03.jpg" border="0" onmouseout="this.src='imagem/03.jpg';" onmouseover="this.src='imagem/03_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=04&ano=<?php echo $ano?>"><?php if($mes=='04'){ ?><img src="imagem/04_s.jpg" border="0"><?php }else{ ?><img src="imagem/04.jpg" border="0" onmouseout="this.src='imagem/04.jpg';" onmouseover="this.src='imagem/04_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=05&ano=<?php echo $ano?>"><?php if($mes=='05'){ ?><img src="imagem/05_s.jpg" border="0"><?php }else{ ?><img src="imagem/05.jpg" border="0" onmouseout="this.src='imagem/05.jpg';" onmouseover="this.src='imagem/05_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=06&ano=<?php echo $ano?>"><?php if($mes=='06'){ ?><img src="imagem/06_s.jpg" border="0"><?php }else{ ?><img src="imagem/06.jpg" border="0" onmouseout="this.src='imagem/06.jpg';" onmouseover="this.src='imagem/06_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=07&ano=<?php echo $ano?>"><?php if($mes=='07'){ ?><img src="imagem/07_s.jpg" border="0"><?php }else{ ?><img src="imagem/07.jpg" border="0" onmouseout="this.src='imagem/07.jpg';" onmouseover="this.src='imagem/07_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=08&ano=<?php echo $ano?>"><?php if($mes=='08'){ ?><img src="imagem/08_s.jpg" border="0"><?php }else{ ?><img src="imagem/08.jpg" border="0" onmouseout="this.src='imagem/08.jpg';" onmouseover="this.src='imagem/08_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=09&ano=<?php echo $ano?>"><?php if($mes=='09'){ ?><img src="imagem/09_s.jpg" border="0"><?php }else{ ?><img src="imagem/09.jpg" border="0" onmouseout="this.src='imagem/09.jpg';" onmouseover="this.src='imagem/09_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=10&ano=<?php echo $ano?>"><?php if($mes=='10'){ ?><img src="imagem/10_s.jpg" border="0"><?php }else{ ?><img src="imagem/10.jpg" border="0" onmouseout="this.src='imagem/10.jpg';" onmouseover="this.src='imagem/10_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=11&ano=<?php echo $ano?>"><?php if($mes=='11'){ ?><img src="imagem/11_s.jpg" border="0"><?php }else{ ?><img src="imagem/11.jpg" border="0" onmouseout="this.src='imagem/11.jpg';" onmouseover="this.src='imagem/11_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=12&ano=<?php echo $ano?>"><?php if($mes=='12'){ ?><img src="imagem/12_s.jpg" border="0"><?php }else{ ?><img src="imagem/12.jpg" border="0" onmouseout="this.src='imagem/12.jpg';" onmouseover="this.src='imagem/12_s.jpg';"><?php } ?></a>
<br>
    <a href="set_sol_par.php?est=par&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=uar&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="uar"){ ?><img src="imagem/uar_s.jpg" border="0"><?php }else{ ?><img src="imagem/uar.jpg" border="0" onmouseout="this.src='imagem/uar.jpg';" onmouseover="this.src='imagem/uar_s.jpg';"><?php } ?></a>
    <a href="set_sol_des.php?est=des&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="des"){ ?><img src="imagem/desenvolvimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/desenvolvimento.jpg" border="0" onmouseout="this.src='imagem/desenvolvimento.jpg';" onmouseover="this.src='imagem/desenvolvimento_s.jpg';"><?php } ?></a>
    <a href="set_sol_cer.php?est=cer&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="cer"){ ?><img src="imagem/certificacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/certificacao.jpg" border="0" onmouseout="this.src='imagem/certificacao.jpg';" onmouseover="this.src='imagem/certificacao_s.jpg';"><?php } ?></a>
<br>
    <a href="set_ate_uar.php?est=uar&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=uar&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/set_sol_uar1-'.$mes.'-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Fluxo de Solicitações na UAR em <?php echo $mes_nome?> de <?php echo $ano?>" src="graficos/set_sol_uar1-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Pareceres de Solicitações por Carteira em <?php echo $mes_nome?> de <?php echo $ano?>" src="graficos/set_sol_uar2-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Tipos de Solicitações por Carteira em <?php echo $mes_nome?> de <?php echo $ano?>" src="graficos/set_sol_uar3-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL 01
    $sql1 = "SELECT parecer.dstt_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_uar_ent,$par_uar_sai) and solicitacao.stp_cod in ($solicitacoes) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod ORDER BY parecer.dstt_cod ASC;"; $consulta1 = mysql_query($sql1, $con) OR DIE (mysql_error());
// GRÁFICO 01
    while ($dados1 = mysql_fetch_array($consulta1)) {
        switch ($dados1[0]) {
            case '6'  : $tes_ok = $dados1[1]; break;
            case '9'  : $tes_qua = $dados1[1]; break;
            case '15' : $enc_uar = $dados1[1]; break;
            case '17' : $dev_rep = $dados1[1]; break;
            case '18' : $ana_des = $dados1[1]; break;
            case '21' : $dev_uar = $dados1[1]; break;
            case '28' : $fin_uar = $dados1[1]; break;
            case '41' : $tes_err = $dados1[1]; break;
            case '51' : $apr_mel = $dados1[1]; break;
            case '60' : $enc_rep = $dados1[1]; break;
        }
    }
    $chart = new PieChart(500, 300);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Entrada", ($enc_uar + $tes_qua + $dev_uar)));
    $dataSet->addPoint(new Point("Saída", ($ana_des + $apr_mel + $tes_ok + $tes_err + $enc_rep + $dev_rep + $fin_uar)));
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.72);
    $chart->setTitle("Fluxo de Solicitações na UAR em $mes_nome de $ano");
    $chart->render("graficos/set_sol_uar1-$mes-$ano.png");

// SQL 02
    $sql2 = "SELECT parecer.dstt_cod, solicitacao.stp_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_uar_ent,$par_uar_sai) and solicitacao.stp_cod in ($solicitacoes) and parecer.usr_cod in ($admin_sol) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod, solicitacao.stp_cod ORDER BY parecer.dstt_cod ASC, solicitacao.stp_cod ASC;"; $consulta21 = mysql_query($sql2, $con) OR DIE (mysql_error());

    $sql2 = "SELECT parecer.dstt_cod, solicitacao.stp_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_uar_ent,$par_uar_sai) and solicitacao.stp_cod in ($solicitacoes) and parecer.usr_cod in ($compra_sol) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod, solicitacao.stp_cod ORDER BY parecer.dstt_cod ASC, solicitacao.stp_cod ASC;"; $consulta22 = mysql_query($sql2, $con) OR DIE (mysql_error());

    $sql2 = "SELECT parecer.dstt_cod, solicitacao.stp_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_uar_ent,$par_uar_sai) and solicitacao.stp_cod in ($solicitacoes) and parecer.usr_cod in ($easy_sol) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod, solicitacao.stp_cod ORDER BY parecer.dstt_cod ASC, solicitacao.stp_cod ASC;"; $consulta23 = mysql_query($sql2, $con) OR DIE (mysql_error());

    $sql2 = "SELECT parecer.dstt_cod, solicitacao.stp_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_uar_ent,$par_uar_sai) and solicitacao.stp_cod in ($solicitacoes) and parecer.usr_cod in ($fiscal_sol) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod, solicitacao.stp_cod ORDER BY parecer.dstt_cod ASC, solicitacao.stp_cod ASC;"; $consulta24 = mysql_query($sql2, $con) OR DIE (mysql_error());

    $sql2 = "SELECT parecer.dstt_cod, solicitacao.stp_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_uar_ent,$par_uar_sai) and solicitacao.stp_cod in ($solicitacoes) and parecer.usr_cod in ($venda_sol) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod, solicitacao.stp_cod ORDER BY parecer.dstt_cod ASC, solicitacao.stp_cod ASC;"; $consulta25 = mysql_query($sql2, $con) OR DIE (mysql_error());

    $sql2 = "SELECT parecer.dstt_cod, solicitacao.stp_cod, count(1) as qtd FROM parecer inner join solicitacao on (solicitacao.slt_cod = parecer.slt_cod) WHERE date_format(parecer.prc_data,'%Y') = $ano and date_format(parecer.prc_data,'%m') = $mes
    and parecer.dstt_cod in ($par_uar_ent,$par_uar_sai) and solicitacao.stp_cod in ($solicitacoes) and parecer.usr_cod in ($encar_sol) and solicitacao.sft_cod != 30 and (solicitacao.stt_cod = 1 or solicitacao.stt_cod = 6) GROUP BY parecer.dstt_cod, solicitacao.stp_cod ORDER BY parecer.dstt_cod ASC, solicitacao.stp_cod ASC;"; $consulta26 = mysql_query($sql2, $con) OR DIE (mysql_error());
// GRÁFICO 02
    $adm_par_ok=0;$adm_par_qua=0;$adm_par_enc=0;$adm_par_dev=0;$adm_par_aad=0;$adm_par_dua=0;$adm_par_err=0;$adm_par_aam=0;$adm_par_enr=0;
    $com_par_ok=0;$com_par_qua=0;$com_par_enc=0;$com_par_dev=0;$com_par_aad=0;$com_par_dua=0;$com_par_err=0;$com_par_aam=0;$com_par_enr=0;
    $eas_par_ok=0;$eas_par_qua=0;$eas_par_enc=0;$eas_par_dev=0;$eas_par_aad=0;$eas_par_dua=0;$eas_par_err=0;$eas_par_aam=0;$eas_par_enr=0;
    $fis_par_ok=0;$fis_par_qua=0;$fis_par_enc=0;$fis_par_dev=0;$fis_par_aad=0;$fis_par_dua=0;$fis_par_err=0;$fis_par_aam=0;$fis_par_enr=0;
    $ven_par_ok=0;$ven_par_qua=0;$ven_par_enc=0;$ven_par_dev=0;$ven_par_aad=0;$ven_par_dua=0;$ven_par_err=0;$ven_par_aam=0;$ven_par_enr=0;
    $enc_par_ok=0;$enc_par_qua=0;$enc_par_enc=0;$enc_par_dev=0;$enc_par_aad=0;$enc_par_dua=0;$enc_par_err=0;$enc_par_aam=0;$enc_par_enr=0;

    $adm_sol_err=0;$adm_sol_mel=0;$adm_sol_duv=0;$adm_sol_con=0;$adm_sol_fme=0;$adm_sol_fer=0;$adm_sol_bas=0;$adm_sol_def=0;
    $com_sol_err=0;$com_sol_mel=0;$com_sol_duv=0;$com_sol_con=0;$com_sol_fme=0;$com_sol_fer=0;$com_sol_bas=0;$com_sol_def=0;
    $eas_sol_err=0;$eas_sol_mel=0;$eas_sol_duv=0;$eas_sol_con=0;$eas_sol_fme=0;$eas_sol_fer=0;$eas_sol_bas=0;$eas_sol_def=0;
    $fis_sol_err=0;$fis_sol_mel=0;$fis_sol_duv=0;$fis_sol_con=0;$fis_sol_fme=0;$fis_sol_fer=0;$fis_sol_bas=0;$fis_sol_def=0;
    $ven_sol_err=0;$ven_sol_mel=0;$ven_sol_duv=0;$ven_sol_con=0;$ven_sol_fme=0;$ven_sol_fer=0;$ven_sol_bas=0;$ven_sol_def=0;
    $enc_sol_err=0;$enc_sol_mel=0;$enc_sol_duv=0;$enc_sol_con=0;$enc_sol_fme=0;$enc_sol_fer=0;$enc_sol_bas=0;$enc_sol_def=0;

    while ($dados21 = mysql_fetch_array($consulta21)) {
        switch ($dados21[0]) {
            case '6'  : $adm_par_ok = $adm_par_ok + $dados21[2]; break;
            case '9'  : $adm_par_qua = $adm_par_qua + $dados21[2]; break;
            case '15' : $adm_par_enc = $adm_par_enc + $dados21[2]; break;
            case '17' : $adm_par_dev = $adm_par_dev + $dados21[2]; break;
            case '18' : $adm_par_aad = $adm_par_aad + $dados21[2]; break;
            case '21' : $adm_par_dua = $adm_par_dua + $dados21[2]; break;
            case '41' : $adm_par_err = $adm_par_err + $dados21[2]; break;
            case '51' : $adm_par_aam = $adm_par_aam + $dados21[2]; break;
            case '60' : $adm_par_enr = $adm_par_enr + $dados21[2]; break;
        }
       switch ($dados21[1]) {
            case '1'  : $adm_sol_err = $adm_sol_err + $dados21[2]; break;
            case '2'  : $adm_sol_mel = $adm_sol_mel + $dados21[2]; break;
            case '10' : $adm_sol_duv = $adm_sol_duv + $dados21[2]; break;
            case '19' : $adm_sol_con = $adm_sol_con + $dados21[2]; break;
            case '25' : $adm_sol_fme = $adm_sol_fme + $dados21[2]; break;
            case '27' : $adm_sol_fer = $adm_sol_fer + $dados21[2]; break;
            case '28' : $adm_sol_bas = $adm_sol_bas + $dados21[2]; break;
            case '32' : $adm_sol_def = $adm_sol_def + $dados21[2]; break;
        }
    }

    while ($dados22 = mysql_fetch_array($consulta22)) {
        switch ($dados22[0]) {
            case '6'  : $com_par_ok = $com_par_ok + $dados22[2]; break;
            case '9'  : $com_par_qua = $com_par_qua + $dados22[2]; break;
            case '15' : $com_par_enc = $com_par_enc + $dados22[2]; break;
            case '17' : $com_par_dev = $com_par_dev + $dados22[2]; break;
            case '18' : $com_par_aad = $com_par_aad + $dados22[2]; break;
            case '21' : $com_par_dua = $com_par_dua + $dados22[2]; break;
            case '41' : $com_par_err = $com_par_err + $dados22[2]; break;
            case '51' : $com_par_aam = $com_par_aam + $dados22[2]; break;
            case '60' : $com_par_enr = $com_par_enr + $dados22[2]; break;
        }
        switch ($dados22[1]) {
            case '1'  : $com_sol_err = $com_sol_err + $dados22[2]; break;
            case '2'  : $com_sol_mel = $com_sol_mel + $dados22[2]; break;
            case '10' : $com_sol_duv = $com_sol_duv + $dados22[2]; break;
            case '19' : $com_sol_con = $com_sol_con + $dados22[2]; break;
            case '25' : $com_sol_fme = $com_sol_fme + $dados22[2]; break;
            case '27' : $com_sol_fer = $com_sol_fer + $dados22[2]; break;
            case '28' : $com_sol_bas = $com_sol_bas + $dados22[2]; break;
            case '32' : $com_sol_def = $com_sol_def + $dados22[2]; break;
        }
    }

    while ($dados23 = mysql_fetch_array($consulta23)) {
        switch ($dados23[0]) {
            case '6'  : $eas_par_ok = $eas_par_ok + $dados23[2]; break;
            case '9'  : $eas_par_qua = $eas_par_qua + $dados23[2]; break;
            case '15' : $eas_par_enc = $eas_par_enc + $dados23[2]; break;
            case '17' : $eas_par_dev = $eas_par_dev + $dados23[2]; break;
            case '18' : $eas_par_aad = $eas_par_aad + $dados23[2]; break;
            case '21' : $eas_par_dua = $eas_par_dua + $dados23[2]; break;
            case '41' : $eas_par_err = $eas_par_err + $dados23[2]; break;
            case '51' : $eas_par_aam = $eas_par_aam + $dados23[2]; break;
            case '60' : $eas_par_enr = $eas_par_enr + $dados23[2]; break;
        }
        switch ($dados23[1]) {
            case '1'  : $eas_sol_err = $eas_sol_err + $dados23[2]; break;
            case '2'  : $eas_sol_mel = $eas_sol_mel + $dados23[2]; break;
            case '10' : $eas_sol_duv = $eas_sol_duv + $dados23[2]; break;
            case '19' : $eas_sol_con = $eas_sol_con + $dados23[2]; break;
            case '25' : $eas_sol_fme = $eas_sol_fme + $dados23[2]; break;
            case '27' : $eas_sol_fer = $eas_sol_fer + $dados23[2]; break;
            case '28' : $eas_sol_bas = $eas_sol_bas + $dados23[2]; break;
            case '32' : $eas_sol_def = $eas_sol_def + $dados23[2]; break;
        }
    }

    while ($dados24 = mysql_fetch_array($consulta24)) {
        switch ($dados24[0]) {
            case '6'  : $fis_par_ok = $fis_par_ok + $dados24[2]; break;
            case '9'  : $fis_par_qua = $fis_par_qua + $dados24[2]; break;
            case '15' : $fis_par_enc = $fis_par_enc + $dados24[2]; break;
            case '17' : $fis_par_dev = $fis_par_dev + $dados24[2]; break;
            case '18' : $fis_par_aad = $fis_par_aad + $dados24[2]; break;
            case '21' : $fis_par_dua = $fis_par_dua + $dados24[2]; break;
            case '41' : $fis_par_err = $fis_par_err + $dados24[2]; break;
            case '51' : $fis_par_aam = $fis_par_aam + $dados24[2]; break;
            case '60' : $fis_par_enr = $fis_par_enr + $dados24[2]; break;
        }
        switch ($dados24[1]) {
            case '1'  : $fis_sol_err = $fis_sol_err + $dados24[2]; break;
            case '2'  : $fis_sol_mel = $fis_sol_mel + $dados24[2]; break;
            case '10' : $fis_sol_duv = $fis_sol_duv + $dados24[2]; break;
            case '19' : $fis_sol_con = $fis_sol_con + $dados24[2]; break;
            case '25' : $fis_sol_fme = $fis_sol_fme + $dados24[2]; break;
            case '27' : $fis_sol_fer = $fis_sol_fer + $dados24[2]; break;
            case '28' : $fis_sol_bas = $fis_sol_bas + $dados24[2]; break;
            case '32' : $fis_sol_def = $fis_sol_def + $dados24[2]; break;
        }
    }

    while ($dados25 = mysql_fetch_array($consulta25)) {
        switch ($dados25[0]) {
            case '6'  : $ven_par_ok = $ven_par_ok + $dados25[2]; break;
            case '9'  : $ven_par_qua = $ven_par_qua + $dados25[2]; break;
            case '15' : $ven_par_enc = $ven_par_enc + $dados25[2]; break;
            case '17' : $ven_par_dev = $ven_par_dev + $dados25[2]; break;
            case '18' : $ven_par_aad = $ven_par_aad + $dados25[2]; break;
            case '21' : $ven_par_dua = $ven_par_dua + $dados25[2]; break;
            case '41' : $ven_par_err = $ven_par_err + $dados25[2]; break;
            case '51' : $ven_par_aam = $ven_par_aam + $dados25[2]; break;
            case '60' : $ven_par_enr = $ven_par_enr + $dados25[2]; break;
        }
       switch ($dados25[1]) {
            case '1'  : $ven_sol_err = $ven_sol_err + $dados25[2]; break;
            case '2'  : $ven_sol_mel = $ven_sol_mel + $dados25[2]; break;
            case '10' : $ven_sol_duv = $ven_sol_duv + $dados25[2]; break;
            case '19' : $ven_sol_con = $ven_sol_con + $dados25[2]; break;
            case '25' : $ven_sol_fme = $ven_sol_fme + $dados25[2]; break;
            case '27' : $ven_sol_fer = $ven_sol_fer + $dados25[2]; break;
            case '28' : $ven_sol_bas = $ven_sol_bas + $dados25[2]; break;
            case '32' : $ven_sol_def = $ven_sol_def + $dados25[2]; break;
        }
    }

    while ($dados26 = mysql_fetch_array($consulta26)) {
        switch ($dados26[0]) {
            case '6'  : $enc_par_ok = $enc_par_ok + $dados26[2]; break;
            case '9'  : $enc_par_qua = $enc_par_qua + $dados26[2]; break;
            case '15' : $enc_par_enc = $enc_par_enc + $dados26[2]; break;
            case '17' : $enc_par_dev = $enc_par_dev + $dados26[2]; break;
            case '18' : $enc_par_aad = $enc_par_aad + $dados26[2]; break;
            case '21' : $enc_par_dua = $enc_par_dua + $dados26[2]; break;
            case '41' : $enc_par_err = $enc_par_err + $dados26[2]; break;
            case '51' : $enc_par_aam = $enc_par_aam + $dados26[2]; break;
            case '60' : $enc_par_enr = $enc_par_enr + $dados26[2]; break;
        }
        switch ($dados26[1]) {
            case '1'  : $enc_sol_err = $enc_sol_err + $dados26[2]; break;
            case '2'  : $enc_sol_mel = $enc_sol_mel + $dados26[2]; break;
            case '10' : $enc_sol_duv = $enc_sol_duv + $dados26[2]; break;
            case '19' : $enc_sol_con = $enc_sol_con + $dados26[2]; break;
            case '25' : $enc_sol_fme = $enc_sol_fme + $dados26[2]; break;
            case '27' : $enc_sol_fer = $enc_sol_fer + $dados26[2]; break;
            case '28' : $enc_sol_bas = $enc_sol_bas + $dados26[2]; break;
            case '32' : $enc_sol_def = $enc_sol_def + $dados26[2]; break;
        }
    }

    $chart = new VerticalBarChart900(900, 400);

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("Admin/Finan",  $adm_par_enc));
    $serie1->addPoint(new Point("Compras",      $com_par_enc));
    $serie1->addPoint(new Point("Easy",         $eas_par_enc));
    $serie1->addPoint(new Point("Fiscal",       $fis_par_enc));
    $serie1->addPoint(new Point("Vendas",       $ven_par_enc));
    $serie1->addPoint(new Point("Encarregados", $enc_par_enc));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("Admin/Finan",  $adm_par_qua));
    $serie2->addPoint(new Point("Compras",      $com_par_qua));
    $serie2->addPoint(new Point("Easy",         $eas_par_qua));
    $serie2->addPoint(new Point("Fiscal",       $fis_par_qua));
    $serie2->addPoint(new Point("Vendas",       $ven_par_qua));
    $serie2->addPoint(new Point("Encarregados", $enc_par_qua));

    $serie3 = new XYDataSet();
    $serie3->addPoint(new Point("Admin/Finan",  $adm_par_dua));
    $serie3->addPoint(new Point("Compras",      $com_par_dua));
    $serie3->addPoint(new Point("Easy",         $eas_par_dua));
    $serie3->addPoint(new Point("Fiscal",       $fis_par_dua));
    $serie3->addPoint(new Point("Vendas",       $ven_par_dua));
    $serie3->addPoint(new Point("Encarregados", $enc_par_dua));

    $serie4 = new XYDataSet();
    $serie4->addPoint(new Point("Admin/Finan",  $adm_par_aad));
    $serie4->addPoint(new Point("Compras",      $com_par_aad));
    $serie4->addPoint(new Point("Easy",         $eas_par_aad));
    $serie4->addPoint(new Point("Fiscal",       $fis_par_aad));
    $serie4->addPoint(new Point("Vendas",       $ven_par_aad));
    $serie4->addPoint(new Point("Encarregados", $enc_par_aad));

    $serie5 = new XYDataSet();
    $serie5->addPoint(new Point("Admin/Finan",  $adm_par_aam));
    $serie5->addPoint(new Point("Compras",      $com_par_aam));
    $serie5->addPoint(new Point("Easy",         $eas_par_aam));
    $serie5->addPoint(new Point("Fiscal",       $fis_par_aam));
    $serie5->addPoint(new Point("Vendas",       $ven_par_aam));
    $serie5->addPoint(new Point("Encarregados", $enc_par_aam));

    $serie6 = new XYDataSet();
    $serie6->addPoint(new Point("Admin/Finan",  $adm_par_ok));
    $serie6->addPoint(new Point("Compras",      $com_par_ok));
    $serie6->addPoint(new Point("Easy",         $eas_par_ok));
    $serie6->addPoint(new Point("Fiscal",       $fis_par_ok));
    $serie6->addPoint(new Point("Vendas",       $ven_par_ok));
    $serie6->addPoint(new Point("Encarregados", $enc_par_ok));

    $serie7 = new XYDataSet();
    $serie7->addPoint(new Point("Admin/Finan",  $adm_par_err));
    $serie7->addPoint(new Point("Compras",      $com_par_err));
    $serie7->addPoint(new Point("Easy",         $eas_par_err));
    $serie7->addPoint(new Point("Fiscal",       $fis_par_err));
    $serie7->addPoint(new Point("Vendas",       $ven_par_err));
    $serie7->addPoint(new Point("Encarregados", $enc_par_err));

    $serie8 = new XYDataSet();
    $serie8->addPoint(new Point("Admin/Finan",  $adm_par_enr));
    $serie8->addPoint(new Point("Compras",      $com_par_enr));
    $serie8->addPoint(new Point("Easy",         $eas_par_enr));
    $serie8->addPoint(new Point("Fiscal",       $fis_par_enr));
    $serie8->addPoint(new Point("Vendas",       $ven_par_enr));
    $serie8->addPoint(new Point("Encarregados", $enc_par_enr));

    $serie9 = new XYDataSet();
    $serie9->addPoint(new Point("Admin/Finan",  $adm_par_dev));
    $serie9->addPoint(new Point("Compras",      $com_par_dev));
    $serie9->addPoint(new Point("Easy",         $eas_par_dev));
    $serie9->addPoint(new Point("Fiscal",       $fis_par_dev));
    $serie9->addPoint(new Point("Vendas",       $ven_par_dev));
    $serie9->addPoint(new Point("Encarregados", $enc_par_dev));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("Encaminhado p/ UAR",    $serie1);
    $dataSet->addSerie("Teste Qualidade UAR",   $serie2);
    $dataSet->addSerie("Devolvido p/ UAR",      $serie3);
    $dataSet->addSerie("Aguar. Anál. Desenv.",  $serie4);
    $dataSet->addSerie("Aguar. Aprov. Melh.",   $serie5);
    $dataSet->addSerie("Teste OK",              $serie6);
    $dataSet->addSerie("Teste ERRO",            $serie7);
    $dataSet->addSerie("Encaminhado p/ Rep.",   $serie8);
    $dataSet->addSerie("Devolvido p/ Rep.",     $serie9);

    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.80);
    $chart->getPlot()->setGraphPadding(new Padding(10, 1, 60, 30));
    $chart->setTitle("Pareceres de Solicitações por Carteira em $mes_nome de $ano");
    $chart->render("graficos/set_sol_uar2-$mes-$ano.png");

// GRÁFICO 03
    $chart = new VerticalBarChart900(900, 400);

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("Admin/Finan",  $adm_sol_err));
    $serie1->addPoint(new Point("Compras",      $com_sol_err));
    $serie1->addPoint(new Point("Easy",         $eas_sol_err));
    $serie1->addPoint(new Point("Fiscal",       $fis_sol_err));
    $serie1->addPoint(new Point("Vendas",       $ven_sol_err));
    $serie1->addPoint(new Point("Encarregados", $enc_sol_err));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("Admin/Finan",  $adm_sol_mel));
    $serie2->addPoint(new Point("Compras",      $com_sol_mel));
    $serie2->addPoint(new Point("Easy",         $eas_sol_mel));
    $serie2->addPoint(new Point("Fiscal",       $fis_sol_mel));
    $serie2->addPoint(new Point("Vendas",       $ven_sol_mel));
    $serie2->addPoint(new Point("Encarregados", $enc_sol_mel));

    $serie3 = new XYDataSet();
    $serie3->addPoint(new Point("Admin/Finan",  $adm_sol_duv));
    $serie3->addPoint(new Point("Compras",      $com_sol_duv));
    $serie3->addPoint(new Point("Easy",         $eas_sol_duv));
    $serie3->addPoint(new Point("Fiscal",       $fis_sol_duv));
    $serie3->addPoint(new Point("Vendas",       $ven_sol_duv));
    $serie3->addPoint(new Point("Encarregados", $enc_sol_duv));

    $serie4 = new XYDataSet();
    $serie4->addPoint(new Point("Admin/Finan",  $adm_sol_con));
    $serie4->addPoint(new Point("Compras",      $com_sol_con));
    $serie4->addPoint(new Point("Easy",         $eas_sol_con));
    $serie4->addPoint(new Point("Fiscal",       $fis_sol_con));
    $serie4->addPoint(new Point("Vendas",       $ven_sol_con));
    $serie4->addPoint(new Point("Encarregados", $enc_sol_con));

    $serie5 = new XYDataSet();
    $serie5->addPoint(new Point("Admin/Finan",  $adm_sol_bas));
    $serie5->addPoint(new Point("Compras",      $com_sol_bas));
    $serie5->addPoint(new Point("Easy",         $eas_sol_bas));
    $serie5->addPoint(new Point("Fiscal",       $fis_sol_bas));
    $serie5->addPoint(new Point("Vendas",       $ven_sol_bas));
    $serie5->addPoint(new Point("Encarregados", $enc_sol_bas));

    $serie6 = new XYDataSet();
    $serie6->addPoint(new Point("Admin/Finan",  $adm_sol_fme));
    $serie6->addPoint(new Point("Compras",      $com_sol_fme));
    $serie6->addPoint(new Point("Easy",         $eas_sol_fme));
    $serie6->addPoint(new Point("Fiscal",       $fis_sol_fme));
    $serie6->addPoint(new Point("Vendas",       $ven_sol_fme));
    $serie6->addPoint(new Point("Encarregados", $enc_sol_fme));

    $serie7 = new XYDataSet();
    $serie7->addPoint(new Point("Admin/Finan",  $adm_sol_fer));
    $serie7->addPoint(new Point("Compras",      $com_sol_fer));
    $serie7->addPoint(new Point("Easy",         $eas_sol_fer));
    $serie7->addPoint(new Point("Fiscal",       $fis_sol_fer));
    $serie7->addPoint(new Point("Vendas",       $ven_sol_fer));
    $serie7->addPoint(new Point("Encarregados", $enc_sol_fer));

    $serie8 = new XYDataSet();
    $serie8->addPoint(new Point("Admin/Finan",  $adm_sol_def));
    $serie8->addPoint(new Point("Compras",      $com_sol_def));
    $serie8->addPoint(new Point("Easy",         $eas_sol_def));
    $serie8->addPoint(new Point("Fiscal",       $fis_sol_def));
    $serie8->addPoint(new Point("Vendas",       $ven_sol_def));
    $serie8->addPoint(new Point("Encarregados", $enc_sol_def));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("Erro",              $serie1);
    $dataSet->addSerie("Melhoria",          $serie2);
    $dataSet->addSerie("Dúvida",            $serie3);
    $dataSet->addSerie("Conv. de Dados",    $serie4);
    $dataSet->addSerie("Fiscal-Erro",       $serie5);
    $dataSet->addSerie("Fiscal-Melhoria",   $serie6);
    $dataSet->addSerie("Base Corrompida",   $serie7);
    $dataSet->addSerie("Deficiência",       $serie8);

    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.80);
    $chart->getPlot()->setGraphPadding(new Padding(10, 1, 60, 30));
    $chart->setTitle("Tipos de Solicitações por Carteira em $mes_nome de $ano");
    $chart->render("graficos/set_sol_uar3-$mes-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php');mysql_free_result($consulta1);mysql_free_result($consulta21);mysql_free_result($consulta22);mysql_free_result($consulta23);mysql_free_result($consulta24);mysql_free_result($consulta25);mysql_free_result($consulta26);mysql_close($con);?>