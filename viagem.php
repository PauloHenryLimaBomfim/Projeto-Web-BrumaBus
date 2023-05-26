<?php
    require "viagens.php";

    if(isset($_GET["i"])){
        $i = $_GET["i"];
        $v = $viagens[$i];
    }else{
        header("location: index.php");
        die;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>BrumaBus</title>
        <meta charset="utf-8">
        <link href="estilo.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600&display=swap" rel="stylesheet">

    </head>
    <body>
        
	<div id="site">
        
        <header id="topo">
            <a href="index.php"><img src="imagens/logo1.png"></a>
            <nav id="menu">
            <ul>
                <li><a href="ajuda.php">Ajuda</a></li>
                <li><a href="nossaempresa.php">Sobre nós</a></li>
            </ul>
            </nav>
        </header> 
        
		<main id="mainViagem">
            <div class="card">
                <h1>DETALHES DA PASSAGEM</h1>
                <img src="<?=$v["foto"]?>" alt="<?=$v["nome"]?>">
                <h3><?=$v["nome"]?></h3>
                <h4><?=$v["valor"]?> Reais</h4>
                <br>
                <p><?=$v["empresa"]?></p>
                <p><?=$v["descricao"]?></p>
                <div class="links">
                    <div class="link">
                        <a href="index.php" class="botao">Voltar</a>
                    </div>
                    <div class="link">
                        <a href="formulario.php" class="botao">Comprar!</a>
                    </div>
                </div>
            </div>
        </main>
        
        <footer id="rodape">
            <a href="index.php"><img id="logorodape" src="imagens/logo1.png"></a>
            
            <div id="formasdepagamento">
                <h4>Formas de pagamento</h4><br>
                <ul>    
                    <li>Aceitamos cartões de crédito</li>
                    <li>parcelado em até 12x sem juros</li>
                    <li>Boleto</li>
                    <li>Pix</li>
                    <li>PicPay</li>
                </ul>
                <br>
                    <h4>Aceitamos estas bandeiras:</h4><br>
                <img id="imgpagamento" src="imagens/formasDePagamento.png">
            </div>
        </footer>
    </div>
		
    </body> 
</html>