<?php
/*
El fichero se descarga el estado actual de la estación cuyo parámetro se pase por GET, y lo guarda en un fichero local que puede procesar el plugin.
*/
	$url = 'http://www2.meteogalicia.es/servizos/MComunicacion/xml/observacion/estacions/estado_actual_p.asp?idEst='.$_GET['id'];
	readfile($url) 
?>
