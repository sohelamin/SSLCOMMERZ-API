<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>SSL Commerce Example</title>
</head>
<body>
	<form action="https://www.sslcommerz.com.bd/gwprocess/testbox/" method="post" name="form1">
		<input type="hidden" name="store_id" value="test" /> <!� You have to put your store ID here - >
		<input type="hidden" name="total_amount" value="800" />
		<input type="hidden" name="tran_id" value="ftrans01" />
		<?php $itemid='fbfan01'; // Set your item/product id here ?>
		<input type="hidden" name="success_url" value="http://facebookcorner.com/api_test/notify.php?itemid=<?php echo $itemid;?>" />
		<input type="hidden" name="fail_url" value="http://facebookcorner.com/api_test/fail.php?itemid=<?php echo $itemid;?>" />
		<input type="hidden" name="cancel_url" value="http://facebookcorner.com/api_test/cancel.php?itemid=<?php echo $itemid;?>" />
		<input type="submit" value="Pay with SSLCOMMERZ" name="pay">
	</form>	
</body>
</html>
