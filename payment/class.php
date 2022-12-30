<?php
include_once('connection.php'); 
class Db_Class{
    private $table_name = 'payment';
    function createUser(){
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(number,name,method,cvv) "."VALUES('".$this->cleanData($_POST['number'])."','".$this->cleanData($_POST['name'])."','".$this->cleanData($_POST['method'])."','".$this->cleanData($_POST['cvv'])."')";
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
     
        $sql = "update public.payment set number='".$this->cleanData($_POST['number'])."',name='".$this->cleanData($_POST['name'])."', method='".$this->cleanData($_POST['method'])."',cvv='".$this->cleanData($_POST['cvv'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>