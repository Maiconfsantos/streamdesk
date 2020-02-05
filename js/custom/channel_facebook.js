window.fbAsyncInit = function() {
    FB.init({
      appId      : '462971241004562',
      xfbml      : true,
      version    : 'v3.2'
    });
  
    // Get Embedded Video Player API Instance
    var my_video_player;
    FB.Event.subscribe('xfbml.ready', function(msg) {
      if (msg.type === 'video') {
        my_video_player = msg.instance;
      }
    });
  };