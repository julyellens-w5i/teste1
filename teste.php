<?php
$host = 'localhost';
$port = 5432;
$dbname = 'livros';
$user = 'postgres';
$password = '1906';

// Estabelece a conexão com o banco de dados
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die('Conexão falhou.');
}

pg_query($conn, "INSERT INTO famosos (nome) VALUES ('Anita Garibaldi')");
pg_query($conn, "INSERT INTO famosos (nome) VALUES ('Mário Quintana')");
pg_query($conn, "INSERT INTO famosos (nome) VALUES ('Charlie Chaplin')");

    echo 'Registros inseridos com sucesso.';

// Fecha a conexão
pg_close($conn);
?>