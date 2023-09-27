

<!DOCTYPE html>
<html lang="en">

    <?php

            require 'config.php';
            require 'models/Auth.php';
            include 'models/Pizza.php';
            $pizzaDAO = new PizzaMySQLDAO($conexao);

            $auto = new Auth($conexao, $base);
            $userInfo = $auto->checkToken();
            
            
            // Para listar todas as pizzas
            $pizzas = $pizzaDAO->findAll();
    
    ?>

    <?php  
        require 'partials/header.php';
    ?>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mr-5" href="#"><img src="<?= $base?>/assets/images/logo_pizzaria2.png" style="width:50%" srcset=""></a>
    </div> <!-- Fechamento da div container-fluid -->
    
       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" style="color:yellow;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu</a>
        </li>
        <a class="nav-link" href="#">Servicos</a>
        </li>
        <a class="nav-link" href="#">Redesociais</a>
        </li>
        <a class="nav-link" href="#">Sobre</a>
        </li>
        <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<div class="container-fluid" >

<p class="text-center text-black mb-3">CADASTRO</p>
<div class="container">
    <div class="header">
        <span>Cadastro de Pizza</span>
        <!-- <button type="button" onclick="openModal()" id="new">Incluir</button> -->
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Incluir
</button>
    </div>

</div>

<table class="table">
<thead class="table">
    <tr>
      <th scope="col">#</th>
      <th scope="col">TIPO DE PIZZA </th>
      <th scope="col">DISCRIMINAÇÃO</th>
      <th scope="col">VALOR</th>
      <th scope="col">EDITAR</th>
      <th scope="col">EXCLUIR</th>

    </tr>
  </thead>
  <tbody>
  <?php
        $pizzas = $pizzas;

        foreach ($pizzas as $index => $pizza) {
            echo "<tr>";
            echo "<th scope='row'>" . ($index + 1) . "</th>";
            echo "<td>" . $pizza->TipoDaPizza . "</td>";
            echo "<td>" . $pizza->Descricao . "</td>";
            echo "<td>R$ " . number_format($pizza->Valor, 2, ',', '.') . "</td>";
            echo "<td><a href='' data-bs-toggle='modal' data-bs-target='#exampleModal'>Editar</a></td>";
            echo "<td>Excluir</td>";
            echo "</tr>";
        }
        ?>
  </tbody>
</table>


</div>
<footer></footer>
</body>
</html>



<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tipo de Pizza</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex:Portuguesa">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Discriminação:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 -->
