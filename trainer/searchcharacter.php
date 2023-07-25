<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Trainer Details</div>
<div class="card-body">
<h6>Search by Character</h6>

<table width="100%" cellspacing="20px">
<tr>
<td>
<a href="searchcharacter.php?id=A">A</a> &nbsp;
<a href="searchcharacter.php?id=B">B</a> &nbsp;
<a href="searchcharacter.php?id=C">C</a> &nbsp;
<a href="searchcharacter.php?id=D">D</a> &nbsp;
<a href="searchcharacter.php?id=E">E</a> &nbsp;
<a href="searchcharacter.php?id=F">F</a> &nbsp;
<a href="searchcharacter.php?id=G">G</a> &nbsp;
<a href="searchcharacter.php?id=H">H</a> &nbsp;
<a href="searchcharacter.php?id=I">I</a> &nbsp;
<a href="searchcharacter.php?id=J">J</a> &nbsp;
<a href="searchcharacter.php?id=K">K</a> &nbsp;
<a href="searchcharacter.php?id=L">L</a> &nbsp;
<a href="searchcharacter.php?id=M">M</a> &nbsp;
<a href="searchcharacter.php?id=N">N</a> &nbsp;
<a href="searchcharacter.php?id=O">O</a> &nbsp;
<a href="searchcharacter.php?id=P">P</a> &nbsp;
<a href="searchcharacter.php?id=Q">Q</a> &nbsp;
<a href="searchcharacter.php?id=R">R</a> &nbsp;
<a href="searchcharacter.php?id=S">S</a> &nbsp;
<a href="searchcharacter.php?id=T">T</a> &nbsp;
<a href="searchcharacter.php?id=U">U</a> &nbsp;
<a href="searchcharacter.php?id=V">V</a> &nbsp;
<a href="searchcharacter.php?id=W">W</a> &nbsp;
<a href="searchcharacter.php?id=X">X</a> &nbsp;
<a href="searchcharacter.php?id=Y">Y</a> &nbsp;
<a href="searchcharacter.php?id=Z">Z</a> &nbsp;
</td>
</tr>
<tr>
<td>
<?php
if(isset($_GET["id"]))
{
	$fname=$_GET["id"];
	$cnn=mysqli_connect("localhost","root","","dbproject");
$qry="Select * from member where fname like '$fname%'";
$result=$cnn->query($qry);

$str="<table class='table table-bordered dataTable'><tr><th>User Name</th><th>Name</th><th>Pic</th><th>Email</th><th>Call</th><th>Join date</th><th>Birthdate</th></tr>";

while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["uname"]."</td><td>".$row["fname"]." ".$row["lname"]."</td><td><img src='image/".$row["img"]."' height='100' width='100'></td><td>".$row["email"]."</td><td>".$row["contactno"]."</td><td>".$row["doj"]."</td><td>".$row["dob"]."</td></tr>";
}
$str.="</table>";
echo $str;
}
?>
</td>
</tr>
</table>
</div>
</div>
</div>

</table>