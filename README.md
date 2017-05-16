# PSE Móvil

PSE Móvil permite a los clientes que utilizan dispositivos móviles autorizar pagos desde una APP en vez de usar el navegador Web. Esto permite mayor control, recordar credenciales de forma segura y una experiencia nativa.

PSE Móvil puede ser invocado directamente desde las páginas web de los comercios y con esto mejorar notablemente la experiencia del usuario.

Este repositorio es ejemplo y documentación del proceso para integrar la tecnología Browser2App (usada en PSE Móvil) con la web del comercio.

    
# Invocación

Antes de invocar la APP es necesario utilizar la API de ACH Colombia para generar un pago de manera estandar hasta el punto en que se obtiene la URL de redirección hacia el registro PSE que es de la forma

	https://registro.pse.com.co/PSEUserRegister/StartTransaction.htm?enc=XXXXXXXXXX


Al valor del parámetro "enc" de la url anterior le llamaremos ecus o cus encodeado.
 
Adicionalmente a eso se debe saber el identificador de la entidad financiera autorizadora y el tipo de cliente que ha sido seleccionado según los mismos códigos usados al momento de consultarle al usuario su banco, es decir:

Entidades financieras autorizadoras:
- 1040: BANCO AGRARIO
- 1052: BANCO AV VILLAS
- 1013: BANCO BBVA COLOMBIA S.A.
- 1032: BANCO CAJA SOCIAL
- 1019: BANCO COLPATRIA
- 1066: BANCO COOPERATIVO COOPCENTRAL
- 1006: BANCO CORPBANCA S.A
- 1051: BANCO DAVIVIENDA
- 1001: BANCO DE BOGOTA
- 1023: BANCO DE OCCIDENTE
- 1062: BANCO FALABELLA 
- 1012: BANCO GNB SUDAMERIS
- 1060: BANCO PICHINCHA S.A.
- 1002: BANCO POPULAR
- 1058: BANCO PROCREDIT
- 1007: BANCOLOMBIA
- 1061: BANCOOMEVA S.A.
- 1009: CITIBANK 
- 1014: HELM BANK S.A.
- 1507: NEQUI

Tipos de usuario:
- 0: Persona natural
- 1: Persona jurídica

Con estos datos se puede invocar la aplicación PSE móvil dirctamente desde la página del comercio. Para eso se deben realizar los siguientes pasos:

1. Disponibilizar un div de datos de la transacción

		<div id="b2a-data"
		 data-amount="<?php echo $_POST["amount"] ?>" //Sin separador de miles, usando "." como separador de decimales y dos cifras significativas.
		 data-subject="<?php echo $_POST["subject"] ?>"
		 data-authorizer-id="<?php echo $_POST["authorizerId"] ?>"
		 data-user-type="<?php echo $_POST["userType"] ?>"
		 data-merchant-name="<?php echo $_POST["merchantName"] ?>"
		 data-return-url="<?php echo $_POST["returnURL"] ?>"></div>
		 
2. Llamar la biblioteca javascript b2a.js

		<script type="text/javascript"
                src="https://b2a.pse.com.co/api/automata/b2a.js?id=<?php echo $_POST["userType"] . $_POST["authorizerId"] ?>&ts=<?php echo time(); ?>"></script>
                
3. Crear las siguientes funciones javascript

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
        
4. Finalmente conectar la función startPayment() con un botón en la página.

		<input type="button" value="Pagar" onclick="startPayment()" class="btn btn-default">
	
Todos los campos deben coincidir exáctamente con los utilizados al momento de crear el pago usando los webservices de ACH si algún campo no coincide la aplicación le mostrará un mensaje de error del tipo "Datos inconsistentes".

Lo mismo ocurre con el campo "merchant" que debe coincidir exáctamente con el nombre del comercio registrado en ACH Colombia, por ejemplo si el nombre del comercio es "ACH Colombia S.A." e intentamos iniciar un pago entregando en el parámetro "merchant" la cadena "ACH Colombia" el pago fallará con error de "Datos inconsistentes".	
	

Al finalizar el pago, PSE móvil direccionará al usuario hacia la URL de retorno asociada al pago..

    
