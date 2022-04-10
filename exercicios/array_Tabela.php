<?php
    $dados = [
        ['joao','M','Portugal'],
        ['ana','r','Brasil'],
        ['carlsos','M','Angola'],
        ['Matilde','r','Moçambique'],
    ];
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela</title>
</head>
<style>
    td{
        width: 200px;
        text-align: center;
    }
</style>
<body>
    <?php if($dados): ?>
    <table border="5">
        
        <thead>
            <tr>
                <th>Nome</th>
                <th>Gênero</th>
                <th>País</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($dados as $row): ?>
            <tr>
                <?php foreach($row as $value): ?>
                <td>
                    <?php echo mb_strtoupper($value) ?>
                </td>
                <?php endforeach;?>
            </tr>
            <?php endforeach;?>
        </tbody>

    </table>
    <?php endif;?>
</body>
</html>