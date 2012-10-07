<table class="tableForm">
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<tr>
		<td class="labelColumn"><label for="encuestador">Encuestador: </label>
		</td>
		<td><select id="encuestador" name="encuestador" size="1">
				<option value="">-- Seleccione --</option>

				<?php foreach($encuestadores as $e): ?>
				<option value="<?= $e->Id ?>">
					<?= $e->Nombre ?>
				</option>
				<?php endforeach; ?>
		</select>
		</td>
	</tr>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<tr>
		<td class="labelColumn"><label for="fechaEncuesta">Fecha encuesta: </label>
		</td>
		<td><input type="text" id="fechaEncuesta" name="fechaEncuesta"
			value="" />
		</td>
	</tr>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<tr>
		<td class="labelColumn"><label for="comentarios">Comentarios: </label>
		</td>
		<td><textarea id="comentarios" name="comentarios" rows="4" cols="20"></textarea>
		</td>
	</tr>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<tr>
	</tr>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<tr>
		<td class="labelColumn"></td>

		<td></td>
	</tr>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
</table>
