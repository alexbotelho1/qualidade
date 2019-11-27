<center>
<?php
require('conexao.php');
require('variavel.php');
$ano_cor = $ano_atual; $mes = $mes_atual;
require('solicitacoes.php');
include "../libchart/classes/libchart.php";

// SQL 01
    $sql = "SELECT departamento_situacao.dstt_cod, departamento_situacao.dstt_nome, count(1) as qtd FROM solicitacao inner join departamento_situacao on (departamento_situacao.dstt_cod = solicitacao.dstt_cod)
    WHERE solicitacao.sft_cod != 30 and solicitacao.stp_cod in ($solicitacoes) and solicitacao.stt_cod = 1 GROUP BY solicitacao.dstt_cod"; $consulta = mysql_query($sql, $con) OR DIE (mysql_error());

    $devrep=0; $encrep=0; $libimp=0;
    $devuar=0; $encuar=0; $anauar=0; $aguuar=0; $tesqua=0;
    $devdes=0; $aguana=0; $aguapr=0; $aguage=0; $libpro=0; $emprog=0; $agudes=0; $retana=0;
    $enccer=0; $anacer=0; $tesok=0; $teserr=0;

    while ($dados = mysql_fetch_array($consulta)) {
        // PARCEIRO COMERICAL
        if ($dados[0]=='17'){$devrep=$devrep + $dados[2];}
        if ($dados[0]=='60'){$encrep=$encrep + $dados[2];}
        if ($dados[0]=='32'){$libimp=$libimp + $dados[2];}
        // UAR
        if ($dados[0]=='21'){$devuar=$devuar + $dados[2];}
        if ($dados[0]=='15'){$encuar=$encuar + $dados[2];}
        if ($dados[0]=='16'){$anauar=$anauar + $dados[2];}
        if ($dados[0]=='3'){$aguuar=$aguuar + $dados[2];}
        if ($dados[0]=='9'){$tesqua=$tesqua + $dados[2];}
        // DESENVOLVIMENTO
        if ($dados[0]=='34'){$devdes=$devdes + $dados[2];}
        if ($dados[0]=='18'){$aguana=$aguana + $dados[2];}
        if ($dados[0]=='51'){$aguapr=$aguapr + $dados[2];}
        if ($dados[0]=='20'){$aguage=$aguage + $dados[2];}
        if ($dados[0]=='52'){$libpro=$libpro + $dados[2];}
        if ($dados[0]=='7'){$emprog=$emprog + $dados[2];}
        if ($dados[0]=='11'){$agudes=$agudes + $dados[2];}
        if ($dados[0]=='5'){$retana=$retana + $dados[2];}
        // CERTIFICAÇÃO
        if ($dados[0]=='8'){$enccer=$enccer + $dados[2];}
        if ($dados[0]=='39'){$anacer=$anacer + $dados[2];}
        if ($dados[0]=='6'){$tesok=$tesok + $dados[2];}
        if ($dados[0]=='41'){$teserr=$teserr + $dados[2];}
    }

    $total_par = $devrep + $encrep + $libimp;
    $total_uar = $devuar + $encuar + $anauar + $aguuar + $tesqua;
    $total_des = $devdes + $aguana + $aguapr + $aguage + $libpro + $emprog + $agudes + $retana;
    $total_cer = $enccer + $anacer + $tesok + $teserr;

    // PARCEIRO COMERCIAL
    $chart = new VerticalBarChartDB1(440, 300);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Dev. p/ Represetante", $devrep));
    $dataSet->addPoint(new Point("Enc. p/ Representante", $encrep));
    $dataSet->addPoint(new Point("Lib. p/ Implantação", $libimp));
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(10, 20, 120, 30));
    $chart->setTitle("Parceiro Comercial: $total_par");
    $chart->render("graficos/dashboard1.png");

    // UAR
    $chart = new VerticalBarChartDB2(440, 300);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Dev. p/ UAR", $devuar));
    $dataSet->addPoint(new Point("Enc. p/ UAR", $encuar));
    $dataSet->addPoint(new Point("Anál. da UAR", $anauar));
    $dataSet->addPoint(new Point("Aguardando UAR", $aguuar));
    $dataSet->addPoint(new Point("Teste Qualidade UAR", $tesqua));
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(10, 20, 120, 30));
    $chart->setTitle("UAR: $total_uar");
    $chart->render("graficos/dashboard2.png");

    // DESENVOLVIMENTO
    $chart = new VerticalBarChartDB3(440, 300);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Dev. p/ Desenvolvimento", $devdes));
    $dataSet->addPoint(new Point("Aguardando Anál. do Des.", $aguana));
    $dataSet->addPoint(new Point("Aguardando Aprov. Melhoria", $aguapr));
    $dataSet->addPoint(new Point("Aguardando Agendamento", $aguage));
    $dataSet->addPoint(new Point("Lib. p/ Programação", $libpro));
    $dataSet->addPoint(new Point("Em Programação", $emprog));
    $dataSet->addPoint(new Point("Aguardando Des.", $agudes));
    $dataSet->addPoint(new Point("Ret. p/ Anál. Des.", $retana));
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(10, 20, 120, 30));
    $chart->setTitle("Desenvolvimento: $total_des");
    $chart->render("graficos/dashboard3.png");

    // CERTIFICAÇÃO
    $chart = new VerticalBarChartDB4(440, 300);
    $dataSet = new XYDataSet();
    $dataSet->addPoint(new Point("Enc. p/ Certificação", $enccer));
    $dataSet->addPoint(new Point("Anál. da Certificação", $anacer));
    $dataSet->addPoint(new Point("Teste OK", $tesok));
    $dataSet->addPoint(new Point("Teste ERRO", $teserr));
    $chart->setDataSet($dataSet);
    $chart->getPlot()->setGraphPadding(new Padding(10, 20, 120, 30));
    $chart->setTitle("Certificação: $total_cer");
    $chart->render("graficos/dashboard4.png");
?>
    <hr width="900">
    <img alt="Parceiro Comercial" src="graficos/dashboard1.png" style="border: 1px solid gray;"/>
    <img alt="UAR" src="graficos/dashboard2.png" style="border: 1px solid gray;"/><br>
    <img alt="Desenvolvimento" src="graficos/dashboard3.png" style="border: 1px solid gray;"/>
    <img alt="Certificação" src="graficos/dashboard4.png" style="border: 1px solid gray;"/>
    <hr width="900">
    <meta HTTP-EQUIV="refresh" CONTENT="30;URL=<?php echo $_SERVER['SCRIPT_NAME'] ?>">