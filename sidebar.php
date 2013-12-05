<?php
    $about = get_post(2240);
    $moreAbout = get_post(5);
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
    <a href="<?php echo get_permalink(5); ?>">
        Read more...
    </a>
</p>
<button type="button" class="btn btn-subscribe btn-lg btn-block">Subscribe</button>
<hr/>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>