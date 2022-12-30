<?php
include_once('gymconnection.php'); 
class Db_Class{
    private $table_name = 'gym';
    function createUser(){
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(name,job,weight,year) "."VALUES('".$this->cleanData($_POST['name'])."','".$this->cleanData($_POST['job'])."','".$this->cleanData($_POST['weight'])."','".$this->cleanData($_POST['year'])."')";
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
     
        $sql = "update public.gym set name='".$this->cleanData($_POST['name'])."',job='".$this->cleanData($_POST['job'])."', weight='".$this->cleanData($_POST['weight'])."',year='".$this->cleanData($_POST['year'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>