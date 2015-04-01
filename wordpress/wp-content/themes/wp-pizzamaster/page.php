<!-- /* Template Name: Page Template */  -->
<?php get_header(); ?>

<div class="main">


    <div class="content_wrap">

        <div class="post_wrap">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>


            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>




            <?php endwhile; else: // If 404 page error ?>
            <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
            <?php endif; ?>


        </div>
        <!-- post_wrap -->

    </div>
    <!-- content_wrap -->
</div>
<!-- main -->


<?php get_footer(); ?>