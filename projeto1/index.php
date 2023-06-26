<?php

use GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Import;

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
    //echo "Conexão bem-sucedida com o banco de dados!" . "<br>" . PHP_EOL;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Receber os dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Exibir os dados na tela

        $sql = "SELECT * FROM usuario WHERE email = ?";
        $stmt = $conn->executeQuery($sql, [$email]);
        $result = $stmt->fetchAssociative();

        if ($result) {
            // usuario encontrado
            $response = [
                'encontrado' => true,
                'dados' => $result
            ];
        } else {
            // usuario não encontrado
            $response = [
                'encontrado' => false
            ];
        }
        
        // Enviar a resposta em formato JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    //header("Location: ./clientes.html");
    //exit();
} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}
