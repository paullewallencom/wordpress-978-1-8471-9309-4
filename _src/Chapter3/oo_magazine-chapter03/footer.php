
<div id="footer">

<div id="footContain">
<div id="footerRight">
<h3>Footer Information</h3>
<p>
<a href="#">features</a> | 
<a href="#">about</a> | 
<a href="#">contact</a><br />
<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.
</p>
</div><!--//footerRight-->

<div id="footerLeft">
<p>
		<?php bloginfo('name'); ?> is proudly powered by
		<a href="http://wordpress.org/">WordPress</a>
		<br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
</p>
</div><!--//footerLeft-->
</div><!--//footContain-->

</div><!--//footer-->


</div><!--//container-->

</body>

</html>
