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
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
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

<div id="intTop_navlist">
<h2>main navigation</h2>
<!--//start page nav list-->
<ul id="navlist">
   <li><a href="/">The Zine</a></li>
   <?php wp_list_pages('title_li=' ); ?>
</ul>
<!--//end page nav list-->
</div><!--//top_navlist-->

<?php
//get the footer information from footer.php
get_footer();
?>