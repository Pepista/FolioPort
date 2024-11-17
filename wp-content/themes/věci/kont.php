<?php
/*
    Template Name: Kontakt
*/
get_header();
?>

    <main>
        <div class="container">
            <section class="contact">
                <p><?php echo get_field("k1");?></p>
                <p><?php echo get_field("k2");?></p>
                <p><?php echo get_field("k3");?></p>
                <p><?php echo get_field("k4");?></p>
                <p><?php echo get_field("k5");?></p>
                <p><?php echo get_field("k6");?></p>
                <p><?php echo get_field("k7");?></p>
            </section>
        </div>
    </main>

<?php  get_footer(); ?>