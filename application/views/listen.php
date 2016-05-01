<!DOCTYPE html>
<html>
<head>
  <title>Discover Music</title>

  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->

  <!-- Custom Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  <script src="/assets/js/jquery-1.12.1.min.js"></script>
  <!-- <script src="/assets/js/listenLifeOne.php"></script> -->
  <script type='text/javascript'>
        var channelName2 = ['MrSuicideSheep','OneChilledPanda','majesticcasual','17tumba','aliasmike2002','Etonmessy','koalakontrol'];
        var channelName = [];
        <?php $channel_info = $this->session->userdata['channels'];
          foreach($channel_info as $channel) {
            // $channels[] = $channel['channelurl'];
            ?>channelName.push('<?= $channel['channelurl'] ?>');
          <?php }
        ?>

        console.log(channelName2);
        console.log(channelName);

        var resultsPerChannel = 1;
        var videoSizeOption = 2;

        var videoIds = [];
        var videoTitles = [];
        var videoSrc = [];
        var myCount = 0;
        var loaded = 0;

        var videoHeight;
        var videoWidth;

        function videoSize(option) {
          if(option == 1) {
            videoHeight = 405;
            videoWidth = 720;
          } else if(option == 2) {
            videoHeight = 720;
            videoWidth = 1280;
          }
        }

        $(document).ready(function(){
          videoSize(1);
          for(var i = 0; i < channelName.length; i++) {
            fetchVideos(channelName[i], i);
          }
        });

        function fetchVideos(channelToFetch, i) {
          $.get(
            "https://www.googleapis.com/youtube/v3/channels",{
              part: 'contentDetails',
              forUsername: channelToFetch,
              key: 'AIzaSyAfJPauTuPOGSyBvLZEmHB9jqA4B8OraYQ'},
              function(data){
                $.each(data.items, function(i, item) {
                  console.log(item);
                  var pid = item.contentDetails.relatedPlaylists.uploads;
                  getVids(pid);
                })
                //console.log(channelName[i]);
              }
          );

          function getVids(pid) {
            $.get(
              "https://www.googleapis.com/youtube/v3/playlistItems",{
                part: 'snippet',
                maxResults: resultsPerChannel,
                playlistId: pid,
                key: 'AIzaSyAfJPauTuPOGSyBvLZEmHB9jqA4B8OraYQ'},
                function(data){
                  var output = [];
                  $.each(data.items, function(i, item) {
                    console.log(item);
                    var videoTitle = item.snippet.title;
                    var videoId = item.snippet.resourceId.videoId;

                    videoTitles.push(videoTitle);
                    videoIds.push(videoId);
                    videoSrc.push("http://www.youtube.com/embed/"+videoId);
                    //output = '<li><iframe height="'+videoHeight+'" width="'+videoWidth+'" src=\"//www.youtube.com/embed/' + videoId + '\"></iframe></li>';
                    //$('#results').append(output);
                  })
                loaded++;
                if(loaded == channelName.length) {
                  $("iframe").attr('src', videoSrc[0]);
                  console.log("Pushed first video");
                }
              }
            );
          }
        }


        //handlers
        $(document).ready(function() {
          $("#next-song").click(function() {
            nextVideo();
          });

        });

        function nextVideo() {
          if(myCount == videoSrc.length - 1) {
            myCount = 0;
          } else {
            myCount++;
          }
          $("iframe").attr('src', videoSrc[myCount]);
        }

  </script>
  <!-- <script src="/assets/js/listenLifeOne.js"></script> -->
  <style>
    html,body        {height:100%;}
    .wrapper         {width:60%;height:100%;margin:0 auto;}
    .h_iframe        {position:relative;}
    .h_iframe .ratio {display:block;width:100%;height:auto;}
    .h_iframe iframe {position:absolute;top:0;left:0;width:100%; height:100%;}
    body {
      background: rgba(46,124,148,1);
      background: -moz-linear-gradient(-45deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(46,124,148,1)), color-stop(100%, rgba(0,31,82,1)));
      background: -webkit-linear-gradient(-45deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      background: -o-linear-gradient(-45deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      background: -ms-linear-gradient(-45deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      background: linear-gradient(135deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2e7c94', endColorstr='#001f52', GradientType=1 );
    }
    .navbar {
      /*height: 50px;*/
    }
    a {
      color: black;
    }
    a:hover {
      color: black;
      text-decoration: none;
    }
    .settings {
      margin: 10px;
      opacity: .3;
    }
    .settings:hover {
      opacity: .8;
    }
    .next {
      color: white;
    }
    .next:hover {
      color: lightblue;
    }
    .logout {
      margin: 10px;
      color: white;
      opacity: .3;
      font-size: 16px;
      font-weight: bold;
    }
    .logout:hover {
      opacity: 1;
      color: white;
    }
    .white {
      color: white;
      margin-top: 50px;
      text-align: center;
    }
    .portfolio {
      color: black;
      opacity: .5;
      font-size: 16px;
      font-weight: bold;
    }
    .portfolio:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <div class='navbar'>
    <a href='/settings' class='settings fa fa-cog fa-3x'></a>
    <a href='/logout' class='logout pull-right'>Logout</a>
  </div>
  <div class="wrapper">
    <h1 class='text-center'>Your Daily Queue</h1>
    <?php if(!$channel_info) { ?>
      <h3 class='white'>Set up some channels to follow! Hit the settings icon in the top left corner!</h3>
    <?php } else { ?>
    <div class="h_iframe" id="results">
        <!-- a transparent image is preferable -->
        <img class="ratio" src="http://placehold.it/16x9"/>
        <iframe allowfullscreen></iframe>
    </div>
    <div class='text-center'>
      <a href='' class="next fa fa-angle-right fa-4x" id="next-song"></a>
      <p><a class='portfolio' href='/me'>View my portfolio!</a></p>
    </div>
    <?php } ?>
  </div>


</body>
</html>
