<center>
<?php
require('cabecalho.php');
require('conexao.php');
require('variavel.php');
require('funcoes.php');
require('carteiras.php');
include "../libchart/classes/libchart.php";
?>
<br>
    Estatística de <font color="red"><?php echo $cha_nome ?></font> do <font color="red">Setor</font> <font color="red"><?php echo $est_nome ?></font> em <font color="red"><?php echo $mes_nome; ?></font> de <font color="red"><?php echo $ano; ?></font>.
<br>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2010"><?php if($ano=='2010'){ ?><img src="imagem/2010_s.jpg" border="0"><?php }else{ ?><img src="imagem/2010.jpg" border="0" onmouseout="this.src='imagem/2010.jpg';" onmouseover="this.src='imagem/2010_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2011"><?php if($ano=='2011'){ ?><img src="imagem/2011_s.jpg" border="0"><?php }else{ ?><img src="imagem/2011.jpg" border="0" onmouseout="this.src='imagem/2011.jpg';" onmouseover="this.src='imagem/2011_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2012"><?php if($ano=='2012'){ ?><img src="imagem/2012_s.jpg" border="0"><?php }else{ ?><img src="imagem/2012.jpg" border="0" onmouseout="this.src='imagem/2012.jpg';" onmouseover="this.src='imagem/2012_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2013"><?php if($ano=='2013'){ ?><img src="imagem/2013_s.jpg" border="0"><?php }else{ ?><img src="imagem/2013.jpg" border="0" onmouseout="this.src='imagem/2013.jpg';" onmouseover="this.src='imagem/2013_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2014"><?php if($ano=='2014'){ ?><img src="imagem/2014_s.jpg" border="0"><?php }else{ ?><img src="imagem/2014.jpg" border="0" onmouseout="this.src='imagem/2014.jpg';" onmouseover="this.src='imagem/2014_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2015"><?php if($ano=='2015'){ ?><img src="imagem/2015_s.jpg" border="0"><?php }else{ ?><img src="imagem/2015.jpg" border="0" onmouseout="this.src='imagem/2015.jpg';" onmouseover="this.src='imagem/2015_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2016"><?php if($ano=='2016'){ ?><img src="imagem/2016_s.jpg" border="0"><?php }else{ ?><img src="imagem/2016.jpg" border="0" onmouseout="this.src='imagem/2016.jpg';" onmouseover="this.src='imagem/2016_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=2017"><?php if($ano=='2017'){ ?><img src="imagem/2017_s.jpg" border="0"><?php }else{ ?><img src="imagem/2017.jpg" border="0" onmouseout="this.src='imagem/2017.jpg';" onmouseover="this.src='imagem/2017_s.jpg';"><?php } ?></a>
<br>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=01&ano=<?php echo $ano?>"><?php if($mes=='01'){ ?><img src="imagem/01_s.jpg" border="0"><?php }else{ ?><img src="imagem/01.jpg" border="0" onmouseout="this.src='imagem/01.jpg';" onmouseover="this.src='imagem/01_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=02&ano=<?php echo $ano?>"><?php if($mes=='02'){ ?><img src="imagem/02_s.jpg" border="0"><?php }else{ ?><img src="imagem/02.jpg" border="0" onmouseout="this.src='imagem/02.jpg';" onmouseover="this.src='imagem/02_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=03&ano=<?php echo $ano?>"><?php if($mes=='03'){ ?><img src="imagem/03_s.jpg" border="0"><?php }else{ ?><img src="imagem/03.jpg" border="0" onmouseout="this.src='imagem/03.jpg';" onmouseover="this.src='imagem/03_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=04&ano=<?php echo $ano?>"><?php if($mes=='04'){ ?><img src="imagem/04_s.jpg" border="0"><?php }else{ ?><img src="imagem/04.jpg" border="0" onmouseout="this.src='imagem/04.jpg';" onmouseover="this.src='imagem/04_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=05&ano=<?php echo $ano?>"><?php if($mes=='05'){ ?><img src="imagem/05_s.jpg" border="0"><?php }else{ ?><img src="imagem/05.jpg" border="0" onmouseout="this.src='imagem/05.jpg';" onmouseover="this.src='imagem/05_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=06&ano=<?php echo $ano?>"><?php if($mes=='06'){ ?><img src="imagem/06_s.jpg" border="0"><?php }else{ ?><img src="imagem/06.jpg" border="0" onmouseout="this.src='imagem/06.jpg';" onmouseover="this.src='imagem/06_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=07&ano=<?php echo $ano?>"><?php if($mes=='07'){ ?><img src="imagem/07_s.jpg" border="0"><?php }else{ ?><img src="imagem/07.jpg" border="0" onmouseout="this.src='imagem/07.jpg';" onmouseover="this.src='imagem/07_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=08&ano=<?php echo $ano?>"><?php if($mes=='08'){ ?><img src="imagem/08_s.jpg" border="0"><?php }else{ ?><img src="imagem/08.jpg" border="0" onmouseout="this.src='imagem/08.jpg';" onmouseover="this.src='imagem/08_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=09&ano=<?php echo $ano?>"><?php if($mes=='09'){ ?><img src="imagem/09_s.jpg" border="0"><?php }else{ ?><img src="imagem/09.jpg" border="0" onmouseout="this.src='imagem/09.jpg';" onmouseover="this.src='imagem/09_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=10&ano=<?php echo $ano?>"><?php if($mes=='10'){ ?><img src="imagem/10_s.jpg" border="0"><?php }else{ ?><img src="imagem/10.jpg" border="0" onmouseout="this.src='imagem/10.jpg';" onmouseover="this.src='imagem/10_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=11&ano=<?php echo $ano?>"><?php if($mes=='11'){ ?><img src="imagem/11_s.jpg" border="0"><?php }else{ ?><img src="imagem/11.jpg" border="0" onmouseout="this.src='imagem/11.jpg';" onmouseover="this.src='imagem/11_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=<?php echo $est?>&cha=<?php echo $cha?>&mes=12&ano=<?php echo $ano?>"><?php if($mes=='12'){ ?><img src="imagem/12_s.jpg" border="0"><?php }else{ ?><img src="imagem/12.jpg" border="0" onmouseout="this.src='imagem/12.jpg';" onmouseover="this.src='imagem/12_s.jpg';"><?php } ?></a>
<br>
    <a href="set_ate_par.php?est=par&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="par"){ ?><img src="imagem/parceiro_s.jpg" border="0"><?php }else{ ?><img src="imagem/parceiro.jpg" border="0" onmouseout="this.src='imagem/parceiro.jpg';" onmouseover="this.src='imagem/parceiro_s.jpg';"><?php } ?></a>
    <a href="set_ate_uar.php?est=uar&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="uar"){ ?><img src="imagem/uar_s.jpg" border="0"><?php }else{ ?><img src="imagem/uar.jpg" border="0" onmouseout="this.src='imagem/uar.jpg';" onmouseover="this.src='imagem/uar_s.jpg';"><?php } ?></a>
    <a href="set_ate_des.php?est=des&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="des"){ ?><img src="imagem/desenvolvimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/desenvolvimento.jpg" border="0" onmouseout="this.src='imagem/desenvolvimento.jpg';" onmouseover="this.src='imagem/desenvolvimento_s.jpg';"><?php } ?></a>
    <a href="set_ate_cer.php?est=cer&cha=<?php echo $cha?>&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($est=="cer"){ ?><img src="imagem/certificacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/certificacao.jpg" border="0" onmouseout="this.src='imagem/certificacao.jpg';" onmouseover="this.src='imagem/certificacao_s.jpg';"><?php } ?></a>
<br>
    <a href="set_ate_uar.php?est=uar&cha=ate&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='ate'){ ?><img src="imagem/atendimento_s.jpg" border="0"><?php }else{ ?><img src="imagem/atendimento.jpg" border="0" onmouseout="this.src='imagem/atendimento.jpg';" onmouseover="this.src='imagem/atendimento_s.jpg';"><?php } ?></a>
    <a href="set_sol_uar.php?est=uar&cha=sol&mes=<?php echo $mes?>&ano=<?php echo $ano?>"><?php if($cha=='sol'){ ?><img src="imagem/solicitacao_s.jpg" border="0"><?php }else{ ?><img src="imagem/solicitacao.jpg" border="0" onmouseout="this.src='imagem/solicitacao.jpg';" onmouseover="this.src='imagem/solicitacao_s.jpg';"><?php } ?></a>
<br>
<?php
    $filename = 'graficos/abc_ate_cer1-'.$mes.'-'.$ano.'.png'; $data = date ("d/m/Y H:i:s", filemtime($filename));
    if (file_exists($filename)) {echo "Atualizados em ".date ("d/m/Y", filemtime($filename))." as ".date ("H:i:s", filemtime($filename))."";} else {echo "Esses gráficos ainda não foram criados.";}
?>
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>&atualizar=1' method='POST'><input type='submit' name='atualizar' value='Atualizar Agora'></form>
<?php if ($_GET['atualizar'] == 0) { ?>
    <hr width="900"><img alt="Tipo de Atendimentos por Carteira em <?php echo $mes_nome?> de <?php echo $ano?>" src="graficos/set_ate_uar1-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
    <hr width="900"><img alt="Tipo de Atendimentos por Analista em <?php echo $mes_nome?> de <?php echo $ano?>" src="graficos/set_ate_uar2-<?php echo $mes; ?>-<?php echo $ano; ?>.png" style="border: 1px solid gray;"/>
<?php
    } else {
// SQL 01
    $sql1 = "SELECT atendimento_uar.atduar_motivo, count(1) as qtd FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($admin_ate)
    and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6) GROUP BY atendimento_uar.atduar_motivo"; $consulta11 = mysql_query($sql1, $con) OR DIE (mysql_error());

    $sql1 = "SELECT atendimento_uar.atduar_motivo, count(1) as qtd FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($compra_ate)
    and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6) GROUP BY atendimento_uar.atduar_motivo"; $consulta12 = mysql_query($sql1, $con) OR DIE (mysql_error());

    $sql1 = "SELECT atendimento_uar.atduar_motivo, count(1) as qtd FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($easy_ate)
    and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6) GROUP BY atendimento_uar.atduar_motivo"; $consulta13 = mysql_query($sql1, $con) OR DIE (mysql_error());

    $sql1 = "SELECT atendimento_uar.atduar_motivo, count(1) as qtd FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($fiscal_ate)
    and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6) GROUP BY atendimento_uar.atduar_motivo"; $consulta14 = mysql_query($sql1, $con) OR DIE (mysql_error());

    $sql1 = "SELECT atendimento_uar.atduar_motivo, count(1) as qtd FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($venda_ate)
    and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6) GROUP BY atendimento_uar.atduar_motivo"; $consulta15 = mysql_query($sql1, $con) OR DIE (mysql_error());

    $sql1 = "SELECT atendimento_uar.atduar_motivo, count(1) as qtd FROM atendimento_uar WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($encar_ate)
    and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6) GROUP BY atendimento_uar.atduar_motivo"; $consulta16 = mysql_query($sql1, $con) OR DIE (mysql_error());
// GRÁFICO 01

    $adm_atu=0;$adm_duv=0;$adm_imp=0;$adm_tre=0;$adm_bac=0;$adm_err=0;$adm_rec=0;$adm_out=0;
    $com_atu=0;$com_duv=0;$com_imp=0;$com_tre=0;$com_bac=0;$com_err=0;$com_rec=0;$com_out=0;
    $eas_atu=0;$eas_duv=0;$eas_imp=0;$eas_tre=0;$eas_bac=0;$eas_err=0;$eas_rec=0;$eas_out=0;
    $fis_atu=0;$fis_duv=0;$fis_imp=0;$fis_tre=0;$fis_bac=0;$fis_err=0;$fis_rec=0;$fis_out=0;
    $ven_atu=0;$ven_duv=0;$ven_imp=0;$ven_tre=0;$ven_bac=0;$ven_err=0;$ven_rec=0;$ven_out=0;
    $enc_atu=0;$enc_duv=0;$enc_imp=0;$enc_tre=0;$enc_bac=0;$enc_err=0;$enc_rec=0;$enc_out=0;

    while ($dados11 = mysql_fetch_array($consulta11)) {
        switch (utf8_encode($dados11[0])) {
            case 'Atualização'  : $adm_atu = $dados11[1]; break;
            case 'Dúvida'       : $adm_duv = $dados11[1]; break;
            case 'Implantação'  : $adm_imp = $dados11[1]; break;
            case 'Treinamento'  : $adm_tre = $dados11[1]; break;
            case 'Backup'       : $adm_bac = $dados11[1]; break;
            case 'Erro'         : $adm_err = $dados11[1]; break;
            case 'Reclamação'   : $adm_rec = $dados11[1]; break;
            case 'Outros'       : $adm_out = $dados11[1]; break;
        }
    }

    while ($dados12 = mysql_fetch_array($consulta12)) {
        switch (utf8_encode($dados12[0])) {
            case 'Atualização'  : $com_atu = $dados12[1]; break;
            case 'Dúvida'       : $com_duv = $dados12[1]; break;
            case 'Implantação'  : $com_imp = $dados12[1]; break;
            case 'Treinamento'  : $com_tre = $dados12[1]; break;
            case 'Backup'       : $com_bac = $dados12[1]; break;
            case 'Erro'         : $com_err = $dados12[1]; break;
            case 'Reclamação'   : $com_rec = $dados12[1]; break;
            case 'Outros'       : $com_out = $dados12[1]; break;
        }
    }

    while ($dados13 = mysql_fetch_array($consulta13)) {
        switch (utf8_encode($dados13[0])) {
            case 'Atualização'  : $eas_atu = $dados13[1]; break;
            case 'Dúvida'       : $eas_duv = $dados13[1]; break;
            case 'Implantação'  : $eas_imp = $dados13[1]; break;
            case 'Treinamento'  : $eas_tre = $dados13[1]; break;
            case 'Backup'       : $eas_bac = $dados13[1]; break;
            case 'Erro'         : $eas_err = $dados13[1]; break;
            case 'Reclamação'   : $eas_rec = $dados13[1]; break;
            case 'Outros'       : $eas_out = $dados13[1]; break;
        }
    }

    while ($dados14 = mysql_fetch_array($consulta14)) {
        switch (utf8_encode($dados14[0])) {
            case 'Atualização'  : $fis_atu = $dados14[1]; break;
            case 'Dúvida'       : $fis_duv = $dados14[1]; break;
            case 'Implantação'  : $fis_imp = $dados14[1]; break;
            case 'Treinamento'  : $fis_tre = $dados14[1]; break;
            case 'Backup'       : $fis_bac = $dados14[1]; break;
            case 'Erro'         : $fis_err = $dados14[1]; break;
            case 'Reclamação'   : $fis_rec = $dados14[1]; break;
            case 'Outros'       : $fis_out = $dados14[1]; break;
        }
    }

    while ($dados15 = mysql_fetch_array($consulta15)) {
        switch (utf8_encode($dados15[0])) {
            case 'Atualização'  : $ven_atu = $dados15[1]; break;
            case 'Dúvida'       : $ven_duv = $dados15[1]; break;
            case 'Implantação'  : $ven_imp = $dados15[1]; break;
            case 'Treinamento'  : $ven_tre = $dados15[1]; break;
            case 'Backup'       : $ven_bac = $dados15[1]; break;
            case 'Erro'         : $ven_err = $dados15[1]; break;
            case 'Reclamação'   : $ven_rec = $dados15[1]; break;
            case 'Outros'       : $ven_out = $dados15[1]; break;
        }
    }

    while ($dados16 = mysql_fetch_array($consulta16)) {
        switch (utf8_encode($dados16[0])) {
            case 'Atualização'  : $enc_atu = $dados16[1]; break;
            case 'Dúvida'       : $enc_duv = $dados16[1]; break;
            case 'Implantação'  : $enc_imp = $dados16[1]; break;
            case 'Treinamento'  : $enc_tre = $dados16[1]; break;
            case 'Backup'       : $enc_bac = $dados16[1]; break;
            case 'Erro'         : $enc_err = $dados16[1]; break;
            case 'Reclamação'   : $enc_rec = $dados16[1]; break;
            case 'Outros'       : $enc_out = $dados16[1]; break;
        }
    }

    $chart = new VerticalBarChart900(900, 400);

    $serie1 = new XYDataSet();
    $serie1->addPoint(new Point("Admin/Finan",  $adm_atu));
    $serie1->addPoint(new Point("Compras",      $com_atu));
    $serie1->addPoint(new Point("Easy",         $eas_atu));
    $serie1->addPoint(new Point("Fiscal",       $fis_atu));
    $serie1->addPoint(new Point("Vendas",       $ven_atu));
    $serie1->addPoint(new Point("Encarregados", $enc_atu));

    $serie2 = new XYDataSet();
    $serie2->addPoint(new Point("Admin/Finan",  $adm_duv));
    $serie2->addPoint(new Point("Compras",      $com_duv));
    $serie2->addPoint(new Point("Easy",         $eas_duv));
    $serie2->addPoint(new Point("Fiscal",       $fis_duv));
    $serie2->addPoint(new Point("Vendas",       $ven_duv));
    $serie2->addPoint(new Point("Encarregados", $enc_duv));

    $serie3 = new XYDataSet();
    $serie3->addPoint(new Point("Admin/Finan",  $adm_imp));
    $serie3->addPoint(new Point("Compras",      $com_imp));
    $serie3->addPoint(new Point("Easy",         $eas_imp));
    $serie3->addPoint(new Point("Fiscal",       $fis_imp));
    $serie3->addPoint(new Point("Vendas",       $ven_imp));
    $serie3->addPoint(new Point("Encarregados", $enc_imp));

    $serie4 = new XYDataSet();
    $serie4->addPoint(new Point("Admin/Finan",  $adm_tre));
    $serie4->addPoint(new Point("Compras",      $com_tre));
    $serie4->addPoint(new Point("Easy",         $eas_tre));
    $serie4->addPoint(new Point("Fiscal",       $fis_tre));
    $serie4->addPoint(new Point("Vendas",       $ven_tre));
    $serie4->addPoint(new Point("Encarregados", $enc_tre));

    $serie5 = new XYDataSet();
    $serie5->addPoint(new Point("Admin/Finan",  $adm_bac));
    $serie5->addPoint(new Point("Compras",      $com_bac));
    $serie5->addPoint(new Point("Easy",         $eas_bac));
    $serie5->addPoint(new Point("Fiscal",       $fis_bac));
    $serie5->addPoint(new Point("Vendas",       $ven_bac));
    $serie5->addPoint(new Point("Encarregados", $enc_bac));

    $serie6 = new XYDataSet();
    $serie6->addPoint(new Point("Admin/Finan",  $adm_err));
    $serie6->addPoint(new Point("Compras",      $com_err));
    $serie6->addPoint(new Point("Easy",         $eas_err));
    $serie6->addPoint(new Point("Fiscal",       $fis_err));
    $serie6->addPoint(new Point("Vendas",       $ven_err));
    $serie6->addPoint(new Point("Encarregados", $enc_err));

    $serie7 = new XYDataSet();
    $serie7->addPoint(new Point("Admin/Finan",  $adm_rec));
    $serie7->addPoint(new Point("Compras",      $com_rec));
    $serie7->addPoint(new Point("Easy",         $eas_rec));
    $serie7->addPoint(new Point("Fiscal",       $fis_rec));
    $serie7->addPoint(new Point("Vendas",       $ven_rec));
    $serie7->addPoint(new Point("Encarregados", $enc_rec));

    $serie8 = new XYDataSet();
    $serie8->addPoint(new Point("Admin/Finan",  $adm_out));
    $serie8->addPoint(new Point("Compras",      $com_out));
    $serie8->addPoint(new Point("Easy",         $eas_out));
    $serie8->addPoint(new Point("Fiscal",       $fis_out));
    $serie8->addPoint(new Point("Vendas",       $ven_out));
    $serie8->addPoint(new Point("Encarregados", $enc_out));

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("Atualização",   $serie1);
    $dataSet->addSerie("Dúvida",        $serie2);
    $dataSet->addSerie("Implantação",   $serie3);
    $dataSet->addSerie("Treinamento",   $serie4);
    $dataSet->addSerie("Backup",        $serie5);
    $dataSet->addSerie("Erro",          $serie6);
    $dataSet->addSerie("Reclamação",    $serie7);
    $dataSet->addSerie("Outros",        $serie8);

    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.85);
    $chart->getPlot()->setGraphPadding(new Padding(10, 1, 60, 30));
    $chart->setTitle("Tipo de Atendimentos por Carteira em $mes_nome de $ano");
    $chart->render("graficos/set_ate_uar1-$mes-$ano.png");

// SQL 02
    $sql21 = "SELECT atendimento_uar.usr_cod, usuario.usr_nome, count(1) as qtd FROM atendimento_uar inner join usuario on (usuario.usr_cod = atendimento_uar.usr_cod)
    WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($fiscal_ate,$compra_ate,$venda_ate,$admin_ate,$easy_ate,$encar_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY atendimento_uar.usr_cod ORDER by qtd ASC;"; $consulta21 = mysql_query($sql21, $con) OR DIE (mysql_error());

    $sql22 = "SELECT atendimento_uar.usr_cod, usuario.usr_nome, atendimento_uar.atduar_motivo, count(1) as qtd FROM atendimento_uar inner join usuario on (usuario.usr_cod = atendimento_uar.usr_cod)
    WHERE date_format(atendimento_uar.atduar_dtainicio,'%Y') = $ano and date_format(atendimento_uar.atduar_dtainicio,'%m') = $mes and atendimento_uar.usr_cod in ($fiscal_ate,$compra_ate,$venda_ate,$admin_ate,$easy_ate,$encar_ate) and (atendimento_uar.stt_cod = 1 or atendimento_uar.stt_cod = 6)
    GROUP BY atendimento_uar.usr_cod, atendimento_uar.atduar_motivo ORDER by usuario.usr_nome DESC"; $consulta22 = mysql_query($sql22, $con) OR DIE (mysql_error());
// GRÁFICO 01
    $contar=0; mysql_data_seek($consulta22, 0);
    while ($dados22 = mysql_fetch_array($consulta22)) {$contar++;} $altura = $contar * 30;

    $chart = new HorizontalBarChart900(900, $altura);

    $serie1 = new XYDataSet(); mysql_data_seek($consulta21, 0);
    while ($dados21 = mysql_fetch_array($consulta21)) {mysql_data_seek($consulta22, 0); $ok = 0; while ($dados22 = mysql_fetch_array($consulta22)) {if ($ok == 0) {if ($dados21[0] == $dados22[0]) {if (utf8_encode($dados22[2]) == "Atualização") {$serie1->addPoint(new Point($dados21[1], $dados22[3])); $ok = 1;}}}}if ($ok == 0) {$serie1->addPoint(new Point($dados21[1], 0));}}

    $serie2 = new XYDataSet(); mysql_data_seek($consulta21, 0);
    while ($dados21 = mysql_fetch_array($consulta21)) {mysql_data_seek($consulta22, 0); $ok=0; while ($dados22 = mysql_fetch_array($consulta22)) {if ($ok==0) {if ($dados21[0] == $dados22[0]) {if (utf8_encode($dados22[2]) == "Dúvida") {$serie2->addPoint(new Point($dados21[1], $dados22[3])); $ok = 1;}}}} if ($ok == 0) {$serie2->addPoint(new Point($dados21[1], 0));}}

    $serie3 = new XYDataSet(); mysql_data_seek($consulta21, 0);
    while ($dados21 = mysql_fetch_array($consulta21)) {mysql_data_seek($consulta22, 0); $ok=0; while ($dados22 = mysql_fetch_array($consulta22)) {if ($ok==0) {if ($dados21[0] == $dados22[0]) {if (utf8_encode($dados22[2]) == "Implantação") {$serie3->addPoint(new Point($dados21[1], $dados22[3])); $ok = 1;}}}} if ($ok == 0) {$serie3->addPoint(new Point($dados21[1], 0));}}

    $serie4 = new XYDataSet(); mysql_data_seek($consulta21, 0);
    while ($dados21 = mysql_fetch_array($consulta21)) {mysql_data_seek($consulta22, 0); $ok=0; while ($dados22 = mysql_fetch_array($consulta22)) {if ($ok==0) {if ($dados21[0] == $dados22[0]) {if (utf8_encode($dados22[2]) == "Treinamento") {$serie4->addPoint(new Point($dados21[1], $dados22[3])); $ok = 1;}}}} if ($ok == 0) {$serie4->addPoint(new Point($dados21[1], 0));}}

    $serie5 = new XYDataSet(); mysql_data_seek($consulta21, 0);
    while ($dados21 = mysql_fetch_array($consulta21)) {mysql_data_seek($consulta22, 0); $ok=0; while ($dados22 = mysql_fetch_array($consulta22)) {if ($ok==0) {if ($dados21[0] == $dados22[0]) {if (utf8_encode($dados22[2]) == "Backup") {$serie5->addPoint(new Point($dados21[1], $dados22[3])); $ok = 1;}}}} if ($ok == 0) {$serie5->addPoint(new Point($dados21[1], 0));}}

    $serie6 = new XYDataSet(); mysql_data_seek($consulta21, 0);
    while ($dados21 = mysql_fetch_array($consulta21)) {mysql_data_seek($consulta22, 0); $ok=0; while ($dados22 = mysql_fetch_array($consulta22)) {if ($ok==0) {if ($dados21[0] == $dados22[0]) {if (utf8_encode($dados22[2]) == "Erro") {$serie6->addPoint(new Point($dados21[1], $dados22[3])); $ok = 1;}}}} if ($ok == 0) {$serie6->addPoint(new Point($dados21[1], 0));}}

    $serie7 = new XYDataSet(); mysql_data_seek($consulta21, 0);
    while ($dados21 = mysql_fetch_array($consulta21)) {mysql_data_seek($consulta22, 0); $ok=0; while ($dados22 = mysql_fetch_array($consulta22)) {if ($ok==0) {if ($dados21[0] == $dados22[0]) {if (utf8_encode($dados22[2]) == "Reclamação") {$serie7->addPoint(new Point($dados21[1], $dados22[3])); $ok = 1;}}}} if ($ok == 0) {$serie7->addPoint(new Point($dados21[1], 0));}}

    $serie8 = new XYDataSet(); mysql_data_seek($consulta21, 0);
    while ($dados21 = mysql_fetch_array($consulta21)) {mysql_data_seek($consulta22, 0); $ok=0; while ($dados22 = mysql_fetch_array($consulta22)) {if ($ok==0) {if ($dados21[0] == $dados22[0]) {if (utf8_encode($dados22[2]) == "Outros") {$serie8->addPoint(new Point($dados21[1], $dados22[3])); $ok = 1;}}}} if ($ok == 0) {$serie8->addPoint(new Point($dados21[1], 0));}}

    $dataSet = new XYSeriesDataSet();
    $dataSet->addSerie("Atualização",   $serie1);
    $dataSet->addSerie("Dúvida",        $serie2);
    $dataSet->addSerie("Implantação",   $serie3);
    $dataSet->addSerie("Treinamento",   $serie4);
    $dataSet->addSerie("Backup",        $serie5);
    $dataSet->addSerie("Erro",          $serie6);
    $dataSet->addSerie("Reclamação",    $serie7);
    $dataSet->addSerie("Outros",        $serie8);

    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphCaptionRatio(0.66);
    $chart->getPlot()->setGraphPadding(new Padding(10, 20, 60, 180));
    $chart->setTitle("Tipo de Atendimentos por Analista em $mes_nome de $ano");
    $chart->render("graficos/set_ate_uar2-$mes-$ano.png");
?>
    <meta HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>?est=<?php echo $est; ?>&cha=<?php echo $cha; ?>&mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>">
<?php } ?><hr width="900"><?php require('rodape.php'); mysql_free_result($consulta11); mysql_free_result($consulta12); mysql_free_result($consulta13); mysql_free_result($consulta14); mysql_free_result($consulta15); mysql_free_result($consulta16); mysql_free_result($consulta21); mysql_free_result($consulta22); mysql_close($con);?>