<link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/view_channel.css">

<script src="<?=js_url()?>channel.js"></script>

<div id="video"></div>

<!-- Load the Twitch embed script -->


<?php if($channel['plataform']=='1') : ?>
  <script src="https://embed.twitch.tv/embed/v1.js"></script>

  <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
  <script type="text/javascript">
  var player = new Twitch.Embed("video", {
    width: 1300,
    height: 600,
    channel: "<?php echo($channel['name'])?>"
  });
  </script>

<?php endif; ?>


<?php if($channel['plataform']=='2') : ?>
  <script src="<?=js_url()?>channel_facebook.js"></script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
  <div  style="width: 70%" id='player_facebook'>
    <div  
      class="fb-video" 
      data-href="https://www.facebook.com/<?= $channel['name']?>/live" 
      data-width="auto" 
      data-allowfullscreen="true"
      id="video"
    > 
    </div>
  </div>
<?php endif; ?>



  

  <!-- Your embedded video player code -->

	

	


