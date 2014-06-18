<?php
	
	include_once("../model/dao/ProdutoDAO.php");
	echo "ssss";
	include_once("../model/entidades/Produto.php");
class ProdutoController {
	//private $O_produtoDao = new ProdutoDAO();

	public function ProdutoController(){

		echo "string";
	}
    
    public function gravarProdutos(Produto $P_produto){
    	//$O_produtoDao->gravarProdutos($P_produto);
    }
}

?>
