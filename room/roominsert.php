<?php 
include('roomheader.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
$ret_val = $obj->createUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "roomindex.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Room managment page</h3>
  <a href="roomindex.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-eye-open"></span> View Room properties</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">Please Fill All The Required Fields To Add a Room</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">
             
             <div class="form-group">
               <label class="control-label col-sm-2">Room Number:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="rnumber" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Room capacity:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="capacity" required>
               </div>
            </div>
            
             <div class="form-group">
               <label class="control-label col-sm-2">Room Beds:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="beds" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Room Price<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                 <input class="form-control" type="number" name="price" required>
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
 <?php include('roomfooter.php');?>