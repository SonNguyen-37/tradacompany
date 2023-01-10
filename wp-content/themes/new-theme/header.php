<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>

    <?php wp_head(); ?>
</head>
<body>
    <div class="mui-container-fluid">
        <div class="mui-row" id="header">
            <div class="mui-col-md-10 mui-col-md-offset-1" style="background-color: aqua;">
                <?php
                    wp_nav_menu(array(
                        'menu' => "Main menu"
                    ));
                ?>
            </div>
        </div>