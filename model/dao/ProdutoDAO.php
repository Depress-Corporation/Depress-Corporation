<?php
include_once("DAO.php");
include_once("../entidades/Produto.php");
class ProdutoDAO extends DAO{

    public function ProdutoDAO(){
   

    }

    public function gravarProdutos(Produto $P_produto){
        $nome = $P_produto->getNome();
        $descricao = $P_produto->getDescricao();
        $classificacao = $P_produto->getClassificacao();
        $valor = $P_produto->getValor();

        $SQL = "INSERT INTO produtos(nome, descricao, classificacao, valor)
        VALUES('$nome', '$descricao', '$classificacao', '$valor')";
        
        $this->executeQuery($SQL);
        
    }
}

?>