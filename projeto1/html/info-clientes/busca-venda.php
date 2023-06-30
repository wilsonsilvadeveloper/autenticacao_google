<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


require '../../vendor/autoload.php';
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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];


        $sql = "SELECT * FROM cliente WHERE email = ?";
        $stmt = $conn->executeQuery($sql, [$email]);
        $result = $stmt->fetchAssociative();
    
        if ($result) {
            // usuario encontrado
            $id = $result['id'];
    
            $sql = "SELECT * FROM vendas WHERE cliente_id = ?";
            $stmt = $conn->executeQuery($sql, [$id]);
            $result = $stmt->fetchAllAssociative();
    
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
    }
} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}
