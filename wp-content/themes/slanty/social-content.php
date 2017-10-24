<?php
/**
 * social content
 * @theme slanty
 */
$options = get_option( 'slanty_theme_options' );  ?>

    <?php if( !empty ($options['slanty_sochead']) ) { ?>
    <header class="social-block">
        <h3><?php echo esc_attr( $options['slanty_sochead'] ); ?></h3>
    </header>
    <?php } ?>
    <ul>
    
        <?php if( !empty ($options['slanty_facebook']) ) { ?>       
        <li><a href="<?php echo esc_url( $options['slanty_facebook'] ); ?>" title="<?php echo esc_url( $options['slanty_facebook'] ); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
        <?php } ?>
    
            <?php if( !empty ($options['slanty_twitter']) ) { ?>           
            <li><a href="<?php echo esc_url( $options['slanty_twitter'] ); ?>" title="<?php echo esc_url( $options['slanty_twitter'] ); ?>" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
            <?php } ?>
                
                    <?php if( !empty ($options['slanty_gplus']) ) { ?>                   
                    <li><a href="<?php echo esc_url( $options['slanty_gplus'] ); ?>" title="<?php echo esc_url( $options['slanty_gplus'] ); ?>" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                    <?php } ?>

                <?php if( !empty ($options['slanty_instagram']) ) { ?>               
                <li><a href="<?php echo esc_url( $options['slanty_instagram'] ); ?>" title="<?php echo esc_url( $options['slanty_instagram'] ); ?>" target="_blank"><i class="fa <?php echo esc_attr( $options['slanty_awesome'] ); ?>"></i></i></a></li>
                <?php } ?>
                    
                        <li><a href="<?php esc_url( home_url( '/' ) ); ?>" title="<?php _e( 'Home Page', 'slanty' ); ?>"><i class="fa fa-home"></i></a></li>
    </ul>
<!-- ends social block -->