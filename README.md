# CRUD PHP COM ARQUITETURA MVC

### Objetivo: 

>Desenvolver um CRUD simples em php sem o uso de frameworks a fim de realizar registros numa tabela em um banco de dados. O sistema deve seguir a arquitetura MVC (*Model, View and Controller*).

### Detalhes:

>Será criado um banco de dados chamado myBase juntamente com uma tabela Aluno com os seguintes atributos:

1. Id (PRIMARY KEY AUTO_INCREMENT)
2. Nome Completo
3. Endereço
4. Escolaridade (Ensino fundamental, médio ou superior)
5. Matriculado (Sim ou Não)

### Regras: 

>As regras abaixo devem ser seguidas ao cadastrar/editar um Aluno:

1. O Id não deve ser trabalhado na "view", mas sim somente no banco
2. Nos formulários cadastrar/editar todos os campos são obrigatórios (*required*)

### Detalhes sobre o programa:
>Mais alguns detalhes a respeito da arquitetura seguida:

1.  config.php em "DAO" são os arquivos de configurações do sistema
2.  Diretório "DAO" é onde ficam as sub-rotinas do sistema que interragem com o banco de dados
3.  Diretório "view" é onde fica todas as telas do sistema (incluindo CSS)
4.  Diretório "controller" é onde fica as funcionalidades do sistema que fazem a ponte entre a "view" e a "DAO", utilizando da "model"
5.  Diretório "model" é onde fica o modelo de negócio que deve ser seguido

O arquivo banco.sql é o scrip em sql que cria o banco e a tabela.
