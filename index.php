<?php

require_once("config.php");

/*
##############################################################################################

Programação feita na aula 62 e comentada na aula 63, para incluir um novo modo de programação.

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

##############################################################################################
*/

$root = new Usuario();

$root->loadById(4);

echo $root;

?>