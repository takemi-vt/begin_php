<?php
    //背景色を指定
    $rgb = rgbString( 200, 255, 200 );	
	
	function rgbString( $r, $g, $b ){
		return "#".dechex($r).dechex($g).dechex($b);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="ja">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>011:関数を使ってみよう</title>
	<link rel="stylesheet" href="/event/lottery/css/index.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/event/lottery/bootstrap_4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
	<header class="top-right links">
	</header>
	<div class="flex-center position-ref full-height" style="background-color:<?= $rgb ?>">
		<div class="content">
			<div class="title m-b-md">
                <strong>Hello PHP</strong>
			</div>
		</div>
	</div>
	<footer class="footer">
		<a href="https://portfolio.takemisousaku.com">&copy; 健巳 (Takemi)</a>
		<a target="_blank" href="https://twitter.com/takemi77505234"><img src="/event/lottery/img/twitter_icon-icons.com_62765.png" width="16"></a>&nbsp;
		<a target="_blank" href="https://www.youtube.com/channel/UC46jNr1HHtM_eVTRKUpoiRA/"><img src="/event/lottery/img/social_youtube_2756.png" width="16"></a> 
	</footer>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="/event/lottery/bootstrap_4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>