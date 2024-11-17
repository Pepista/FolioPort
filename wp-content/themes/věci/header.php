<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domů - Škola Baltaci</title>
    <link href="<?php echo home_url(); ?>/data/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo home_url(); ?>/data/script.js"></script>
</head>
<body>
    <header>
        <div class="head"></div>
        <div class="container">
          <!-- <img src="http://localhost/wordpress/wp-content/uploads/2024/05/baltac.png" alt="Alternate Text"> -->
            <nav>
                <ul>
                    <li><a href="<?php echo home_url();?>"><?php echo get_field("domu", "options");?></a></li>
                    <li><a href="<?php echo site_url('/about');?>"><?php echo get_field("abt", "options");?></a></li>
                    <li><a href="<?php echo site_url('/Aktuality');?>"><?php echo get_field("aktual", "options");?></a></li>
                    <li><a href="<?php echo site_url('/kont');?>"><?php echo get_field("kont", "options");?></a></li>
                    <li><a href="<?php echo home_url('/Team');?>"><?php echo get_field("tym", "options");?></a></li>
                    <li><a href="<?php echo home_url('/Obory');?>"><?php echo get_field("Obory", "options");?></a></li>
                </ul>
            </nav>
        </div>
    </header>
