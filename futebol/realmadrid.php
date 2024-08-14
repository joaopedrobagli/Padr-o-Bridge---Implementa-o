<?php
require_once "futebol.php";
class realmadrid extends futebol{

    public function contratacao(){
        echo "O Real Madrid Contratou " . $this->time->gettime();
    }
}



?>