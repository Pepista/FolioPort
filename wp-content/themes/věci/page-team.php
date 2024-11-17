<?php
/*
Template Name: Team of Teachers
*/
get_header();
?>

<main class="team-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php if( have_rows('team_of_teachers') ): ?>
            <div class="team-container">
                <?php while( have_rows('team_of_teachers') ): the_row();
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $position = get_sub_field('position');
                    $description = get_sub_field('description');
                ?>
                <div class="team-member">
                    <?php if( $image ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h2><?php echo esc_html($name); ?></h2>
                    <h3><?php echo esc_html($position); ?></h3>
                    <p><?php echo esc_html($description); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>No team members found.</p>
        <?php endif; ?>
    </div>
</main>

<link href="<?php echo home_url(); ?>/data/team-style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo home_url(); ?>/data/script.js"></script>

<?php get_footer(); ?>
