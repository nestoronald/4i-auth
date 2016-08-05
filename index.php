<html>
	<body>
		<div>
			<?php 
				$folders="demos_4identity/autenticacion/";
				//$url_4identity_server_auth="http://dominio.licencia.com/smartengine/bit4id-sign.min.js";
				$url_4identity_server_auth="https://www.4identity.eu/smartengine/bit4id-sign.min.js";
				$secure_code="4sCCvGMx8PaxuYQ==";
			?>
			<form class="bit4id-auth" action="<?php echo $folders;?>auth-ok.php" method="post">
				<div class="bit4id-authReq" style="display:none;">
					<div class="bit4id-challenge"><?php echo $secure_code;?>
					</div>
					<div class="bit4id-certType">ANY</div>
					<div class="bit4id-issuerFilter"></div>
				</div>
				<div id="bit4id-status">Espere hasta la conexi&oacute;n</div>
				<input type="submit" disabled="disabled" value="Autenticar" name="cmd">
			</form>
			<script src="<?php echo $url_4identity_server_auth;?>"></script>
		</div>
	</body>
</html>