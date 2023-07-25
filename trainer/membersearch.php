<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Member Details</div>
<div class="card-body">
<h6>Search by Character</h6>

<table width="100%" cellspacing="20px">
<tr>
<td>
<a href="membersearch.php?id=A">A</a> &nbsp;
<a href="membersearch.php?id=B">B</a> &nbsp;
<a href="membersearch.php?id=C">C</a> &nbsp;
<a href="membersearch.php?id=D">D</a> &nbsp;
<a href="membersearch.php?id=E">E</a> &nbsp;
<a href="membersearch.php?id=F">F</a> &nbsp;
<a href="membersearch.php?id=G">G</a> &nbsp;
<a href="membersearch.php?id=H">H</a> &nbsp;
<a href="membersearch.php?id=I">I</a> &nbsp;
<a href="membersearch.php?id=J">J</a> &nbsp;
<a href="membersearch.php?id=K">K</a> &nbsp;
<a href="membersearch.php?id=L">L</a> &nbsp;
<a href="membersearch.php?id=M">M</a> &nbsp;
<a href="membersearch.php?id=N">N</a> &nbsp;
<a href="membersearch.php?id=O">O</a> &nbsp;
<a href="membersearch.php?id=P">P</a> &nbsp;
<a href="membersearch.php?id=Q">Q</a> &nbsp;
<a href="membersearch.php?id=R">R</a> &nbsp;
<a href="membersearch.php?id=S">S</a> &nbsp;
<a href="membersearch.php?id=T">T</a> &nbsp;
<a href="membersearch.php?id=U">U</a> &nbsp;
<a href="membersearch.php?id=V">V</a> &nbsp;
<a href="membersearch.php?id=W">W</a> &nbsp;
<a href="membersearch.php?id=X">X</a> &nbsp;
<a href="membersearch.php?id=Y">Y</a> &nbsp;
<a href="membersearch.php?id=Z">Z</a> &nbsp;
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
$str="<table border='2'><tr><th>Name</th><th>Date of Join</th><th>Pic</th></tr>";
while($row=$result->fetch_assoc())

{
	$str.="<tr><td>".$row["fname"]." ".$row["lname"] ."</td><td>".$row["doj"]." </td><td><img src='image/".$row["img"]."' height='100' width='100'></td></tr>";
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