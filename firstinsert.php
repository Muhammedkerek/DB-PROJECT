<?php 
include('firstheader.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
$ret_val = $obj->createUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "firstindex.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Employee creating page</h3>
  <a href="firstindex.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-eye-open"></span> View Employees</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">Make Sure To Fill All The Fields</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">
             
             <div class="form-group">
               <label class="control-label col-sm-2">Name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="name" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Salary:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="salary" required>
               </div>
            </div>
            
             <div class="form-group">
               <label class="control-label col-sm-2">position:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="position" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">place of birth:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
               <input class="form-control" type="text" name="place" required>
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
 <?php include('firstfooter.php');?>