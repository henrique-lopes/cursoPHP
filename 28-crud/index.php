<?php
//HEADER
include_once('includes/header.php');
?>

<div class="row">
  <div class=" col s12 m7 push-m3">
    <h3 class = "light">Clientes</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>Sobrenome:</th>
          <th>Email:</th>
          <th>Idade:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Henrique</td>
          <td>Lopes</td>
          <td>HenriqueLopes@gmail.com</td>
          <td>26</td>
          <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
          <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="adicionar.php" class="btn">Adicionar cliente </a>
  </div>
</div>


<?php
//FOOTER
include_once('includes/footer.php');
?>