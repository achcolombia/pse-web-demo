<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class=container>
			<h1>Demo PSE WEB paso 1</h1>
			<form action="submit.php" method="post">
				<div class="form-group">
					<label for="ecus">Ecus</label>
					<input type="text" class="form-control" name="ecus" placeholder="CUS encodeado">
				</div>
				<div class="form-group">
					<label for="amount">Monto</label>
					<input type="text" class="form-control" name="amount" placeholder="Monto del pago">
				</div>
				<div class="form-group">
					<label for="subject">Motivo</label>
					<input type="text" class="form-control" name="subject" placeholder="Motivo del pago">
				</div>
				<div class="form-group">
					<label for="authorizerId">Entidad financiera autorizadora</label>
					<select type="text" class="form-control" name="authorizerId">
						<option value="1040">BANCO AGRARIO</option>
						<option value="1052">BANCO AV VILLAS</option>
						<option value="1013">BANCO BBVA COLOMBIA S.A.</option>
						<option value="1032">BANCO CAJA SOCIAL</option>
						<option value="1019">BANCO COLPATRIA</option>
						<option value="1066">BANCO COOPERATIVO COOPCENTRAL</option>
						<option value="1006">BANCO CORPBANCA S.A</option>
						<option value="1051">BANCO DAVIVIENDA</option>
						<option value="1001">BANCO DE BOGOTA</option>
						<option value="1023">BANCO DE OCCIDENTE</option>
						<option value="1062">BANCO FALABELLA </option>
						<option value="1012">BANCO GNB SUDAMERIS</option>
						<option value="1060">BANCO PICHINCHA S.A.</option>
						<option value="1002">BANCO POPULAR</option>
						<option value="1058">BANCO PROCREDIT</option>
						<option value="1007">BANCOLOMBIA</option>
						<option value="1061">BANCOOMEVA S.A.</option>
						<option value="1009">CITIBANK </option>
						<option value="1014">HELM BANK S.A.</option>
						<option value="1507">NEQUI</option>
					</select>
				</div>
				<div class="form-group">
					<label for="userType">Tipo de cliente</label>
					<select type="text" class="form-control" name="userType">
						<option selected="selected" value="0">Persona</option><option value="1">Empresa</option>
					</select>
				</div>
				<div class="form-group">
					<label for="merchantName">Nombre del comercio</label>
					<input type="text" class="form-control" name="merchantName" placeholder="Nombre del comercio">
				</div>
				<div class="form-group">
					<label for="payerEmail">E-mail del pagador</label>
					<input type="text" class="form-control" name="payerEmail" placeholder="E-Mail del pagador">
				</div>
				<div class="form-group">
					<label for="returnURL">URL de retorno</label>
					<input type="text" class="form-control" name="returnURL" placeholder="URL de retorno">
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
				
			</form>
		</div>
	</body>
</html>
