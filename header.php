<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script type="text/javascript" src="//use.typekit.net/cpv8jke.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <script src="<?php bloginfo('template_url');?>/bower_components/jquery/jquery.js"></script>
    <script src="<?php bloginfo('template_url');?>/bower_components/bootstrap/dist/js/bootstrap.js"></script>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"/>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_option('home'); ?>">Anna's Travels</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    $args = array(
                        'exclude' => '1,12,19,24'
                    );
                    $categories = get_categories( $args );
                    foreach ( $categories as $category ) {
                        if($category->parent == 0) {
                            $subcats = array();
                            foreach($categories as $subcat) {
                                if($subcat->parent == $category->term_id) {
                                    array_push($subcats, $subcat);
                                }
                            }
                            if(sizeof($subcats) > 0) {
                                echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $category->name . ' <i class="fa fa-caret-down"></i></a>';
                                echo '<ul class="dropdown-menu">';
                                foreach($subcats as $subcat) {
                                    echo '<li><a href="' . get_category_link( $subcat->term_id ) . '">' . $subcat->name . '</a></li>';
                                }
                                echo '</ul>';
                                echo '</li>';
                            } else {
                                echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
                            }
                        }
                    }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <?php if(!is_single()) : ?>
    <div id="header-carousel" class="carousel slide carousel-height">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
            <li data-target="#header-carousel" data-slide-to="3"></li>
            <li data-target="#header-carousel" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner carousel-height">
        <?php
            $args = array( 'numberposts' => '5', 'category' => 19 );
            $recent_posts = wp_get_recent_posts( $args );
            $index = 0;
            foreach( $recent_posts as $recent ){
                if($index == 0) {
                    echo    '<div class="item active carousel-height">';
                } else {
                    echo    '<div class="item carousel-height">';
                }
                $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($recent['ID']), 'full');
                echo        '<img src="' . $large_image_url[0] . '">';
                echo        '<div class="carousel-caption">';
                echo            '<a href="' . get_permalink($recent['ID']) . '">';
                echo                '<h1>';
                echo                    $recent['post_title'];
                echo                '</h1>';
                echo            '</a>';
                echo            '<a href="' . get_permalink($recent['ID']) . '">';
                echo                '<p class="text-center">';
                echo                    $recent['post_excerpt'];
                echo                '</p>';
                echo            '</a>';
                echo        '</div>';
                echo    '</div>';
                $index++;
            }
        ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#header-carousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#header-carousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
    <?php endif; ?>
