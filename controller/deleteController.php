<?php
    include("../model/aluno.php");
    include("../DAO/alunoDAO.php");

    if(DeleteAluno(filter_input(INPUT_GET, 'id'))){
        echo("
            <script>
                window.alert('Aluno excluído com sucesso!');
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