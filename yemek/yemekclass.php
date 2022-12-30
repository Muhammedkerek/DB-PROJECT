<?php
include_once('yemekconnection.php'); 
class Db_Class{
    private $table_name = 'yemek';
    function createUser(){
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(name,price,calori,drink) "."VALUES('".$this->cleanData($_POST['name'])."','".$this->cleanData($_POST['price'])."','".$this->cleanData($_POST['calori'])."','".$this->cleanData($_POST['drink'])."')";
        return pg_affected_rows(pg_query($sql));
    }

    function getUsers(){             
        $sql ="select *from public." . $this->table_name . " ORDER BY id DESC";
        return pg_query($sql);
    } 

    function getUserById(){    
  
        $sql ="select *from public." . $this->table_name . "  where id='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 

    function deleteuser(){    
  
         $sql ="delete from public." . $this->table_name . "  where id='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 

    function updateUser($data=array()){       
     
        $sql = "update public.yemek set name='".$this->cleanData($_POST['name'])."',price='".$this->cleanData($_POST['price'])."', calori='".$this->cleanData($_POST['calori'])."',drink='".$this->cleanData($_POST['drink'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>