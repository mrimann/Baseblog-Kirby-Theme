<?php
/*
Footer Snippet for the Baseblog Kirby Theme
*******************************************/
?>
<?php if($page->enableflattrbutton() == 'TRUE' || $page->template() == 'article.text'): ?>
	<div id="share">
		<div id="flattrButton" />
	</div>
<?php endif?>
		<footer id="colophon">
    	<?php echo kirbytext($site->copyright()) ?>
		</footer>

  	</div><!-- #site -->

	<?php if($page->enableflattrbutton() == 'TRUE' || $page->template() == 'article.text'): ?>
		<script type="text/javascript">
			/* <![CDATA[ */
			window.onload = function() {
				FlattrLoader.render({
					'uid': 'mrimann',
					'url': '<?php echo $page->url(); ?>',
					'title': '<?php echo $page->title(); ?>',
					'description': '<?php echo $page->description(); ?>'
				}, 'flattrButton', 'replace');
			}
			/* ]]> */
		</script>
	<?php endif?>


	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo $site->googleanalyticscode() ?>']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

</body>

</html>