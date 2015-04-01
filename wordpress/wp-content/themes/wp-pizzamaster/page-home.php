<!-- /* Template Name: Home Page Template */  -->
<?php get_header(); ?>
    <div class="fullslider">
        <div class="fullslider_wrap">

            <!-- <ul class="rslides rslides1" style="max-width: 3600px;">
                <li  >
                    <a href="http://700-700.ru/masters/"><img src="<?php echo get_template_directory_uri(); ?>/img/Masters-s-kuritsey.jpg">
                    </a>
                </li>
                <li>
                    <a href="http://vk.com/pizza700700?z=photo-47766404_353792953%2Falbum-47766404_00%2Frev"><img src="<?php echo get_template_directory_uri(); ?>/img/Kachestvo3.jpg">
                    </a>
                </li>
                <li >
                    <a href="http://vk.com/pizza700700?z=photo-47766404_353793714%2Falbum-47766404_00%2Frev"><img src="<?php echo get_template_directory_uri(); ?>/img/Testo.jpg">
                    </a>
                </li>
            </ul> -->
<!-- zzzzzzzzzzzzzzzz -->
         <?php if( have_rows('slider') ): ?>
                    <ul>
                    <?php while( have_rows('slider') ): the_row(); 
                        // vars
                        $simage = get_sub_field('slider-img');
                        $slink = get_sub_field('slider-url');

                    ?>
                        <li>
                            <a href="<?php echo $slink; ?>">
                                <img src="<?php echo $simage; ?>">
                            </a>
                        </li>

                    <?php endwhile; ?>
                    </ul>
        <?php endif; ?>



            <a href="#" class="rslides_nav rslides1_nav prev">Previous</a>
            <a href="#" class="rslides_nav rslides1_nav next">Next</a>
        </div>
    </div><!-- fullslider -->

    <div class="home_menu">
        <div class="home_menu_wrap">
            <?php if( have_rows('blumberg') ): ?>
            <ul>
            <?php while( have_rows('blumberg') ): the_row(); 
                // vars
                $image = get_sub_field('blumberg-img');
                $link = get_sub_field('blumberg-link');

            ?>
                <li>
                    <a href="<?php echo $link; ?>">
                        <img src="<?php echo $image; ?>">
                    </a>
                </li>

            <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div><!-- home_menu_wrap -->

        
        <div class="promo_wrap">
            <div class="vk_big_baner">
            <?php
                //vars 
                $vklink = get_field('vk-baner-link');
                $vkimage = get_field('vk-baner-img');
            ?>
                <a href="<?php echo $vklink; ?>" target="_blank">
                <img src="<?php echo $vkimage; ?>">
                </a>
            
            </div>
        </div>

        <div class="constructor_baner_big">
            <?php
                //vars 
                $clink = get_field('construct-link');
                $cimage = get_field('construct-img');
            ?>
                <a href="<?php echo $clink; ?>">
                <img src="<?php echo $cimage; ?>">
                </a>
        </div>

        <div class="clear"></div>
    </div>
<?php get_footer(); ?>