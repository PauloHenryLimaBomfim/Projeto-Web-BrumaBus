<?php
    $nome = $_POST["nome"] ?? "Fulano";
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
                <h1>CONFIRMAÇÃO</h1>
                <p>Parabéns <?=$nome?>! Sua compra de passagem de ônibus foi confirmada. Agradecemos por escolher nossa transportadora para sua viagem. Guarde esse e-mail com cuidado, pois ele contém as informações importantes sobre seu bilhete. Em breve, você estará no caminho do seu destino. Tenha uma ótima viagem!</p>
                <div class="link">
                    <a href="index.php" class="botao">Voltar</a>
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