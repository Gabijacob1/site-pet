<?php
require 'init.php';
// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
// valida o ID
if (empty($id)) {
    echo "ID para alteração não definido";
    exit;
}
// busca os dados do usuário a ser editado
$PDO = db_connect();
$sql = "SELECT name, especie, sexo, raca, dono, idade FROM users WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
// se o método fetch() não retornar um array, significa que o ID não corresponde 
// a um usuário válido
if (!is_array($user)) {
    echo "Nenhum usuário encontrado";
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edição de Usuário</title>
    </head>
    <body>
        <h1>Sistema de Cadastro</h1>
        <h2>Edição de Usuário</h2>
        <form action="edit.php" method="post">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="name" id="name" value="<?php echo $user['name'] ?>">
            <br><br>
            <label for="especie">Especie: </label>
            <br>
            <input type="text" name="especie" id="especie" value="<?php echo $user['especie'] ?>">
            <br><br>
            <label for="raca">Especie: </label>
            <br>
            <input type="text" name="raca" id="raca" value="<?php echo $user['raca'] ?>">
            <br><br>
            <label for="dono">Dono: </label>
            <br>
            <input type="text" name="dono" id="dono" value="<?php echo $user['dono'] ?>">
            <br><br>
            Gênero:
            <br>
            <input type="radio" name="sexo" id="sexo_m" value="m" <?php if ($user['sexo'] == 'm'): ?> 
                   checked="checked" <?php endif; ?>>
            <label for="sexo_m">Masculino </label>
            <input type="radio" name="sexo" id="sexo_f" value="f" <?php if ($user['sexo'] == 'f'): ?> 
                   checked="checked" <?php endif; ?>>
            <label for="sexo_f">Feminino </label>
            <br><br>
            <label for="idade">Data de Nascimento: </label>
            <br>
            <input type="text" name="idade" id="idade" placeholder="dd/mm/YYYY" 
                   value="<?php echo dateConvert($user['idade']) ?>">
            <br><br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>
