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

/*
##############################################################################################

// Carrega um usuário usando o login e a senha. Feito na aula 64 ecomentado na aula 65 para utilização de procedure.

$usuario = new Usuario();

$usuario->login("user", "123");

echo $usuario;

##############################################################################################
*/

/*
##############################################################################################

// Insere dados no banco de dados. Feito na aula 65 e comentado na aula 66.

$aluno = new Usuario("aluno", "123");

// Enviar para o BD

$aluno->insert();

echo $aluno;

###############################################################################################
*/

//Fazendo Update de dados do banco de dados.

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("professor", "12345");

echo $usuario;

?>