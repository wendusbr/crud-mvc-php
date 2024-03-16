<?php
    define("HOST", "127.0.0.1:3306");
    define("USER", "root");
    define("PASS", "");
    define("BASE", "myBase");

    function AbreConexao(){
        $conexao = new mysqli(HOST, USER, PASS, BASE);

        return $conexao;
    }

    function FechaConexao($conexao){
        mysqli_close($conexao);
    }
?>