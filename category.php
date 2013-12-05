<?php get_header(); ?>

<div class="container">

    <div class="row">
        <div class="col-sm-9">

            <?php if (!is_single() && !is_paged() ) : ?>
                <div class="row">
                    <div class="panel">
                        <h1 class="big-light">
                            Recent Posts in <?php single_cat_title(); ?>
                        </h1>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="panel">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-clear img-post" src="<?php echo get_the_image() ?>"/>
                            </div>
                            <div class="col-sm-9">
                                <h2>
                                    <?php the_title() ?>
                                </h2>
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