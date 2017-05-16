<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://registro.pse.com.co/PSEUserRegister/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://registro.pse.com.co/PSEUserRegister/js/bootstrap.min.js"></script>
</head>
<body>
<div id="b2a-data"
     data-amount="<?php echo $_POST["amount"] ?>"
     data-subject="<?php echo $_POST["subject"] ?>"
     data-authorizer-id="<?php echo $_POST["authorizerId"] ?>"
     data-user-type="<?php echo $_POST["userType"] ?>"
     data-merchant-name="<?php echo $_POST["merchantName"] ?>"
     data-return-url="<?php echo $_POST["returnURL"] ?>"></div>

<script>
	function getFinger() {
		return "";
	}
	function startPayment() {
		b2a.paymentData.cus = "<?php echo $_POST["ecus"] ?>";
		b2a.paymentData.paymentId = b2a.paymentData.cus;
		b2a.paymentData.payerEmail = "<?php echo $_POST["payerEmail"] ?>";
		b2a.startPayment();
	}
</script>
<script type="text/javascript"
        src="https://b2a.pse.com.co/api/automata/b2a.js?id=<?php echo $_POST["userType"] . $_POST["authorizerId"] ?>&ts=<?php echo time(); ?>"></script>


<div class=container>
    <h1>Demo PSE WEB paso 2</h1>
    <input type="button" value="Pagar" onclick="startPayment()" class="btn btn-default">
</div>


</body>
</html>
