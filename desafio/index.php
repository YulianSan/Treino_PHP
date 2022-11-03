<?php 
    require_once "./layout/header.php"; 
    require_once "./config.php";
    require_once "./dogFile.php";
?>
<div class="container p-2 text-center mb-3">
    <a class="btn btn-primary text-white" href="./insert/inserir.view.php"> Inserir dogs </a>
    <button class="btn btn-danger text-white" data-toggle="modal" data-target="#confirm"> Deletar dogs </button>

    <div class="modal fade" id="confirm" role="dialog">
        <div class="modal-dialog modal-md">

            <div class="modal-content">
                <div class="modal-body">
                    <p> Selecione todas as linhas que deseja excluir</p>

                    <div>
                        <?php DogFile::getTable(false,"input", "id", "idselect", "idselect", "checkbox"); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="./delete/deleteMany.crud.php" type="button" class="btn btn-danger" id="delete">Apagar Registros</a>
                        <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                </div>
            </div>

        </div>
    </div>
</div>
<?php 
    DogFile::getTable();
?>
<script src="./JS/select.js"></script>
<?php require_once "./layout/footer.php"; ?>