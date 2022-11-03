<?php 
    require_once "../config.php";
    require_once $base."/layout/header.php"; 
    require_once $base."/dogFile.php";

    $id = (int) $_GET["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    $dog = DogFile::findForID($id);
    
?>

<div class="container my-3">
        
    <form action="./edit.crud.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dog['dog']->id ?>">
        <input type="hidden" name="index" value="<?php echo $dog['key'] ?>">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text" placeholder="Nome do dog" value="<?php echo $dog['dog']->nome ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="raca">Raça</label>
            <input id="raca" name="raca" type="text" placeholder="Raca do dog" value="<?php echo $dog['dog']->raca ?>" class="form-control" required>
        </div>
        <button class="btn btn-primary" type="submit">Editar</button>
    </form>

</div>

<?php require $base."/layout/footer.php"; ?>