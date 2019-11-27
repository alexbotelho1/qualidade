<?php require('cabecalho.php'); ?>
<center>
<br>
<form action="index.php"><input type="submit" value="Voltar"></form>
<h2><b>Lista de Contatos</b></h2>
<?php
require('conexao.php');

    $sql1 = "SELECT emp_razao FROM empresa WHERE emp_cod=1 and stt_cod = 1 ORDER BY emp_cod ASC";
    $consulta1 = mysql_query($sql1, $con) or die (mysql_error());
    while ($dados1 = mysql_fetch_array($consulta1)) {?>


        <table style="border-collapse: collapse" cellspacing='0' cellpadding='0' border='1' width='1000'>
            <tr>
                <td height="30" align="center" colspan="6" bgcolor="#074a65"><b><font color="ffffff"><?php echo $dados1['emp_razao']; ?></font></b></td>
            </tr>
            <tr bgcolor="#006fb7">
                <td align="left" width="220"><b><font color="ffffff">Nome</font></b></td>
                <td align="center" width="80"><b><font color="ffffff">Papel</font></b></td>
                <td align="center" width="130"><b><font color="ffffff">Telefone</font></b></td>
                <td align="center" width="40"><b><font color="ffffff">Ramal</font></b></td>
                <td align="center" width="190"><b><font color="ffffff">e-Mail</font></b></td>
                <td align="center" width="190"><b><font color="ffffff">Skype</font></b></td>
            </tr>

            <?php
            $sql2 = "SELECT strs_cod,strs_extenso FROM setores ORDER BY strs_cod ASC";
            $consulta2 = mysql_query($sql2, $con) or die (mysql_error());
            while ($dados2 = mysql_fetch_array($consulta2)) {?>
                <tr>
                    <td align="center" colspan="6" bgcolor="fbb141"><b><?php echo utf8_encode($dados2['strs_extenso']); ?></b></td>
                </tr>

                <?php
                $sql3 = "SELECT usr_nome,usr_func_papel,usr_func_tel,usr_func_ramal,usr_func_email,usr_func_skype FROM usuario WHERE emp_cod=1 and stt_cod = 1 and strs_cod>0 and strs_cod=$dados2[strs_cod] ORDER BY usr_nome ASC";
                $consulta3 = mysql_query($sql3, $con) or die (mysql_error());
                while ($dados3 = mysql_fetch_array($consulta3)) {?>
                    <tr>
                        <td align="left"><?php echo utf8_encode($dados3['usr_nome']); ?></td>
                        <td align="center"><?php echo utf8_encode($dados3['usr_func_papel']); ?></td>
                        <td align="center"><?php echo utf8_encode($dados3['usr_func_tel']); ?></td>
                        <td align="center"><?php echo utf8_encode($dados3['usr_func_ramal']); ?></td>
                        <td align="center"><?php echo utf8_encode($dados3['usr_func_email']); ?></td>
                        <td align="center"><?php echo utf8_encode($dados3['usr_func_skype']); ?></td>
                    </tr>

                    <?php
                }?>


                <?php
            }?>
        </table><br>
<?php } ?>











    <table style="border-collapse: collapse" cellspacing='0' cellpadding='0' border='1' width='850'>
        <tr>
            <td height="30" align="center" colspan="6" bgcolor="#074a65"><b><font color="ffffff">R E P R E S E N T A N T E S</font></b></td>
        </tr>
        <tr bgcolor="#006fb7">
            <td align="center" width="200"><b><font color="ffffff">Representante</font></b></td>
            <td align="left" width="200"><b><font color="ffffff">Unidade</font></b></td>
            <td align="left" width="130"><b><font color="ffffff">Cidade / UF</font></b></td>
            <td align="center" width="130"><b><font color="ffffff">Telefone</font></b></td>
            <td align="center" width="190"><b><font color="ffffff">e-Mail</font></b></td>
        </tr>

            <?php
            $sql5 = "...";
            $consulta5 = mysql_query($sql5, $con) or die (mysql_error());
            while ($dados5 = mysql_fetch_array($consulta5)) { ?>
                <tr>
                    <td align="left"><?php echo $dados5['']; ?></td>
                    <td align="left"><?php echo $dados5['']; ?></td>
                    <td align="center"><?php echo $dados5['']; ?></td>
                    <td align="center"><?php echo $dados5['']; ?></td>
                    <td align="center"><?php echo $dados5['']; ?></td>
                </tr>
            <?php
            } ?>
    </table>













        <br>
        <form action="index.php"><input type="submit" value="Voltar"></form>
</center>
<?php
mysql_free_result($consulta1);
mysql_free_result($consulta2);
mysql_free_result($consulta3);
mysql_close($con);
?>