<link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/view_channel.css">

<script src="<?=js_url()?>channel.js"></script>

<div id="video"></div>

<!-- Load the Twitch embed script -->
<script src="https://embed.twitch.tv/embed/v1.js"></script>

<!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
<script type="text/javascript">
new Twitch.Embed("video", {
  width: 1300,
  height: 600,
  channel: "<?php echo($channel['name'])?>"
});
</script>

