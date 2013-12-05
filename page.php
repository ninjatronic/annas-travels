<?php get_header(); ?>

<div class="container">

    <div class="row" style="margin-top:20px">
        <div class="col-sm-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="panel">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="text-center">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="lead">
                                    <?php echo apply_filters('the_content',get_the_content()); ?>
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
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>