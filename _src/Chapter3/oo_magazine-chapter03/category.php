<?php 
//includes header.php file for internal page layouts
get_header();
?>

<!-- Begin #container2 this holds the content and sidebars-->
<div id="container2">

<!-- Begin #container3 keeps the left col and body positioned-->
<div id="container3">
<!-- Begin #content -->
<div id="content">
<h3>You're reading the: <?php the_category(', ')?> column.</h3>
<!--//start content loop-->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<p class="authorName">by <?php the_author_firstname(); ?> <?php the_author_lastname(); ?> for <?php the_category(', ') ?></p>
			<div class="entry">
				<?php the_content('<br>Read the rest of this entry &raquo;'); ?>
			</div>
			<div id="pagecomments">
	            <?php comments_template(); ?>
            </div>

			<div class="comments"> <div class='commentIcon'><?php comments_number('No Comments','<span class="bigNum">1</span> response','<span class="bigNum">%</span> Comments'); ?></div> <?comments_popup_link('Add Your Thoughts', 'Add Your Thoughts', 'Add Your Thoughts'); ?></div>

		</div>
	<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
<!--//end content loop-->

</div><!-- //content -->

<!-- #left sidebar -->
<div id="sidebarLT">

<?php get_sidebar();?>

</div><!--//sidebarLT  -->
</div><!--//container3-->

<!-- #right sidebar -->
<div id="sidebarRT">

<?php include(TEMPLATEPATH . '/sidebar2.php'); ?>

</div><!--//sidebarRT --> 

<div id="pushbottom"> </div><!--//this div will span across the 3 divs above it making sure the footer stays at the bottom of the longest column-->

</div><!--//container2-->

<?php include(TEMPLATEPATH . '/navlist.php'); ?>

<?php
//get the footer information from footer.php
get_footer();
?>