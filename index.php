<?php get_header(); ?>

<div class="container">

    <div class="row">
        <div class="col-sm-9">

            <div class="row">
                <div class="panel">
                    <h1 class="tk-estilo-pro big-light">
                        Recent Posts
                    </h1>
                </div>
            </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="panel">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-clear img-post" src="<?php echo get_the_image() ?>"/>
                            </div>
                            <div class="col-sm-9">
                                <h2 class="tk-estilo-pro">
                                    <?php the_title() ?>
                                </h2>
                                <p class="tk-museo-sans justify lead">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <p class="tk-museo-sans">
                                    <?php echo get_comments_number() ?> Comments | <a href="<?php the_permalink(); ?>">Read More...</a>
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
        </div>
        <div class="col-sm-3">
            <!-- sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>