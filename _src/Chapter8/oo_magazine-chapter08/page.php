<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>OpenSource Online Magazine with Images</title>

<script type="text/javascript" src=""></script>
<style type="text/css" media="screen"> 
   @import url("<?php bloginfo('stylesheet_url'); ?>");
</style>

</head>

<body>
<a name="top"></a><!--anchor for top-->
<div id="container"><!--container goes here-->

<?php get_header();?>

<!-- Begin #container2 this holds the content and sidebars-->
<div id="container2">

<!-- Begin #container3 keeps the left col and body positioned-->
<div id="container3">
<!-- Begin #content -->
<div id="pgContent">

<!--//start content loop-->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content('<br>Read the rest of this entry &raquo;'); ?>
			</div>

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