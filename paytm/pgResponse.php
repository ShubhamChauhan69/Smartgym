<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

$mpid=$_GET['mpid'];
$mid=$_GET['mid'];
$amt=$_GET['amt'];


if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";

	echo "hi";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		
	//	echo "<b>Transaction status is success</b>" . "<br/>";
		echo"thank you";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.


		$date=date('Y');

		$cnn=mysqli_connect("localhost","root","","elegance");

		
		$qry1= "SELECT MONTHNAME(CURDATE()) as mmonth";
		$result1=$cnn->query($qry1);
		$row1=$result1->fetch_assoc();
		$m=$row1["mmonth"];
		$query="update maintance_pay set ispay='Yes',mid='$mid',pmtyid='1',payamount='$amt',dop=now(),year=$date,month='$m' where mpid=$mpid";
		//  echo $query;
		$result=$cnn->query($query);

		$qry="select * from member where mid=$mid";
		$result1=$cnn->query($qry);
		$row1=$result1->fetch_assoc();
       
		$email=$row1["email"];
		$fname=$row1["fname"];


		$to_email = $email;
        $subject = "Payment Received";
		echo $qry;
		echo $query;
		
        $headers = "From: Elegance Residency<eleresidency1609@gmail.com>\r\n";
        // $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type : text/html; charset=ISO-8859-1\r\n";



	 $body = "<html>
		<body>
			<p>Thank You...$fname <br>Your Maintance Bill of ₹<b>$amt</b> has been Received.<br></p>
		</body>
		</html>";

        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
            ini_set("error_reporting", E_ALL);
            print_r(error_get_last());
        }

	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>