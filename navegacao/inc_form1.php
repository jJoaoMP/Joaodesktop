<h1>Formulário 01</h1>

<form action="index.php?pagina=form1_processa" method="POST">
	<fieldset>
		<legend>Série House of Cards</legend>
		<p>
			<label> Nome do telespectador <input type="text" name="nome"> </label>
		</p>
		<p>
			<label> Quantidade de episódios assistidos <input type="number" min="0" max="73" step="1" name="qtd"> </label>
		</p>
		<p>
			<label> Data de nascimento <input type="date" name="dtanasc"> </label>
		</p>
		<p>
			<label> <input type="checkbox" name="aceito" value="S" required> Aceito os termos de uso </label>
		</p>
		<input type="hidden" name="total_episodios" value="73">
		<input type="hidden" name="total_temporadas" value="6">
		<p>
			<input type="submit" value="Enviar">
		</p>
	</fieldset>
</form>