<?php
require_once 'init.php';

// pega os dados do formuário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$especie = isset($_POST['especie']) ? $_POST['especie'] : null;
$raca = isset($_POST['raca']) ? $_POST['raca'] : null;
$idade = isset($_POST['idade']) ? $_POST['idade'] : null;
$dono = isset($_POST['dono']) ? $_POST['dono'] : null;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;

// validação (bem simples, só pra evitar dados vazios)
if (empty($name) || empty($especie) || empty($raca) || empty($idade) || empty($dono) || empty($sexo))
{
    echo "Volte e preencha todos os campos";
    exit;
}
// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
$isoDate = dateConvert($idade);
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO users(name, especie, raca, idade, dono, sexo) VALUES(:name, :especie, :raca, :idade, :dono, :sexo)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':especie', $especie);
$stmt->bindParam(':raca', $raca);
$stmt->bindParam(':dono', $dono);
$stmt->bindParam(':sexo', $sexo);
$stmt->bindParam(':idade', $isoDate);

if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}