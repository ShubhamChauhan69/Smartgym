<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Member Attendance</div>
<div class="card-body">
		<form name="form1" method="post">
<?php
		$cnn=mysqli_connect("localhost","root","","dbproject");
		$id="";
		if(isset($_POST["btnSubmit2"]))
		{
		$id=$_POST["txtmid"];
		$qry="select member.fname,member.lname,ispresent from attendance,member where member.mid='$id'";
		//echo $qry;
		$result=$cnn->query($qry);

		$str="<table class='table'><tr><th>Member Name</th><th>Attendance Statues</th></tr><tr>";
		while($row=$result->fetch_assoc())
		{
		$str.="<tr><td>".$row["fname"]."".$row["lname"]."</td><td>".$row["ispresent"]." </td></tr>";
		}
		$str.="</tr></table>";
		echo $str;
		}
		?>    
<div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text"  class="form-control" name="txtmid" value="<?php echo $id ?>" placeholder="insert Member Id">
            </div>
          </div>
          <input type="Submit" name="btnSubmit2" class="btn btn-primary btn-block" value="Submit">
       </div>
    </div>
	
        
</div>
</div>
</form>
</div>
</div>
</div>




<?php include_once("footer.php");?>