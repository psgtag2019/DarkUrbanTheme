<?php get_header(); ?>

            <header>
                <h1 style="color:<?php echo get_theme_mod( 'header_title_color' ); ?>;"><?php echo get_theme_mod( 'header_title', __( 'It\'s my life...', 'dark_urban' ) ); ?></h1>
                <p style=" 
font-family: sans-serif;
font-size: 14;
text-align: center;
color: #eeeeee;
"><?php echo get_theme_mod( 'header_subtitle', __( 'It\'s my territory...', 'dark_urban' ) ); ?></p>
                <div class="top_menu">
                    <div class="top_menu_left">
                        <div class="menu_item">
                            <a href="<?php echo get_theme_mod( 'link1' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Home.png"></a>
                        </div>
                        <div class="menu_item">
                            <a href="<?php echo get_theme_mod( 'link2' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/42.png"></a>
                        </div>
                    </div>
                    <div class="top_menu_right">
                        <div class="menu_item">
                            <a href="<?php echo get_theme_mod( 'link3' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Fier.png"></a>
                        </div>
                        <div class="menu_item">
                            <a href="" src="<?php echo PG_Image::getUrl( get_theme_mod( 'link4' ), 'large' ) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/RSS.png"></a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="divider">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/barbed-wire.png"/>
            </div>
            <section class="main">
                <div id="blog_items">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div <?php post_class( 'blog_item' ); ?> id="post-<?php the_ID(); ?>">
                                <?php if ( is_singular() ) : ?>
                                    <h2 class="blog_item_header"><?php the_title(); ?></h2>
                                <?php else : ?>
                                    <h2 class="blog_item_header"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                                <?php endif; ?>
                                <div class="sub_header">
                                    <span><?php the_time( get_option( 'date_format' ) ); ?></span> / 
                                    <span><?php echo get_the_author_meta( 'display_name', false ) ?></span>
                                </div>
                                <?php if ( is_singular() ) : ?>
                                    <?php echo PG_Image::getPostImage( null, 'large', array(
                                            'class' => 'blog_item_img'
                                    ), 'both', null ) ?>
                                <?php elseif ( has_post_thumbnail( get_the_ID() ) ) : ?>
                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, 'large', array(
                                                'class' => 'blog_item_img'
                                        ), 'both', null ) ?></a>
                                <?php endif; ?>
                                <?php if ( is_singular() ) : ?>
                                    <p class="post_excerpt"><?php echo get_the_excerpt(); ?></p>
                                <?php else : ?>
                                    <p class="post_excerpt"><?php echo get_the_excerpt(); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'dark_urban' ); ?></p>
                    <?php endif; ?>
                    <div class="index-navigation">
                        <?php next_posts_link( '<img src='.get_template_directory_uri().'/img/prev.jpg />' ); ?>
                        <?php previous_posts_link( '<img src='.get_template_directory_uri().'/img/next.jpg />' ); ?>
                    </div>
                </div>
                <aside>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sidebar.jpg"/>
                    <?php if ( is_active_sidebar( 'right_top' ) ) : ?>
                        <div style=" 
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
">
                            <?php dynamic_sidebar( 'right_top' ); ?>
                        </div>
                    <?php endif; ?>
                </aside>
            </section>
            <footer>
                <div class="divider">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/barbed-wire.png"/>
                </div>
                <div class="footer">
                    <div class="footer_left">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer.png">
                    </div>
                    <div class="footer_right">
                        <?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
                            <div class="footer_item">
                                <?php dynamic_sidebar( 'footer_left' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( is_active_sidebar( 'footer_middle' ) ) : ?>
                            <div class="footer_item">
                                <?php dynamic_sidebar( 'footer_middle' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
                            <div class="footer_item">
                                <?php dynamic_sidebar( 'footer_right' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </footer>            

<?php get_footer(); ?>