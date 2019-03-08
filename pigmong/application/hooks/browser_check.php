<?php
    function b_check(){
        if(preg_match('/(iPhone|Android|iPad|IEMobile|Server_KO_SKT)/', $_SERVER['HTTP_USER_AGENT'])){
            define('BROWSER_TYPE', 'M');
        }else{
            define('BROWSER_TYPE', 'W');
        }
    }
?>