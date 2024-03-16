<?php
    class Aluno{
        private $id;
        private $nome;
        private $endereco;
        private $escolaridade;
        private $matriculado;

        // Getters
        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function getEscolaridade(){
            return $this->escolaridade;
        }

        public function getMatriculado(){
            return $this->matriculado;
        }

        //Setters
        public function setId($id){
            $this->id = $id;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function setEscolaridade($escolaridade){
            $this->escolaridade = $escolaridade;
        }

        public function setMatriculado($matriculado){
            $this->matriculado = $matriculado;
        }
    }
?>