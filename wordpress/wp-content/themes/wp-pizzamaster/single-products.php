<!-- /* Template Name: Page Template */  -->
<?php get_header(); ?>

<div class="main">


    <div class="content_wrap">

        <div class="post_wrap">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>


            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>
            <!-- post thumbnail // chek if thumbail exits -->
            <?php if ( has_post_thumbnail()) :?>
            <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            </a>


                <div class="test-blocks">
                    
                <?php the_field('protein'); ?> <br>
                <?php the_field('big-text'); ?>
                <?php the_field('big-text'); ?>
                <?php the_field('text-with_REDACTOR'); ?>
                <?php 
                    $image = get_field('imagere');
                    if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>

                </div>


<div class="mames">
    
</div>

            <?php endif; ?>
            <!-- /post thumbnail -->





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