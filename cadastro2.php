
<?php
include 'config.php';
include 'models/Pizza.php';
$pizzaDAO = new PizzaMySQLDAO($conexao);

// Para buscar uma pizza pelo ID
// $pizza = $pizzaDAO->findById(1);

// Para listar todas as pizzas
$pizzas = $pizzaDAO->findAll();


// $pizza->TipoDaPizza = "Nova Pizza";
// $pizzaDAO->update($pizza);

// Para inserir uma nova pizza
// $novaPizza = new Pizza();
// $novaPizza->TipoDaPizza = "Pizza de Teste 3";
// $novaPizza->Descricao = "Uma pizza de teste 3";
// $novaPizza->Valor = 17.99;
// $pizzaDAO->insert($novaPizza);

print_r($pizzas) ;



?>