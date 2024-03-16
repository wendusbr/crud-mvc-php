<?php
    include("../model/aluno.php");
    include("../DAO/alunoDAO.php");

    $aluno = new Aluno();

    $aluno->setNome($_POST['nome']);
    $aluno->setEndereco($_POST['endereco']);
    $aluno->setEscolaridade($_POST['escolaridade']);
    $aluno->setMatriculado($_POST['matriculado']);

    if(CreateAluno($aluno)){
        echo("
            <script>
                window.alert('Aluno inserido com sucesso!');
                document.location = '../view/index.php';
            </script>
        ");
    }
    else{
        echo("
            <script>
                window.alert('Algo deu errado, tente novamente...');
                document.location = '../view/index.php';
            </script>
        ");
    }
?>