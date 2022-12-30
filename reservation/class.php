<?php
include_once('connection.php'); 
class Db_Class{
    private $table_name = 'reservation';
    function createUser(){
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(person,email,tc,type) "."VALUES('".$this->cleanData($_POST['person'])."','".$this->cleanData($_POST['email'])."','".$this->cleanData($_POST['tc'])."','".$this->cleanData($_POST['type'])."')";
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
     
        $sql = "update public.reservation set person='".$this->cleanData($_POST['person'])."',email='".$this->cleanData($_POST['email'])."', tc='".$this->cleanData($_POST['tc'])."',type='".$this->cleanData($_POST['type'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>