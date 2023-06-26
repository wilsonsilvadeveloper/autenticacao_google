<?php

require '../../../vendor/autoload.php';

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
    // Exibir os dados na tela

    $cookie_usuario = $_COOKIE['usuario'];
    $usuario = json_decode($cookie_usuario, true);
    $token = $usuario['token'];

    $sql = "SELECT * FROM usuario WHERE token_auth = ?";
    $stmt = $conn->executeQuery($sql, [$token]);
    $result = $stmt->fetchAssociative();

    if ($result) {
        // usuario encontrado
        $id = $result['id'];

        $sql = "SELECT * FROM cliente WHERE usuario_id = ?";
        $stmt = $conn->executeQuery($sql, [$id]);
        $result = $stmt->fetchAssociative();

        if($result) {
            $response = [
                'encontrado' => true,
                'dados' => $result
            ];
        } else {
            $response = [
                'encontrado' => false,
                'dados' => 'cliente não encontrado'
            ];
        }
       
    } else {
        // usuario não encontrado
        $response = [
            'encontrado' => false
        ];
    }

    // Enviar a resposta em formato JSON
    header('Content-Type: application/json');
    echo json_encode($response);
} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}

?>
