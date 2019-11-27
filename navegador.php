<?php $mes_atual = date('m'); $ano_atual = date('Y'); ?>
<style type="text/css">
    .menu_container {margin:0 auto 0px auto; position:relative; width:894px; height:23px; z-index:100;}
    .menu, .menu ul {padding:0; margin:0; list-style: none; position:absolute;}
    .menu ul {left:-9999px; width:150px; padding:0 20px 20px 20px; background:url(trans.gif); opacity:0; -o-transition: opacity 0.6s ease-in-out; -moz-transition: opacity 0.6s ease-in-out; -webkit-transition: opacity 0.6s ease-in-out;}
    .menu ul ul {padding:20px 20px 20px 0;}
    .menu a {display:block; width:130px; padding-left:10px; font:normal bold 12px/20px arial,sans-serif; color:#fff; text-decoration:none; border:1px solid #fff; margin:0 -1px -1px 0; background:#e97c03;}
    .menu li {float:left;}
    .menu li.fly > a {background:#e97c03 url(imagem/arrow.gif) no-repeat 130px center;}
    .menu li.fly2 > a {background:#e97c03 no-repeat 200px center; display:block; width:130px}
    .menu li:hover {position:relative; z-index:120;}
    .menu li:hover > a {background-color:#003d77; color:#fff; border-color:#fff;}
    .menu li:hover > ul {top:20px; left:-20px; z-index:-1; opacity:1;}
    .menu li:hover li:hover > ul {left:141px; top:-20px; z-index:100; opacity:1;}
    .menu li.right:hover li:hover > ul {left:-165px; top:-20px; z-index:130; padding:20px 0 20px 20px; opacity:1; width:200px;}
</style>
<center>
<table class="navegacao">
	<tr>
		<td align="left">
            <div class="menu_container">
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="fly"><a href="index.php">Estatísticas</a>
                        <ul>
                            <li class="fly"><a href="evo_ate_vol.php?est=evo&cha=ate&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Evoluções</a>
                                <ul>
                                    <li class="fly2"><a href="evo_ate_vol.php?est=evo&cha=ate&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Atendimentos</a></li>
                                    <li class="fly2"><a href="evo_sol_vol.php?est=evo&cha=sol&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Solicitações</a></li>
                                </ul>
                            </li>
                            <li class="fly"><a href="ger_ate_vol.php?est=vol&cha=ate&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Gerenciais</a>
                                <ul>
                                    <li class="fly2"><a href="ger_ate_vol.php?est=vol&cha=ate&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Atendimentos</a></li>
                                    <li class="fly2"><a href="ger_sol_vol.php?est=vol&cha=sol&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Solicitações</a></li>
                                    <li class="fly2"><a href="ger_cha_vol.php?est=vol&cha=cha&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Chamados</a></li>
                                </ul>
                            </li>
                            <li class="fly"><a href="abc_ate_par.php?est=par&cha=ate&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Curvas ABC</a>
                                <ul>
                                    <li class="fly2"><a href="abc_ate_par.php?est=par&cha=ate&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Atendimentos</a></li>
                                    <li class="fly2"><a href="abc_sol_par.php?est=par&cha=sol&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Solicitações</a></li>
                                </ul>
                            </li>
                            <li class="fly"><a href="set_ate_par.php?est=par&cha=ate&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Setoriais</a>
                                <ul>
                                    <li class="fly2"><a href="set_ate_par.php?est=par&cha=ate&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Atendimentos</a></li>
                                    <li class="fly2"><a href="set_sol_par.php?est=par&cha=sol&mes=<?php echo $mes_atual?>&ano=<?php echo $ano_atual?>">Solicitações</a></li>
                                </ul>
                            </li>
                            <li class="fly"><a href="index.php">Retrabalhos</a>
                                <ul>
                                    <li class="fly2"><a href="ret_sol_pre.php?est=ret&cha=sol&ano=<?php echo $ano_atual?>">Preenchimentos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="fly"><a href="index.php">Fechar Solicitações</a>
                        <ul>
                            <li><a href="sol_analista.php">Por Analista</a></li>
                            <li><a href="sol_mes.php">Por Mês</a></li>
                        </ul>
                    </li>
                    <li class="fly"><a href="index.php">Organograma</a>
                        <ul>
                            <li><a href="org_matricial.php">Matricial</a></li>
                            <li class="fly"><a href="index.php">Regional</a>
                                <ul>
                                    <li><a href="org_regional.php">Fluxo</a></li>
                                    <li><a href="org_mapa.php">Mapa</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="fly"><a href="index.php">Links</a>
                        <ul>
                            <li class="fly2"><a href="http://portal.ecocentauro.com.br">Portal</a></li>
                            <li class="fly2"><a href="http://sol.ecocentauro.com.br">SOL</a></li>
                            <li class="fly2"><a href="http://servertfs/sites/ecoerp/">SharePoint</a></li>
                            <li class="fly2"><a href="http://moodle.ecocentauro.com.br">Moodle</a></li>
                            <li class="fly2"><a href="http://portal.ecocentauro.com.br:9090">Spark</a></li>
                        </ul>
                    </li>
                    <li><a href="contatos.php">Contatos</a></li>
                </ul>
            </div>
        </td>
	</tr>
</table>
</center>