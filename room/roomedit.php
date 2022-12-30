<?php 
include('roomheader.php');
$user = $_SESSION['room'];
if(isset($_POST['update']) and !empty($_POST['update'])){
$ret_val = $obj->updateUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Updated Successfully");'; 
    echo 'window.location.href = "roomindex.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Updating the Room's information</h3>
  <a href="roomindex.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-step-backward"></span>Back</a>
  <br>  
  <div class="panel panel-primary">
        <div class="panel-heading">You can update it all from here</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">             
             <div class="form-group">
               <label class="control-label col-sm-2">Room Number:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$user->rnumber?>"type="number" name="rnumber" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Room capacity:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$user->capacity?>"type="number" name="capacity" required>
               </div>
            </div>            
             <div class="form-group">
               <label class="control-label col-sm-2">Beds Number:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$user->beds?>"type="number" name="beds" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Room Price<span style='color:red'>*</span></label>
               <div class="col-sm-5">
               <input class="form-control" type="number" name="price" required>
               </div>
               <input type="hidden" value="<?=$user->id?>" name="id">
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                 <input type="submit" class="btn btn-success" name="update" value="Update">                    
                </div>
            </div> 
        </div>      
</form>
</div>
</div>  
 <?php include('roomfooter.php');?>