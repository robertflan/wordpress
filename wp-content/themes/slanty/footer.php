<footer class="site-footer">
    <div class="grid-8" id="footwide">

        <?php get_sidebar(); ?>

    </div>
        <div class="grid-4 end" id="footwide">
            <div role="content-info">
                <div id="social-block">

                    <?php get_template_part( 'social', 'content' ); ?>

                </div>
                    <header class="site-info" role="site-info">
                        <h5>&copy; <?php echo date("Y") ?> <a href="<?php esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h5>
                    </header>
            </div>
        </div><!-- ends grid-4 -->
</footer>

    <?php wp_footer(); ?>

    </div><!-- ends grids -->
</div><!-- ends wrapper -->  
</body>
</html>