
<?php
/*
    Template Name: Homepage
*/
?>
<?php get_header(); ?>

<main>
        <?php
$reference = get_field("reference");

if ($reference):
        ?>
    <div class="references">
<?php
        foreach($reference as $item):
        $name = $item["jmeno"];
        $obor = $item["obor"];
        $popis = $item["popis"];
?>
        <div class="item">
        <h3><?php echo $name; ?></h3>
        <div class="item-obor"><?php echo $obor; ?></div>
        <p>
            <?php echo $popis; ?>
        </p>
        </div>
        <?php
        endforeach;
        ?>
        </div>
        <?php
        endif
        ?>



        <div class="container">
            <section class="hero">
                <h2> <?php echo get_field("vitaj");?> </h2>
                <p> <?php echo get_field("vitaj2");?> </p>
            </section>
            <section class="about">
                <h2> <?php echo get_field("about");?> </h2>
                <p> <?php echo get_field("about2");?> </p>
                <div class="uvod">
                                            <?php $image = get_field("uvodni_obrazek");
                                            if ($image):
                                            ?>
                                            <img src="<?php echo $image["url"]; ?>" alt=""/>
                                            <?php
                                            endif;
                                            ?>
                <a href="<?php echo site_url('/about');?>" class="btn"><?php echo get_field("more");?></a>

            </section>

            <h2> <?php echo get_field("popisek");?> </h2>
            </div>

        </div>
    </main>

<link rel="stylesheet" href="wp-content/data/style.css">
                    <script src="wp-content/data/script.js"></script>
<main class="homepage">
    <div class="prispevky">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()):
        echo '<div class="posts-container">';
        while ($the_query->have_posts()):
            $the_query->the_post();
            ?>
            <div class="post-item">
                <a href="<?php echo get_the_permalink(); ?>">
                    <h3><?php echo get_the_title(); ?></h3>
                    <div class="post-date"><?php echo get_the_date("d. m. Y"); ?></div>
                    <p><?php echo get_the_excerpt(); ?></p>
                </a>
            </div>
            <?php
        endwhile;
        echo '</div>';
        wp_reset_query();
    endif;
    ?>
    </div>
    <div class="all-updates-link">
            <a href="<?php echo site_url('/aktuality'); ?>"><?php echo get_field("more2");?></a>
        </div>
</main>
<?php  get_footer(); ?>