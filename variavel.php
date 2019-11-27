<?php
$est=$_GET['est'];
$cha=$_GET['cha'];
$mes=$_GET['mes'];
$ano=$_GET['ano'];

$atendimento = 1800;

$erro_imediata = 28800;
$erro_urgente = 100800;
$erro_alta = 1296000;
$erro_geral = 5184000;
$melhoria = 5184000;
$duvida = 100800;
$conv_dados = 100800;
$fiscal = 100800;
$base_corromp = 28800;
$deficiencia = 5184000;

$ano_cor = $ano;
$ano_ant = $ano-1;

$manha_inicio = "08:00:00";
$manha_fim = "12:00:00";
$tarde_inicio = "14:00:00";
$tarde_fim = "18:00:00";

$cafe = 28800; // 8H
$almoco = 7200; // 2H
$janta = 21600; // 6H
$expediente_manha = 14400; // 4H
$expediente_tarde = 14400; // 4H

switch ($est) {
case 'ans': $est_nome = "ANS"; break;
case 'ano': $est_nome = "ANO"; break;
case 'vol': $est_nome = "Volume"; break;
case 'par': $est_nome = "Parceiro"; break;
case 'uar': $est_nome = "UAR"; break;
case 'des': $est_nome = "Desenvolvimento"; break;
case 'cer': $est_nome = "Certificação"; break;
}

switch ($cha){
case 'ate': $cha_nome = "Atendimentos"; break;
case 'sol': $cha_nome = "Solicitações"; break;
case 'cha': $cha_nome = "Chamados"; break;
}

switch ($mes){
case '01': $mes_nome = "Janeiro"; break;
case '02': $mes_nome = "Fevereiro"; break;
case '03': $mes_nome = "Março"; break;
case '04': $mes_nome = "Abril"; break;
case '05': $mes_nome = "Maio"; break;
case '06': $mes_nome = "Junho"; break;
case '07': $mes_nome = "Julho"; break;
case '08': $mes_nome = "Agosto"; break;
case '09': $mes_nome = "Setembro"; break;
case '10': $mes_nome = "Outubro"; break;
case '11': $mes_nome = "Novembro"; break;
case '12': $mes_nome = "Dezembro"; break;
}
?>