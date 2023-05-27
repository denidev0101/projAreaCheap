<?php 
require ("dadosgerais.php");

if (!isset($_GET['type']) && !isset($_GET['index'])){
  header('Location: index.php');
  exit();

  }else if ($_GET['type'] != 'mansoes' && $_GET['type'] != 'fazendas' && $_GET['type'] != 'quartos') {
    header('Location: index.php');
    exit();
}

if ($_GET['type'] == 'fazendas') {
  if (count($geral["Fazendas"]) < intval($_GET['index'])) {
    header('Location: Principal.php');
      exit();
  }else{
      $data = $geral["Fazendas"][$_GET['index']];
  }
  }else if ($_GET['type'] == 'quartos') {
  if (count($geral["Quartos"]) < intval($_GET['index'])) {
    header('Location: Principal.php');
      exit();
  } else {
      $data = $geral["Quartos"][$_GET['index']];
  }
} else if ($_GET['type'] == 'mansoes') {
  if (count($geral["Mansões"]) < intval($_GET['index'])) {
    header('Location: Principal.php');
      exit();
  } else {
      $data = $geral["Mansões"][$_GET['index']];
  }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Área cheap</title>
  <link rel="stylesheet"  href="estilizar.css">
</head>

<body>
  <header>

      <a href="index.php"> <img src="ImgCategorias/logo.png" alt="Logo Área Cheap" id="logo"> </a>
            <form id="btn">
              <input type="search" name="busca" placeholder="Busca">
              <p>&#x1F50D;</p>
            </form>
          <a href="cadastro.php">Cadastro</a>
          <a href="login.php">Login</a>
          <a href="saibamais.php">Saiba mais</a>
      
  </header>

  <nav>
    <ul>
      <li><a href="./index.php">Em Alta</a></li>
      <li><a href="./index.php?type=mansoes">Mansão</a></li>
      <li><a href="./index.php?type=quartos">Quarto</a></li>
      <li><a href="./index.php?type=fazendas">Fazenda</a></li>
    </ul>
  </nav>

  <main>
    <div class="listing-card">
      <img src="<?=$data["Foto"]?>" alt="<?=$data["Localização"]?>"> 
      <a href="indexDetalhes.php">
      <div class="divFora">
        <div class="detalheCidade">
          <h4><?=$data["Localização"]?></h4> 
          <h3><?=$data["Disposição"]?></h3> 
        </div>
          <h2>R$<?=$data["ValorAluguel"]?> - Aluguel</h2>
          <h2>R$<?=$data["ValorVenda"]?> - Venda</h2>
          <h3><?=$data["Responsável"]?></h3>  
         
      </div>
      <div id="but">
        <button type="button">Comprar</button>
        <button type="button">Alugar</button>
      </div>
    </a>
		</div>  

 </main>
  <footer>
    <div>
    
   <p id="pfooter"> Contatos:<br>
    De segunda a sexta:  (77) 98812-3456<br>
    Sabados e Domingos:  (77) 98854-6783<br>
    Endereço:<br> IFBA Campus Brumado <br>
   </p>
    </div>
    &copy; <?php echo date("Y"); ?> Área Cheap. Todos os direitos reservados.<br>
  </footer>
</body>
</html>