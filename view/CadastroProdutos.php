 <!DOCTYPE HTML>
 <html lang="pt-br">
 <head>
        
	<meta charset="UTF-8">
 	<link rel="stylesheet" type="text/css" href="css/headerCSS.css"> 
 	<link rel="stylesheet" type="text/css" href="css/articleCSS.css">
 	<link type="text/javascript" href="js/jquery-1.11.1.min.js">
 	<link type="text/javascript" href="js/ajax.js">
 	<title>Loja</title>
 </head>
 
 <body>
 	<!-- Cabeçalho -->
 	<header>
 		<label id= "cabecalho">Cadastro Produtos</label>
 		
 	</header>

 	
 	<!-- Painel de Conteudo -->
 	<article>
 		<!-- Conteudo -->
 		<section>
 			<form method="post" action="../texte.php" enctype="multipart/form-data">
 				<label>Nome:</label><br/> 
 				<input type = "text" name = "nome"><br/><br/>
 				
 				<label>Descricao:</label><br/>
 				<textarea rows="4" cols="50" name ="descricao"></textarea><br/><br/>

 				<label>Classificacao:</label><br/>
 				<select size="1" name="classificacao">
					<option selected value="Selecione">Selecione!</option>
					<option value="Eletronico">Eletronicos</option>
					<option value="Informatica">Informatica</option>
				</select><br/><br/>

 				<label>Valor do produto:</label><br/>
 				R$<input type = "text" name = "valor"><br/><br/>
				
				<label>Imagem principal:</label> <br/>
				<input type="file" name="arquivo" /><br/><br/>

				<label>Imagem adicional:</label><br/>
				<input type="file" name="imagem2" /><br/><br/>

				<label>Imagem adicional:</label><br/>
				<input type="file" name="imagem3" /><br/><br/>		

				<input type="submit" value="Efetuar Cadastro" /><br/><br/>

			</form>

 		</section>
 	</article>

	<!-- Barra Complementar -->
	<aside></aside>

	<!-- Rodapé -->
	<footer></footer>

  </body>
 </html>
