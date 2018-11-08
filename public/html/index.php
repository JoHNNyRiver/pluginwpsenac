<?php 
	global $wp;
	$current_url = home_url(add_query_arg(array(),$wp->request));
?>


<link rel="stylesheet" href="<?php echo $current_url ?>/wp-content/plugins/terrorporhora/public/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">

<header class="terror-hora">
	<h1>TERROR POR HORA!!!</h1>
	<h3>Seu catalago de terror fodão</h3>
	<img src="<?php echo $current_url ?>/wp-content/plugins/terrorporhora/public/images/bg.jpg">
</header>

<section class="container">
	<form>
		<div>
			<label class="w100p">Titulo do filme</label>
			<input required autofocus autocomplete="off" type="text" name="title" class="w100p">
		</div>

		<div>
			<label class="w100p">Sinopse</label>
			<?php wp_editor('', 'terror-filme'); ?>
		</div>

		<div>
			<label class="w100p">Imagem de capa</label>
			<input required type="file" name="imagem" class="w100p">
		</div>

		<div>
			<label class="w100p">Data de Lançamento</label>
			<input required type="text" name="datadelancamento" class="w100p">
		</div>

		<div>
			<label class="w100p">Link do trailer (Youtube)</label>
			<input required type="text" name="linkyoutube" class="w100p">
		</div>

		<div>
			<label class="w100p">Classificação indicativa</label>
			<select required name="classificacaoindicativa" class="w100p">
				<option value="livre" selected="">Livre</option>
				<option value="10">10</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="16">16</option>
				<option value="18">18</option>
			</select>
		</div>

		<div>
			<label class="w100p">Trilha sonora</label>
			<textarea required rows="12" name="trilhasonora" class="w100p"></textarea>
		</div>

		<div>
			<label class="w100p">Elenco</label>
			<textarea required rows="12"  name="elenco" class="w100p"></textarea>
		</div>
	</form>

	<button type="submit" class="btn btn-primary">Cadastrar</button>
</section>
