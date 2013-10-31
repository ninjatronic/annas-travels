        <div class="jumbotron bottomtron">
            <div class="container" style="background-color:transparent;">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="tk-estilo-pro big-light">
                            <?php bloginfo('name');?>
                            <br/>
                            <small class="big-light-small">
                                <?php bloginfo('description');?>
                            </small>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="tk-estilo-pro">
                            The Latest
                        </h3>
                        <?php
                            $args = array( 'numberposts' => '1' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                echo '<p class="tk-museo-sans justified">' . $recent['post_excerpt'] . ' <a href="' . get_permalink($recent['ID']) . '">More...</a></p>';
                            }
                        ?>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="tk-estilo-pro">
                            The Feed
                        </h3>
                        <p class="tk-museo-sans justified">
                            Thanks for dropping by! Feel free to join the discussion by leaving comments, and stay
                            updated by subscribing to the <a href="<?php bloginfo('rss2_url');?>">RSS feed</a>.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="tk-museo-sans" style="padding-top:35px">
                            Built with love for <a href="http://annastravels.com">Anna's Travels</a> by <a href="http://ninjatronic.com/"><i class="fa fa-mobile-phone"></i> Ninjatronic</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>