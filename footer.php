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
                    <div class="col-sm-4">
                        <h3>
                            The Latest
                        </h3>
                        <?php
                            $args = array( 'numberposts' => '1' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                echo '<p>' . $recent['post_excerpt'] . ' <a href="' . get_permalink($recent['ID']) . '">More...</a></p>';
                            }
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <h3>
                            The Feed
                        </h3>
                        <p>
                            Thanks for dropping by! Feel free to join the discussion by leaving comments, and stay
                            updated by subscribing to the <a href="<?php bloginfo('rss2_url');?>">RSS feed</a>.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <h3>
                            Contact Me
                        </h3>
                        <p>
                            I love hearing from my readers, if you would like to comment, ask any questions or suggest
                            any future post material, get in touch via <a href="mailto:anna@annastravels.com">email</a>.
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