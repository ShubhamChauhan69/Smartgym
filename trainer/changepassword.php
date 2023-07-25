<?php include_once("header.php");?>
<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Change password</div>
<div class="card-body">
<?php

if(isset($_POST["btnSubmit"]))

?>


<form name="form1" method="post">

<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
        <div>Old password</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtuname">
            </div>
          </div>


          <div>New password</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtfname">
           	</div>
          </div>

          <div>Conform password</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="txtlname">
           	</div>
          </div>

          <input type="Submit" name="btnSubmit" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>

        
</div>
</div>
</form>
</div>
</div>
</div>



<?php include_once("footer.php");?>