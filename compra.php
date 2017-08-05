<?php 

$preco = $_POST['horas'] * 15 + 14.90;
$preco = $preco.'0';

$html = '<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no"/>
		<meta name="MobileOptimized" content="320">
		<meta name="HandheldFriendly" content="True">

		<meta name="description" content="O Uber das diaristas!">

		<meta property="og:url"           content="http://donamaid.com" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="Donamaid" />
		<meta property="og:description"   content="parceiros" />
		<meta property="og:image"         content="http://donamaid.com/imgs/donamaid.png" />

		<link rel="icon" href="imgs/favicon.png" />

		<title>Donamaid</title>
		

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>

		

		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version=\'2.0\';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,\'script\',\'https://connect.facebook.net/en_US/fbevents.js\');
		fbq(\'init\', \'1856087424622282\'); // Insert your pixel ID here.
		fbq(\'track\', \'PageView\');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=1856087424622282&ev=PageView&noscript=1"
		/></noscript>
		<!-- DO NOT MODIFY -->
		<!-- End Facebook Pixel Code -->

		<script>fbq(\'track\', \'acesso_ao_site\');</script>

	</head>
	<body class="prod">
        <section class="produto">
            <div class="logo" style="text-align: center">
                <img src="./imgs/donamaid.png" alt="Donamaid" />
            </div>
            <form action="" method="post" id="comprar">
                <label>Quantas horas?</label>
				<select name="horas" id="horas">
					<option value="1">1h</option>
					<option value="2">2h</option>
				    <option value="3">3h</option>
					<option value="4">4h</option>
					<option value="5">5h</option>
					<option value="6">6h</option>
					<option value="7">7h</option>
					<option value="8">8h</option>
				</select>
                <div class="preco"><span id="hora">'.$_POST['horas'].'</span> horas somente <span id="preco">R$ '.$preco.' </span></div>
				<div class="env_btn">
                    <div class="btn_produto" id="contratar">contratar</div>
                </div>

                <div class="horario">
                    <label>Para qual dia?</label>
                    <select name="dia">
                        <option value="segunda-feira">segunda-feira</option>
                        <option value="terça-feira">terça-feira</option>
                        <option value="quarta-feira">quarta-feira</option>
                        <option value="quinta-feira">quinta-feira</option>
                        <option value="sexta-feira">sexta-feira</option>
                        <option value="sábado">sábado</option>
                    </select>
                    <label>À partir de que horário?</label>
                    <select name="horario">
                        <option value="8h">à partir das 8h</option>
                        <option value="9h">à partir das 9h</option>
                        <option value="10h">à partir das 10h</option>
                        <option value="11h">à partir das 11h</option>
                        <option value="12h">à partir das 12h</option>
                        <option value="13h">à partir das 13h</option>
                        <option value="14h">à partir das 14h</option>
                        <option value="15h">à partir das 15h</option>
                        <option value="16h">à partir das 16h</option>
                        <option value="17h">à partir das 17h</option>
                    </select>
                </div>

                <div class="parceira">
                    <label>Você tem uma parceira favorita? Se sim, qual?</label>
                    <input type="text" name="parceira" placeholder="nome da parceira preferida" />
                    <p>É possível que nossa parceira não esteja disponível no horário desejado mas daremos preferência para lhe atender.
                    É obrigatório que seja essa parceira ou caso ela não esteja disponível podemos lhe enviar outra parceira?</p>
                    <label for="1">obrigatório
                    <input type="radio" id="1" name="obrigatorio" value="é obrigatório"></label>
                    <label for="2">pode ser outra parceira
                    <input type="radio" id="2" name="obrigatorio" value="não é obrigatório"></label>
                </div>


                <div class="dados">
                    <h4>Informe seus dados:</h4>
                    <input type="text" name="email" value="'.$_POST['email'].'">
                    <input type="text" name="nome" placeholder="nome">
                    <input type="text" name="telefone" placeholder="telefone">
                    <input type="text" name="rua" placeholder="rua">
                    <input type="text" name="numero" placeholder="número">
                    <input type="text" name="bairro" placeholder="complemento">
                    <input type="text" name="cidade" placeholder="Pelotas">
                    <div class="env_btn">
                        <div class="btn_produto" id="pagar">pagar</div>
                    </div>
                </div>

                

                <div class="pagar">
                    <p>Seu pedido de compra foi enviado com sucesso! Para efetuar sua compra, faça o depósito ou transferência bancária para uma das seguintes contas abaixo e envie seu 
                    comprovante de pagamento para o email ruben@donamaid.com. Sua compra somente será efetivada
                    após o envio do comprovante do pagamento.</p>

                    <div class="banco">
                        <div class="titulo" id="banri">
                            </br>
                            </br>
                            BANRISUL</br>
                        </div>
                        <div class="conta" id="conta_banri">
                            Titular: Janine Schneiders </br>
                            CPF: 02849416037</br>
                            Conta corrente</br>
                            Agencia: 0918</br>
                            Conta: 35.226221.0-1</br>
                            </br>
                            </br>
                        </div>

                        <div class="titulo" id="banri">
                            CAIXA ECONÔMICA FEDERAL</br>
                        </div>
                        <div class="conta" id="conta_banri">
                            Titular: Luiz Gilberto Rosa Camargo Junior</br>
                            CPF: 013632940-32</br>

                            Conta corrente</br>
                            Agencia: 4424</br>
                            Conta: 00021183-9</br>
                            </br>
                            </br>
                        </div>

                        <div class="titulo" id="banri">
                            BANCO DO BRASIL</br>
                        </div>
                        <div class="conta" id="conta_banri">
                            Titular: Rafael da Silva Dutra</br>
                            CPF: 018.260.010-69</br>

                            Conta corrente</br>
                            Agencia: 2884-3</br>
                            Conta: 119969-2</br>
                            </br>
                            </br>
                        </div>

                        <div class="titulo" id="banri">
                            ITAÚ</br>
                        </div>
                        <div class="conta" id="conta_banri">
                            Titular: Ruben Andres Pacheco de Oliveira</br>
                            CPF: 02086175078</br>

                            Conta corrente</br>
                            Agencia: 9225</br>
                            Conta: 05097-1</br>
                        </div>
                    </div>

                </div>
            </form>
        </section>
		<footer>
			<img src="imgs/logo_branco_donamaid.png" alt="Donamaid">
			<div class="social">
				<a href="https://www.facebook.com/donamaidbrasil" target="_blank">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>			
				<a href="https://twitter.com/donamaid" target="_blank">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>			
				<a href="https://www.instagram.com/donamaid" target="_blank">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</div>
			<p>© Copyright 2017. Todos os direitos reservados.</p>
		</footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/custom.js"></script>		
		<script type="text/javascript" src="js/slick/slick.min.js"></script>
	</body>	
</html> 
';

echo $html;

?>