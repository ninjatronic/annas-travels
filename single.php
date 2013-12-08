<?php get_header(); ?>

<div class="container">

    <div class="row" style="margin-top:20px">
        <div class="col-sm-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="panel">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-clear img-post hidden-sm hidden-xs" src="<?php echo get_the_image() ?>"/>
                            </div>
                            <div class="col-sm-9" style="padding-right: 27px;">
                                <h2>
                                    <?php the_title() ?>
                                </h2>
                                <p class="lead">
                                    <?php echo apply_filters('the_content',get_the_content()); ?>
                                </p>
                                <h3>
                                    By <?php the_author_link(); ?>
                                    <br/>
                                    <small>
                                        <?php the_date(); ?>
                                    </small>
                                </h3>
                                <p>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                                        <i class="fa fa-facebook fa-2x"></i>
                                    </a>
                                    <a href="http://twitter.com/home?status=<?php the_permalink(); ?>">
                                        <i class="fa fa-twitter fa-2x"></i>
                                    </a>
                                </p>
                                <hr/>
                                <?php comments_template(); ?>
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
        </div>
        <div class="col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>