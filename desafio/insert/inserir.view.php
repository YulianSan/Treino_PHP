<?php require "../layout/header.php"; ?>

<div class="container my-3">
        
    <form action="./inserir.crud.php">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text" placeholder="Nome do dog" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="raca">Raça</label>
            <input id="raca" name="raca" type="text" placeholder="Raca do dog" class="form-control" required>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>

</div>

<?php require "../layout/footer.php"; ?>