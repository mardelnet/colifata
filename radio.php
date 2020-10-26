<?php /* Template Name: Reproductor de radio */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Radio La Colifata Online</title>
		<link rel="stylesheet" href="assets/css/bulma.min.css">
		<link rel="stylesheet" href="assets/css/slick.css"/>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<audio id="alsolnet_radio" class="video-js" controls preload="auto" width="350" height="120" data-setup='{"techOrder": ["html5", "flash"]}'>
            <source src="http://streamall.alsolnet.com/lacolifata" type='audio/aac'>
            <source src="http://streamall.alsolnet.com/lacolifata/lacolifata.stream" type='rtmp/mp4'>
            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="//www.alsolnet.com/indexahtmlsite_SoportePg.htm" target="_blank">supports HTML5 video</a>
            </p>
        </audio>												
	</body>
</html>