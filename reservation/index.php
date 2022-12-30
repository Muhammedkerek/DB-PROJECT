<?php 
include('header.php');
$users = $obj->getUsers();
$sn=1;
if(isset($_POST['update'])){

    $user = $obj->getUserById();
    $_SESSION['reservation'] = pg_fetch_object($user);
    header('location:edit.php');
}
if(isset($_POST['delete'])){

   $ret_val = $obj->deleteuser();
   if($ret_val==1){
       
      echo "<script language='javascript'>";
      echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
      echo "</script>";
  }
}
?>

<div class="container-fluid bg-3 text-center">    
  <h3>Records Of The VIP page</h3>
  <a href="insert.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> Add something to VIP </a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">VIP info</div>
             
            <div class="panel-body">
            <table class="table table-bordered table-striped">
    <thead>
      <tr class="active">
            <th>VIP O N</th>  
            <th > Name:</th>       
            <th>Email:</th>
            <th>ID Number: </th>
            <th>Room Type:</th>
            <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($user = pg_fetch_object($users)): ?>   
      <tr align="left">
        <td ><?=$sn++?></td>
        <td><?=$user->person?></td>
        <td><?=$user->email?></td>
        <td><?=$user->tc?></td>
        <td><?=$user->type?></td>
        <td>
            <form method="post">
                <input type="submit" class="btn btn-success" name= "update" value="Update">   
                <input type="submit" onClick="return confirm('Please confirm deletion');" class="btn btn-danger" name= "delete" value="Delete">
                <input type="hidden" value="<?=$user->id?>" name="id">
            </form>
        </td>
      </tr>
    <?php endwhile; ?>   
    </tbody>
  </table>
</div>
 
</div>
</div>  
<?php include('footer.php');?>