<link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/sidebar.css">
<link rel="stylesheet" type="text/css" href="<?=js_url()?>sidebar.js">


<div id='sidebar'>
	<button 
		type="button" 
		class="btn btn-info channel_logo" 
		title="Adicionar Canal"
		data-toggle="modal"
		data-target="#adicionarCanal"
	>
		+
	</button>

	<hr>

	<?php foreach($ativos as $value):?>
		<a href='<?=base_url()?>View/channel/<?php echo($value->login)?>'>
			<img class="channel_logo" title="<?php echo($value->display_name)?>" src="<?php echo($value->profile_image_url)?>">
		</a>
		<br>
	<?php endforeach ?>

	<hr>

	<?php foreach($inativos as $value):?>
		<a href='<?=base_url()?>View/channel/<?php echo($value->login)?>'>
			<img class="channel_logo inativo" title="<?php echo($value->display_name)?>" src="<?php echo($value->profile_image_url)?>">
		</a>
		<br>
	<?php endforeach ?>
</div>
