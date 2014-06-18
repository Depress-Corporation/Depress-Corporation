<?php

class imgUP{

    public function imgUP(){
        

    }

    public function upload($file, $diretorio){
        $_UP['pasta'] = '../produtos/'.$diretorio.'/';

        $_UP['tamanho'] = 1024 * 1024 * 2;

        $_UP['extensoes'] = array('jpg', 'png');

        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não ouve erro';
        $_UP['erros'][1] = 'O arquivo no upload e maior do que o limite';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

        if($file['arquivo']['error'] != 0){
            die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$file['arquivo']['error']]);
            exit;

        }

        
        if ($_UP['tamanho'] < $file['arquivo']['size']) {

            echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";

        }
        else{

            $nome_final = $file['arquivo']['name'];

        }

        if (move_uploaded_file($file['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo

            echo "Upload efetuado com sucesso!";

            echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';

        } else {

            // Não foi possível fazer o upload, provavelmente a pasta está incorreta

            echo "Não foi possível enviar o arquivo, tente novamente";

        }

        $verifica = '../produtos/'.$diretorio.'/' . $file['arquivo']['size'];
        echo "$verifica";
        if(file_exists("CAMINHO/PARA/ARQUIVO.txt")) {
            return true;
        }
        else {
            return false;
        }

    }
}

?>