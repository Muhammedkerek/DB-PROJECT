<?php
include_once('connection.php'); 
class Db_Class{
    private $table_name = 'info';
    function createUser(){
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(hours,experience,birthdate,vacation) "."VALUES('".$this->cleanData($_POST['hours'])."','".$this->cleanData($_POST['experience'])."','".$this->cleanData($_POST['birthdate'])."','".$this->cleanData($_POST['vacation'])."')";
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
     
        $sql = "update public.info set hours='".$this->cleanData($_POST['hours'])."',experience='".$this->cleanData($_POST['experience'])."', birthdate='".$this->cleanData($_POST['birthdate'])."',vacation='".$this->cleanData($_POST['vacation'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>