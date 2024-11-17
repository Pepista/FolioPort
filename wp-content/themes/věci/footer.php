<!-- footer.php -->

<!DOCTYPE html>
<html lang="cs">


    <footer class="footer">
        <div class="footer-container container">
            <div class="footer-section footer-about">
                <h3><?php echo get_field("skola", "options");?></h3>
                <p><?php echo get_field("adresa", "options");?></p>
                <p><?php echo get_field("email", "options");?></p>
                <p><?php echo get_field("telefon", "options");?></p>
            </div>

            <div class="footer-section footer-social">
                <h3>Sociální Sítě</h3>
                <ul>
                    <li><a href="#"><?php echo get_field("facebook", "options");?></a></li>
                    <li><a href="#"><?php echo get_field("twitter", "options");?></a></li>
                    <li><a href="#"><?php echo get_field("instagram", "options");?></a></li>
                    <li><a href="https://www.youtube.com/@lameflamestudio4683"><?php echo get_field("youtube", "options");?></a></li>
                </ul>
            </div>
            <div class="footer-section footer-newsletter">
                <h3><?php echo get_field("newsletter", "options");?></h3>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Váš email" required>
                    <button type="submit"><?php echo get_field("sub", "options");?></button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("y"); ?><?php echo get_field("prava", "options");?></p>
        </div>
    </footer>

    <script src="wp-content/data/script.js"></script>



</body>
</html>
