<?php

require_once("config.php");

/*
##############################################################################################

// Programação feita na aula 62 e comentada na aula 63, para incluir um novo modo de programação.

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

##############################################################################################
*/

/*
##############################################################################################

// Carrega um usuário (aula 63), comentado na aula 64.

$root = new Usuario();

$root->loadById(4);

echo $root;

##############################################################################################
*/

/*
##############################################################################################

// Carrega uma lista de usuários. Feito na aula 64 e comentado nesta mesma aula.

$lista = Usuario::getList();

echo json_encode($lista);

##############################################################################################
*/

/*
##############################################################################################

// Carrega uma lista de usuários buscando pelo login. Feito na aula 64 e comentado na mesma aula

$search = Usuario::search("jo");

echo json_encode($search);

##############################################################################################
*/

// Carrega um usuário usando o login e a senha. Feito na aula 64.

$usuario = new Usuario();

$usuario->login("user", "123");

echo $usuario;

?>