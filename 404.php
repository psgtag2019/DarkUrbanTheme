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
                            <a href="<?php echo get_theme_mod( 'link4' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/RSS.png"></a>
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
                                <h5><?php _e( 'Sorry, no posts matched your criteria.Heading&nbsp;', 'dark_urban' ); ?></h5>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/404.png">
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'dark_urban' ); ?></p>
                    <?php endif; ?>
                </div>
                <aside>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sidebar.jpg"/>
                    <?php if ( is_active_sidebar( 'right_top' ) ) : ?>
                        <div style=" 
display: flex;
flex-direction: column;
align-items: center;
justify-content: flex-start;
">
                            <?php dynamic_sidebar( 'right_top' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'right_middle' ) ) : ?>
                        <div>
                            <?php dynamic_sidebar( 'right_middle' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'right_bottom' ) ) : ?>
                        <div>
                            <?php dynamic_sidebar( 'right_bottom' ); ?>
                        </div>
                    <?php endif; ?>
                </aside>
            </section>
            <footer>
                <div class="pg-empty-placeholder divider"></div>
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