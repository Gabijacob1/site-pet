<?php
require_once 'init.php';
// resgata os valores do formulário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$especie = isset($_POST['especie']) ? $_POST['especie'] : null;
$raca = isset($_POST['raca']) ? $_POST['raca'] : null;
$dono = isset($_POST['dono']) ? $_POST['dono'] : null;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
$idade = isset($_POST['idade']) ? $_POST['idade'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;
// validação (bem simples, mais uma vez)
if (empty($name) || empty($especie) || empty($raca) || empty($idade) empty($dono) || empty($sexo))
{
    echo "Volte e preencha todos os campos";
    exit;
}
// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
$isoDate = dateConvert($idade);
// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE users SET name = :name, especie = :especie,"
        . " raca = :raca, idade = :idade, dono = :dono, sexo = :sexo WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':especie', $especie);
$stmt->bindParam(':raca', $raca);
$stmt->bindParam(':dono', $dono);
$stmt->bindParam(':sexo', $sexo);
$stmt->bindParam(':idade', $isoDate);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}