<?php

class Produto{

    private $S_nome;
    private $S_descricao;
    private $S_classificacao;
    private $F_valor;

		
    public function cadastraProduto(){
        echo('instancia Produto<br>');
    }

    public function setNome($S_Vnome){
	    $this->S_nome = $S_Vnome;
    }

    public function getNome(){

	    return $this->S_nome;
    }

    public function setDescricao($S_Vdescricao){
	    $this->S_descricao = $S_Vdescricao;
    }

    public function getDescricao(){

	    return $this->S_descricao;
    }

    public function setClassificacao($S_Vclassificacao){
	    $this->S_classificacao = $S_Vclassificacao;
    }

    public function getClassificacao(){

	    return $this->S_classificacao;
    }

    public function setValor($F_Vvalor){
	    $this->F_valor = $F_Vvalor;
    }

    public function getValor(){

	    return $this->F_valor;
    }

    

}

?>
