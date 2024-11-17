<?php
/*
Template Name: Obory
*/
get_header();
?>

<video autoplay loop muted>
            <source src="<?php echo get_field('video_url'); ?>" type="video/mp4">
        </video>

<main class="fields-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php if( have_rows('obory') ): ?>
            <div class="fields-container">
                <?php while( have_rows('obory') ): the_row();
                    $obrazek = get_sub_field('obrazek');
                    $nazev = get_sub_field('nazev');
                    $popis = get_sub_field('popis');
                ?>
                <div class="field-item">
                    <?php if( $obrazek ): ?>
                        <img src="<?php echo esc_url($obrazek['url']); ?>" alt="<?php echo esc_attr($obrazek['alt']); ?>" />
                    <?php endif; ?>
                    <h2><?php echo esc_html($nazev); ?></h2>
                    <p><?php echo esc_html($popis); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>Žádné obory nebyly nalezeny.</p>
        <?php endif; ?>
    </div>
</main>


<link href="<?php echo home_url(); ?>/data/fields-style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo home_url(); ?>/data/script.js"></script>

<?php get_footer(); ?>
