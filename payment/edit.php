<?php 
include('header.php');
$user = $_SESSION['payment'];
if(isset($_POST['update']) and !empty($_POST['update'])){
$ret_val = $obj->updateUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Updated Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Updating the Payment Page</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-step-backward"></span>Back</a>
  <br>  
  <div class="panel panel-primary">
        <div class="panel-heading">You can update it all from here</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">             
             <div class="form-group">
               <label class="control-label col-sm-2">Card Number:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$user->number?>"type="number" name="number" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Customer Name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$user->name?>"type="text" name="name" required>
               </div>
            </div>            
            <div class="form-group">
             
             <label id="me" class="control-label col-sm-2">Payment Method:<span style='color:red'>*</span></label>
             <div class="col-sm-5">
             <select id="me" name="method" class="form-control" class="he" value="<?=$user->method?>">
             <option value="master card">master card</option>
          <option value="visa card">visa card</option>
          <option value="Paypal">Paypal</option>
</select>
</div>
</div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">CVV<span style='color:red'>*</span></label>
               <div class="col-sm-5">
               <input class="form-control" type="number" name="cvv" min="000" max="999" required >
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
 <?php include('footer.php');?>