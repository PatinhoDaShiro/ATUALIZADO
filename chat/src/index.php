<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	$nome = $_SESSION['userName'];
	include 'D:\\xampp\htdocs/TGE/chat-conection.php';
	include 'D:\\xampp\htdocs/TGE/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chat</title>
	<link rel="icon" href="../img/icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php
	include TEMPLATE_BASE.'/head.php';
	include TEMPLATE_BASE.'/nav.php';
?>
<link rel="stylesheet" href="../css/estilo.css" alt="">
</head> 

<body>
<?php
	include './template/menuChats.php';
?>		
				
<div class="divs col s12 l6" >    
					<div class="fundo col s12">
							<div class="chat" id="chat">
									
							</div>					
						<div id="texto">

						
					</div>

						</div>
						<div class="formulariomsg centered" action="index.php" method="POST">
								<textarea name="mensagem" id='msg' class="mensagem" placeholder="Digite sua mensagem aqui. " data-ls-module="charCounter" maxLength="2000"></textarea>
								<button type="button" class="botaoEnviar  btn waves-effect waves-light" id="btnEnviar"><i class="material-icons right">send</i>
 								</button>
						</div>
						</div>
						
<?php
	include './template/usuarios.php';
?>	







	</body>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script type="text/javascript">








		function abaixarbarra(){
			var div = document.getElementById('chat');
			div.scrollTo(0, 1000);
		}

		function ajax(){
						var req = new XMLHttpRequest();
						req.onreadystatechange = function(){
							if (req.readyState == 4 && req.status == 200) {
									document.getElementById('chat').innerHTML = req.responseText;
							}
				}
			req.open('GET', '../src/php/chat.php', true);
			req.send();

		}

		window.onload = (event) => {
			ajax();
		};

		$(function(){

			$('#btnEnviar').click(function(){
				
				if($('#msg').val() === ''){

					
				}else{
					var data = {
					mensagem: $('#msg').val()

					}

					$.post('http://localhost/TGE/chat/src/index.php', data);	

					$('#msg').val('');
				}
				
			});

		});

		setInterval(function(){ajax();}, 500);

</script>

		<?php
			require_once('./php/chat-conexao.php');

			$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

			if($mensagem == ''){
				return false;
			}else{
			
			$sql = $pdo->prepare('INSERT INTO mensagens (nome, mensagem) VALUES (:nameParam, :msgParam)');

			$nomes = htmlspecialchars($nome);
			$mensagem = htmlspecialchars($mensagem);

			$sql->bindParam(':nameParam', $nomes);
			$sql->bindParam(':msgParam', $mensagem);
			$sql->execute();
			
}
?>


	
	







</html>