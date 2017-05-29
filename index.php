<html onkeydown="myFunction(event)">
	<head>
	<title>Query string </title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="a.css">

	<script type="text/javascript">

    function vidplay() {
       var video = document.getElementById("Video1");
       var button = document.getElementById("play");
       if (video.paused) {
          video.play();
          button.textContent = "||";
       } else {
          video.pause();
          button.textContent = ">";
       }
    }
    function myFunction(event) {
    
    var x = event.which || event.keyCode;
    	if (x == 37) {
    	var video = document.getElementById("Video1");
        video.currentTime += -2;
    	}
    	if (x == 39) {
    	var video = document.getElementById("Video1");
        video.currentTime += 2;
    	}
    	if (x == 32) {
        vidplay();
    	}
	}
    function restart() {
        var video = document.getElementById("Video1");
        video.currentTime = 0;
    }

    function skip(value) {
        var video = document.getElementById("Video1");
        video.currentTime += value;
    }      
	</script>

	</head>
	<body style="margin: 0px;display: block;">

	<?php
	/*<div id="buttonbar">
    <button id="restart" onclick="restart();">[]</button> 
    <button id="rew" onclick="skip(-2)">&lt;&lt;</button>
    <button id="play" onclick="vidplay()">&gt;</button>
    <button id="fastFwd" onclick="skip(2)">&gt;&gt;</button>
	</div>  
	//echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
	*/
	
	?>
	<video id="Video1" class="center" controls="" autoplay="" name="media">
	<source src="https://a.safe.moe/EGjYq.mp4" type="video/mp4">
	<track label="English" kind="subtitles" srclang="en" src="captions/vtt/s5e1.vtt" default>
	<a href="demo.mp4">Download the video</a> file.
	</video>


  




	</body>
	</html>
	
