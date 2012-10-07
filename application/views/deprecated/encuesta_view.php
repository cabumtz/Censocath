<html>
<head>
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Encuesta</title>
	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/jqueryui/css/<?= THEME_NAME ?>/jquery-ui-1.8.23.custom.css" >
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/css/main.css" >
	
	<script type="text/javascript" src="<?=base_url()?>resources/jqueryui/js/jquery-1.8.0.min.js" ></script>
	<script type="text/javascript" src="<?=base_url()?>resources/jqueryui/js/jquery-ui-1.8.23.custom.min.js" ></script>
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
					<table class="tableForm">
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
							<td class="labelColumn"><label for="encuestador">Encuestador: </label></td>
							<td>
								<select id="encuestador" name="encuestador" size="1">
									<option value="">-- Seleccione --</option>
						
									<?php foreach($encuestadores as $e): ?>
										<option value="<?= $e->Id ?>"><?= $e->Nombre ?></option>
									<?php endforeach; ?>
								</select>
							</td>
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
							<td class="labelColumn" ><label for="fechaEncuesta">Fecha encuesta: </label></td>
							<td>
								<input type="text" id="fechaEncuesta" name="fechaEncuesta" value=""/>
							</td>
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
							<td class="labelColumn" ><label for="comentarios">Comentarios: </label></td>
							<td>
								<textarea id="comentarios" name="comentarios" rows="4" cols="20"></textarea>
							</td>
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
							<td class="labelColumn" >  </td>
							
							<td>
								
							</td>
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
					</table>
					</div>
				</div>
				<!-- ===================================================================================== -->
				<div>
					<h2>Familias</h2>
					<table class="tableForm">
						<tr>
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
							
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
						</tr>
					</table>
				</div>
				<!-- ===================================================================================== -->
				<div>
					<h2>Integrantes</h2>
					<table class="tableForm">
						<tr>
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
							<td>
								<table style="border: 1px solid red;">
									<thead>
										<tr>
											<th>#</th>
											<th>Familia</th>
											<th>Nombre</th>
											<th>Sexo</th>
											<th>Parentesco</th>
											<th>Religi&oacute;n</th>
											<th>Edici&oacute;n</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>A</td>
											<td>Carlos Alberto Bañuelos Moro</td>
											<td>Masculino</td>
											<td>Hijo</td>
											<td>Católica</td>
											<td></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td></td>
										</tr>
									</tfoot>
								</table>
								
							</td>
						</tr>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<tr>
						</tr>
					</table>
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

