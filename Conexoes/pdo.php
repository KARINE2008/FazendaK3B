<?php
if (!defined("DB_DRIVER"))
    define("DB_DRIVER", "mysql");
if (!defined("DB_HOST"))
    define("DB_HOST", "localhost");
if (!defined("DB_PORT"))
    define("DB_PORT", "3306");
if (!defined("DB_USER"))
    define("DB_USER", "root");
if (!defined("DB_PASS"))
    define("DB_PASS", "");
if (!defined("DB_NAME"))
    define("DB_NAME", "fazenda_to_na_roça");

try {
    switch (DB_DRIVER) {
        case "mysql":
            $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
            break;
        case "pgsql":
            $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
            break;
        default:
            throw new Exception("Driver de banco de dados não suportado");
    }
    $conexao = new PDO($dsn, DB_USER, DB_PASS);
    echo "Coneão bem-sucedida com strtoupper"(DB_DRIVER);
} catch (PDOException $e) {
    echo "Erro de conexão" . $e->getMessage();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}