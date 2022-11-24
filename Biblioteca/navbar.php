
<link rel="stylesheet" href="css/nav.css">
<header>
      <nav>
        <a class="logo" href="index.php">Free Book</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        
        <ul class="nav-list">
        <form   action="#">

          <Div >
            <input class="inputPesquisa" type="text" name="" id="" placeholder="Pesquisa">
            <button class="btnPesquisa" type="submit">Buscar</button>
          </Div>
        </form>
          <li><a href="index.php">Home</a></li>
          <li><a href="destaques.php">Destaques</a></li>
          <li><a href="#">Categorias</a></li>
          <?php if(empty($_SESSION['ID'])) { ?>
          <li><a href="login.php">Logar</a></li>
          <?php } else{

              if($_SESSION['Status'] == 0) {
                  $consulta_usuario = $cn->query("select nomeUsuario from usuario where codUsuario = '$_SESSION[ID]'");
                  $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                  ?>
                  <li><a href="#"><?php echo $exibe_usuario['nomeUsuario'];?></a></li>
                  <li><a href="sair.php">Sair</a></li>
              <?php } else {?>
                <li><a href="adm.php"><button class="btnAdmin" type="submit">Administrador</button></a></li>
                <li><a href="sair.php"> Sair</a></li>
              <?php } }?>
              

        </ul>
        
      </nav>
    </header>
    
    <script src="js/navbar.js"></script>