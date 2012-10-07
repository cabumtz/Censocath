<html>
<head>
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Encuesta</title>
	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/jqueryui/css/<?= THEME_NAME ?>/jquery-ui-1.8.23.custom.css" >
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/datatables/css/jquery.dataTables_themeroller.css" >
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/css/main.css" >

	<script type="text/javascript" src="<?=base_url()?>resources/jqueryui/js/jquery-1.8.0.min.js" ></script>
	<script type="text/javascript" src="<?=base_url()?>resources/jqueryui/js/jquery-ui-1.8.23.custom.min.js" ></script>
	
	<script type="text/javascript" src="<?=base_url()?>resources/datatables/js/jquery.dataTables.min.js" ></script>
	<script type="text/javascript" src="<?=base_url()?>resources/js/encuesta.js" ></script>
</head>
<body>

	<div id="centerPanel" >
		<h1>Encuesta</h1>
		<br/>
		<?= form_open('encuesta_familia') ?>
			<div id="accordion">
				<!-- ===================================================================================== -->
				<div>
					<h2>Datos de Encuesta</h2>
					<div>
						<?= $datosEncuesta ?>
					</div>
				</div>
				<!-- ===================================================================================== -->
				<div>
					<h2>Familias</h2>
					<div>
						<?= $datosFamilias ?>
					</div>
				</div>
				<!-- ===================================================================================== -->
				<div>
					<h2>Integrantes</h2>
					<div>
						<?= $datosIntegrantes ?>
					</div>
					
				</div>
				<!-- ===================================================================================== -->
			</div>			
	
			<table style="text-align: center;">
				<tr>
					<td colspan="2"><br></td>
				</tr>
				<tr>
					<td><input id="encuestaReset" type="reset" value="Limpiar" /></td>
					<td><input id="encuestaSubmit" type="submit" value="Enviar" /></td>
				</tr>
			</table>
			
			
	
		</form>
	</div>
</body>
</html>

