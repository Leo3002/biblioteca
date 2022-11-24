<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Book</title>
    
</head>
<body>
    <?php 
        session_start();
        include 'conexao.php'; 
        include 'navbar.php';
        

        $consulta = $cn->query('select nomeLivro,preco,capaLivro,quantiEstoque from livros');
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
                <div class="col-sm-3">
                    <img src="imagens\<?php echo $exibe['capaLivro']?>.jpg" class="img-responsive" style="width:100%">
                    <div><h4><b><?php echo mb_strimwidth($exibe['nomeLivro'],0,30,'...');?></b></h4></div>
                    <div><h4>R$:<?php echo number_format($exibe['preco'],2,',','.');?></h4></div>
                    <div class="text-center">
                        <button>
                            <span>Detalhes</span>
                        </button>
                    </div>
                    <div class="text-center">
                        <?php if($exibe['quantiEstoque']> 0) {  ?>                    
                        <button>
                            <span>Compra</span>
                        </button>
                        <?php } else{?>
                        <button disabled>
                            <span>Indisponivel</span>
                        </button>
                        <?php } ?>
                    </div>  
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include 'rodape.html'?>
</body>
</html>