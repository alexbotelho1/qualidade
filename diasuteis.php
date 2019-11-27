<?php
echo "<br>Inicio Expediente Manhã = ".$manha_inicio = "08:00:00";
echo "<br>Fim Expediente Manhã = ".$manha_fim = "12:00:00";
echo "<br>Inicio Expediente Tarde = ".$tarde_inicio = "14:00:00";
echo "<br>Fim Expediente Tarde = ".$tarde_fim = "18:00:00";
echo "<br>";
echo "<br>Hora Inicial = ".$data_inicio =   "2016-01-26 14:38:53";
echo "<br>Hora Final = ".$data_fim   =      "2016-01-27 11:51:40";


$data_inicio_partes = explode(' ', $data_inicio);
$data_inicial = strtotime($data_inicio_partes[0]);
$time_inicial = strtotime($data_inicio_partes[1]);

$data_fim_partes = explode(' ', $data_fim);
$data_final = strtotime($data_fim_partes[0]);
$time_final = strtotime($data_fim_partes[1]);

$manha_inicio = strtotime($manha_inicio); $manha_fim = strtotime($manha_fim);
$tarde_inicio = strtotime($tarde_inicio); $tarde_fim = strtotime($tarde_fim);

$data_inicio = strtotime($data_inicio); $data_fim = strtotime($data_fim);
$tempo_total = $data_fim - $data_inicio;



$nr_work_days = getWorkingDays($data_inicio_partes[0], $data_fim_partes[0]);
function getWorkingDays($startDate, $endDate)
{
    $begin = strtotime($startDate);
    $end   = strtotime($endDate);
    if ($begin > $end) {
        echo "startdate is in the future! <br />";

        return 0;
    } else {
        $no_days  = 0;
        $weekends = 0;
        while ($begin <= $end) {
            $no_days++; // no of days in the given interval
            $what_day = date("N", $begin);
            if ($what_day > 5) { // 6 and 7 are weekend days
                $weekends++;
            };
            $begin += 86400; // +1 day
        };
        $working_days = $no_days - $weekends;

        return $working_days;
    }
}

$nr_work_days2 = getWorkingDays2($data_inicio_partes[0], $data_fim_partes[0]);
function getWorkingDays2($startDate, $endDate) {
    $begin = strtotime($startDate);
    $end   = strtotime($endDate);
    if ($begin > $end) {
        echo "startdate is in the future! <br />";
        return 0;
    }
    else {
        $holidays = array('01/01', '08/02', '09/02', '10/02', '21/04', '01/05', '07/09', '12/10', '02/11', '15/11', '24/12', '25/12');
        $weekends = 0;
        $no_days = 0;
        $holidayCount = 0;
        while ($begin <= $end) {
            $no_days++; // no of days in the given interval
            if (in_array(date("d/m", $begin), $holidays)) {
                $holidayCount++;
            }
            $what_day = date("N", $begin);
            if ($what_day > 5) { // 6 and 7 are weekend days
                $weekends++;
            };
            $begin += 86400; // +1 day
        };
        $working_days = $no_days - $weekends - $holidayCount;

        return $working_days;
    }
}

$mes = 01;
$ano = 2016;

$dias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano); $dias_uteis = getWorkingDays2("$ano-$mes-01 00:00:01" , "$ano-$mes-$dias 23:59:60");

echo "<br><br>";
echo $dias_uteis;
echo "<br><br>";
$numero = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31
echo "Houve {$numero} dias em Agosto de 2003";





$diferenca = $data_final - $data_inicial; $descansoDD = (int)floor( $diferenca / (60 * 60 * 24));

$cafe = 28800; // 8H
$almoco = 7200; // 2H
$janta = 21600; // 6H
$expediente = 14400; // 4H

if ($nr_work_days2 < 3){$descansoD = 0;} else {$descansoD = $nr_work_days2 - 2;}

$finalsemana = ($data_final - $data_inicial) - (($nr_work_days - 1) * (24 * 60 * 60));




$feriado = ($nr_work_days - $nr_work_days2) * (24 * 60 * 60);

if ($descansoDD > 0) {

    $descansoS = $descansoD * ($cafe + $almoco + $janta);

    if ($time_inicial < $manha_inicio) {
        $desconto_inicio = ($manha_inicio - $time_inicial) + $almoco + $janta;
    } else {
        if ($time_inicial < ($manha_fim + 1)) {
            $desconto_inicio = $almoco + $janta;
        } else {
            if ($time_inicial < $tarde_inicio) {
                $desconto_inicio = ($tarde_inicio - $time_inicial) + $janta;
            } else {
                if ($time_inicial < ($tarde_fim + 1)) {
                    $desconto_inicio = $janta;
                } else {
                    $desconto_inicio = $janta - ($time_inicial - $tarde_fim);
                }
            }
        }
    }

    if ($time_final > $tarde_fim) {
        $desconto_fim = ($time_final - $tarde_fim) + $cafe + $almoco;
    } else {
        if ($time_final > ($tarde_inicio - 1)) {
            $desconto_fim = $cafe + $almoco;
        } else {
            if ($time_final > $manha_fim) {
                $desconto_fim = ($time_final - $manha_fim) + $cafe;
            } else {
                if ($time_final > ($manha_inicio - 1)) {
                    $desconto_fim = $cafe;
                } else {
                    $desconto_fim = $cafe - ($manha_inicio - $time_final);
                }
            }
        }
    }





    $sab_dom = Array(6, 0);// 0 = domingo, 6 = sábado
    if ( in_array(date('w', $data_inicial), $sab_dom) ){
        $data_inicial_fds = 1;
        $desconto_inicio = 0;
        $fds_inicial =  86400 - ($data_inicio - $data_inicial);
    }
    if ( in_array(date('w', $data_final), $sab_dom) ) {
        $data_final_fds = 1;
        $desconto_fim = 0;
        $fds_final = $data_fim - $data_final;
    }
    if ($data_inicial_fds == 1 or $data_final_fds == 1) {
        $finalsemana = $finalsemana - 86400;
    }
    if ($data_inicial_fds == 1 and $data_final_fds == 1){
        $tempo_real = 0;
    } else {
        $tempo_real = $tempo_total - ($desconto_inicio + $fds_inicial + $descansoS + $finalsemana + $feriado + $fds_final + $desconto_fim);
    }






} else {

    if ($time_inicial < $manha_inicio) {
        $desconto_inicio = ($manha_inicio - $time_inicial);
    } else {
        if ($time_inicial < ($manha_fim - 1)) {
            $desconto_inicio = 0;
        } else {
            if ($time_inicial < $tarde_inicio) {
                $desconto_inicio = ($tarde_inicio - $time_inicial);
            } else {
                if ($time_inicial < ($tarde_fim + 1)) {
                    $desconto_inicio = 0;
                } else {
                    $desconto_inicio = 0;
                }
            }
        }
    }

    if ($time_final > $tarde_fim) {
        $desconto_fim = ($time_final - $tarde_fim);
    } else {
        if ($time_final > ($tarde_inicio - 1)) {
            $desconto_fim = 0;
        } else {
            if ($time_final > $manha_fim) {
                $desconto_fim = ($time_final - $manha_fim);
            } else {
                if ($time_final > ($manha_inicio - 1)) {
                    $desconto_fim = 0;
                } else {
                    $desconto_fim = 0;
                }
            }
        }
    }

    $desconto_extra = 0;
    if ($time_inicial < ($manha_fim + 1) and $time_final > ($tarde_inicio - 1)) {$desconto_extra = $almoco;}

    if (($time_inicial < $manha_inicio and $time_final < $manha_inicio) or
        ($time_inicial > $manha_fim and $time_final < $tarde_inicio) or
        ($time_inicial > $tarde_fim and $time_final > $tarde_fim)) {
        $total = 0;
    } else {
        $tempo_real = $tempo_total - ($desconto_inicio + $desconto_fim + $desconto_extra);
    }
}

$horas = floor($tempo_real / 3600);
$minutos = floor(($tempo_real - ($horas * 3600)) / 60);
$segundos = floor($tempo_real % 60);

echo "<br><br>Tempo de Trabalho: $horas Horas, $minutos Minutos e $segundos Segundos";
echo "<br>Tempo Trabalhado por segundo: $total";











echo "<br><br>";
echo "Dias corridos, com feriados e com final de semana: ".($data_final - $data_inicial) / (24 * 60 * 60); echo "<br>";
echo "Dias corridos, com feriados e sem final de semana: ".($nr_work_days - 1); echo "<br>";
echo "Dias corridos, sem feriados e sem final de semana: ".($nr_work_days2 - 1); echo "<br>";
echo "Dias completos D: ".$descansoD; echo "<br>";
echo "Dias completos DD: ".$descansoDD; echo "<br>"; echo "<br>";
echo "Dias Úteis no Mês: ".$dias_uteis; echo "<br>"; echo "<br>";
echo "Tempo Total de Trabalho: ".$tempo_total; echo "<br>";
echo "Desconto no dia Inicio: ".$desconto_inicio; echo "<br>";
echo "Desconto no dia Inicio por ser FDS: ".$fds_inicial; echo "<br>";
echo "Desconto dos dias completos: ".$descansoS; echo "<br>";
echo "Desconto dos finais de semanas: ".$finalsemana; echo "<br>";
echo "Desconto dos feriados: ".$feriado; echo "<br>";
echo "Desconto no dia Fim: ".$desconto_fim; echo "<br>";
echo "Desconto no dia Inicio por ser FDS: ".$fds_final; echo "<br>";
echo "Tempo Real de Trabalho: ".$tempo_real; echo "<br>";

echo "<br>";


function verificarFeriado($data, $boolean = false) {

    // Quebra a string em partes (em ano, mes e dia)
    $data = explode('-', $data);

    // Conecta na API
    $curl = curl_init('http://holidayapi.com/v1/holidays?country=BR&year='. $data[0] .'&month='. $data[1]  .'&day='. $data[2] );

    // Permite retorno
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Obtem dados da API
    $dados = json_decode(curl_exec($curl), true);

    // Encerra curl
    curl_close($curl);

    // Retorna true/false se houver $boolean ou Nome_Do_Feriado/false se não houve $boolean
    return isset($dados['holidays']['0']) ? $boolean ? true : $dados['holidays']['0']['name'] : false;

}

var_export( verificarFeriado('2016-02-10') );
// Resposta: 'Tiradentes'
echo "<br>";
var_export( verificarFeriado('2016-04-21', 1) );
// Resposta: true

/*
var_export( verificarFeriado('2016-04-20') );
// Resposta: false

var_export( verificarFeriado('2016-04-20', true) );
// Resposta: false
*/

