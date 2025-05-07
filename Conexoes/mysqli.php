<?php

if ( ! defined("DB_HOST") )
    define("DB_HOST", "localhost");
if ( ! defined("DB_PORT") )
    define("DB_PORT","3306");
if ( ! defined("DB_USER") )
    define("DB_USER","root");
if ( ! defined("DB_PASS") )
    define("DB_PASS","");
if ( ! defined("DB_NAME") )
    define("DB_NAME","FazendaK3B");

$Conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if ( ! $Conexao ){
    die("Erro na conexão: ". mysqli_connect_error());
}
echo "Conectado com sucesso!";