<?php

require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Doctrine\DBAL\DriverManager;

// Configurações do banco de dados
$connectionParams = [
    'dbname' => 'sistemaControleClientes',
    'user' => 'postgres',
    'password' => 'developer001',
    'host' => '35.184.153.207',
    'driver' => 'pdo_pgsql',
];

try {
    // Estabelece a conexão com o banco de dados
    $conn = DriverManager::getConnection($connectionParams);

    // Exibe uma mensagem de conexão bem-sucedida
    //echo "Conexão bem-sucedida com o banco de dados!" . "<br>" . PHP_EOL;

    // Verifica se há dados do usuário do Google disponíveis
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['sub'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sub = $_POST['sub'];

        // Verifica se o usuário já existe no banco de dados
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $stmt = $conn->executeQuery($sql, [$sub]);
        $user = $stmt->fetchAllAssociative();

        if ($user) {
            $sql = "SELECT * FROM clientes WHERE usuario_id = ?";
            $stmt = $conn->executeQuery($sql, [$sub]);
            $clientes = $stmt->fetchAllAssociative();

            if ($clientes) {
                //$clientesJson = json_encode($clientes);
                //header('Content-Type: application/json');
                //echo $clientesJson;

                $clientesJson = json_encode($clientes);
                header("Location: clientes.html?clientesJson=" . urlencode($clientesJson));
                exit();
            } else {
                echo 'nenhum cliente encontrado';
            }

            // Redirecionamento para clientes.html

        } else {
            echo "Usuário inserido com sucesso!";
        }
    } else {
        echo "Nenhum dado do usuário do Google recebido.";
    }
} catch (Exception $e) {
    //Exibe uma mensagem de erro caso ocorra uma exceção
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}
