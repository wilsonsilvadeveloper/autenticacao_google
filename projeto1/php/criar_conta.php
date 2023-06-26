<?php

require '../vendor/autoload.php';

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

    $numero = mt_rand(0, 999999999999999);
    $numeroFormatado = str_pad($numero, 15, '0', STR_PAD_LEFT);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Receber os dados do formulário
        $nome = $_POST['nome'];
        //$telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Exibir os dados na tela

        $sql = "SELECT * FROM usuario WHERE email = ?";
        $stmt = $conn->executeQuery($sql, [$email]);
        $result = $stmt->fetchAssociative();

        if ($result) {
            // usuario encontrado
            //$response = [
            //'encontrado' => true,
            //'dados' => $result
            // ];

            echo 'usuario já existe';
        } else {
            $token = bin2hex(random_bytes(32)); // Gera uma sequência aleatória de bytes e converte em uma string hexadecimal
            $sql = "INSERT INTO usuario (id, nome, email, senha, token_auth) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->executeQuery($sql, [$numeroFormatado, $nome, $email, $senhaCriptografada, $token]);

            if ($stmt->rowCount() > 0) {
                echo 'Usuário adicionado com sucesso';

                $data = array(
                    'nome' => $nome,
                    'email' => $email,
                    'token' => $token,
                );

                $jsonData = json_encode($data);

                //$expiracao = time() + 3600; // Expira em 1 hora (3600 segundos)
                //setcookie('usuario', $jsonData, $expiracao);

                $cookieName = "usuario";
                $cookieExpiration = time() + (60 * 60 * 24 * 30); // 30 dias
                $cookieDomain = "localhost";
                setcookie($cookieName, $jsonData, $cookieExpiration, "/", $cookieDomain);
            } else {
                echo 'Erro ao adicionar usuário';
            }
        }

        // Enviar a resposta em formato JSON
        //header('Content-Type: application/json');
        //echo json_encode($response);
    }

    //header("Location: ./clientes.html");
    //exit();
} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}
