<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Poli
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
        }
        .container {
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            display: inline-block;
        }
    </style>

</head>
<body>
<div class="container text-center">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-danger" style="font-size:72px; font-weight: bold;">Oops! 404</h1>
                <h2 class="text-warning" style="font-size:52px; font-weight: bold;">SORRY - NOT FOUND!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-danger" style="font-size:25px; font-weight: bold;margin-top: 40px;"><a href="<?php bloginfo('url');  ?>"> BACK TO HOME PAGE</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
