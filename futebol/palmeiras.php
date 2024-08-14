<?php
require_once "futebol.php";

class palmeiras extends futebol{

    public function contratacao(){
        echo "O palmeiras contratou " . $this->time->gettime();
    }
}



?>