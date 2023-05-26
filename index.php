<?php
   require "viagens.php";

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
            <div id="menu">
                <ul>
                    <li><a href="ajuda.php">Ajuda</a></li>
                    <li><a href="nossaempresa.php">Sobre nós</a></li>
                </ul>
            </div>
        </header> 
        
		<main id="conteudoprincipal">
            <div id="fotodaempresa">
                <img src="imagens/imagemPrincipal.png">
            </div>
            <section id="ofertas">
                <h1>PASSAGENS DISPONÍVEIS</h1>
                <div id="cards">
                
                    <?php
                        foreach($viagens as $i => $v){
                    ?>
                    <div id="viagens">
                        <a href="viagem.php?i=<?=$i?>">
                        <a href="viagem.php?i=<?=$i?>">
                            <img src="<?=$v["foto"]?>" alt="<?=$v["nome"]?>">
                        </a>
                        <h4><a href="viagem.php?i=<?=$i?>"><?=$v["nome"]?></a></h4>
                        </a>  
                    </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </section>
            
            <anside id="propaganda">
                <img src="imagens/propaganda1.png">
            </anside>

            <div id="textoempresa">
                <p>Bem-vindo à nossa transportadora de ônibus confiável e eficiente!</p>
                <br>
                <p>
                Se você está procurando uma forma segura, conveniente e confortável de viajar, você veio ao lugar certo. Nossa transportadora de ônibus tem o compromisso de oferecer serviços incumbidos de atender às suas necessidades de transporte.</p>
            </div>
            
            <div class="link">
                    <a href="nossaempresa.php" class="botao">Saiba mais</a>
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