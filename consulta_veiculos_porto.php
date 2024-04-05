<?php
include('conexao.php');

$sql = "SELECT * FROM carros WHERE local_de_uso = 'Porto dos gauchos'";
$result = $mysqli->query($sql);

// print_r($result);



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link CSS-->
    <link rel="stylesheet" href="css/consulta.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Bootstrap icones-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>consulta</title>

</head>
<body>

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="sidebar.php">
                <i class="fa fa-home"></i>
                Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
           
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope-o">
                </i>
                Veiculos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="form_cadastro.php">Cadastrar Veiculos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Relatorios</a>
              </div>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope-o">
                  </i>
                  Manutenção de veiculos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Cadastrar Manutenção</a>
                  <!-- <a class="dropdown-item" href="#">Venda de produtos</a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Relatorios</a>
                </div>
            </li>
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-bell">
                  <span class="badge badge-danger">11</span>
                </i>
                Tarefas pendentes
              </a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>


  <div class="m-5 table-bg">
    <table class="table table-responsive">
        <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Placa</th>
        <th scope="col">Descrição do veiculo</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Ano de fabricação</th>
        <th scope="col">Valor</th>
        <th scope="col">Tara</th>
        <th scope="col">Unidade federativa</th>
        <th scope="col">Situação</th>
        <th scope="col">Local de uso</th>
        <th scope="col">Responsavel</th>
        <th scope="col">Vencimento do seguro</th>
        <th scope="col">vencimento do IPVA</th>
        <th scope="col">...</th>
       </tr>
       </thead>
     <tbody>

    <?php
    while ($userdata = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$userdata['id']."</td>";
      echo "<td>".$userdata['placa']."</td>";
      echo "<td>".$userdata['descricao_do_veiculo']."</td>";
      echo "<td>".$userdata['marca']."</td>";
      echo "<td>".$userdata['modelo']."</td>";
      echo "<td>".$userdata['ano_de_fabricacao']."</td>";
      echo "<td>".$userdata['valor']."</td>";
      echo "<td>".$userdata['tara']."</td>";
      echo "<td>".$userdata['unidade_federativa']."</td>";
      echo "<td>".$userdata['situacao']."</td>";
      echo "<td>".$userdata['local_de_uso']."</td>";
      echo "<td>".$userdata['responsavel']."</td>";
      echo "<td>".$userdata['vencimento_do_seguro']."</td>";
      echo "<td>".$userdata['vencimento_do_ipva']."</td>";
      echo "<td>
      <a class='btn btn-primary btn-sm' href='form.php?id=$userdata[id]'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
         <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
      </svg>
      </a>
      <a class='btn btn-primary btn-sm' href='form_cadastro.php'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-journal-check' viewBox='0 0 16 16'>
       <path fill-rule='evenodd' d='M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0'/>
       <path d='M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2'/>
       <path d='M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z'/>
      </svg>
   </td>";

   echo "</td>";
    }

    ?>

     </tbody>
    </table>
  </div>





    
</body>
</html>