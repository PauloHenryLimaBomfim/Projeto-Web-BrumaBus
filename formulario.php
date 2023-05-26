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
            <h1>CADASTRO</h1>
                <div class="form">
                <h2>Informe seus dados:</h2>
                <form action="confi.php" method="POST">
                    <div class="dentro">
                        <label>Nome completo:
                            <input type="text" name="nome" required>
                        </label>

                        <label>E-mail:
                            <input type="email" name="email" required>
                        </label>

                        <label>Telefone:
                            <input type="tel" name="telefone" required>
                        </label>

                        <label>Data de nascimento:
                            <input type="date" name="data" required>
                        </label>

                        <label>CPF:
                            <input type="tel" name="cpf" required pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="000.000.000-00">
                        </label>

                        <label>Horario de saida:
                            <select name="horario">
                                <option value="">4:00</option>
                                <option value="">9:00</option>
                                <option value="">14:00</option>
                                <option value="">19:00</option>
                                <option value="">22:00</option>
                            </select>
                        </label>

                        <label>Forma de pagamento:
                            <select name="pagamento">
                                <option value="">Boleto</option>
                                <option value="">Parcelado 12x</option>
                                <option value="">Picpay</option>
                                <option value="">Pix</option>
                            </select>
                        </label>
                            <button> Enviar </button>
                        </form>
                    </div>
                </div>
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