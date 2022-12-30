<?php
include_once('roomconnection.php'); 
class Db_Class{
    private $table_name = 'room';
    function createUser(){
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(rnumber,capacity,beds,price) "."VALUES('".$this->cleanData($_POST['rnumber'])."','".$this->cleanData($_POST['capacity'])."','".$this->cleanData($_POST['beds'])."','".$this->cleanData($_POST['price'])."')";
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
     
        $sql = "update public.room set rnumber='".$this->cleanData($_POST['rnumber'])."',capacity='".$this->cleanData($_POST['capacity'])."', beds='".$this->cleanData($_POST['beds'])."',price='".$this->cleanData($_POST['price'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>