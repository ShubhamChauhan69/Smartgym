<?php include_once("header.php");?>
<div class="container-fluid">
<div class='card mb-3'>
<div class="card-header">
            <i class="fas fa-table"></i>
            Tips</div>
<div class="card-body">


<div class="animated fadeIn">

<?php
{
$cnn=mysqli_connect("localhost","root","","dbproject");

$result=$cnn->query("select * from tips");

$str="";

	while($row=$result->fetch_assoc())
	{

                $str.="<div class='row'>

                    <div>
                        <div class='card'>
                            <div class='card-header'>
                                <h4>".$row["ttitle"]."</h4>
                            </div>
                            <div class='card-body'>
                                <p class='text-muted m-b-15'>".$row["tdescription"] ."</p>


                            </div>
                        </div>
                    </div>
                </div>";
}
echo $str;
}
?>


                    <!-- /# column -->
                </div>




            </div>
</div>
</div>
</div>

	<?php include_once("footer.php");?>