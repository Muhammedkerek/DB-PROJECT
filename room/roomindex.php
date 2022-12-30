<?php 
include('roomheader.php');
$users = $obj->getUsers();
$sn=1;
if(isset($_POST['update'])){

    $user = $obj->getUserById();
    $_SESSION['room'] = pg_fetch_object($user);
    header('location:roomedit.php');
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
  <h3>Records Of The Room page</h3>
  <a href="roominsert.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> Add Room </a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">Room info</div>
             
            <div class="panel-body">
            <table class="table table-bordered table-striped">
    <thead>
      <tr class="active">
            <th>R O N.</th>  
            <th >Room Number</th>       
            <th>Room capacity</th>
            <th>Room beds Number </th>
            <th>Room Price</th>
            <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($user = pg_fetch_object($users)): ?>   
      <tr align="left">
        <td ><?=$sn++?></td>
        <td><?=$user->rnumber?></td>
        <td><?=$user->capacity?></td>
        <td><?=$user->beds?></td>
        <td><?=$user->price?></td>
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
<?php include('roomfooter.php');?>