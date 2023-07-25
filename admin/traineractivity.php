<?php include_once("header.php");?>


			<?php
				//print_r($_POST);
				$id="";
				if(isset($_POST["btnSubmit"]))
				{
				$cnn1=mysqli_connect("localhost","root","","dbproject");
				//$tid=$_GET["Id"];
				$actname=$_POST["cmbop"];
				$fname=$_POST["cmbop1"];
		        $batchtimings=$_POST["cmbop2"];

				$str="insert into activity,trainer,batch values(activity.actname='$actname',trainer.fname='$fname',batch.batchtimings='$batchtimings'";
				//echo $str;
				$result=$cnn1->query($qry1);
				}
				?>
	
<form method="POST">
	
Activity<select name="cmbop">
	<?php
	$cnn=mysqli_connect("localhost","root","","dbproject");
	$qry="select actname from activity";
	$result=$cnn->query($qry);
	$str="";
	$x=1;
	while($row=$result->fetch_assoc())
	{
		$str.="<option value=".$row["actname"].">".$row["actname"]."</option>";

		if($x==1)
		{
			$str.="";
		}
		$x++;
	}
	echo $str;

?>
</select>
<br><br>
Trainer<select name="cmbop1">
	<?php
	$cnn=mysqli_connect("localhost","root","","dbproject");
	$qry="select fname from trainer";
	$result=$cnn->query($qry);
	$str="";
	$x=1;
	while($row=$result->fetch_assoc())
	{
		$str.="<option value=".$row["fname"]." >".$row["fname"]." </option>";

		if($x==1)
		{
			$str.="";
		}
		$x++;
	}
	echo $str;

?>
</select>
<br><br>
Timing<select name="cmbop2">
	<?php
	$cnn=mysqli_connect("localhost","root","","dbproject");
	$qry="select batchtiming from batch";
	$result=$cnn->query($qry);
	$str="";
	$x=1;
	while($row=$result->fetch_assoc())
	{
		$str.="<option value=".$row["batchtiming"].">".$row["batchtiming"]."</option>";

		if($x==1)
		{
			$str.="";
		}
		$x++;
	}
	echo $str;

?>
</select>
<br><br>
Days<tr>
			<th> option </th>
		<td> <select name="cmbop3">
			<option value="monday">Monday</option>
			<option value="tuesday">Tuesday</option>
			<option value="wednesday">Wednesday</option>
			<option value="thursday">Thursday</option>
			<option value="friday">Friday</option>
			<option value="saturday">Saturday</option>
			<option value="sunday">Sunday</option>
		</select> </td>
		</tr>
		<tr>

				<input type="date" name="date">

<input type="Submit" value="Submit" name="btnSubmit">
			</form>
<?php include_once("footer.php");?>

