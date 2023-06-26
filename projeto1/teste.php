<?php

require 'vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

// Configurações do banco de dados
$connectionParams = [
    'dbname' => 'postgres',
    'user' => 'wilson',
    'password' => 'developer',
    'host' => 'localhost',
    'driver' => 'pdo_pgsql',
];

try {
    $conn = DriverManager::getConnection($connectionParams);
    echo "Conexão bem-sucedida com o banco de dados!" . "<br>" . PHP_EOL;

} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}
