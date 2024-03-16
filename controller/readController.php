<?php
    include("../DAO/alunoDAO.php");

    function GerarTabela(){
        $dados = ReadAlunos();

        //var_dump($dados);
        if($dados){
            for($i= 0; $i<count($dados); $i++){
                $dados[$i]['matriculado'] ? $dados[$i]['matriculado']="Sim" : $dados[$i]["matriculado"]="Não";

                echo "
                <tr>
                    <td>{$dados[$i]['nome']}</td>
                    <td>{$dados[$i]['endereco']}</td>
                    <td>{$dados[$i]['escolaridade']}</td>
                    <td>{$dados[$i]['matriculado']}</td>
                    <td><a style='margin-right: 20px;' href='editar.php?id={$dados[$i]['id']}'>Editar</a> <a style='color:red' href='../controller/deleteController.php?id={$dados[$i]['id']}'>Deletar</a></td>
                </tr>
                ";
            }
        }
    }
?>