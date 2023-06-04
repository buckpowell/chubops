<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19284848-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<embed src="music/eye.mp3" height="0" width="0"></embed>
<br>
<div class="center-div text-align-center"><?= stripslashes($top); ?></div>
<div class="container center-div">
	<div class="padding-top-bottom">
		<img src="images/thumbs/86.jpg" border="1">
	<?php foreach ($left as $l) { ?>
		<img src="images/thumbs/<?= $l['image'] ?>" border="1" style="padding-bottom:5px">
	<?php } ?>
	</div>
	<div class="body-width">
		<?php
		$find = '%%fb%%';
		$replace ='<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js#appId=227186900629867&amp;xfbml=1"></script>
		<fb:like href="?index.php&controller=home&action=index" send="false" layout="button_count" width="450" show_faces="false" font="segoe ui"></fb:like>';
		$text = str_replace($find, $replace, stripslashes($body));
		?>
		<div class="text-align-center"><?= stripslashes($body); ?></div>
		
	</div>
	<div class="padding-top-bottom">
		<img src="images/thumbs/87.jpg" border="1">
	<?php foreach($right as $r) { ?>
	<img src="images/thumbs/<?= $r['image'] ?>" border="1" style="padding-bottom:5px">
		<?php } ?>
	</div>
</div>
<div class="text-align-center"><?= stripslashes($bottom); ?></div>


