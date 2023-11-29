<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '104208');
define('BD', 'sistemas');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não Conectou!!');

?>