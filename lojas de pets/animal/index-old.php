<?php
require_once 'init.php';
// abre a conexão
$PDO = db_connect();

// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), 
// mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
$sql_count = "SELECT COUNT(*) AS total FROM users ORDER BY name ASC";

// SQL para selecionar os registros
$sql = "SELECT id, name, especie, raca, idade, dono, sexo "
        . "FROM users ORDER BY name ASC";

// conta o total de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Cadastro</title>
    </head>
    <body>
        <h1>Sistema de Cadastro</h1>
        <p><a href="form-add.php">Adicionar Usuário</a></p>
        <h2>Lista de Usuários</h2>
        <p>Total de usuários: <?php echo $total ?></p>
        <?php if ($total > 0): ?>
            <table width="50%" border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Especie</th>
                        <th>Raça</th>
                        <th>Idade</th>
                        <th>Dono</th>
                        <th>Sexo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td><?=$user['name'] ?></td>
                            <td><?=$user['especie'] ?></td>
                            <td><?=($user['sexo'] == 'm') ? 'Masculino' : 'Feminino' ?></td>
                            <td><?=dateConvert($user['idade']) ?></td>
                            <td><?=calculateAge($user['idade']) ?> anos</td>
                            <td><?=$user['raca'] ?></td>
                            <td><?=$user['dono'] ?></td>
                            <td>
                                <a href="form-edit.php?id=<?=$user['id'] ?>">Editar</a>
                                <a href="delete.php?id=<?=$user['id'] ?>" 
                                   onclick="return confirm('Tem certeza de que deseja remover?');">
                                    Remover
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum usuário registrado</p>
        <?php endif; ?>
    </body>
</html>
