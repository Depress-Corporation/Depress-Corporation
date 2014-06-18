<?php
    include_once("../model/dao/ProdutoDAO.php");
    include_once("../model/entidades/Produto.php");
    
    //instancia um objeto da classe produto e seta os seus atributos
    $produto = new Produto();    
    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setClassificacao($_POST['classificacao']);
    $produto->setValor((float)$_POST['valor']);
    
    
    $produtoDAO = new ProdutoDAO();
    $produtoDAO->gravarProdutos($produto);
    echo('Cadastrado com sucesso"<br>');
    


?>
