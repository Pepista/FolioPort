<?php get_header(); ?>

<div class="single-post-container">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article class="single-post">
                <header class="post-header">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <span class="post-date"><?php echo get_the_date("d. m. Y"); ?></span> |
                        <span class="post-author"><?php the_author(); ?></span>
                    </div>
                </header>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>
