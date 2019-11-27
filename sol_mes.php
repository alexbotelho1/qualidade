<?php require('cabecalho.php'); ?>
<?php require('config.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<center>
<?php

if($fecharsol==1) {

    require('conexao.php');

    $ano = $_POST['ano'];
    $mes = $_POST['mes'];
    $datafecha = $_POST['datafecha'];
    if ($_POST['limite'] == '') {
        $limite = 100;
    } else {
        $limite = $_POST['limite'];
    }

    if ($_POST['mudar'] == 'Fechar') {
    //CONSULTA
        $sql1 = "
        SELECT
            slt_cod,stt_cod,slt_data,slt_dataalt FROM solicitacao
        WHERE
            date_format(solicitacao.slt_dataalt,'%Y') = $ano and
            date_format(solicitacao.slt_dataalt,'%m') = $mes and
            solicitacao.stt_cod = 1 and
            solicitacao.sft_cod != 30 and
            solicitacao.stp_cod != 5 and
            solicitacao.dstt_cod = 32 and
            solicitacao.slt_representante = 1
        ORDER BY slt_cod ASC LIMIT $limite";
        $consulta1 = mysql_query($sql1, $con) or die ('Não consegui pesquisar');
        $dados1 = mysql_fetch_array($consulta1);

        if ($dados1 == "") {
            echo "Não há registro(s) à serem alterado(s)!!!<br>";
        } else {
            if ($ano != 9999 and $ano != '' and $mes != 99 and $mes != '' and $datafecha != '9999-99-99 99:99:99' and $datafecha != '') {
                //ADICIONAR
                $sql2 = "
                insert into parecer (parecer.prc_data,parecer.prc_descricao,parecer.stt_cod,parecer.usr_cod,parecer.slt_cod,parecer.emp_cod,parecer.dprt_cod,parecer.dstt_cod)
                values ('$datafecha','Fechamento autom&aacute;tico','0','276',
                (
                    SELECT
                        solicitacao.slt_cod
                    FROM
                        solicitacao
                    WHERE
                        date_format(solicitacao.slt_dataalt,'%Y') = $ano and
                        date_format(solicitacao.slt_dataalt,'%m') = $mes and
                        solicitacao.stt_cod = 1 and
                        solicitacao.sft_cod != 30 and
                        solicitacao.stp_cod != 5 and
                        solicitacao.dstt_cod = 32 and
                        solicitacao.slt_representante = 1
                        limit 1
                )
                ,'1','7','49')";
                        mysql_query($sql2, $con) or die ($insercao = 1);
                    //ALTERAR
                    $sql3 = "UPDATE
                        solicitacao
                    SET
                        solicitacao.stt_cod=6,solicitacao.dstt_cod=49,solicitacao.slt_dataalt='$datafecha'
                    WHERE
                        date_format(solicitacao.slt_dataalt,'%Y') = $ano and
                        date_format(solicitacao.slt_dataalt,'%m') = $mes and
                        solicitacao.stt_cod = 1 and
                        solicitacao.sft_cod != 30 and
                        solicitacao.stp_cod != 5 and
                        solicitacao.dstt_cod = 32 and
                        solicitacao.slt_representante = 1
                        limit 1";
                    mysql_query($sql3, $con) or die ($alteracao = 1);
            } else {
                echo "Você esqueceu de preencher algum campo na pesquisa!!!<br>";
            }
        }
    }
    ?>
    <br>
    <form action='sol_mes.php' method='POST'>
        <table>
            <tr>
                <td>
                    <select name='ano'>
                        <option value='9999'>Ano</option>
                        <option value='2009' <?php if($ano == '2009'){echo "SELECTED";} ?>>2009</option>
                        <option value='2010' <?php if($ano == '2010'){echo "SELECTED";} ?>>2010</option>
                        <option value='2011' <?php if($ano == '2011'){echo "SELECTED";} ?>>2011</option>
                        <option value='2012' <?php if($ano == '2012'){echo "SELECTED";} ?>>2012</option>
                        <option value='2013' <?php if($ano == '2013'){echo "SELECTED";} ?>>2013</option>
                        <option value='2014' <?php if($ano == '2014'){echo "SELECTED";} ?>>2014</option>
                        <option value='2015' <?php if($ano == '2015'){echo "SELECTED";} ?>>2015</option>
                        <option value='2016' <?php if($ano == '2016'){echo "SELECTED";} ?>>2016</option>
                        <option value='2017' <?php if($ano == '2017'){echo "SELECTED";} ?>>2017</option>
                    </select>
                </td>
                <td>
                    <select name='mes'>
                        <option value='99'>Mês</option>
                        <option value='01' <?php if($mes == '01'){echo "SELECTED";} ?>>01</option>
                        <option value='02' <?php if($mes == '02'){echo "SELECTED";} ?>>02</option>
                        <option value='03' <?php if($mes == '03'){echo "SELECTED";} ?>>03</option>
                        <option value='04' <?php if($mes == '04'){echo "SELECTED";} ?>>04</option>
                        <option value='05' <?php if($mes == '05'){echo "SELECTED";} ?>>05</option>
                        <option value='06' <?php if($mes == '06'){echo "SELECTED";} ?>>06</option>
                        <option value='07' <?php if($mes == '07'){echo "SELECTED";} ?>>07</option>
                        <option value='08' <?php if($mes == '08'){echo "SELECTED";} ?>>08</option>
                        <option value='09' <?php if($mes == '09'){echo "SELECTED";} ?>>09</option>
                        <option value='10' <?php if($mes == '10'){echo "SELECTED";} ?>>10</option>
                        <option value='11' <?php if($mes == '11'){echo "SELECTED";} ?>>11</option>
                        <option value='12' <?php if($mes == '12'){echo "SELECTED";} ?>>12</option>
                    </select>
                </td>
                <td><input type='text' style="text-align:center" maxlength='19' size='20'
                           name='datafecha' <?php if ($datafecha != '') {
                        echo "value='$datafecha'";
                    } else {
                        echo "value='9999-99-99 18:00:00'";
                    } ?>></td>
                <td><input type='text' style="text-align:center" maxlength='6' size='5'
                           name='limite' <?php if ($limite != '') {
                        echo "value='$limite'";
                    } else {
                        echo "value='100'";
                    } ?>></td>
                <td><input type='submit' value='Pesquisar'></td>
            </tr>
        </table>
    </form>
    <table>
        <tr>
            <td>
                <form action='sol_mes.php' method='POST'>
                    <input type='hidden' name='ano' value='<?php print_r($ano)?>'>
                    <input type='hidden' name='mes' value='<?php print_r($mes)?>'>
                    <input type='hidden' name='datafecha' value='<?php print_r($datafecha)?>'>
                    <input type='submit' name='mudar' value='Fechar'>
                </form>
            </td>
            <td>
                <form action='sol_mes.php'><input type='submit' value='Limpar'></form>
            </td>
        </tr>
    </table>
    <?php
    if ($_POST['mudar'] == 'Fechar') {
        if ($insercao == 1) {
            echo "<font color='#ffb0b0'>Houve um problema na INSERÇÃO!!!</font><br>";
        } else {
            echo "<font color='#b6ffb0'>INSERÇÃO realizada com sucesso!!!</font><br>";
        }
        if ($alteracao == 1) {
            echo "<font color='#ffb0b0'>Houve um problema na ALTERAÇÃO!!!</font><br><br>";
        } else {
            echo "<font color='#b6ffb0'>ALTERAÇÃO realizada com sucesso!!!</font><br><br>";
        }
    }
    ?>
    <table style="border-collapse: collapse" cellspacing='0' cellpadding='0' border='0' width='900'>
        <tr>
            <td valign='top'>
                <?php
                //CONSULTA ABERTAS
                if ($mes == 99 and $ano == 9999) {
                    $sql4 = "
                SELECT
                    slt_cod,stt_cod,dstt_cod,slt_data,slt_dataalt FROM solicitacao
                WHERE
                    solicitacao.stt_cod = 1 and
                    solicitacao.sft_cod != 30 and
                    solicitacao.stp_cod != 5 and
                    (solicitacao.dstt_cod = 32 or solicitacao.dstt_cod = 43 or solicitacao.dstt_cod = 44) and
                    solicitacao.slt_representante = 1
                ORDER BY slt_cod ASC LIMIT $limite";}

                if ($mes != 99 and $ano == 9999) {
                    $sql4 = "
                SELECT
                    slt_cod,stt_cod,dstt_cod,slt_data,slt_dataalt FROM solicitacao
                WHERE
                    date_format(solicitacao.slt_dataalt,'%m') = '$mes' and
                    solicitacao.stt_cod = 1 and
                    solicitacao.sft_cod != 30 and
                    solicitacao.stp_cod != 5 and
                    (solicitacao.dstt_cod = 32 or solicitacao.dstt_cod = 43 or solicitacao.dstt_cod = 44) and
                    solicitacao.slt_representante = 1
                ORDER BY slt_cod ASC LIMIT $limite";}

                if ($mes == 99 and $ano != 9999) {
                    $sql4 = "
                SELECT
                    slt_cod,stt_cod,dstt_cod,slt_data,slt_dataalt FROM solicitacao
                WHERE
                    date_format(solicitacao.slt_dataalt,'%Y') = '$ano' and
                    solicitacao.stt_cod = 1 and
                    solicitacao.sft_cod != 30 and
                    solicitacao.stp_cod != 5 and
                    (solicitacao.dstt_cod = 32 or solicitacao.dstt_cod = 43 or solicitacao.dstt_cod = 44) and
                    solicitacao.slt_representante = 1
                ORDER BY slt_cod ASC LIMIT $limite";}

                if ($mes != 99 and $ano != 9999) {
                    $sql4 = "
                SELECT
                    slt_cod,stt_cod,dstt_cod,slt_data,slt_dataalt FROM solicitacao
                WHERE
                    date_format(solicitacao.slt_dataalt,'%Y') = '$ano' and
                    date_format(solicitacao.slt_dataalt,'%m') = '$mes' and
                    solicitacao.stt_cod = 1 and
                    solicitacao.sft_cod != 30 and
                    solicitacao.stp_cod != 5 and
                    (solicitacao.dstt_cod = 32 or solicitacao.dstt_cod = 43 or solicitacao.dstt_cod = 44) and
                    solicitacao.slt_representante = 1
                ORDER BY slt_cod ASC LIMIT $limite";}

                $consulta4 = mysql_query($sql4, $con) or die (mysql_error());
                ?>
                <table style="border-collapse: collapse" cellspacing='0' cellpadding='0' border='1' width='450'>
                    <tr>
                        <td bgcolor='Green' colspan='6' align='center'><b>Solicitações Abertas</b></td>
                    </tr>
                    <tr>
                        <td bgcolor='Green' colspan='6' align='center'><font color='white'>Obs.: Todas as Solicitações
                                <u>ABERTAS</u> pelo 'Analista', no 'Ano' e 'Mês' espeficicado na data da 'ùltima
                                Alteração' e no Status<BR>'LIBERADO P/ IMPLANTAÇÃO'.</font></td>
                    </tr>
                    <tr bgcolor='#ffffff'>
                        <td align='center'><b>N</b></td>
                        <td align='center'><b>Codigo</b></td>
                        <td align='center'><b>Sit.</b></td>
                        <td align='center'><b>Depto.</b></td>
                        <td align='center'><b>Data Abertura</b></td>
                        <td align='center'><b>Última Alteração</b></td>
                    </tr>
                    <?php
                    $cont = 1;
                    while ($dados4 = mysql_fetch_array($consulta4)) { ?>
                        <tr bgcolor='#ffffff'>
                            <td align='center'><?php echo $cont++; ?></td>
                            <td align='center'><?php echo $dados4['slt_cod']; ?></td>
                            <td align='center'><?php echo $dados4['stt_cod']; ?></td>
                            <td align='center'><?php echo $dados4['dstt_cod']; ?></td>
                            <td align='center'><?php echo $dados4['slt_data']; ?></td>
                            <td align='center'><?php echo $dados4['slt_dataalt']; ?></td>
                        </tr>
                    <?php }
                    if ($cont == 1) {
                        echo "<tr bgcolor='#ffffff'><td colspan='6' align='center'>Não há solicitação aberta!!!</td></tr>";
                    }
                    ?>
                </table>
            </td>
            <td valign='top'>
                <?php
                //CONSULTA FECHADAS
                if ($mes == 99 and $ano == 9999) {
                    $sql5 = "
                SELECT
                    slt_cod,stt_cod,dstt_cod,slt_data,slt_dataalt FROM solicitacao
                WHERE
                    solicitacao.stt_cod = 6 and
                    solicitacao.sft_cod != 30 and
                    solicitacao.stp_cod != 5 and
                    solicitacao.dstt_cod = 49 and
                    solicitacao.slt_representante = 1
                ORDER BY slt_cod ASC LIMIT $limite";}

                if ($mes != 99 and $ano == 9999) {
                    $sql5 = "
                SELECT
                    slt_cod,stt_cod,dstt_cod,slt_data,slt_dataalt FROM solicitacao
                WHERE
				    date_format(solicitacao.slt_dataalt,'%m') = '$mes' and
                    solicitacao.stt_cod = 6 and
                    solicitacao.sft_cod != 30 and
                    solicitacao.stp_cod != 5 and
                    solicitacao.dstt_cod = 49 and
                    solicitacao.slt_representante = 1
                ORDER BY slt_cod ASC LIMIT $limite";}

                if ($mes == 99 and $ano != 9999) {
                    $sql5 = "
                SELECT
                    slt_cod,stt_cod,dstt_cod,slt_data,slt_dataalt FROM solicitacao
                WHERE
				    date_format(solicitacao.slt_dataalt,'%m') = '$mes' and
                    solicitacao.stt_cod = 6 and
                    solicitacao.sft_cod != 30 and
                    solicitacao.stp_cod != 5 and
                    solicitacao.dstt_cod = 49 and
                    solicitacao.slt_representante = 1
                ORDER BY slt_cod ASC LIMIT $limite";}

                if ($mes != 99 and $ano != 9999) {
                    $sql5 = "
                SELECT
                    slt_cod,stt_cod,dstt_cod,slt_data,slt_dataalt FROM solicitacao
                WHERE
                    date_format(solicitacao.slt_dataalt,'%Y') = '$ano' and
                    date_format(solicitacao.slt_dataalt,'%m') = '$mes' and
                    solicitacao.stt_cod = 6 and
                    solicitacao.sft_cod != 30 and
                    solicitacao.stp_cod != 5 and
                    solicitacao.dstt_cod = 49 and
                    solicitacao.slt_representante = 1
                ORDER BY slt_cod ASC LIMIT $limite";}


                $consulta5 = mysql_query($sql5, $con) or die (mysql_error());
                ?>
                <table style="border-collapse: collapse" cellspacing='0' cellpadding='0' border='1' width='450'>
                    <tr>
                        <td bgcolor='red' colspan='6' align='center'><b>Solicitações Fechadas</b></td>
                    </tr>
                    <tr>
                        <td bgcolor='red' colspan='6' align='center'><font color='white'>Obs.: Todas as Solicitações <u>FECHADAS</u>
                                pelo 'Analista', no 'Ano' e 'Mês' espeficicado na data da 'ùltima Alteração' e em<br>QUALQUER
                                Status.</font></td>
                    </tr>
                    <tr bgcolor='#ffffff'>
                        <td align='center'><b>N</b></td>
                        <td align='center'><b>Codigo</b></td>
                        <td align='center'><b>Sit.</b></td>
                        <td align='center'><b>Depto.</b></td>
                        <td align='center'><b>Data Abertura</b></td>
                        <td align='center'><b>Última Alteração</b></td>
                    </tr>
                    <?php
                    $cont = 1;
                    while ($dados5 = mysql_fetch_array($consulta5)) { ?>
                        <tr bgcolor='#ffffff'>
                            <td align='center'><?php echo $cont++; ?></td>
                            <td align='center'><?php echo $dados5['slt_cod']; ?></td>
                            <td align='center'><?php echo $dados5['stt_cod']; ?></td>
                            <td align='center'><?php echo $dados5['dstt_cod']; ?></td>
                            <td align='center'><?php echo $dados5['slt_data']; ?></td>
                            <td align='center'><?php echo $dados5['slt_dataalt']; ?></td>
                        </tr>
                    <?php }
                    if ($cont == 1) {
                        echo "<tr bgcolor='#ffffff'><td colspan='6' align='center'>Não há solicitação fechada!!!</td></tr>";
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
    </center>
    <?php
    mysql_free_result($consulta4);
    mysql_free_result($consulta5);
    mysql_close($con);
}else{
    ?>
    <br>
    <table>
        <tr bgcolor='white'>
            <td align='center' colspan='5'><b>Procurar Solicitações do Mês</b></td>
        </tr>
    </table>
    <br>
    <form action="sol_mes.php" method="post">
        Login:&nbsp;<input type="text" size="10">
        Senha:&nbsp;<input type="text" size="10">
        <input type="submit" value="Entrar"><input type="reset" value="Limpar">
    </form>
<?php
}
?>