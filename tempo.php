<?php
for ($i=0; $i<100000000; $i++)
    continue;
$tempo_carregamento = mktime() - $_SERVER['REQUEST_TIME'];
print "A página demorou {$tempo_carregamento} segundos para carregar.";
?>