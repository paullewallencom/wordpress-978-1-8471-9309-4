
<h2 class="features">Features</h2>
<!--//start recent features list-->
<ul class="tocNav"> 
 <?php 
 global $post; 
 $myposts = get_posts('numberposts=5&category=3'); 
 foreach($myposts as $post): 
      setup_postdata($post);?> 
      <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li> 
 <?php endforeach; ?> 
</ul>
<!--//end recent features list-->

<h2 class="columns">Columns</h2>
<!--//start categories list-->
<ul class="tocNav">
	<?php wp_list_categories('show_count=1&title_li='); ?>
</ul>
<!--//end categories list-->

<h2 class="pastIssues">Past Issues</h2>
<!--//start archive list-->
<ul class="tocNav">
	<?php wp_get_archives('type=monthly'); ?>
</ul>
<!--//end archive list-->