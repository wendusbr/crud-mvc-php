<?php
    include("../model/aluno.php");
    include("../DAO/alunoDAO.php");

    $aluno = ReadAluno(filter_input(INPUT_GET, 'id'));
?>

<?php include("frontend/head.html"); ?>
<div class="myContainer">
        <h2  style="text-align: center;">Editar</h2>
        <form method="post" action=<?php echo "../controller/updateController.php?id={$aluno->getId()}" ?> class="myForm">
            <div class="myFormInput">
                <label for="nome">Nome Completo</label>
                <input class="myInput" type="text" name="nome"  id="nome" placeholder="Digite seu nome completo" value="<?php echo $aluno->getNome(); ?>" required>
            </div>
            <div class="myFormInput">
                <label for="endereco">Endereço</label>
                <input class="myInput" type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" value="<?php echo $aluno->getEndereco(); ?>" required>
            </div>
            <div class="myFormInput">
                <label for="escolaridade">Escolaridade</label>
                <select class="mySelect" name="escolaridade" id="escolaridade" required>
                    <option value="Ensino fundamental" <?php if($aluno->getEscolaridade()=='Ensino fundamental') echo 'selected'; ?> >Ensino fundamental</option>
                    <option value="Ensino medio" <?php if($aluno->getEscolaridade()=='Ensino medio') echo 'selected'; ?> >Ensino médio</option>
                    <option value="Ensino superior" <?php if($aluno->getEscolaridade()=='Ensino superior') echo 'selected'; ?> >Ensino  superior</option>
                </select>
            </div>
            <div class="myFormInput">
                <label for="sim">Matriculado?</label>
                <input type="radio" id="sim" name="matriculado" value="1" <?php if($aluno->getMatriculado()) echo 'checked'; ?> required>
                <label for="sim">Sim</label>
                <input type="radio" id="nao" name="matriculado" value="0" <?php if(!$aluno->getMatriculado()) echo 'checked'; ?> required>
                <label for="nao">Não</label>
            </div>
            <div style="text-align: end;">
                <button type="submit"  class="myButton">Enviar</button>
            </div>
        </form>
</div>
<?php include("frontend/footer.html"); ?>