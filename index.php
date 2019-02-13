<?php

require_once("config.php");

//Carrega apenas um usuario
/*$root = new Usuario();
//$root->loadById(3);
echo $root;*/

//Carrega uma lista de usuarios
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega lista de ususarios buscando por login
/*$search = Usuario::search("Jo");
echo json_encode($search);*/

//Carrega um usuario usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("root","@#$$");
echo $usuario;*/


//Criando um novo usuario
/*$aluno = new Usuario("Bruce Banner", "GAMAGAMA");

$aluno->insert();

echo $aluno;
 */
//Update de usuario
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("STEVE ROGERS", "V1br4n1um");
echo $usuario;
?>
