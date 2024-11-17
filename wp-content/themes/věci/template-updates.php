<?php
/*
  Template Name: Aktuality
 */
get_header();
?>
<link rel="stylesheet" href="wp-content/data/style.css">
                    <script src="wp-content/data/script.js"></script>

<div class="updates-container">
    <h1>Aktuality</h1>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()):
        while ($the_query->have_posts()):
            $the_query->the_post();
            ?>
            <div class="update-item">
                <a href="<?php echo get_the_permalink(); ?>">
                    <h2><?php echo get_the_title(); ?></h2>
                    <div class="update-date"><?php echo get_the_date("d. m. Y"); ?></div>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                </a>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>

<?php get_footer(); ?>