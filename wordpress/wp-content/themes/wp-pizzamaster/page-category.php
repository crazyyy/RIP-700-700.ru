<?php /* Template Name: Category Template */ get_header(); ?>
<div class="main">
    <div class="content_wrap">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <h2><span class="left_pimpa">~~~</span>  <?php the_title(); ?><span class="right_pimpa">~~~</span></h2>
        
        <?php if( get_field('baner-img') ): ?>  
            <div class="promo">
                <div class="img_cont">         
                        <?php
                             //vars 
                            $link = get_field('baner');
                            $image = get_field('baner-img');
                        ?>
                        <a href="<?php echo $link; ?>" >
                            <img src="<?php echo $image; ?>">
                        </a>         
                </div>
            </div>
        <?php endif; ?>

            <div class="open_filter">▾ открыть фильтр</div>
            <div class="pizza_filter">
                <ul>
                    <li data-type="klassika">Классика</li>
                    <li data-type="kolbasnyie">Колбасные</li>
                    <li data-type="myasnyie">Мясные</li>
                    <li data-type="ovoshhnyie">Овощные</li>
                    <li data-type="ostryie">Острые</li>
                    <li data-type="s-gribami">С грибами</li>
                    <li data-type="s-kuritsey">С курицей</li>
                    <li data-type="s-ryiboy-i-moreproduktami">С рыбой и морепродуктами</li>
                </ul>
            </div><!-- pizza_filter -->

            <div class="pizzalist">

            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $temp = $wp_query;
                $wp_query= null;
                query_posts('post_type=products'.'&showposts=100'.'&paged='.$paged);
                while (have_posts()) : the_post();?>

            <div class="pizza_one <?php the_tags(); ?>">

                <div class="pizza_title">
                    <a href="<?php the_permalink(); ?>" class="item_popup_link" data-id="<?php the_ID(); ?>"><?php the_title(); ?></a>
                </div>

                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="item_popup_link item_popup_link-feature-210-180" data-id="<?php the_ID(); ?>">
                    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>

                <div class="pizza_all_meta">
                    <div class="components">
                        <?php the_content(); ?>
                    </div>
                    
                    <div class="pizza_meta">
                        <div class="variants_buttons">
                            <div data-variant="30" class="pizza30">30см</div>
                            <div data-variant="40" class="current pizza40">40см</div>
                            <div data-variant="half" class="halfer">половина</div>
                        </div>
                        <div class="variant_selector">
                            <select item_id="7987">
                                <option value="full40" selected="selected">Пицца 40см</option>

                                <option value="half40">Половина пиццы 40см</option>
                                <option value="full30">Пицца 30см</option>
                                <option value="half30">Половина пиццы 30см</option>
                            </select>
                        </div>
                        <div class="weight">
                            <ul class="variants">
                                <li class="full40 current" item_id="7987">800 г – <span>400 р</span>
                                </li>
                                <li class="full30" item_id="7976">450 г – <span>350 р</span>
                                </li>
                                <li class="half40" item_id="7985">400 г – <span>240 р</span>
                                </li>
                                <li class="half30" item_id="7980">200 г – <span>150 р</span>
                                </li>
                            </ul>
                        </div>

                        <div class="buy_button add_to_cart" item_id="7987" is_pizza="1">В корзину</div>
                        <div class="clear"></div>
                    </div><!-- pizza_meta -->
                </div><!-- pizza_all_meta -->

                <div class="rating_wrap">
                    <div class="rating_stars " data-id="<?php the_ID(); ?>">
                        <div class="star" data-position="1"></div>
                        <div class="star" data-position="2"></div>
                        <div class="star" data-position="3"></div>
                        <div class="star" data-position="4"></div>
                        <div class="star" data-position="5"></div>
                    </div>
                    <div class="stars_back  " data-current-rating="5" style="width: 120px;"></div>
                    <div class="total_voters">Всего оценок: <span>1038</span>
                    </div>
                    <div class="vote_result vr_7987"></div>
                </div><!-- rating_wrap -->
            </div><!-- pizza_one -->

            <?php endwhile; ?>
            <?php html5wp_pagination(); ?>
            <?php $wp_query = null; $wp_query = $temp;?>


        </div><!-- pizzalist -->

    </div><!-- content_wrap -->
    <?php endwhile; else: // If 404 page error ?>
        <div class="content_wrap">
            <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>   
        </div>
    <?php endif; ?>
</div><!-- main -->
<?php get_footer(); ?>