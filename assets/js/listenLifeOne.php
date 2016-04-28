var channelName = ['MrSuicideSheep','OneChilledPanda','majesticcasual','17tumba','aliasmike2002','Etonmessy','koalakontrol'];
<?php $channel_info = $this->session->userdata['channels'];
  $channels = [];
  foreach($channel_info as $channel) {
    $channels[] = $channel['channelurl'];
  }
?>

var channelName = <?= $channels ?>;


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
