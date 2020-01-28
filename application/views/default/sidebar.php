<link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/sidebar.css">
<link rel="stylesheet" type="text/css" href="<?=js_url()?>sidebar.js">


<div id='sidebar'>
	<?php foreach($channels as $value):?>
		<a href='<?=base_url()?>View/channel/<?php echo($value->login)?>'>
			<img class="channel_logo" alt="<?php echo($value->login)?>" src="<?php echo($value->profile_image_url)?>">
		</a>
		<br>
	<?php endforeach ?>
</div>

