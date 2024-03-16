<?php 
    include("../controller/readController.php");
?>


<?php include("frontend/head.html"); ?>
<table class="myTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Escolaridade</th>
                <th>Matriculado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                GerarTabela();
            ?>
        </tbody>
        <tfooter>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Escolaridade</th>
                <th>Matriculado</th>
                <th>Ações</th>
            </tr>
        </tfooter>
</table>
<?php include("frontend/footer.html");?>