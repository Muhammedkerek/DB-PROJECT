<?php 
include('header.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
$ret_val = $obj->createUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Employee Info managment page</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-eye-open"></span> View Info</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">Please Fill All The Required Fields To Add a Employee Info</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">
             
             <div class="form-group">
               <label class="control-label col-sm-2">Work Hours:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="hours" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Experience:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="experience" required>
               </div>
            </div>
            
             <div class="form-group">
               <label class="control-label col-sm-2">BirthDate:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="date" name="birthdate" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Vacation:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                 <input class="form-control" type="number" name="vacation" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-primary" name="submit"  value="Submit">
               </div>
            </div> 
        </div>      
</form>
</div>
</div>  
 <?php include('footer.php');?>