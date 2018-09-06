<?php

require_once('config.php');
require_once(DBAPI);

$noticias = null;
$noticia = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $noticias;
	global $destaques;
	$noticias = find_all('noticias');
	$destaques = find_destaque('noticias');
}