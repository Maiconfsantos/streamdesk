<link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/home.css">

<div class="container">
	<table class="table table-bordered table-hover">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Descrição</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($sistemas as $key => $sistema):?>

				<tr onclick="window.location='<?php echo "http://". $_SERVER["HTTP_HOST"]?>/<?php echo $sistema['link']?>'">
					<td>
						<?php echo $sistema['nome']?>
					</td>
					<td>
						<?php echo $sistema['desc']?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>


