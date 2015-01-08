<?php get_header(); ?>
    
    <!-- header_basic / Start -->
	<?php include (TEMPLATEPATH . '/template-header-basic.php'); ?>
	<!-- header_basic / End -->
   
    <!-- nav_primary / start -->
    <?php include (TEMPLATEPATH . '/nav-primary.php'); ?>
    <!-- nav_primary / end -->

    <!-- nav_secondary/ start -->
    <?php include (TEMPLATEPATH . '/nav-secondary.php'); ?>
    <!-- nav_secondary / end -->     
    
    <!-- ------------------------- content / start --------------------------- -->
    
    <!-- / start -->
    <section class="">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>
    </section>
    <!-- / end -->    
    
    <!-- ------------------------- content / end --------------------------- -->
    
<?php get_footer(); ?>
