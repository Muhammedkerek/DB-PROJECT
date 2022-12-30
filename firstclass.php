<?php
include_once('firstconnection.php'); 
class Db_Class{
    private $table_name = 'employee';
    function createUser(){
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(name,salary,position,place) "."VALUES('".$this->cleanData($_POST['name'])."','".$this->cleanData($_POST['salary'])."','".$this->cleanData($_POST['position'])."','".$this->cleanData($_POST['place'])."')";
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
     
        $sql = "update public.employee set name='".$this->cleanData($_POST['name'])."',salary='".$this->cleanData($_POST['salary'])."', position='".$this->cleanData($_POST['position'])."',place='".$this->cleanData($_POST['place'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>