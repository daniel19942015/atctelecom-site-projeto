<?php
   
        $server = "186.202.152.167";
        $user = "cad_colab";
        $key = "dan549216895";
        $banco = "cad_colab";

        $con = new mysqli($server, $user, $key, $banco);

        if($con->connect_error){
            echo "Erro" . $con->connect_error;
        }    


?>