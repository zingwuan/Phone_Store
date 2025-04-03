<?php
    function fixSqlInject($sql){
        $sql=str_replace('\\','\\\\',$sql);
        $sql=str_replace('\'', '\\\'',$sql);
        return $sql;
    }
    function getGet($key){
        $value='';
        if(isset($_GET[$key])){
            $value = $_GET[$key];
            $value = fixSqlInject($value);
        }
        return $value;
    }
    function getPost($key){
        $value='';
        if(isset($_POST[$key])){
            $value = $_POST[$key];
            $value = fixSqlInject($value);
        }
        return $value;
    }
    function getCookie($key){
        $value='';
        if(isset($_COOKIE[$key])){
            $value = $_COOKIE[$key];
            $value = fixSqlInject($value);
        }
        return $value;
    }
    function getSession($key){
        $value='';
        if(isset($_SESSION[$key])){
            $value = $_SESSION[$key];
            // $value = fixSqlInject($value);
        }
        return $value;
    }
    
?>
