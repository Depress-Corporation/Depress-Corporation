<?php

class DAO {

    private $S_host = "localhost";
    private $S_user = "root";
    private $S_password = "123456789";
    private $S_database = "loja";

    private $S_query;
    private $S_link;
    private $result;


    public function DAO(){
        


    }

    private function connect(){
        $this->S_link=mysql_connect($this->S_host,$this->S_user,$this->S_password)or die(mysql_error());
        
        mysql_select_db($this->S_database, $this->S_link)or die(mysql_error());

    }

    private function disconnect(){
        return mysql_close($this->S_link);
    }

    public function executeQuery($S_Pquery){

        $this->connect();
        $this->S_query = $S_Pquery;

        $this->result = mysql_query($this->S_query)or die(mysql_error());
        $this->disconnect();
        return $this->result;

    }
}

?>
