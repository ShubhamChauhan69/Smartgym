<?php include_once("header.php");?>
<html>
<div class="page-header">
							<h1>
								Report
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div>
		<body background="img\ls.jpg" height='600' width='1400'>
						<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>

							
						</ul><!-- /.breadcrumb -->	
					</div>
	<?php
	if(isset($_POST["submit1"]))
	{ echo("<script>location.href='reportorderdetail.php'</script>");}
	if(isset($_POST["submit2"]))
	{ echo("<script>location.href='reportproduct.php'</script>");}
	
	?>
<form method="post">


	<table border='2' class='table table-bordered table-hover'>
		<tr>
  	<td>	
  	 <input type="Submit" name="submit1" value="Order  Report"/>
	</td>
		</tr>
		<tr>
	<td>	
  	 <input type="Submit" name="submit2" value="Product Report"/>
	</td>
		</tr>
		
</form>

		</body>
</html>
<?php include_once("footer.php") ?>