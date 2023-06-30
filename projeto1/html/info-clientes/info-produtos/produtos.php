<?php

//require '../vendor/autoload.php';
require '../../../vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

// Configurações do banco de dados
$connectionParams = [
    'dbname' => 'postgres',
    'user' => 'wilson',
    'password' => "developer",
    'host' => 'localhost',
    'driver' => 'pdo_pgsql',
];

try {
    $conn = DriverManager::getConnection($connectionParams);
    //echo "Conexão bem-sucedida com o banco de dados!" . "<br>" . PHP_EOL;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_POST['id'];

        $sql = "SELECT iv.id, p.nome, p.descricao, p.categoria, p.data_validade, iv.quantidade, iv.preco_unitario
        FROM itens_vendidos iv
        INNER JOIN produtos p ON iv.produto_id = p.id
        WHERE venda_id = ?;";
        //$sql = "SELECT * FROM itens_vendidos WHERE venda_id = ?";
        $stmt = $conn->executeQuery($sql, [$id]);
        $result = $stmt->fetchAllAssociative();

        if ($result) {
            $response = ['success' => true, 'message' => $result];
        } else {
            $response = ['success' => false, 'message' => 'erro'];
        }


        header('Content-Type: application/json');
        echo json_encode($response);
    }
} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}
