<!-- /* Template Name: Home Page Template */  -->
<?php get_header(); ?>
    <div class="fullslider">
        <div class="fullslider_wrap">
            <ul class="rslides rslides1" style="max-width: 3600px;">
                <li id="rslides1_s0" class="rslides1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; -webkit-transition: opacity 200ms ease-in-out; transition: opacity 200ms ease-in-out;">
                    <a href="http://700-700.ru/masters/"><img src="<?php echo get_template_directory_uri(); ?>/img/Masters-s-kuritsey.jpg">
                    </a>
                </li>
                <li id="rslides1_s1" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; -webkit-transition: opacity 200ms ease-in-out; transition: opacity 200ms ease-in-out;">
                    <a href="http://vk.com/pizza700700?z=photo-47766404_353792953%2Falbum-47766404_00%2Frev"><img src="<?php echo get_template_directory_uri(); ?>/img/Kachestvo3.jpg">
                    </a>
                </li>
                <li id="rslides1_s2" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; -webkit-transition: opacity 200ms ease-in-out; transition: opacity 200ms ease-in-out;">
                    <a href="http://vk.com/pizza700700?z=photo-47766404_353793714%2Falbum-47766404_00%2Frev"><img src="<?php echo get_template_directory_uri(); ?>/img/Testo.jpg">
                    </a>
                </li>
            </ul>
            <a href="http://700-700.ru/#" class="rslides_nav rslides1_nav prev">Previous</a>
            <a href="http://700-700.ru/#" class="rslides_nav rslides1_nav next">Next</a>
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
                <a href="http://vk.com/pizza700700" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/vk_big.jpg">
                </a>
            </div>
        </div>

        <div class="constructor_baner_big">
            <a href="http://700-700.ru/constructor-pizza/"><img src="<?php echo get_template_directory_uri(); ?>/img/constuctor_big.jpg">
            </a>
        </div>

        <div class="clear"></div>
    </div>
<?php get_footer(); ?>