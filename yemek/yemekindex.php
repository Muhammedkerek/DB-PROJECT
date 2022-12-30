<?php 
include('yemekheader.php');
$users = $obj->getUsers();
$sn=1;
if(isset($_POST['update'])){

    $user = $obj->getUserById();
    $_SESSION['yemek'] = pg_fetch_object($user);
    header('location:yemekedit.php');
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
  <h3>Records Of The menu</h3>
  <a href="yemekinsert.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> Add something to the menu</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">Menu info</div>
             
            <div class="panel-body">
            <table class="table table-bordered table-striped">
    <thead>
      <tr class="active">
            <th>Menu No.</th>  
            <th >Food Name</th>       
            <th>Price</th>
            <th>Calori </th>
            <th>Drink</th>
            <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($user = pg_fetch_object($users)): ?>   
      <tr align="left">
        <td ><?=$sn++?></td>
        <td><?=$user->name?></td>
        <td><?=$user->price?></td>
        <td><?=$user->calori?></td>
        <td><?=$user->drink?></td>
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
<?php include('yemekkfooter.php');?>