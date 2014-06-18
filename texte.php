 <!DOCTYPE HTML>
 <html lang="pt-br">
 <head>
	<meta charset="UTF-8">
 	
 	<title>Cadastrando...</title>
 </head>
 
 <body>
 	<?php

 		//include_once("model/img/imgUP.php");
 		
 		/*$diretorio = 'informatica';
 		$imgup = new imgUP();

 		if($imgup->upload($_FILES, $diretorio)){
 			echo'<br>Upload efetuado com sucesso<br>';

 		}*/

 		echo "string"; 
        include_once("controller/ProdutoController.php");
        
   		include_once("model/entidades/Produto.php");	
        
    	
    	
    	//instancia um objeto da classe produto e seta os seus atributos

    	$produto = new Produto();    
    	$produto->setNome($_POST['nome']);
    	$produto->setDescricao($_POST['descricao']);
    	$produto->setClassificacao($_POST['classificacao']);
    	$produto->setValor((float)$_POST['valor']);
        
        
    	$produtoController = new ProdutoController();
    	
    	$produtoController->gravarProdutos($produto);
    	echo('Cadastrado com sucesso"<br>');
    
	?>

	
	

	
	

 </body>
 </html>
