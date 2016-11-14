<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Material Design</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Indie+Flower|Roboto" rel="stylesheet">

	<link href="layout.css" rel="stylesheet">

</head>
<body>
	<div class="titulo">Robert Design</div>
	<header class="div-top menu">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="galeria.php">Galeria</a></li>
			<li><a href="contato.php">Contato</a></li>
			<li><a href="sobre.php">Sobre</a></li>
		</ul>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-10 conteudo">

					<h2>Entre em contato</h2>
					<p>Developers trust Stack Overflow to help solve coding problems and use Stack Overflow Jobs to find job opportunities. We’re committed to making the internet a better place, and our products aim to enrich the lives of developers as they grow and mature in their careers.</p>

					<div class="form-contato">
						<form action="#" method="post">
							<div>
								<div><label for="nome">Nome:</label></div>
								<input class="width200" type="text" required="" name="nome" placeholder="Seu Nome"><br><br>
							</div>

							<div>
								<div><label for="email">Email:</label></div>
								<input class="width200" type="text" required="" name="email" placeholder="Seu Endereço de mail"><br><br>
							</div>

							<div>
								<div><label for="email">Assunto:</label></div>
								<input class="width200" type="text" required="" name="assunto" placeholder="Assunto do Contato"><br><br>
							</div>

							<div>
								<div><label for="mensagem">Mensagem:</label></div>
								<textarea class="width200" name="mensagem" id="" rows="5" placeholder="Descreva o motivo do contato"></textarea><br><br>
							</div>

							<div>
								<button type="submit">Enviar</button><br><br>
							</div>
						</div>
					</form>
				</div>

			<div class="col-sm-1"></div>
		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10 botton-footer">Powed by <a href="#">Robert Design</a></div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</body>
</html>