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

        $numero = mt_rand(0, 999999999);
        $id_cliente = $numero;



        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data = $_POST['data'];
        $data_formatada = date('Y-m-d', strtotime($data));

        if (isset($_COOKIE['usuario'])) {
            $cookieValue = $_COOKIE['usuario'];
            $cookieData = json_decode($cookieValue, true);
            $token = $cookieData['token'];

            $sql = "SELECT * FROM usuario WHERE token_auth = ?";
            $stmt = $conn->executeQuery($sql, [$token]);
            $result = $stmt->fetchAssociative();

            if ($result) {
                $id_usuario = $result['id'];

                $sql = "SELECT * FROM cliente WHERE email = ?";
                $stmt = $conn->executeQuery($sql, [$email]);
                $result = $stmt->fetchAssociative();

                if ($result) {
                    $response = ['success' => false, 'cor' => 'red' , 'message' => 'Cliente já existe'];
                } else {
                    $sql = "INSERT INTO cliente (id, usuario_id,nome,email,telefone,data_entrada)
                    values (?,?,?,?,?,?)";
                    $stmt = $conn->executeQuery($sql, [$id_cliente, $id_usuario, $nome, $email, $telefone, $data_formatada]);
                    $result = $stmt->fetchAssociative();

                    $sql = "SELECT * FROM cliente WHERE id = ?";
                    $stmt = $conn->executeQuery($sql, [$id_cliente]);
                    $result = $stmt->fetchAssociative();

                    if ($result) {
                        $response = ['success' => true, 'cor' => 'green' ,'message' => 'Dados do cliente inseridos com sucesso.'];
                    } else {
                        $response = ['success' => false, 'cor' => 'red' , 'message' => 'Erro ao inserir os dados do cliente.', 'data' => $data_formatada, 'dados' => $result];
                    }
                }
            }
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }
} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}
