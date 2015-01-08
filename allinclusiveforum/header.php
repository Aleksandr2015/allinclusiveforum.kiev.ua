<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- delete if non-responsive / end -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>allinclusive.kiev.ua</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="">
    <!-- styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/3.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/font-awesome-4.2.0/css/font-awesome.css">
    <!-- latest jquery version -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>    
    <!-- slider -->    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/unslider/unslider.css">
    <script src="//unslider.com/unslider.min.js"></script>
    <script>
        $( window ).load(function() {
                $('.banner').unslider ({
                    speed: 900,               //  The speed to animate each slide (in milliseconds)
                    delay: 5000,              //  The delay between slide animations (in milliseconds)                                
                    keys: true,               //  Enable keyboard (left, right) arrow shortcuts
                    dots: true,               //  Display dot navigation
                    fluid: true,              //  Support responsive design. May break non-responsive designs
                });
            });        
    </script>
    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <p class="browsehappy">Вы используете <strong>устаревшую</strong> версию браузера, поэтому страница может работать некорректно. Обновить браузер можно <a href="http://browsehappy.com/">по этой ссылке</a> или перейти на сайт http://browsehappy.com</p>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body> 