<?php
    include("config.php");
    function CreateAluno($aluno){
        $conexao = AbreConexao();

        $resultado = $conexao->query("INSERT INTO Aluno(nome, endereco, escolaridade, matriculado) VALUES ('{$aluno->getNome()}', '{$aluno->getEndereco()}', '{$aluno->getEscolaridade()}', '{$aluno->getMatriculado()}');");

        FechaConexao($conexao);

        return $resultado;
    }

    function ReadAlunos(){
        $conexao = AbreConexao();

        $resultado = $conexao->query("SELECT * FROM Aluno ORDER BY nome");

        if($resultado->num_rows){
            while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
                $array[] = $row;
            }

            FechaConexao($conexao);
            
            return $array;
        }
    }

    function ReadAluno($id){
        $conexao = AbreConexao();

        $resultado = $conexao->query("SELECT * FROM Aluno WHERE id='{$id}'");
        
        if($resultado->num_rows){
            $row = $resultado->fetch_array(MYSQLI_ASSOC);

            $aluno = new Aluno();

            $aluno->setId($row['id']);
            $aluno->setNome($row['nome']);
            $aluno->setEndereco($row['endereco']);
            $aluno->setEscolaridade($row['escolaridade']);
            $aluno->setMatriculado($row['matriculado']);

            FechaConexao($conexao);

            return $aluno;
        }
    }

    function UpdateAluno($aluno){
        $conexao = AbreConexao();

        $resultado = $conexao->query("UPDATE Aluno SET nome='{$aluno->getNome()}', endereco='{$aluno->getEndereco()}', escolaridade='{$aluno->getEscolaridade()}', matriculado='{$aluno->getMatriculado()}' WHERE id='{$aluno->getId()}';");

        FechaConexao($conexao);

        return $resultado;
    }

    function DeleteAluno($id){
        $conexao = AbreConexao();

        $resultado = $conexao->query("DELETE FROM Aluno WHERE id='{$id}'");

        FechaConexao($conexao);

        return $resultado;
    }
?>