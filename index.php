<?php get_header(); ?>

<div class="container">

    <div class="row">
        <div class="col-sm-9">

            <?php if (!is_single() && is_home() && !is_paged() ) : ?>
                <div class="row">
                    <div class="panel">
                        <?php
                            $feature_cat = get_category(45);
                            $args = array( 'numberposts' => '6', 'category' => 45 );
                            $feature_posts = wp_get_recent_posts( $args );
                        ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="big-light">
                                    <?php echo $feature_cat->name; ?>
                                </h1>
                                <hr/>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                foreach( $feature_posts as $feature_post ){
                                    echo '<div class="col-sm-4">';
                                    echo    '<a href="' . get_permalink($feature_post['ID']) . '"/>';
                                    echo get_the_post_thumbnail($feature_post['ID'], 'medium');
                                    echo    '<img class="img-clear img-post" src="' . get_the_post_image($feature_post) . '"/>';
                                    echo    '</a>';
                                    echo    '<br/>';
                                    echo    '<a href="' . get_permalink($feature_post['ID']) . '"/>';
                                    echo       '<h3>' . $feature_post['post_title'] . '</h3>';
                                    echo    '</a>';
                                    echo '</div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel">
                        <h1 class="big-light">
                            Recent Posts
                        </h1>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            if (is_home()) {
                query_posts("cat=-25&paged=".$paged);
            }
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="panel post-panel">
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="img-clear img-post" src="<?php echo get_the_image() ?>"/>
                                </a>
                            </div>
                            <div class="col-sm-9">
                                <a href="<?php the_permalink(); ?>">
                                    <h2>
                                        <?php the_title() ?>
                                    </h2>
                                </a>
                                <p class="lead">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <p>
                                    <?php
                                    if(get_comments_number() > 0) {
                                        echo get_comments_number() . ' Comments | ';
                                    }
                                    ?><a href="<?php the_permalink(); ?>">Read More...</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <div class="row">
                    <div class="panel">
                        <div class="row">
                            <div class="col-sm-12">
                                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <ul class="pager">
                    <li class="previous"><?php echo get_next_posts_link("<i class=\"fa fa-angle-left\"></i> Older"); ?></li>
                    <li class="next"><?php echo get_previous_posts_link("Newer <i class=\"fa fa-angle-right\"></i>"); ?></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>