<?php
    class cadastrado{
        protected $nome;
        protected $cpf;
        protected $senha;
        protected $numero;

        public function __construct(){
            $this->nome = $_POST["nome"];
            $this->cpf = $_POST["cpf"];
            $this->senha = $_POST["senha"];
            $this->numero = $_POST["tel"];
        }
        public function imprimir(){
            echo'<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro</title>
</head>
<body>
<img  class="blue" src="Captura de tela de 2025-02-12 00-12-14.png" alt="">

<h1 class="o">Bem-Vindo ao Prato cheio</h1>
    <div class="numsei">
        <h1>Cadastrado com sucesso</h1>

        <h2>Bem vindo ' .$this->nome. '</h2>
            <button type="submit" class="cada">Continuar</button>
        </form>

        <img class="logi" src="Prato_Cheio2-removebg-preview.png" alt="">
    </div>

</body>';
        }

       public function EnviarParaBD(){
        //kauanny, por favor coloque aqui o codigo para enviar os dados deste arquivo para o BD
       }
}

$fulano = New cadastrado();
$fulano->imprimir();