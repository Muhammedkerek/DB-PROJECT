<?php 
include('firstheader.php');
$user = $_SESSION['employee'];
if(isset($_POST['update']) and !empty($_POST['update'])){
$ret_val = $obj->updateUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Updated Successfully");'; 
    echo 'window.location.href = "firstindex.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Here You Can Update The Employee's information</h3>
  <a href="firstindex.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-step-backward"></span>Back</a>
  <br>  
  <div class="panel panel-primary">
        <div class="panel-heading">Please Make Sure To fill All The Required Fields</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">             
             <div class="form-group">
               <label class="control-label col-sm-2">Name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$user->name?>"type="text" name="name" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Salary:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$user->salary?>"type="number" name="salary" required>
               </div>
            </div>            
             <div class="form-group">
               <label class="control-label col-sm-2">Position:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$user->position?>"type="text" name="position" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Place of birth:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
               <input class="form-control" type="text" name="place" required>
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
 <?php include('firstfooter.php');?>