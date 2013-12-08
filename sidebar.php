<?php
    $about = get_post(2289);
    $moreAbout = get_post(2);
    $book = get_post(2291);
    $moreBook = get_post(1861);
?>
<h2>
    <?php
        $title = $about->post_title;
        $title = apply_filters('the_title', $title);
        $title = str_replace(']]>', ']]&gt;', $title);
        echo $title;
    ?>
</h2>
<?php
    $content = $about->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content;
?>
<p>
    <a href="<?php echo get_permalink(2); ?>">
        Read more...
    </a>
</p>
<hr/>
    <p class="tk-museo-sans justify">
        <a href="https://www.facebook.com/annastravels?fref=ts">
            <i class="fa fa-facebook"></i> Anna's Travels on Facebook
        </a>
    </p>
    <p class="tk-museo-sans justify">
        <a href="https://twitter.com/annas_travels">
            <i class="fa fa-twitter"></i> Anna's Travels on Twitter
        </a>
    </p>
<hr/>
<h3>
    Search
</h3>
<?php get_search_form(); ?>
<hr/>
<h2>
    <?php
        $title = $book->post_title;
        $title = apply_filters('the_title', $title);
        $title = str_replace(']]>', ']]&gt;', $title);
        echo $title;
    ?>
</h2>
<?php
    $content = $book->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content;
?>
<p>
    <a href="<?php echo get_permalink(1861); ?>">
        Read more...
    </a>
</p>
<hr/>
<div class="widgets">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    <?php endif; ?>
</div>